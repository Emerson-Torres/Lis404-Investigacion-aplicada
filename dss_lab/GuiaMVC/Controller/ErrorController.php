<?php

class ErrorController extends Controller{
    function __construct(){
        parent::__construct();
        echo "<p style='color:red;'>Error al cargar el</p>";
    }
}

?>