<header class="">
    <!-- Barra de navegacion-->
    <div class="row">

        <!--Barra de navegación -->
        <div class="col-12">

            <!--Main Navigation-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
                <a class="navbar-brand" href="index.php"><strong>iwebblog</strong></a>
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

                </div>
            </nav>

        </div>

    </div>      
    
    <!--Información-->        
    <div class="row">

        <div class="col-12 bg-primary">
            <p class="display-4">Trabajando en el sitio...</p> <p class="text-light h4">Vuelve pronto</p>                                    
        </div>

    </div>    

</header>