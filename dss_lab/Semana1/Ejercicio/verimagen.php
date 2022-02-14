<HTML>
<HEAD>
<title>index.php</title>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</HEAD>
<BODY>
<?php $opcion = $_POST['opcion']; ?> 
    <h1 style="text-align: center;">Su eleccion ha sido <?php echo $opcion ?> </h1>

<section class="container" >
  
<?php 

    if($opcion ==="carro" ){
       
?>

<img style="width: 70%;"  src="img/<?php echo $opcion ?>"/>

<?php
}
?>

</section>
</BODY>
</HTML>