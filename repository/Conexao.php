<?php 

class Conexao{
    public static function criar(){
        $dsn = 'mysql:host=localhost;dbname=filmes_db;charset=utf8';
        $user = 'root';
        $pass = '';

        try{

            $pdo = new PDO($dsn, $user, $pass);
            return $pdo;

        }catch(PDOException $ex){
            echo 'Erro: '.$ex->getMessage();
        }
            
    }
}

?>