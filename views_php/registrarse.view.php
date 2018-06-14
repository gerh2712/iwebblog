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
    <title>Registrarse - iwebblog</title>
</head>

<body style="background: #f2f2f2;">
    <div class="container-fluid">

        <!-- Aquí va todo -->
        <div class="row">
          <div class="col-12">

            <!-- Header -->
            <?php require 'header.component.php'; ?>

            <!-- Contenido principal -->
            <div class="row mt-3 py-2 px-0">
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
                  <div class="col-8 mb-3 ml-3">


                    <!-- Modal iniciar sesión -->
                    <div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="modalIniciarSesion" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Iniciar sesión</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <i class="fa fa-envelope prefix grey-text"></i>
                                            <input type="text" id="defaultForm-email" class="form-control validate" name="usuario_login">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Tu email</label>
                                        </div>

                                        <div class="md-form mb-4">
                                            <i class="fa fa-lock prefix grey-text"></i>
                                            <input type="password" id="defaultForm-pass" class="form-control validate" name="password_login">
                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tu contraseña</label>
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-primary" type="submit" name="submit_login">Acceder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  

                    <!-- Titular Registro -->
                    <div class="row">

                        <div class="col-12">
                            <p class="mb-0 display-3">Registrarse</p>
                        </div>                                           

                    </div>

                    <!-- Formulario de registro -->
                    <main class="row mb-3 justify-content-between articles">                           

                        <!-- Material form register -->
                        <div class="col-12">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login">                            
    
                                <!-- Material input text -->
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="materialFormRegisterNameEx" class="form-control" name="usuario">
                                    <label for="materialFormRegisterNameEx">Tu nombre</label>
                                </div>
    
                                <!-- Material input email -->
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="materialFormRegisterEmailEx" class="form-control" name="email">
                                    <label for="materialFormRegisterEmailEx">Tu email</label>
                                </div>
    
                                <!-- Material input email -->
                                <div class="md-form">
                                    <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                                    <input type="email" id="materialFormRegisterConfirmEx" class="form-control" name="email2">
                                    <label for="materialFormRegisterConfirmEx">Confirma Tu email</label>
                                </div>
    
                                <!-- Material input password -->
                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="materialFormRegisterPasswordEx" class="form-control" name="contraseña">
                                    <label for="materialFormRegisterPasswordEx">Tu contraseña</label>
                                </div>

                                <?PHP

                                if (!empty($errores)) {
                                    echo $errores;
                                }
                                
                                ?>
    
                                <div class="text-center mt-4">
                                    <button class="btn btn-danger" type="submit" name="submit_registro">Registrarse</button>
                                </div>
                            </form>
                        </div>
                   

                    </main>                                        

                  </div>


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
            </div>

            

            <!-- Contenedor del footer -->
            <div class="row unique-color-dark p-3">
              <div class="col-12">

              <!-- Material form contact -->
              <div class="row m-3">
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
              </div>

                <!--Otro row para poder posicionar el contenido en columnas -->
                <div class="row mx-4 my-5  justify-content-around">

                  <!-- Desarrollado por -->
                  <div class="col-4 ">
                    <p class="h3 text-light">iwebblog</p>
                    <p class="h5 text-light mb-0 ">Desarrollado por <strong>Gerardo Hernández</strong></p>
                    <p class="text-light mt-3">Soy un desarrollador web en formación</p>
                  </div>

                  <!-- Hecho con -->
                  <div class="col-3">
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
                  </div>


                  <!-- Redes Sociales -->
                  <div class="col-4">
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
                  </div>

                </div>

              </div>
            </div>

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
