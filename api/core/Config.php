<?php
/*
* archvos de configuracion
*/

define('runtime','development' );  // development || production

#domine
runtime === 'development'
  ? define('DOMINE', 'http://localhost')
  :  define('DOMINE', 'http://pcl-test.260mb.net');


//header acept
header("Content-type: text/html");
header("Access-Control-Allow-Origin: ". DOMINE);
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: Content-Type, *");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");


#database conexion
if (runtime === 'development'){
  define('DB_NAME', 'phishing');
  define('DB_HOST', 'localhost');
  define('DB_USER','root');
  define('DB_PASS', '');
  define('DB_CHARSET','utf8');
} else {
  define('DB_NAME', '');
  define('DB_HOST', '');
  define('DB_USER','');
  define('DB_PASS', '');
  define('DB_CHARSET','');
}

#password and username
define('USERNAME', 'jesusmaster');
define('PASSWORD', 'jesusmaster4772');
