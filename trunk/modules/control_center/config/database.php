<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
  'default' => array
  (
    'type'       => 'MySQL',
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
       */
      'hostname'   => 'mysql88215-env-5970640.jelastic.regruhosting.ru',
      'database'   => 'u0070664_default',
      'username'   => 'root',
      'password'   => 'BBEare45763',
      'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => FALSE,
  ),
);
