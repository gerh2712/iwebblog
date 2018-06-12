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