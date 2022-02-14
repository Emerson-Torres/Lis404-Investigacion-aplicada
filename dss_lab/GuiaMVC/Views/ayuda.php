<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MVC</title>
    <link rel="icon" type="image/x-icon" href="../Public/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../Public/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">UDB-Universidad Don Bosco</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Index</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">Gestión Personas</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Gestión
                            Ocupaciones</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('../Public/assets/img/home-bg.jpg')">
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
        <form id="save-form" class="form" action="<?php echo constant('URL'); ?>Main/insertarPersona" method="post">
            <h3 class="text-center">Registro</h3>
            <div class="form-group">
                <label for="nombre" >Nombre persona:</label><br>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad" class="text-info">Edad persona:</label><br>
                <input type="number" name="edad" id="edad" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad" class="text-info">Telefono persona:</label><br>
                <input type="text" name="telefono" id="edad" class="form-control">
            </div>
            <div class="form-group">
                <label for="sexo" class="text-info">Sexo persona:</label><br>
                <select class="form-control" name="sexo" id="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ocupacion" class="text-info">Ocupacion persona:</label><br>
                <select class="form-control" name="ocupacion" id="ocupacion">
                    <option value="1">Doctor</option>
                    <option value="2">Profesor</option>
                    <option value="3">Emprendedor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha" class="text-info">Fecha nacimiento persona:</label><br>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>
            
            <div class="form-group">
            <div class="form-group">
               <br>
                <input type="submit" name="password" id="password" class="btn btn-info">
            </div>
            <div class="form-group">
            </div>
            <br>
            <?php if($this->mensaje2 !=null){?>
            <div class="alert alert-primary" role="alert">
  <?php echo $this->mensaje2?>
</div>
<?php }?>
        </form>
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
    <script src="../Public/js/scripts.js"></script>
</body>

</html>