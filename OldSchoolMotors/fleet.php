<?php
session_start();

if ((!isset($_SESSION['email']) == true) AND (!isset($_SESSION['senha']) == true))
{

      unset($_SESSION['email']);
      unset($_SESSION['senha']);  
      header('Location: login.php');


} 

  
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Old School Motors</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Old school<em> Motors</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Esportivos 
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="fleet.php">Classico</a></li>
                <li class="nav-item"><a class="nav-link" href="offers.php">Motos</a></li>                                 
            </ul>
          </div>
          <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
          <div class="d-flex">
          <a href="logout.php" class="btn btn-danger me-5">Sair</a>
        </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(https://img.freepik.com/fotos-premium/um-papel-de-parede-de-supercarro-gerado-por-ia_705708-29506.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>𝕮𝖑𝖆𝖘𝖘𝖎𝖈𝖔𝖘</h2>
              <h4 style="color: rgb(28, 95, 230);">O seu carro da velha guarda o espera!</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="https://images.ctfassets.net/lmiyf1b7ib63/ferrari_250_gto_featured_image/1679ca3b2966cbf207449c2ed043821e/Ferrari_250_GTO.png" alt="">

              <div class="down-content">
                <h4>Ferrari 250 GTO</h4>

                <h6>R$150.562.000,00</h6>

                <p>Este é um dos carros clássicos mais valiosos do mundo, com apenas unidades produzidas nos anos 1960!</p>
                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="https://images.ctfassets.net/lmiyf1b7ib63/mercedes_300sl_gullwing_featured_image/bed66d896e86b656fe85cb37fae33173/Mercedes_300SL_Gullwing_-.png" alt="">

              <div class="down-content">
                <h4>Mercedes-Benz 300SL Gullwing</h4>

                <h6>R$36.234.000,00</h6>

                <p>Conhecido por suas portas "asa de gaivota", este carro é um ícone da engenharia automotiva dos anos 1950!</p>
                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="img/carroj.webp" alt="">

              <div class="down-content">
                <h4>Jaguar E-Type</h4>

                <h6>$83.452.000,00</h6>

                <p>Um ícone de elegância e potência, é uma obra-prima sobre rodas que encapsula a essência do luxo!</p>
                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="https://i0.wp.com/loucosporcarro.com.br/wp-content/uploads/2016/06/Fusca.jpg?resize=800%2C450&ssl=1" alt="">

              <div class="down-content">
                <h4>Volkswagen Fusca Type 1</h4>

                <h6>R$75.300,00</h6>

                <p>Com seu charme icônico e sua história lendária, continua a conquistar corações com sua simplicidade e confiabilidade!</p>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="https://autoentusiastas.com.br/ae/wp-content/uploads/2022/09/VW-Bus-Kindred-1.jpg" alt="">

              <div class="down-content">
                <h4>Volkswagen Kombi</h4>

                <h6>R$55.527,00</h6>

                <p>Carrega consigo memórias de viagens inesquecíveis e momentos compartilhados!</p>
                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="img/carroi.webp" alt="">

              <div class="down-content">
                <h4>Impala Super Sport 409</h4>

                <h6>R$91.280.000,00</h6>

                <p>Uma lenda sobre rodas, personifica a era dourada do muscle car americano, combinando potência com estilo!</p>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          
          <div class="col-md-4">
            <div class="product-item">
              <img src="img/carroel.webp" alt="">

              <div class="down-content">
                <h4>Chevrolet El Camino SS 454</h4>

                <h6>R$125.350.000,00</h6>

                <p>Uma fusão perfeita entre poder e utilidade, tornando-se um símbolo entre os admiradores de veículos icônicos!</p>       <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="img/carroT.png" alt="">

              <div class="down-content">
                <h4>Ford Modelo T</h4>

                <h6>R$205.630.000,00</h6>

                <p>O Modelo T Ford: um ícone da inovação que democratizou a mobilidade, transformando estradas em caminhos para o futuro!</p>      
                 <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="img/carrovelho.png" alt="">

              <div class="down-content">
                <h4>Citroën Traction Avant</h4>

                <h6>R$123.800.000,00</h6>

                <p>um ícone da engenharia automotiva, combinando elegância clássica com inovação técnica!



                  !</p>       <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Old School car<a href="https://www.phpjabbers.com/">Company</a></p>            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  

                  
                 <h4 style="font-family: Arial, Helvetica, sans-serif;">Tem certeza que deseja finalizar a compra?</h4>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                          </fieldset>
                       </div>

                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a href="agradecimento.php"><button type="button" class="btn btn-primary">confirmar compra</button></a>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
