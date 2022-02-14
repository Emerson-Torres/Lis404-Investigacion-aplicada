<?php


class View{
    function __construct(){
       
    }
    function render($view){
        require 'Views/'. $view.'.php';
    }
}

?>