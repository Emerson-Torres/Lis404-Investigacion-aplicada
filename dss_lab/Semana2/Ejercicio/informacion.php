
<?php
 require("infoarreglo.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo DSS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ejemplo DSS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <?php foreach($categorias as $cat => $subcategoria){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $cat;?>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php foreach($subcategoria as $subcat ){ ?>
          <a class="dropdown-item" href="informacion.php?categoria=<?php echo $subcat;?>"><?php echo $subcat;?></a>
         
          <?php } 
        
        }?>
        </div>
      </li>
    </ul>
  </div>
</nav>

<body class="container">
<?php 
if(isset($_GET["categoria"])){
$imagen =$_GET["categoria"];

switch($imagen){
    case "Carrera":
       
        break; require("carrera.php") ;
        case "Pelea":
        require("pelea.php") ;
        break;
        case "Guerra":
            require("guerra.php") ;
            break;
            case "Camisas":
                require("camisas.php") ;
                break;
                case "Televisores":
                    require("televisores.php") ;
                    break;
    
}

}

?>
</body>

</html>