<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class PaypackService
{
    public function __construct(
        protected string $baseUrl,
        protected string $clientId,
        protected string $clientSecret,
    ) {}

    public static function fromConfig(): ?self
    {
        $base = config('paypack.base_url');
        $id = config('paypack.client_id');
        $secret = config('paypack.client_secret');
        if (! $base || ! $id || ! $secret || ! config('paypack.enabled')) {
            return null;
        }
        return new self($base, $id, $secret);
    }

    protected function getToken(): string
    {
        $key = 'paypack_access_token';
        $token = Cache::get($key);
        if ($token) {
            return $token;
        }
        $response = Http::acceptJson()->post("{$this->baseUrl}/auth/agents/authorize", [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);
        if (! $response->successful()) {
            Log::warning('PayPack auth failed', ['body' => $response->body()]);
            throw new \RuntimeException('PayPack authentication failed. Please try again or contact us.');
        }
        $data = $response->json();
        $token = $data['access_token'] ?? $data['token'] ?? null;
        if (! $token) {
            throw new \RuntimeException('PayPack token missing in response.');
        }
        Cache::put($key, $token, now()->addMinutes(14));
        return $token;
    }

    /**
     * Request cashin (collect payment from customer's mobile money).
     * Amount in RWF. Phone format: 078xxxxxxx or 25078xxxxxxx.
     *
     * @return array{ref: string, status: string, amount: int, ...}
     */
    public function cashin(string $phone, int $amountRwf): array
    {
        $phone = preg_replace('/^0/', '250', $phone);
        $token = $this->getToken();
        $response = Http::acceptJson()
            ->withToken($token)
            ->post("{$this->baseUrl}/transactions/cashin", [
                'phone' => $phone,
                'amount' => (string) $amountRwf,
            ]);
        if (! $response->successful()) {
            Log::warning('PayPack cashin failed', ['body' => $response->body(), 'phone' => $phone, 'amount' => $amountRwf]);
            throw new \RuntimeException('Payment request failed. Please check your phone number and try again.');
        }
        return $response->json();
    }
}
