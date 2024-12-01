<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Apply to all API routes and Sanctum

    'allowed_methods' => ['*'],  // Allow all HTTP methods (GET, POST, etc.)

    'allowed_origins' => [
        'https://angularfrontfinal-production.up.railway.app',  // Your frontend URL
    ],

    'allowed_origins_patterns' => [],  // You can leave this empty or use it for more specific patterns

    'allowed_headers' => ['*'],  // Allow all headers (if needed, restrict to specific headers)

    'exposed_headers' => [],  // Leave empty unless you want to expose specific headers

    'max_age' => 0,  // How long the results of a preflight request can be cached by the browser

    'supports_credentials' => false,  // Set to true if you need credentials like cookies or HTTP auth

];
