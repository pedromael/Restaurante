<?php
include "src/hedaer.php";
if (isset($_SESSION['user'])) {
  header("location: login/");
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"> <!--CSS do Bootstrap-->
    <link rel="stylesheet" href="css/style.css"> <!--Meu CSS-->
    <title>Sabor Real - Comida Mineira</title>
  </head>
  <body>
      <!--Menu-->
      <nav class="navbar navbar-expand-lg cor_pri" style=" color: #ffffff;">
        <a class="navbar-brand" href="#" style="margin-left: 1%;"><img src="img/logo-da-empresa.png" alt="Restaurante Vale Minas"></a>  
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-auto" id="navbarNav" style="margin-left: 1%;">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item ml-auto">
                      <a class="nav-link" href="cardapio.php" style="color: white;">CARDÁPIO</a>
                  </li>
                  <li class="nav-item ml-auto">
                        <a class="nav-link" href="#horario" style="color: white;">HORÁRIOS</a>
                  </li>
                  <li class="nav-item ml-auto">
                      <a class="nav-link" href="#sobrenos" style="color: white;">SOBRE NÓS</a>
                  </li>
                  <li class="nav-item ml-auto">
                      <a class="nav-link" href="#contato" style="color: white;">CONTATO</a>
                  </li>
                </ul>
            </div>
        </nav>
      <!--Slide-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide-1.jpg">
                <div class="carousel-caption d-none d-md-block" style="text-shadow: 0.1em 0.1em 0.2em #0000006c;">
                    <span style="font-size: 50px;">Comida Mineira</span>
                    <p style="font-size: x-large;">O sabor que só existe aqui</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/slide-2.jpg">
                <div class="carousel-caption d-none d-md-block" style="text-shadow: 0.1em 0.1em 0.2em #0000006c;">
                     <span style="font-size: 50px;">Fogão a lenha</span>
                     <p style="font-size: x-large;">A comida fica muito mais gostosa</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/slide-3.jpg">
                <div class="carousel-caption d-none d-md-block" style="text-shadow: 0.1em 0.1em 0.2em #0000006c;">
                    <span style="font-size: 50px;">Ambiente Familiar</span>
                    <p style="font-size: x-large;">Traga toda a sua família</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
        </div>
        <!--Seção Nosso Menu na página inicial-->
        <div class="container-fluid  cor_pri">
                <div class="row">
                  <div class="col" id="image1">
                  </div>
                  <div class="col" style="background-color:#b8afa6">
                        <span class="titulo">
                                <hr class="escuro">
                                <h4 style="color: #353130;">Nosso Cardápio</h4>
                                <br>
                                <h6 style="color: #b3a9a1; margin-bottom: 90px; border-color: #353130;">
                                    <button type="button" class="btn btn-outline-dark"><a href="cardapio.html" target="_blank">Descubra</a></button>
                                </h6>  
                            </span>
                  </div>
                  <div class="col-md-6">
                    <span class="titulo">
                        <hr class="claro">
                        <h4 style="color: #e3e2e0;">Nossa Paixão</h4>
                        <br>
                        <h6 style="color: #b3a9a1; margin-bottom: 90px;">
                                Queremos compartilhar nossa paixão pela cozinha.
                                Nós cozinhamos nossos pratos com os ingredientes mais frescos,
                                e somos especializados na culinária mineira, tudo isso
                                em um ambiente acolhedor e amigável.
                        </h6>  
                    </span>
                  </div>
                </div>
              </div>
            <!--Seção do Horário e Video-->
            <div class="container-fluid  cor_pri">
                <div class="row">
                    <div id="horario" class="col-lg-6 reverse">
                        <span class="titulo">
                            <hr class="claro" style="margin-top: 20% !important;">
                            <h4 style="color: #e3e2e0;">Horário de Funcionamento</h4>
                            <br>
                            <h6 style="color: #b3a9a1; margin-bottom: 18%; ">
                                    Segunda a Sábado<br>
                                    Almoço - 10:00 às 14:00 <br>
                                    Jantar - 19:00 às 00:00 <br>
                            </h6>  
                        </span>
                    </div>
                    <div class="col-lg-6" style="padding-right: 0px; padding-left: 0px; display: flex">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="video/video.mp4"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seção História-->
            <div class="container-fluid">
                <div class="row" id="sobrenos" style="background-color: #b3a9a1; height: 80px;">
                </div>
                <div class="row">
                    <div class="col" id="image2">
                    </div>
                  <div class="col-md-6" style="background-color:#e3e2e0;">
                      <span class="titulo">
                          <hr class="claro">
                          <h4 style="color: #353130;">Fazendo História</h4>
                          <br>
                          <h6 style="color: #353130; margin-bottom: 90px;">
                            <p>
                              Nossa família está no ramo de restaurantes há mais de 200 anos,
                              mas nossa história na cidade de Ipatinga começou em 1975,
                              quando nos mudamos pra região e abrimos este restaurante.
                              Desde então temos feito a boa comida mineira, e conquistado
                              diversos clientes no passar dos anos.
                            </p>
                          </h6>  
                      </span>
                    </div>
                  <div class="col" id="image5">
                    </div>
                </div>
                <div class="row" style="background-color: #b3a9a1; height: 80px;">
                  </div>
              </div>
            <!--Seção contato-->
            <div class="container-fluid" id="contato">
                <div class="row">
                    <div class="col" id="image4">
                    </div>
                  <div class="col-md-6" style="background-color:#e3e2e0;">
                      <span class="titulo">
                          <hr class="claro">
                          <h4 style="color: #353130;">Contato</h4>
                          <br>
                          <h6 style="color: #353130; margin-bottom: 90px;">
                            <p>
                              Tel:. 947796474 <br>
                              WhatsApp:. 947796474<br>
                              Angola Luanda-viana
                            </p>
                          </h6>  
                      </span>
                    </div>
                    <div class="col" id="image3">
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
                  <img style="width: 16px;" src="img/github-icone.png"> Pedro manuel</a>
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