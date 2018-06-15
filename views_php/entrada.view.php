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
                            <div class="col-sm-12 col-md-12 col-lg-8">                                                   

                                    <!-- Entrada del artículo -->
                                    <main class="row mb-3 justify-content-between articles">                           

                                        <!-- Entrada -->
                                        <!-- Card -->
                                        <div class="col-12 jumbotron text-center">

                                            <!-- Title -->
                                            <h1 class="card-title"><strong><?php echo $entrada['titulo']; ?></strong></h1>

                                            <!-- Card image -->
                                            <div class="view overlay my-4">
                                                <img class="img-fluid mh-50 mw-100" src="<?php echo 'img/articulos/' . $entrada['img_principal']; ?>" alt="">
                                                <a href="#!">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body card-body-cascade text-center">
                                            
                                            <!-- Subtitle -->                                                                                       
                                            <?php if (isset($entrada['subtitulo'])) {
                                                echo '<h6 class="font-weight-bold indigo-text py-2">'
                                                .$entrada['subtitulo']
                                                .'</h6>';
                                            }
                                            ?>                                            
                                                                                        
                                            <!-- Nota -->
                                            <p class="card-text text-justify"><?php echo $entrada['nota']; ?></p>

                                            <!-- Facebook -->
                                            <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin"></i></a>
                                            <!-- Twitter -->
                                            <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                                            <!-- Youtube -->
                                            <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook"></i></a>

                                            </div>

                                        </div>
                                

                                    </main>                                        

                            </div>


                            <!-- ASIDE -->            
                            <?php get_sidebar(); ?>

                        </div>

                    </div>

                </div>

                

                <!-- Contenedor del footer -->
                <?php get_footer(); ?>