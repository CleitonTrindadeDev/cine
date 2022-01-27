<?php include "cabecalho.php" ?>
<body>
    <nav class="nav-extended ">
        <div class="nav-wrapper center">
            <ul id="nav-mobile" class="right">
                <li><a href="projeto-cine.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Cine Mago</h1>
        </div>
        
        </div>
    </nav>
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card ">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>
                    <!-- input titulo -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Titulo do filme</label>
                        </div>
                     </div>
                      <!-- input Sinopse -->
                     <div class="row">
       <form class="col s12">
       <div class="row">
        <div class="input-field col s12">
          <textarea id="sinopse" class="materialize-textarea"></textarea>
          <label for="sinopse">Sinopse</label>
          </div>
        </div>
        </form>
          <!-- input Nota -->
          <div class="row">
                <div class="input-field col s4">
                <input id="nota" type="number" step=".1" lass="validate" require min=0 max=10 ><!--o step é para colocar numeros decimais ex 3.4-->
                <label for="nota">Nota</label>
             </div>
          </div>
          <!-- input Capa do filme -->
          <div class="file-field input-field">
      <div class="btn deep-purple darken-3" >
        <span>Poster</span>
        <input type="file">
      </div>
      
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
                <div class="card-action">
                    <a href="galeria.php" class="btn waves-effect waves-light btn grey">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn deep-purple darken-3">Confirmar</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>