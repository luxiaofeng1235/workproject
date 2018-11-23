<?php
require "./vendor/autoload.php";
use Hprose\Http\Server;
function hello1($name) {
    return "leiyu xxx $name!";
}

$server = new Server();
$server->addFunction('hello1');
$server->start();
?>
