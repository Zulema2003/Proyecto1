<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
        $servidor="localhost";
        $pass="";
        $user="root";
        $BaseDatos="blogusuarios";

        parent:: __construct($servidor,$user,$pass,$BaseDatos);
        $this->query("SET NAMES 'utf8';");
        $this-> connect_errno ? die('Error en la conexion'): $error='</br> Conectado';
        
        unset($error);
        }
        
    }
?>