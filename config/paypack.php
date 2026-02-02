<?php

return [
    'base_url' => env('PAYPACK_BASE_URL', 'https://payments.paypack.rw'),
    'client_id' => env('PAYPACK_CLIENT_ID'),
    'client_secret' => env('PAYPACK_CLIENT_SECRET'),
    'enabled' => env('PAYPACK_ENABLED', false),
];
