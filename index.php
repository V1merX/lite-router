<?php
require 'Router.php';

$url = key($_GET);
$r = new Router();

$r->addRoute("/test","test.php");

/*
You can add pages through the database. To do this, create a connection and use this code:

$db = new PDO ('mysql:host=ip;dbname=database_name', 'db_user', 'db_password');
$res = $db->query('SELECT page_name, page_file FROM pages');
while ($i = $res->fetch()) {
 $r->addRoute("$i[page_name]","$i[page_file]");
}

*/
