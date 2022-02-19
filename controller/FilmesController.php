<?php
session_start();

require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";

class FilmeController{
    public function save($request){

        $filmesRepository = new FilmesRepositoryPDO();
        $filme = new Filme();

        $filme->titulo  = $request["titulo"];
        $filme->sinopse = $request["sinopse"];
        $filme->nota    = $request["nota"];
        $filme->postar  = $request["poster"];

        if($filmesRepository->salvar($filme))
            $_SESSION["msg"] = "Filmes inseridos com sucesso";

        else
            $_SESSION["msg"] = "erro ao inserir o filme";

        header("Location: ./view/galeria.php");


    }

}



?>