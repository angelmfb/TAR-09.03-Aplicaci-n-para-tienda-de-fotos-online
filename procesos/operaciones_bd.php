<?php
    class operaciones_BD {
        //conexión
        private $conexion=null;
        function __construct(){
            require('config_bd.php');
            $this->conexion=mysqli_connect(SERVIDORBD,USUARIO,CONTRASENIA,BASEDATOS);
            //$mysqli = new mysqli("esvirgua.com","user2daw_07","MkW(=vk57D{J","user2daw_BD1-07");
        }
        function consultar($consulta){
            return $this->conexion->query($consulta);
        }

        function cerrarconexion(){
            return $this->conexion->close();
        }
    } 
?>