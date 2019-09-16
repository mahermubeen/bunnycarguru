<?php

return [
    'google' => [
        'client_id'     => '767216119534-tvat0q47cc9kn66dkro1d4gcvra7lgae.apps.googleusercontent.com',
        'client_secret' => 'cGezCwZwqmi3gEFm_3zHGh5-',
        'redirect'      => 'https://localhost:8000/google/callback'
    ],

    'facebook' => [
        'client_id' => '396056224439149',
        'client_secret' => '3df86f840eeb560c911761e24e6fd404',
        'redirect' => 'https://bunnycarguru.herokuapp.com/callback',
    ],

    'linkedin' => [
        'client_id' => '7836fyunesnkw7',
        'client_secret' => 'm5NF9ZLfheireHFS',
        'redirect' => 'http://localhost:8000/linkedin/callback',
    ],

    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
        'redirect' => 'http://localhost:8000/twitter/callback',
    ],
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

];
