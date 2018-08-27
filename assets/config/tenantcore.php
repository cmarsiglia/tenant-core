<?php

/*
 * This file is part of the cmarsiglia/tenant-core package.
 *
 */

return [

  'hostDatabase'=>'localhost',

  'prefix' => 'ten_',

  'defaultAppDatabase' => 'name_database',

  'tenant' => [
      'driver' => 'mysql',
      'host' => env('DB_HOST', '127.0.0.1'),
      'port' => env('DB_PORT', '3306'),
      'database' => '',
      'username' => '',
      'password' => '',
      'unix_socket' => env('DB_SOCKET', ''),
      'charset' => 'utf8mb4',
      'collation' => 'utf8mb4_unicode_ci',
      'prefix' => '',
      'strict' => true,
      'engine' => null,
  ],


];
