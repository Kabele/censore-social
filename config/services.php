<?php

return [

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
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyCVxqsRK9GpYRFyAA0SKbA8s4nT2QwD-Mc',
        'auth_domain' => 'crawford-4be69.firebaseapp.com',
        'database_url' => 'https://crawford-4be69.firebaseio.com',
        'secret' => 'HT2fHtjB83pZ0yNKnlBi3H6N4jIUfISm9DpPIQsF',
        'storage_bucket' => 'bucket.appspot.com',
        'project_id' => 'crawford-4be69',
        'messaging_sender_id' => '89644384796',
        'appId' => '1:89644384796:web:6056c9c56f7fdf23'
    ]
];
