<?php get_header(); ?>

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
                  <div class="col-8 mb-3 ">


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

                        <div class="col-12 px-0">
                            
                            <p class="display-4 text-center d-flex d-md-none  mt-3 mb-3">Registrate</p>
                            <p class="display-2 text-center d-none d-md-flex  mt-3 mb-3">Registrate</p>
                        </div>                                           

                    </div>

                    <!-- Formulario de registro -->
                    <main class="row m-0 mb-5 pb-5 justify-content-between articles">                           

                        <!-- Material form register -->
                        <div class="col-12 p-0 m-0">
                            <form class="m-0 p-0" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login">                            
    
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
                  <?php require 'aside.component.php'; ?>

                </div>

              </div>
            </div>

            

            <!-- Contenedor del footer -->
            <?php require 'footer.component.php'; ?>

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
