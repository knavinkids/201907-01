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
    ],

    'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
    ],


    'Github' => [
        'Client_id' => Env('GITHUB_KEY'),
        'Client_secret' => Env('GITHUB_SECRET'),
        'Redirect' => Env('GITHUB_CALLBACK_URL'),
    ],

    'Google' => [
        'Client_id' => Env('GOOGLE_KEY'),
        'Client_secret' => Env('GOOGLE_SECRET'),
        'Redirect' => Env('GOOGLE_CALLBACK_URL'),
    ],

    'Facebook' => [
        'Client_id' => Env('FACEBOOK_KEY'),
        'Client_secret' => Env('FACEBOOK_SECRET'),
        'Redirect' => Env('FACEBOOK_CALLBACK_URL'),
    ],

    'Bitbucket' => [
        'Client_id' => Env('BITBUCKET_KEY'),
        'Client_secret' => Env('BITBUCKET_SECRET'),
        'Redirect' => Env('BITBUCKET_CALLBACK_URL'),
    ],

    'Linkedin' => [
        'Client_id' => Env('LINKEDIN_KEY'),
        'Client_secret' => Env('LINKEDIN_SECRET'),
        'Redirect' => Env('LINKEDIN_CALLBACK_URL'),
    ],

  ];