<?php 

if (isset($_GET['index.php'])) {
    echo
    '<main class="col-sm-12 col-md-12 col-lg-8 ">

        <!-- Titular Blog -->
        <h2 class="display-4 d-block d-md-none  mt-3 mb-3">Últimas entradas</h2>
        <h2 class="display-2 d-none d-md-block  mt-3 mb-3">Últimas entradas</h2>

        <!-- Ultimas entradas -->
        <section class="row mb-3 justify-content-between articles">

                <!-- Entradas dinámicas -->
                <?php foreach ($articulos as $articulo): ?>

                <div class="col-sm-12 col-md-12 col-lg-6 mb-3">

                    <div class="card ">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="<?php echo "img/articulos/" . $articulo["img_principal"]; ?>" alt="Card image cap">
                            <a href="#!">
                            <div class="mask rgba-white-slight"></div>                                
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a href="entrada.php?id=<?php echo $articulo["id"] ?>"><?php echo $articulo["titulo"] ?></a></h4>
                            <!-- Text -->
                            <p class="card-text text-justify"><?php echo $articulo["extracto"]?></p>
                            <!-- Button -->
                            <a class="btn btn-primary btn-block" href="entrada.php?id=<?php echo $articulo["id"] ?>">Ir a la nota</a>

                        </div>

                        <div class="card-footer">

                            <div class="row justify-content-between">
                            <div class="col-6">
                                <small class="text-muted">
                                <?php echo $articulo["id"] ?>
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
                    
                    <ul class="d-none d-md-flex pagination pagination-lg pagination-circle pg-blue justify-content-center mb-0">

                        <?php if($pagina == 1): ?>

                            <!--First-->
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Primero</a></li>                                      

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                        <?php else: ?>

                            <!--First-->
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Primero</a></li>                                      

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
                                echo "<li class="page-item active"><a class="page-link" href="?pagina=$i">$i</a></li>";
                            }else {
                                echo "<li class="page-item"><a class="page-link" href="?pagina=$i">$i</a></li>";
                            }
                            
                            }
                        
                        ?>

                        <?php if($pagina == $numeroPaginas): ?>

                            <!--Último-->
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Último</a></li>

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
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Último</a></li>
                        

                        <?php endif ?>                                                                               

                    </ul>
                    
                    
                    <ul class="d-flex d-md-none pagination pagination-circle pg-blue justify-content-center mb-0">

                        <?php if($pagina == 1): ?>

                            <!--First-->
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Primero</a></li>                                      

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                        <?php else: ?>

                            <!--First-->
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Primero</a></li>                                      

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
                                echo "<li class="page-item active"><a class="page-link" href="?pagina=$i">$i</a></li>";
                            }else {
                                echo "<li class="page-item"><a class="page-link" href="?pagina=$i">$i</a></li>";
                            }
                            
                            }
                        
                        ?>

                        <?php if($pagina == $numeroPaginas): ?>

                            <!--Último-->
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Último</a></li>

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
                            <li class="d-none d-md-block page-item disabled"><a class="page-link">Último</a></li>
                        

                        <?php endif ?>                                                                               

                    </ul>

                </nav>
                
                </div>

        </div>

    </main>'
    ;
}elseif (isset($_GET['registrarse.php'])) {
    echo
    '<div class="col-8 mb-3 ml-3">

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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="login">                            

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

    </div>'
    ;
}elseif(isset($_GET['entrada.php?id=*'])){
    echo
    '<div class="col-8 mb-3 ml-3">

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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

        <!-- Entrada del artículo -->
        <main class="row mb-3 justify-content-between articles">                           

            <!-- Entrada -->
            <!-- Card -->
            <div class="col-12 card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                <img class="card-img-top" src="<?php echo "img/articulos/" . $entrada["img_principal"]; ?>" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                <!-- Title -->
                <h4 class="card-title"><strong><?php echo $entrada["titulo"]; ?></strong></h4>
                <!-- Subtitle -->
                <!-- TODO: Cambiar por etiquetas -->
                <h6 class="font-weight-bold indigo-text py-2"><?php echo $entrada["titulo"]; ?></h6>
                <!-- Text -->
                <p class="card-text"><?php echo $entrada["nota"]; ?></p>

                <!-- Facebook -->
                <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                <!-- Twitter -->
                <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                <!-- Youtube -->
                <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

                </div>

            </div>


        </main>                                        

    </div>'
    ;
}

?>