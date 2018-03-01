<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=phpoo";
$container['user'] = "root";
$container['pass'] = "Root@123456";