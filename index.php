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
          <a class="navbar-brand" href="index.php"><h2> Old school<em> Motors</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Esportivos
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.php">classicos</a></li>
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>𝕰𝖘𝖕𝖔𝖗𝖙𝖎𝖛𝖔𝖘</h2>
            <h4 style="color: rgb(247, 239, 0);">Carros de primeira qualidade!</h4>
          </div>
        </div>
       
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                <img src="img/carro0.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="down-content">
                    <h4>Skyline R-34</h4>
    
                    <h6>R$500.000,00</h6>
    
                    <p>É uma lenda sobre rodas, combinando desempenho e estilo em uma única máquina!</p>

                    <span>
                      <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                    </span>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="product-item">
                <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                  <img src="img/carro1.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                  <div class="card-body">
                    <p class="card-text"></p>
                    <div class="down-content">
                      <h4>GT-R Nismo GT3</h4>
      
                      <h6>R$100.000,00</h6>
      
                      <p>Uma obra-prima de engenharia automotiva, projetada para dominar as pistas!</p>
      
                      <span>
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                      </span>
                    </div>
                    
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="product-item">
                  <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                    <img src="img/carro2.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                    <div class="card-body">
                      <p class="card-text"></p>
                      <div class="down-content">
                        <h4>Audi R-8</h4>
        
                        <h6>R$250.000,00</h6>
        
                        <p>É um exemplo de excelência automotiva, combinando desempenho, design e tecnologia!</p>
        
                        <span>
                          <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                        </span>
                      </div>
                      
                      </div>
                    </div>
                  </div>
                </div>


          <div class="col-md-4">
                    <div class="product-item">
                      <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                        <img src="img/carro3.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                        <div class="card-body">
                          <p class="card-text"></p>
                          <div class="down-content">
                            <h4>Porche 911</h4>
            
                            <h6>R$350.000,00</h6>
            
                            <p>Um ícone entre os carros esportivos, representando uma combinação perfeita de tradição e inovação!</p>
            
                            <span>
                              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                            </span>
                          </div>
                          
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="product-item">
                        <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                          <img src="img/carro4.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                          <div class="card-body">
                            <p class="card-text"></p>
                            <div class="down-content">
                              <h4>Lamborghini Aventador</h4>
              
                              <h6>R$750.000,00</h6>
              
                              <p>Uma obra-prima de pura adrenalina, desafiando os limites da velocidade e da elegância com seu design futurista!</p>
              
                              <span>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                              </span>
                            </div>
                            
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="product-item">
                          <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                            <img src="img/carro5.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                            <div class="card-body">
                              <p class="card-text"></p>
                              <div class="down-content">
                                <h4>Ferrari 488 GTB</h4>
                
                                <h6>R$1.000.000,00</h6>
                
                                <p>uma obra-prima de engenharia italiana, onde cada curva do seu design exala elegância e cada acelerada do seu motor V8!</p>
                                            
                                <span>
                                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                                </span>
                              </div>
                              
                              </div>
                            </div>
                          </div>
                        </div>


          <div class="col-md-4">
                    <div class="product-item">
                      <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                        <img src="img/carro6.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                        <div class="card-body">
                          <p class="card-text"></p>
                          <div class="down-content">
                            <h4>Ford GT Mustang Shelby</h4>
            
                            <h6>R$5.000.000,00</h6>
            
                            <p>Uma maquina, combinando a herança clássica da Ford com o poder bruto de um verdadeiro muscle car!</p>
                                      
                            <span>
                              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                            </span>
                          </div>
                          
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="product-item">
                        <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                          <img src="img/carro7.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                          <div class="card-body">
                            <p class="card-text"></p>
                            <div class="down-content">
                              <h4>Dodge Challenger SRT</h4>
              
                              <h6>R$2.000.000,00</h6>
              
                              <p>uma verdadeira máquina de adrenalina, combinando potência, design clássico e uma experiência de direção diferenciada!</p>
              
                              <span>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                              </span>
                            </div>
                            
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="product-item">
                          <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                            <img src="img/carro8.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                            <div class="card-body">
                              <p class="card-text"></p>
                              <div class="down-content">
                                <h4>Alfa Romeo 4C</h4>
                
                                <h6>R$10.000.000,00</h6>
                
                                <p>Uma obra-prima de engenharia e design italiano, uma fusão perfeita de performance apaixonante e elegância atemporal!</p>
                
                                <span>
                                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                                </span>
                              </div>
                              
                              </div>
                            </div>
                          </div>
                        </div>
          
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
            <a href="Agradecimento.php"><button type="button" class="btn btn-primary">confirmar compra</button></a>
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