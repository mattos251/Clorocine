<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended purple lighten-3">
            <div class="nav-wrapper ">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/clorocine/">galeria</a></li>
                    <li class="active"><a href="/clorocine/novo">Cadastrar</a></li>
                </ul>
            </div>

            <div class="nav-header center">
                    <h1>Clorocine</h1>
            </div>

            <div class="nav-content">
                <ul class="tabs tabs-transparent purple darken-1"></ul>
            </div>

        </nav>

        <div class="row">
            <form method="POST" enctype="multipart/form-data">
                <div class="col s6 offset-s3">
                    <div class="card ">
                        <div class="card-content">
                            <span class="card-title">Cadastrar filme</span>

                            <!-- input do titulo -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="titulo" type="text" class="validate" name="titulo" required>
                                    <label for="titulo">Titulo do filme</label>
                                </div>
                            </div>

                            <!-- input da sinopse -->

                            <div class="row">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                        <label for="sinopse">Sinopse</label>
                                    </div>
                                </div>
                            </div>

                            <!-- input do nota -->
                            <div class="row">
                                <div class="input-field col s4">
                                    <input  id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                                    <label for="nota">Nota</label>
                                </div>
                            </div>

                           
                            <div class="file-field input-field">
                                <div class="btn purple">
                                    <span>Capa</span>
                                    <input type="file" name="poster_file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="poster">
                                </div>
                            </div>
                            

                        </div>
                        <div class="card-action">
                            <a class="btn waves-effect waves-light grey" href="/clorocine/">cancelar</a>
                            <button type="submit" class="waves-effect waves-light btn purple">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>    
        </div>
    </nav>
</body>