<!-- get_header.php -->
<?php get_header(); ?>

            <!-- Contenido principal -->
            <section class="row mt-3 py-2 px-0">
              <div class="col-12">
                <!-- Alert -->
                <?php require 'alert.component.php'; ?>

                <!-- Contenedor del main y el aside -->
                <div class="row d-flex justify-content-around">

                  <!-- MAIN -->
                  <!-- Grupo de cartas para mostrar las entradas -->
                  <main class="col-sm-12 col-md-12 col-lg-8 ">

                    <!-- Titular Blog -->
                    <h2 class="display-4 d-block d-md-none  mt-3 mb-3">Últimas entradas</h2>
                    <h2 class="display-2 d-none d-md-block  mt-3 mb-3">Últimas entradas</h2>

                    <!-- Ultimas entradas -->
                    <section class="row mb-3 justify-content-between articles">

                          <!-- Entradas dinámicas -->
                          <?php if (have_posts()) : while(have_posts()) : the_post() ; ?>
                            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
        
                              <article class="card ">
    
                                  <!-- Card image -->
                                  <div class="view overlay">                                     
                                    <span class="card-img-top" alt="Card image cap" max-height="00">
                                      <?php if(has_post_thumbnail()) {the_post_thumbnail('homepage-thumb');} ?>
                                    </span>
                                    <a href="#!">
                                      <div class="mask rgba-white-slight"></div>                                
                                  </div> 
    
                                  <!-- Card content -->
                                  <div class="card-body">
    
                                    <!-- Title -->
                                    <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <!-- Text -->
                                    <div class="card-text text-justify"><?php echo the_excerpt(); ?></div>
                                    <!-- Button -->
                                    <a class="btn btn-primary btn-block" href="<?php the_permalink(); ?>">Ir a la nota</a>
    
                                  </div>
    
                                  <div class="card-footer">

                                    <div class="row justify-content-between">
                                      <div class="col-6">

                                        <small class="">
                                          <?php the_category(); ?>
                                        </small>

                                      </div>

                                      <div class="col-3">
                                        <small class="">
                                          <p class="text-muted text-right mb-0">
                                            <?php echo get_the_date(); ?>
                                          </p>
                                        </small>
                                      </div>

                                    </div>

                                  </div>
    
                              </article>
    
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

                    </section>

                    <!-- Pagination -->
                    <div class="row m-2 p-3">

                        <div class="col-12">
                          <?php wp_pagenavi(); ?>
                        </div>                        

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
                                          echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                        }else {
                                          echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
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
                                          echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                        }else {
                                          echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
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

                  </main>


                  <!-- ASIDE -->                  
                  <?php get_sidebar(); ?>

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
            <?php get_footer(); ?>