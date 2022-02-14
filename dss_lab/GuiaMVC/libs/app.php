<?php




class App{
    function __construct(){
         
        $url = isset($_GET['url']) ? $_GET['url']: null ;//obtenermos la url
        $url = rtrim($url, '/');//aseguramos una url limpia determinando / como separador entre elementos
        $url = explode('/', $url);// devuelve un array con todos los elemntos separados con /
        //var_dump($url);

        if(empty($url[0]) ){
            
            $controller = 'Controller/MainController.php';
            $clase= $url[0].'Controller';
            require_once $controller;
            $controller = new MainController();
            $controller->cargarModelo('main');
            $controller->saludo();
            
        }else{

            $url2 = 'Controller/'. $url[0] . 'Controller.php';

       
            if(file_exists($url2)){
            require_once $url2; 
            $clase= $url[0].'Controller';
            $controller = new $clase();
            $controller->cargarModelo($url[0]);
            if(isset($url[1])){
    
                $controller->{$url[1]}();
            }
    
    
            }else{
                require_once 'Controller/ErrorController.php'; 
                $controller = new ErrorController();
            }
        }
       
        
    }
}

?>