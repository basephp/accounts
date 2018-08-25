<?php

return [

    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Register Service Providers
    |--------------------------------------------------------------------------
    |
    | By default, we will need to register our database provider.
    | These will be available when the application boots up.
    |
    |
    */

    'providers' => [
        'users' => \Base\Users\UserServiceProvider::class,
    ]

];
