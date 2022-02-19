<?php

$rota = $_SERVER["REQUEST_URI"];
var_dump($rota);

switch($rota){
    case '/':
        require "view/galeria.php";
        break;
    case '/novo':
        require "view/cadastrar.php";
}

?>