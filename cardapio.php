<?php
include "src/header.php";
if (!isset($_SESSION['user'])) {
  header("location: login/");
}
$produtos = new produtos;
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"> <!--CSS do Bootstrap-->
    <link rel="stylesheet" href="css/style.css"> <!--Meu CSS-->
    <title>Sabor Real - Cardápio</title>
  </head>
  <body>
    <!--Barra de menu-->
    <nav class="navbar navbar-expand-lg cor_pri" style="color: #ffffff;">
            <a class="navbar-brand" href="#" style="margin-left: 1%;"><img src="img/logo-da-empresa.png" alt="Restaurante Vale Minas"></a>  
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse ml-auto" id="navbarNav" style="margin-left: 1%;">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item ml-auto">
                          <a class="nav-link" href="./" style="color: white;">INÍCIO</a>
                      </li>
                      <li class="nav-item ml-auto">
                          <a class="nav-link" href="#nossocardapio" style="color: white;">CARDÁPIO</a>
                      </li>
                    </ul>
                </div>
            </nav>
        <!--Cardápio Banner-->
        <div class="container-fluid">
            <div class="row">
                <div class="col" id="cardapiobanner">
                    <div id="textocardapiobanner">
                        <h1>CONHEÇA NOSSO CARDÁPIO</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--Pratos-->
        <div class="container-fluid" id="nossocardapio">
            <div class="row">
                <!--Seção do Menu-->
                <div class="col" style="background-color: #b3a9a1;">
                    <div class="row">
                        <div id="titutloalmocooujantar" class="col cor_pri">
                            <div id="titutloalmocooujantar2">
                                <h5>O seu menu</h5>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    $i = 0;
                    foreach ($produtos->buscar() as $dados) {
                        if($i % 2== 0 && $i != 0) {
                            ?></div><?php
                        }
                        if ($i % 2 == 0) {
                            ?><div class="row"><?php
                        }
                        ?>
                        <div class="col">
                            <div class="row">
                                <div id="prato1" class="col-5" style="background-image: url(img/cardapio/<?=$dados['img']?>);">
                                </div>
                                <div id="pratodiv" class="col" style="background-color: #e3e2e0;">
                                    <div id="pratodiv2">
                                        <b><?=$dados['nome']?></b>
                                        <br>Porção Grande
                                        <br><?=$dados['preco']?> kz
                                        <br>Porção Pequena
                                        <br><?=$dados['preco']-$dados['preco']/3?> kz
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                    ?>

               </div>
            </div>
        </div>

    <!--Rodapé-->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div id="footer" class="col" style="background-color: #353130;">
              <div id="textofooter">
                Desenvolvido por - <a href="https://github.com/pedromael" style="text-decoration:none;" target="_blank">
                  <img style="width: 16px;" src="img/github-icone.png"> estudantes do maria luisa</a>
              </div>
            </div>
          </div>
          <div class="col"><a class="terminar" href="login/">terminar sessao</a></div>
        </div>
      </div>

      <!--Scripts-->
      <script src="js/jquery-3.3.1.slim.js"></script>
      <script src="js/pooper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    </footer>
  </body>
</html>