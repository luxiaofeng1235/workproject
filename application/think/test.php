<?php
require "./vendor/autoload.php";
use Hprose\Http\Server;
function hello1($name) {
    return "leiyu xxx $name!";
}

function myProduct($arr){
    return 'user：'.$arr;
}

$server = new Server();
$server->addFunction('myProduct');
$server->start();
?>
