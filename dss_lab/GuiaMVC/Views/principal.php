<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MVC</title>
        <link rel="icon" type="image/x-icon" href="<?php echo constant('URL'); ?>Public/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo constant('URL'); ?>Public/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">UDB-Universidad Don Bosco</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Index</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="ayuda">Ayuda</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Gestión Ocupaciones</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo constant('URL'); ?>Public/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>MVC</h1>
                            <span class="subheading">Proyecto gestión personas</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">Acerca del MVC</h2>
                            <h3 class="post-subtitle">El MVC surge como una ideología de desarrollo para aplicaciones Web
                                dinámicas para los lenguajes interpretados en el servidor, como lo es en este caso PHP.

                            </h3>
                        </a>
                        
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                        <h2 class="post-title">De donde surgen las siglas MVC entonces?</h2>
                        <h3 class="post-subtitle">MVC o mejor conocido como Modelo Vita Controlador es entonces la definición 
                            para esta metodología de trabajo donde cada elemento cumple con una tarea especifica. 

                        </h3>
                    </a>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">Que es el modelo?</h2>
                            <h3 class="post-subtitle">Es la sección del proyecto donde se conecta a la base de datos 
                                y se envían posteriormente dichos parámetros al controlador.

                            </h3>
                        </a>
                      
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Que es el controlador?</h2>
                            <h3 class="post-subtitle">Es en este caso el encargado de obtener los datos enviados desde el modelo y transmitir la data 
                                a la vista, también gestiona las acciones a ejecutar en el proyecto.

                            </h3>
                        </a>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Que es la vista?</h2>
                            <h3 class="post-subtitle">Es entonces el lugar donde se muestra la información procesada despues de 
                                una petición al usuario final.
                            </h3>
                        </a>
                    </div>
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Ver registros →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                           
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Gestion personas 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo constant('URL'); ?>Public/js/scripts.js"></script>
    </body>
</html>
