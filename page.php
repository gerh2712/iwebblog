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
                                    <!--
                                        
                                    -->

                                     <?php if (have_posts()) : while(have_posts()) : the_post() ; ?>

                                        <div class="col-12 jumbotron text-center">

                                            
                                            <h1 class="card-title"><strong><?php  the_title(); ?></strong></h1>


                                            <div class="view overlay my-4">                                                
                                                <span class="img-fluid mh-50 mw-100" alt="Card image cap" max-height="500">
                                                <?php if(has_post_thumbnail()) {the_post_thumbnail('homepage-thumb');} ?>
                                                </span>
                                                <a href="#!">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>


                                            <div class="card-body card-body-cascade text-center">

                                                                                                                                
                                            <div>
                                                <span class="m-3 p-3"><?php  echo get_the_date();?>  </span>
                                                <span class="m-3 p-3"><?php  the_category();?>  </span>
                                            </div>                                          
                                                                                        

                                            <div class="card-text text-justify m-3 p-2">
                                                <?php  echo the_content(); ?>
                                            </div>


                                            <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin"></i></a>

                                            <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>

                                            <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook"></i></a>

                                            </div>

                                            </div>

                                    <?php  endwhile; else : ?>
                                        <article class="card ">                                  
                
                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title">No hay articulos aún</h4>
                                            <!-- Text -->
                                            <div class="card-text text-justify">Por el momento no hay articulos para mostrar, prueba a recargar la página o espera que publiquemos algo nuevo</div>
                                            <!-- Button -->
                                            <a class="btn btn-primary btn-block disabled" disabled href="#">Ir a la nota</a>

                                        </div>

                                        <div class="card-footer">

                                            <div class="row justify-content-between">
                                            <div class="col-6">

                                                <small class="">
                                                Articulo inexistente
                                                </small>

                                            </div>

                                            <div class="col-3">
                                                <small class="">
                                                <p class="text-muted text-right mb-0">
                                                    Gracias por tu comprensión
                                                </p>
                                                </small>
                                            </div>

                                            </div>

                                        </div>
                
                                        </article>
                                    <?php endif; ?>    

                                    </main>                                        

                            </div>


                            <!-- ASIDE -->            
                            <?php get_sidebar(); ?>

                        </div>

                    </div>

                </div>

                

                <!-- Contenedor del footer -->
                <?php get_footer(); ?>