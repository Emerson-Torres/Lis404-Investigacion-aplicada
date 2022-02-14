<HTML>
<HEAD>
<title>index.php</title>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</HEAD>
<BODY>
<form class="container" action="verimagen.php" method="post">
  <h1>seleccione la imagen que decea ver</h1>

<div class="mb-3">
 
  <div class="form-group">
    <label for="exampleFormControlSelect1">Imagenes disponibles</label>
    <select class="form-control" id="exampleFormControlSelect1" name="opcion">
        <option value="carro">Carrito</option>
        <option value="aguila">Aguila</option>
        <option value="arbol">Arbol</option>
        <option value="luna">luna</option>
</select>  
<br>
<input type="submit" value="enviar" class="btn btn-info"/>
</form>
  </div>
</div>
</section>
</BODY>
</HTML>