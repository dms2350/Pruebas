<?php
    function db($query){
                $conexion = mysqli_connect("localhost","root","admin","p1");
                $res = mysqli_query($conexion,$query);
                return $res;
            } 

    function insertar($tabla, $datos){
                $resultado = array_keys($datos);
                $sql = "insert into ".$tabla."(".implode(',',$resultado).") values('".implode("','",$datos)."')";
                return db($sql);
            } 
       

?>