<?php
/*
*
* Veritabanı bağlantısı için
* gerekli bağlantı bilgilerinin
* bulunduğu ayar dosyası.
*
*/

header('Content-Type: text/html; Charset=UTF-8');
date_default_timezone_set('Europe/Istanbul');

define('MYSQL_HOST',	'localhost');
define('MYSQL_DB',		'yelmenticaret');
define('MYSQL_USER',	'root');
define('MYSQL_PASS',	'');
define('PATH',	'http://localhost/Yelmen-Ticaret3/');

include 'db.php';
