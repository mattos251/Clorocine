<?php
include './bd_up.php';
$conn = getConnection();

$titulo  = $_POST["titulo"] ;
$sinopse = $_POST["sinopse"];
$nota    = $_POST["nota"];
$postar  = $_POST["poster"];



$sql = 'INSERT INTO filmes ( titulo, sinopse, poster, nota ) VALUES ( :titulo, :sinopse, :poster , :nota )';


$stmt = $conn->prepare($sql);
$stmt->bindValue(':titulo', $titulo, PDO::PARAM_STR);
$stmt->bindValue(':sinopse' , $sinopse, PDO::PARAM_STR );
$stmt->bindValue(':poster' , $poster, PDO::PARAM_STR);
$stmt->bindValue(':nota' , $nota);

if($stmt->execute()){
    echo'salvo meu parceiro';

}else{
    echo 'erro ao salva'. $conn->json_last_error_msg;
}

header("Location: galeria.php?msg=Filme+cadastrado+com+sucesso");

?>