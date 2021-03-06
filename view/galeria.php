<?php include "cabecalho.php" ?>

<?php 
// session_start(); 
require "./util/mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();
?>


<body>

    
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper ">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="/clorocine/">galeria</a></li>
                <li><a href="/clorocine/novo">Cadastrar</a></li>
            </ul>
        </div>

        <div class="nav-header center">
                <h1>Clorocine</h1>
        </div>

        <div class="nav-content">
        <ul class="tabs tabs-transparent purple darken-1">
            <li class="tab"><a class="active" href="#test1">todos</a></li>
            <li class="tab"><a  href="#test2">assistidos</a></li>
            <li class="tab"><a href="#test3">favoritos</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">galeria</a></li>
        <li><a href="badges.html">cadastrar</a></li>
    </ul>

    <!-- cards de filmes -->

    <div class="row">
        <!-- looping para automatiza a criação de cards -->
        <?php foreach($filmes as $filme) :?>

            <div class="col s3 m l">
                <div class="card hoverable">
                    <div class="card-image">
                        <div id="img">
                            <img src= "<?= $filme->poster ?>" >
                        </div>
                        
                        <a class="btn-floating halfway-fab waves-effect waves-light purple">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>

                    <div class="card-content">
                        <span class="card-title"> <?= $filme->titulo ?></span>
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i> <?= $filme->nota ?>
                        </p>
                        <p><?= $filme->sinopse ?> </p>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>

    <?= Mensagem::mostrar(); ?> 

</body>


</html>