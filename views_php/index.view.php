<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font awesome MDB-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Bootstrap Core -->
    <link rel="stylesheet" href="css/bootstrap.min.css?ver=1.0">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css?ver=1.0" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css?ver=1.0" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <title>Inicio - iwebblog</title>
</head>

<body style="background: #f2f2f2;">
    <div class="container-fluid">

        <!-- Aquí va todo -->
        <div class="row">
          <div class="col-12">

            <!-- Header -->
            <header class="row">

              <div class="col-12">

                <div class="row">

                  <!--Barra de navegación -->
                  <div class="col-12 mt-3">

                    <!--Main Navigation-->
                      <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
                          <a class="navbar-brand" href="index.html"><strong>iwebblog</strong></a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                  <li class="nav-item active">
                                      <a class="nav-link" href="#blog">Blog <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="views_php/entrada.view.php">Cursos</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#youtube">Youtube</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#about">Sobre Nosotros</a>
                                  </li>
                              </ul>
                              <ul class="navbar-nav nav-flex-icons">                                   
                                  <li class="nav-item">
                                      <a href="php/cerrar_sesion.php" class="btn btn-primary">Cerrar Sesión</a>
                                  </li>
                              </ul>
                          </div>
                      </nav>

                  </div>

                </div>

                <!--Información-->
                <div class="row justify-content-center">

                  <!-- Información -->
                  <div class="col-12 mx-3 mt-4 p-4 special-color">

                    <div>
                      <br>
                      <p class="display-1 text-light">Trabajando en el sitio...</p> <p class="text-light h4">Vuelve pronto</p>

                      <br>
                    </div>

                  </div>

                </div>

              </div>

            </header>

            <!-- Contenido principal -->
            <section class="row mt-3 py-2 px-0">
              <div class="col-12">

                <!-- Alert -->
                <div class="row">

                  <div class="col">

                    <div class="alert  primary-color-dark  text-justify text-light">

                        <strong class="h6">Aviso: </strong> La página web está en desarrollo, los aspectos de la misma se modifican constantemente.

                        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                  </div>

                </div>

                <!-- Contenedor del main y el aside -->
                <div class="row justify-content-around">

                  <!-- MAIN -->
                  <!-- Grupo de cartas para mostrar las entradas -->
                  <main class="col-8 mb-3 ml-3">

                    <!-- Titular Blog -->
                    <h2 class="display-2 gerh mt-3 mb-3">Últimas entradas</h2>

                    <!-- Ultimas entradas -->
                    <section class="row mb-3 justify-content-between articles">

                      <!-- Entradas dinámicas -->

                      <?php foreach ($articulos as $articulo): ?>

                        <div class="col-6 mb-3">
  
                            <div class="card ">
  
                                <!-- Card image -->
                                <div class="view overlay">
                                  <img class="card-img-top" src="<?php echo 'img/articulos/' . $articulo['img_principal']; ?>" alt="Card image cap">
                                  <a href="#!">
                                    <div class="mask rgba-white-slight"></div>                                
                                </div>
  
                                <!-- Card content -->
                                <div class="card-body">
  
                                  <!-- Title -->
                                  <h4 class="card-title"><a href="php/entrada.php?id=<?php echo $articulo['id'] ?>"><?php echo $articulo['titulo'] ?></a></h4>
                                  <!-- Text -->
                                  <p class="card-text text-justify"><?php echo $articulo['extracto']?></p>
                                  <!-- Button -->
                                  <a class="btn btn-primary btn-block" href="php/entrada.php?id=<?php echo $articulo['id'] ?>">Ir a la nota</a>
  
                                </div>
  
                                <div class="card-footer">

                                  <div class="row justify-content-between">
                                    <div class="col-6">
                                      <small class="text-muted">
                                        <?php echo $articulo['id'] ?>
                                      </small>
                                    </div>
                                    <div class="col-3">
                                      <small class="">
                                        <p class="text-muted text-right mb-0">
                                          Fecha
                                        </p>
                                      </small>
                                    </div>
                                  </div>

                                </div>
  
                            </div>
  
                        </div> 

                      <?php endforeach ?>                                             

                    </section>

                    <!-- Pagination -->
                    <div class="row m-2 p-3">
                      <div class="col-12">

                      <!--Pagination -->
                        <nav aria-label="pagination example">
                            <ul class="pagination pagination-lg pagination-circle pg-blue justify-content-center mb-0">

                                <?php if($pagina == 1): ?>

                                  <!--First-->
                                  <li class="page-item disabled"><a class="page-link">Primero</a></li>

                                   <!--Arrow left-->
                                  <li class="page-item disabled">
                                      <a class="page-link" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                          <span class="sr-only">Previous</span>
                                      </a>
                                  </li>

                                <?php else: ?>

                                  <!--First-->
                                  <li class="page-item"><a class="page-link" href="index.php">Primero</a></li>                                                              

                                  <!--Arrow left-->
                                  <li class="page-item">
                                      <a class="page-link" aria-label="Previous" href="?pagina=<?php echo $pagina - 1 ?>">
                                          <span aria-hidden="true">&laquo;</span>
                                          <span class="sr-only">Previous</span>
                                      </a>
                                  </li>

                                <?php endif ?>

                                <?php 

                                for ($i=1; $i <= $numeroPaginas; $i++) {                                                                    

                                  if($pagina == $i){
                                    echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                  }else {
                                    echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                  }
                                  
                                }
                                
                                ?>

                                <?php if($pagina == $numeroPaginas): ?>

                                <!--Último-->
                                <li class="page-item disabled"><a class="page-link">Último</a></li>

                                <!--Arrow right-->
                                <li class="page-item disabled">
                                    <a class="page-link" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <?php else: ?>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next" href="?pagina= <?php echo $pagina + 1 ?>">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <!--Último-->
                                <li class="page-item"><a class="page-link" href="?pagina=<?php echo $numeroPaginas ?>">Último</a></li>
                                

                                <?php endif ?>                                                                               

                            </ul>
                        </nav>
                      
                      </div>
                    </div>

                  </main>


                  <!-- ASIDE -->                  
                  <aside class="col-3 mb-3 mr-3">

                    <div class="row mb-3">
                      <div class="col">
                        <div class="card">
                          <div class="card-body">
                              <h3 class="card-title">Título</h3>
                              <p class="card-subtitle text-muted mt-2 mb-2">Subtítulo</p>
                              <p class="card-text">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              </p>
                              <a href="#" class="card-link">Enlace 1</a>
                              <a href="#" class="card-link">Enlace 2</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col">
                        <div class="card">
                          <div class="card-body">
                              <h3 class="card-title">Título</h3>
                              <p class="card-subtitle text-muted mt-2 mb-2">Subtítulo</p>
                              <p class="card-text">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              </p>
                              <a href="#" class="card-link">Enlace 1</a>
                              <a href="#" class="card-link">Enlace 2</a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </aside>

                </div>

              </div>
            </section>

            <!-- Fila de cartas Cursos -->
            <section class="row primary-color-dark justify-content-center pt-4 pb-4  px-3" id="cursos">

                <!-- Cursos -->
                <div class="col-12">

                  <!--Display-->
                  <p class="display-3 text-white text-center p-3">Cursos</p>

                </div>

                <!-- Card Deck -->
                <div class="col-12">

                  <!-- Card deck -->
                  <div class="card-deck">

                      <!-- Card -->
                      <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                          <img class="card-img-top" src="https://darshansaroya.com/wp-content/uploads/2017/09/Top-5-Material-Designs-for-Bootstrap.jpg" alt="Card image cap" height="250">
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                          <!--Title-->
                          <h4 class="card-title">Diseño Web</h4>
                          <!--Text-->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                          <button type="button" class="btn btn-light-blue btn-md">Ir al curso</button>

                        </div>

                      </div>

                      <!-- Card -->
                      <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap" height="250">
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                          <!--Title-->
                          <h4 class="card-title">Card title</h4>
                          <!--Text-->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                          <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                        </div>

                      </div>

                      <!-- Card -->
                      <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap" height="250">
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                          <!--Title-->
                          <h4 class="card-title">Card title</h4>
                          <!--Text-->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                          <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                        </div>

                      </div>

                  </div>

                </div>

                <!-- Ver más cursos -->
                <a href="" class="btn btn-danger btn-lg">Explorar más cursos</a>

            </section>

            <!-- Contenedor del footer -->
            <footer class="row unique-color-dark p-3">
              <div class="col-12">

                <!-- Material form contact -->
                <section class="row m-3">
                    <div class="col-12">
                          <form class="m-3 p-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                              <p class="h4 text-center text-light mb-4"> Contacto</p>

                              <!-- Nombre input text -->
                              <div class="md-form">
                                  <i class="fa fa-user prefix white-text"></i>
                                  <input type="text" id="materialFormContactNameEx" class="form-control form-control-lg text-light" name="nombre" value="<?php if(!$var2 && isset($nombre)) {echo $nombre;} ?>">
                                  <label for="materialFormContactNameEx" class="white-text">Tu nombre</label>
                              </div>

                              <!-- correo input email -->
                              <div class="md-form">
                                  <i class="fa fa-envelope prefix white-text"></i>
                                  <input type="email" id="materialFormContactEmailEx" class="form-control form-control-lg text-light" name="email" value="<?php if(!$var2 && isset($email)) {echo $email;} ?>">
                                  <label for="materialFormContactEmailEx" class="white-text">Tu email</label>
                              </div>

                              <!-- Asunto input subject -->
                              <div class="md-form">
                                  <i class="fa fa-tag prefix white-text"></i>
                                  <input type="text" id="materialFormContactSubjectEx" class="form-control form-control-lg text-light" name="asunto" value="<?php if(!$var2 && isset($asunto)) {echo $asunto;} ?>">
                                  <label for="materialFormContactSubjectEx" class="white-text">Asunto</label>
                              </div>

                              <!-- Mensaje textarea message -->
                              <div class="md-form">
                                  <i class="fa fa-pencil prefix white-text"></i>
                                  <textarea type="text" id="materialFormContactMessageEx" class="form-control form-control-lg text-light md-textarea" rows="3" name="mensaje"><?php if(!$var2 && isset($mensaje)) {echo $mensaje;} ?></textarea>
                                  <label for="materialFormContactMessageEx" class="white-text">Tu mensaje</label>
                              </div>

                              <!-- FIXME: Se pierden los estilos al pulsar enviar y se recarga la página ejecutando
                              el código php pero se pierden los estilos css. Además tengo que indicar la dirección
                              del archivo de lógica o no ocurre nada -->                                
                              <div class="text-center mt-4">
                                  <button class="btn btn-lg  btn-primary" type="submit" name="benviar">Enviar</button>
                              </div>

                          </form>                            

                            <?php if(!empty($var1)): ?>

                            <div class="alert  warning-color-dark  text-justify text-light">

                              <p><strong>Aviso: </strong> <?php echo $var1 ?></p>

                            </div>

                            <?php elseif ($var2): ?>
                            <div class="alert success-color text-justify text-light">

                              <p>Enviado Correctamente</p>                          

                              <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                              </button>

                            </div>
                            <?php endif ?>

                    </div>
                </section>

                <!--Otro row para poder posicionar el contenido en columnas -->
                <div class="row mx-4 my-5  justify-content-around">

                  <!-- Desarrollado por -->
                  <section class="col-4 ">
                    <p class="h3 text-light">iwebblog</p>
                    <p class="h5 text-light mb-0 ">Desarrollado por <strong>Gerardo Hernández</strong></p>
                    <p class="text-light mt-3">Soy un desarrollador web en formación</p>
                  </section>

                  <!-- Hecho con -->
                  <section class="col-3">
                    <div class="row">
                          <div class="col-12">
                                <p class="h3 text-light">Hecho con <i class="far fa-heart"></i> y :</p>
                          </div>
                          <div class="col-12 my-2">
                                <p class="h6 text-light"><a href="" class="text-light">bootstrap</a> & <a href="" class="text-light">MDBootstrap</a></p>
                          </div>
                          <div class="col-12 my-2">
                                <p class="h6 text-light"><i class="fab fa-html5 fa-2x mr-2"></i> HTML 5</p>
                          </div>
                          <div class="col-12 my-2">
                                <p class="h6 text-light"><i class="fab fa-css3 fa-2x mr-2"> </i>  CSS 3</p>
                          </div>
                          <div class="col-12 my-2">
                                <p class="h6 text-light"><i class="fab fa-js-square fa-2x mr-2"></i>  JavaScript</p>
                          </div>
                          <div class="col-12 my-2">
                                <p class="h6 text-light"><i class="fab fa-php fa-2x mr-2"></i>  PHP</p>
                          </div>                          
                          <div class="col-12 my-2">
                                <p class="h6 text-light"><i class="fab fa-font-awesome fa-2x mr-2"></i>  fontawesome</p>
                          </div>
                    </div>
                  </section>


                  <!-- Redes Sociales -->
                  <section class="col-4">
                    <p class="h3 text-light mb-3">Redes Sociales</p>
                    <!-- Otro row para poner los íconos inline -->
                    <div class="row my-4 py-3 align-center">
                      <div class="col">
                          <a href=""><i class="fab fa-facebook-f fa-2x text-light hoverable"></i></a>
                      </div>
                      <div class="col">
                          <a href=""><i class="fab fa-twitter fa-2x text-light hoverable" aria-hidden="true"></i></a>
                      </div>
                      <div class="col">
                          <a href=""><i class="fab fa-youtube fa-2x text-light hoverable" aria-hidden="true"></i></a>
                      </div>
                      <div class="col">
                          <a href=""><i class="fab fa-github-square fa-2x text-light hoverable" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </section>

                </div>

              </div>
            </footer>

          </div>
        </div>

    </div>

    <!-- JQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- popper -->
    <script src="js/popper.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
