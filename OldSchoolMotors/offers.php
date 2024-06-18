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

                <li class="nav-item"><a class="nav-link" href="fleet.php">Classicos</a></li>
                <li class="nav-item active"><a class="nav-link" href="offers.php">Motos</a></li>                            
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
    <div class="page-heading about-heading header-text" style="background-image: url(https://png.pngtree.com/background/20230606/original/pngtree-motorcycle-wallpapers-for-pc-picture-image_2884908.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>𝕸𝖔𝖙𝖔𝖘</h2>
              <h4 style="color: rgb(255, 64, 0);">Aqui você encontra a moto dos seus sonhos!</h4>
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
              <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                <img src="https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/24MY_Versys_650_GY2_STU__1_.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="down-content">
                    <h4>Kawasaki Versys 650</h4>
    
                    <h6>R$ 42,000</h6>
    
                    <p> Uma experiência de pilotagem emocionante em qualquer tipo de estrada!</p>
    
                    <span>
                      <a href="#" data-toggle="modal" data-target="#exampleModal"> Comprar</a>
                    </span>
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="product-item">
                <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                  <img src="https://motociclismoonline.com.br/wp-content/uploads/2023/06/kawasaki-ninja-650-2024-6.webp" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                  <div class="card-body">
                    <p class="card-text"></p>
                    <div class="down-content">
                      <h4>kawasaki Ninja 650</h4>
      
                      <h6>R$ 47,000</h6>
      
                      <p> Uma motocicleta esportiva compacta e ágil, perfeita para quem busca emoção!</p>
                      <span>
                        <a href="#" data-toggle="modal" data-target="#exampleModal"> Comprar </a>
                      </span>
                    </div>
                    
                    </div>
                  </div>
                </div>
              </div><div class="col-md-4">
                <div class="product-item">
                  <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                    <img src="https://imgd.aeplcdn.com//642x361//n/cw/ec/156057/suzuki-right-side-view1.jpeg?isig=0&q=75" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                    <div class="card-body">
                      <p class="card-text"></p>
                      <div class="down-content">
                        <h4>Suzuki GSX-R1000</h4>
        
                        <h6>R$ 117,900</h6>
        
                        <p>Pronta para desafiar qualquer curva com sua potência e agilidade impressionantes!</p>
                       
                        <span>
                          <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                        </span>
                      </div>
                      
                      </div>
                    </div>
                  </div>
                </div><div class="col-md-4">
                  <div class="product-item">
                    <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                      <img src="https://www.motonline.com.br/storage/guides/bmw/s-1000-rr.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                      <div class="card-body">
                        <p class="card-text"></p>
                        <div class="down-content">
                          <h4>BMW S1000RR</h4>
          
                          <h6>R$ 125,900</h6>
          
                          <p>Desempenho excepcional e elegância incomparável para proporcionar uma experiência de pilotagem incomparável!</p>
          
                          <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                          </span>
                        </div>
                        
                        </div>
                      </div>
                    </div>
                  </div><div class="col-md-4">
                    <div class="product-item">
                      <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/1/versions/honda-cbr1000rr-standard1677244165358.jpg?q=80" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                        <div class="card-body">
                          <p class="card-text"></p>
                          <div class="down-content">
                            <h4>Honda CBR1000RR</h4>
            
                            <h6>R$ 198,500</h6>
            
                            <p>Apersonificação da velocidade e precisão, conquistando as estradas com sua combinação perfeita de potência e controle,!</p>
                            <span>
                              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                            </span>
                          </div>
                          
                          </div>
                        </div>
                      </div>
                    </div><div class="col-md-4">
                      <div class="product-item">
                        <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                          <img src="https://images.ctfassets.net/x7j9qwvpvr5s/AHI7OE29jivntum4d6HgH/6a748668ccb00f579ab367486efc87e9/Panigale-V4-Special-Edition-Bagnaia-bike-intro-1050x650.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                          <div class="card-body">
                            <p class="card-text"></p>
                            <div class="down-content">
                              <h4>Ducati Panigale V4 </h4>
              
                              <h6>R$ 690,000</h6>
              
                              <p>É o epítome da excelência italiana em duas rodas, unindo design arrebatador, tecnologia de ponta e desempenho!</p>
              
                              <span>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                              </span>
                            </div>
                            
                            </div>
                          </div>
                        </div>
                      </div><div class="col-md-4">
                        <div class="product-item">
                          <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                            <img src="https://nmrracing.fr/wp-content/uploads/2019/10/10903931-7474741-68981781.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                            <div class="card-body">
                              <p class="card-text"></p>
                              <div class="down-content">
                                <h4>Yamaha YZF-R1</h4>
                                <h6> R$ 130,000</h6>
                
                                <p>Uma máquina lendária que desafia os limites da velocidade e da adrenalina!</p>
                
                            
                
                                <span>
                                  <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                                </span>
                              </div>
                              
                              </div>
                            </div>
                          </div>
                        </div><div class="col-md-4">
                          <div class="product-item">
                            <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                              <img src="https://s2-autoesporte.glbimg.com/gOoLtePbVkuWd-02u6FNTrc9sS8=/0x0:620x413/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/J/c/bVOuxyTjOZF359IG1Gpw/2018-09-21-kawasaki-ninja-h2r-estudio-02.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                              <div class="card-body">
                                <p class="card-text"></p>
                                <div class="down-content">
                                  <h4>kawasaki ninja h2r</h4>
                  
                                  <h6>R$ 57,500</h6>
                  
                                  <p>Com sua imponente presença, é uma verdadeira máquina de adrenalina!</p>                  
                                  <span>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
                                  </span>
                                </div>
                                
                                </div>
                              </div>
                            </div>
                          </div><div class="col-md-4">
                            <div class="product-item">
                              <div class="card shadow-sm" style="background-color: rgb(255, 255, 255);">
                                <img src="https://images5.1000ps.net/g-000237-g_W2372913_6-ducati-streetfighter-v4-s-638115546935643731.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                                <div class="card-body">
                                  <p class="card-text"></p>
                                  <div class="down-content">
                                    <h4>Ducati streetfighter v4 s</h4>
                    
                                    <h6>R$ 157,990</h6>
                    
                                    <p>"Uma máquina de potência e elegância, pronta para desafiar o asfalto com seu estilo agressivo!</p>
                    
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

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Old School car<a href="https://www.phpjabbers.com/">Company</a></p>
            </div>
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
