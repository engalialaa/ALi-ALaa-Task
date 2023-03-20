<?php

use Modules\ApiModule\Services\SmsServices;

return [

    /*
    |--------------------------------------------------------------------------
    | SMS Drivers
    |--------------------------------------------------------------------------
    |
    | List Of allowed Drivers and Their Urls'.
    |
    */

    'drivers' => [
        'smsmisr' => [
            'url' => 'https://smsmisr.com/api/webapi',
            'driver' => SmsServices::class,
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | SMS Driver
    |--------------------------------------------------------------------------
    |
    | You may specify which SMS service you're using throughout
    | your application here.
    |
    */

    'driver' => env('SMS_DRIVER', SmsServices::class),


    /*
    |--------------------------------------------------------------------------
    | SMS URL
    |--------------------------------------------------------------------------
    |
    | Here you may provide the sms api url to be used by your
    | applications. A default option is provided that is compatible with
    | the SMS service which will provide reliable deliveries.
    |
    */

    'url' => env('SMS_URL'),

    /*
    |--------------------------------------------------------------------------
    | SMS API KEY
    |--------------------------------------------------------------------------
    |
    | Here you may provide the sms api url to be used by your
    | applications. A default option is provided that is compatible with
    | the SMS service which will provide reliable deliveries.
    |
    */

    'api_key' => env('SMS_APIKEY'),
    /*
    |--------------------------------------------------------------------------
    | Global "Sender" Data
    |--------------------------------------------------------------------------
    |
    | You may wish for all sms' sent by your application to be sent from
    | the same sender. Here, you may specify a name and phone that is
    | used globally for all sms' that are sent by your application.
    |
    */

    'sender' => [
        'name' => env('SMS_FROM_NAME'),
        'phone' => env('SMS_FROM_PHONE'),
    ],

    /*
    |--------------------------------------------------------------------------
    | SMS API Username
    |--------------------------------------------------------------------------
    |
    | If your SMS API service requires a username for authentication, you should
    | set it here. This will get used to authenticate with your server on
    | connection. You may also set the "password" value below this one.
    |
    */

    'username' => env('SMS_USERNAME'),

    'password' => env('SMS_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Log Channel
    |--------------------------------------------------------------------------
    |
    | If you are using the "log" driver, you may specify the logging channel
    | if you prefer to keep sms messages separate from other log entries
    | for simpler reading. Otherwise, the default channel will be used.
    |
    */

    'log_channel' => env('SMS_LOG_CHANNEL'),

];
