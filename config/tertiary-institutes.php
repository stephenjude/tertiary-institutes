<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'database_connection' => env('TERTIARY_INSTITUTES_DB_CONNECTION', env('DB_CONNECTION', 'mysql')),
];
