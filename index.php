<?php
require 'Router.php';

$url = key($_GET);
$r = new Router();

$r->addRoute("/test","test.php");
