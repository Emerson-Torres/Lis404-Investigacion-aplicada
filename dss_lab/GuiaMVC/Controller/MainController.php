<?php

class MainController extends Controller{
    function __construct(){
       
       
    }

    function saludo(){
        parent::__construct();
        
        $this->view->render('principal');
    }
    
    function ayuda(){
        parent::__construct();
        $this->view->mensaje1 ="Primer parametro enviado a la vista";
        $this->view->mensaje2 ="Mensaje 2";
        $this->view->render('ayuda');
    }
    function insertarPersona(){
        parent::__construct();
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $ocupacion = $_POST['ocupacion'];
        if(preg_match("#^\(?\d{2}\)?[\s\.-]?\d{4}[\s\.-]?\d{4}$#", $telefono)){
            $datos = array('nombre' => $nombre,'edad' => $edad, 'ocupacion' => $ocupacion , 'sexo' =>$sexo,'telefono' =>$telefono,'fecha' =>$fecha);
            $this->model->insertarPersona($datos);
            $this->view->mensaje2 ="Persona";
            $this->view->render('ayuda');
        }else{
            $this->view->mensaje2 ="Vacio o formato incorrecto";
            $this->view->render('ayuda');
        }

       
       
    }
}

?>