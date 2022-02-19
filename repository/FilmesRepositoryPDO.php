
<?php 
require 'Conexao.php';


/**
*
* @return \PDO
*/

class FilmesRepositoryPDO{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::criar();
        
    }

    public function listarTodos():array{
        $filmesLista = array();

        $sql = "SELECT * FROM filmes";
        $stmt = $this->conexao->prepare($sql);
        $filmes = $stmt->execute();

        while($filme = $stmt->fetchObject()){
            array_push($filmesLista, $filme );
        }

        return $filmesLista;
    }

    public function salvar(Filme $filme):bool {

        $sql = 'INSERT INTO filmes ( titulo, sinopse, poster, nota ) VALUES ( :titulo, :sinopse, :poster , :nota )';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $filme->titulo, PDO::PARAM_STR);
        $stmt->bindValue(':sinopse' , $filme->sinopse, PDO::PARAM_STR);
        $stmt->bindValue(':poster' , $filme->poster, PDO::PARAM_STR);
        $stmt->bindValue(':nota' , $filme->nota, PDO::PARAM_STR);

        return $stmt->execute();
         
    }
        
}
