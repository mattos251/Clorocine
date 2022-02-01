<?php

include '../database/database.php';

$conn = getConnection();

$sql = 'INSERT INTO filmes ( titulo, sinopse, poster, nota ) VALUES ( :titulo, :sinopse, :poster , :nota )';

$titulo = 'Homem aranha'; 
$sinopse = 'Sem pão em casa';
$poster = ''; 
$nota = 10;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':titulo', $titulo );
$stmt->bindParam(':sinopse' , $sinopse );
$stmt->bindParam(':poster' , $poster);
$stmt->bindParam(':nota' , $nota);

if($stmt->execute()){
    echo'salvo meu parceiro';

}else{
    echo 'erro ao salva';
}

?>