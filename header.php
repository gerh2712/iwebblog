<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font awesome MDB-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Bootstrap Core -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css?ver=1.0">
    <!-- Material Design Bootstrap -->
    <link href="<?php bloginfo('template_url') ?>/css/mdb.min.css?ver=1.0" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css?ver=1.0" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Your custom styles (optional) -->
    <link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet">
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <title>
        <?php
            if (is_home()) {
                echo get_bloginfo('name');
            }elseif (is_single()) {
                echo the_title();
            }
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body style="background: #f2f2f2;">
    <div class="container-fluid">

        <!-- Aquí va todo -->
        <div class="row">
          <div class="col-12">

            <!-- Header -->
            
            <header class="row">
    
              <div class="col-12 p-0">
                  <!-- Barra de navegacion -->
                  <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
                      <a class="navbar-brand" href="<?php bloginfo('url')?>"><strong>iwebblog</strong></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                  <a class="nav-link" href="#blog">Blog <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item disabled">
                                  <a class="nav-link disabled" disabled href="#youtube">Próximamente...</a>
                              </li>
                              <!--<li class="nav-item">
                                  <a class="nav-link" href="views_php/entrada.view.php">Cursos</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#youtube">Youtube</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#about">Sobre Nosotros</a>
                              </li>-->
                          </ul>
              
                          <?php 
                          
                          if (isset($_SESSION['usuario'])) {
                              
                              echo
                                  "<ul class='navbar-nav nav-flex-icons'>                                   
                                      <li class='nav-item'>
                                          <a href='php/cerrar_sesion.php' class='btn btn-primary'>Cerrar Sesión</a>
                                      </li>               
                                  </ul>"
                              ;
                          }elseif(!isset($_SESSION['usuario'])){
                              
                              echo
              
                                  "<ul class='navbar-nav nav-flex-icons'>                                   
                                      <li class='nav-item'>
                                      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalIniciarSesion'>Iniciar Sesión</button>
                                      </li>
                                  </ul>"
                              ;
              
                          }
              
                          ?>

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
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Usuario o email</label>
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
              
                      </div>
                  </nav>
              </div>

              <div class="col-12">
              
                  

              </div>


            </header>