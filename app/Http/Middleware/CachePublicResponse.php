<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CachePublicResponse
{
    /** Cache for 5 minutes; allow CDN and browser to cache. */
    private const MAX_AGE = 300;

    /** Routes that are static enough to cache (no form + flash). */
    private const CACHEABLE_ROUTES = [
        'home', 'about', 'programs', 'education', 'songs', 'events', 'leaders', 'support', 'privacy', 'terms',
    ]; // register, contact, events.show, events.register excluded — they use flash or dynamic content

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (
            $request->isMethod('GET')
            && $response->isSuccessful()
            && $request->route() && in_array($request->route()->getName(), self::CACHEABLE_ROUTES, true)
        ) {
            $response->headers->set('Cache-Control', 'public, max-age=' . self::MAX_AGE);
        }

        return $response;
    }
}
