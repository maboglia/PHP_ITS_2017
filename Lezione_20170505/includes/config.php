<?php
session_start();
$_SESSION['admin'] = 1234;

define("TITOLO", 'Linguaggi OOP');
define("SOTTOTITOLO", 'Un blog per te');



define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "its2017");