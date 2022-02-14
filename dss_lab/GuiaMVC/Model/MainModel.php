<?php


class MainModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function insertarPersona($datos){
        try{
        $query = $this->db->conexion()->prepare('INSERT INTO persona(nombre_persona, edad_persona, telefono_persona, sexo_persona, id_ocupacion, fecha_nac) VALUES (:nombre,:edad,:telefono,:sexo,:ocupacion,:fecha)');
        $query->execute(['nombre'=> $datos['nombre'],'edad'=> $datos['edad'],'telefono'=> $datos['telefono'], 'sexo'=> $datos['sexo'], 'ocupacion'=> $datos['ocupacion'], 'fecha'=> $datos['fecha'] ]);
        echo 'insertar dato';
    }catch(PDOException $e){
        return false;
    }
    }
}

?>