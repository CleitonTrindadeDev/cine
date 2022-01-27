<?php include "cabecalho.php"?><!--para pegar as funcionalidades do arquivo cabecalho.php"-->

<?php 
$filme1 = [
  "titulo"=>"Vingadores",
  "nota"=>"8.0",
  "sinopse"=>"Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D.",
  "poster"=>"https://www.themoviedb.org/t/p/w300/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg",
];
$filme2 = [
  "titulo"=>"The Trip",
  "nota"=>"6.3",
  "sinopse"=>"Decididos a pôr um fim no casamento assassinando um ao outro, um casal se dirige a uma cabana remota, mas logo precisam e...",
  "poster"=>"https://www.themoviedb.org/t/p/w300/coGs91wC3XGIguuy1SUdoWkXOVf.jpg",
];
$filme3 = [
  "titulo"=>"Venom",
  "nota"=>"5.3",
  "sinopse"=>"O relacionamento entre Eddie e Venom (Tom Hardy) está evoluindo. Buscando a melhor forma de lidar com a  simbiose.",
  "poster"=>"https://www.themoviedb.org/t/p/original/h5UzYZquMwO9FVn15R2eK2itmHu.jpg",
];
$filme4 = [
  "titulo"=>"A Família Addams 2",
  "nota"=>"5,3",
  "sinopse"=>"Os Addams estão de volta, mais juntos e mais malucos que nunca. Nesta nova aventura",
  "poster"=>"https://www.themoviedb.org/t/p/original/ujWOI68vGkfLOgEDmcrjIS6il7B.jpg",
];
$filme5 = [
  "titulo"=>"Halloween Kills: O Terror Continua",
  "nota"=>"5,7",
  "sinopse"=>"Michael Myers quer vingança e dessa , irá atras de Laurice e toda sua familia",
  "poster"=>"https://www.themoviedb.org/t/p/original/4NphuHmnuROLqCjAEr5LS7Aage6.jpg",
];
$filme6 = [
  "titulo"=>"Duna",
  "nota"=>"8.2",
  "sinopse"=>"Em um futuro distante, planetas são comandados por casas nobres que fazem parte de um império feudal intergalático",
  "poster"=>"https://www.themoviedb.org/t/p/original/s9E9W77HS8zEQvsrpz5aEUTKnvD.jpg",
];
$filmes = [$filme1,$filme2,$filme3,$filme4,$filme5,$filme6] // array dos filmes//
?>

<body>
<nav class="nav-extended">
<div class="nav-wrapper center">
        <ul id="nav-mobile" class="right">
        <li><a href="projeto-cine.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>     
    </div>
    <div class="nav-header center">
    <h1>Cine Mago</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent ">
        <li class="tab"><a class="active">Todos</a></li>
        <li class="tab"><a href="#test2" href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav> 
  <div class="row">
    <?php 
      foreach ($filmes as $filme) { ?>
      <div class="col s2"> 
      <div class="card hoverable">
      <div class="card-image">
      <img src="<?= $filme["poster"]?>">
      <a class="btn-floating halfway-fab waves-effect waves-light red">
          <i class="material-icons">favorite</i></a>
    </div>
    <div class="card-content">
    <p><span class="card-title"><?= $filme["titulo"]?></span></p><!-- o "=" substitui o echo-->
    <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?=$filme["nota"]?></P>
    <p><?= $filme["sinopse"]?></p>
    </div>
    </div>
    </div>
    <?php } ?><!--fechamento do bloco do for-->

 
</body>
</html>