<?php include "./cabecalho.php" ?>

<body>
    <nav class="nav-extended purple lighten-3">
            <div class="nav-wrapper ">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="galeria.php">galeria</a></li>
                    <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
                </ul>
            </div>

            <div class="nav-header center">
                    <h1>Clorocine</h1>
            </div>

        </nav>

        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card ">
                    <div class="card-content">
                        <span class="card-title">Cadastrar filme</span>

                        <!-- input do titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="titulo" type="text" class="validate" require>
                                <label for="titulo">Titulo do filme</label>
                            </div>
                        </div>

                        <!-- input da sinopse -->

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="sinopse" class="materialize-textarea"></textarea>
                                        <label for="sinopse">Sinopse</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- input do nota -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input  id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                                <label for="nota">Nota</label>
                            </div>
                        </div>

                        <form action="#">
                            <div class="file-field input-field">
                                <div class="btn purple">
                                    <span>Capa</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">cancelar</a>
                        <a href="#" class="waves-effect waves-light btn purple">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>