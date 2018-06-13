<!DOCTYPE html>
<html lang="es">

<?php require 'head.component.php'; ?>

<body style="background: #f2f2f2;">
    <div class="container-fluid">

        <!-- Aquí va todo -->
        <div class="row">
          <div class="col-12">

            <!-- Header -->
            <?php require 'header.component.php'; ?>    

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
                          <?php foreach ($articulos as $articulo): ?>
    
                            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
      
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
                                      <h4 class="card-title"><a href="entrada.php?id=<?php echo $articulo['id'] ?>"><?php echo $articulo['titulo'] ?></a></h4>
                                      <!-- Text -->
                                      <p class="card-text text-justify"><?php echo $articulo['extracto']?></p>
                                      <!-- Button -->
                                      <a class="btn btn-primary btn-block" href="entrada.php?id=<?php echo $articulo['id'] ?>">Ir a la nota</a>
      
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
                  <aside class="col-sm-12 col-md-12 col-lg-3 ">

                    <div class="row mb-3">
                      <div class="col-12">
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
                      <div class="col-12">
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
            <?php require 'footer.component.php'; ?>

          </div>
        </div>

    </div>

    <!-- JQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- popper -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
