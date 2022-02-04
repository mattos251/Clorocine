<?php

$rota = $_SERVER["REQUEST_URI"];

switch($rota){
    case "clorocine/clorocine/":
        require "./galeria.php";
    case "clorocine/clorocine/novo":
        require "./cadastrar.php";
}

?>