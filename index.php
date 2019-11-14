<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta  name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" />

    <title>Chassis Shop Homepage</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">  
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <script src="js/jquery.mask.min.js" type="text/javascript"></script>
      <script src="js/bootstrap-notify.min.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
     
    <?php
            
      session_start(); 
      //session_destroy();      
    ?>

  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><h3>Chassis Shop</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
          </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrinho.php">Carrinho</a>
            </li>
        
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <h5 class="text-white h4"><center>Menu</center></h5>
              <a href="#" class="list-group-item btn text-white bg-dark">Desktops</a>
              <a href="#" class="list-group-item btn text-white bg-dark">Notebooks</a>
              <a href="#" class="list-group-item btn text-white bg-dark">Smartphones</a>
              <a href="#" class="list-group-item btn text-white bg-dark">Teclados</a>
              <a href="#" class="list-group-item btn text-white bg-dark">Mouses</a>
              <a href="#" class="list-group-item btn text-white bg-dark">Headsets</a>
            </div>
          </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </div>
        <!-- /.col-lg-3 -->

    <div class="col-lg-12">

          <div id="carouselExampleIndicators" class="carousel slide my-1 carousel" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
              <img class="d-block w-100" src="images\logo.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images\logo3.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="images\logo2.jpg" alt="First slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        <?php
            

          if(isset($_POST["cod"])){
            $novo = array('cod' => $_POST['cod'],'preco'=> $_POST['preco'] );
              if(isset($_SESSION["produtos"])){
                
                $produtos = $_SESSION["produtos"];
                array_push($produtos, $novo);
              }else{
              $produtos =  array($novo);

            }
            $_SESSION["produtos"] = $produtos;
  
            }
          ?>  

  <!--Itens-->
          <div class="row">
          <form action="index.php" method="post" class="col-lg-4 col-md-6 mb-4">
            
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images\mouse.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Mouse Razer Deathadder</a>
                  </h4>
                  <h5>$49.99</h5>
                  <input type="hidden" name="cod" value="1">
                  <input type="hidden" name="preco" value="121.99">
                  <p class="card-text">O mouse DeathAdder, da Razer, foi desenvolvido e pensado para gamers, mas suas características servem muito bem para quem é designer, desenhista, artista etc., por sua impressionante acuidade e sensibilidade.</p>
                  <input type="submit" class="btn btn-success" value="Adicionar ao carrinho">
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            
            </div>
            </form>
            <form action="index.php" method="post"class="col-lg-4 col-md-6 mb-4">
                      
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images\teclado.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Teclado Razer BlackWindow</a>
                  </h4>
                  <h5>$169.99</h5>
                  <input type="hidden" name="preco" value="169.99">
                  <p class="card-text">O Razer Blackwidow faz parte da nova linha de produtos Razer Chroma. Com a opção de ajuste entre 16.8 milhões de cores que podem ser sincronizadas em vários modos programados, o Razer Chroma faz com que o seu teclado acompanhe o seu estilo.</p>
                  <input type="submit" class="btn btn-success" type="hidden" value="Adicionar ao carrinho" name="cod">
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            
            </div>
            </form>
            <form action="index.php" method="post"class="col-lg-4 col-md-6 mb-4">
                      
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images\monitor.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Monitor LG Ultrawide 25Polegadas</a>
                  </h4>
                  <h5>$199.99</h5>
                  <input type="hidden" name="preco" value="199.99">
                  <p class="card-text"> Desfrute de jogos de alta especificidade no grande ecrã 21:9 UltraWide Full HD (2560x1080) com uma impressionante qualidade de imagem que irão satisfazer o seu desejo de uma experiência de jogo ainda mais real e perfeita.</p>
                  <input type="submit" class="btn btn-success" value="Adicionar ao carrinho" name="cod">
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            
            </div>
            </form><!--
            <form action="index.php" method="post"class="col-lg-4 col-md-6 mb-4">
                    
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  <input type="submit" class="btn btn-success" value="Adicionar ao carrinho" name="cod[]">
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              
            </div>
            </form>
            <form action="index.php" method="post"class="col-lg-4 col-md-6 mb-4">
                      
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                  <input type="submit" class="btn btn-success" value="Adicionar ao carrinho" name="cod[]">
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              
            </div>
            </form>
            <form action="index.php" method="post"class="col-lg-4 col-md-6 mb-4">
                      
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  <input type="submit" class="btn btn-success" value="Adicionar ao carrinho" name="cod[]">
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              
            </div>
          </form>-->
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container --></div>

    <div class="col-12 copyright mt-3">
      <p class="float-left">
          <a href="#"><center>Voltar ao início</center></a>
      </p>          
    </div>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Danilo Pereira e Lucas Bragança Website 2019</p>
        
              <center><a class="nav-link" href="contato.php">Contato</a></center>
            
      </div>
      <!-- /.container -->
    </footer>

  </body>

</html>
