<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

switch($rota){
    case '/clorocine/':
        require "./view/galeria.php";
        break;

    case '/clorocine/novo' and '/clorocine/cadastro':
        if($metodo == "GET") require "./view/cadastrar.php";
        if($metodo == "POST") {
            $controller = new FilmesController();
            $controller->save($_REQUEST);
        }
        break;
}

?>