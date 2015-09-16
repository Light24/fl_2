<?php /*defined('SYSPATH') OR die('No direct access allowed.');

return array
(
  'default' => array
  (
    'type'       => 'mysql',
    'connection' => array(
      /**
       * The following options are available for MySQL:
       *
       * string   hostname     server hostname, or socket
       * string   database     database name
       * string   username     database username
       * string   password     database password
       * boolean  persistent   use persistent connections?
       * array    variables    system variables as "key => value" pairs
       *
       * Ports and sockets may be appended to the hostname.
      
      'hostname'   => 'localhost',
      'database'   => 'kohana',
      'username'   => FALSE,
      'password'   => FALSE,
      'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => FALSE,
  ),
  'alternate' => array(
    'type'       => 'PDO',
    'connection' => array(
      /**
       * The following options are available for PDO:
       *
       * string   dsn         Data Source Name
       * string   username    database username
       * string   password    database password
       * boolean  persistent  use persistent connections?
      
      'dsn'        => 'mysql:host=localhost;dbname=kohana',
      'username'   => 'root',
      'password'   => 'r00tdb',
      'persistent' => FALSE,
    ),
    /**
     * The following extra options are available for PDO:
     *
     * string   identifier  set the escaping identifier
    
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => FALSE,
  ),
);*/

 defined('SYSPATH') or die('No direct access allowed.');
return array
(
    'default' => array
    (
        'type'       => 'MySQL',
        'connection' => array(
            'hostname'   => 'mysql89286-env-3436019.jelastic.regruhosting.ru',
            'database'   => 'u0070664_default',
            'username'   => 'root',
            'password'   => 'XVEzlb73139',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE, // если не используете кэш
        'profiling'    => TRUE, // если хотите, чтобы кохана считала производительность выполнения запросов
    ),
);