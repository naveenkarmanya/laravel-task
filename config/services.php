<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
    
    'facebook' => [
    'client_id' => '1717322445177589',
    'client_secret' => '088f50b7b938539344fdfdfc4389ee47',
    'redirect' => 'http://laravel-tasks.karmanya.dev/AdminLogin/callback',
],
    'google' => [
    'client_id' => '',
    'client_secret' => '',
    'redirect' => 'http://laravel-tasks.karmanya.dev/AdminLogin/callback',
],
    'linkedin' => [
    'client_id' => '',
    'client_secret' => '',
    'redirect' => 'http://laravel-tasks.karmanya.dev/AdminLogin/callback',
],

];
