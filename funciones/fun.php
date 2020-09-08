<?php
    function db($query){
                $conexion = mysqli_connect("braatericm85ffvzdubk-mysql.services.clever-cloud.com","ulxzbzalpkjcpfze","aAjROCXTZkQ4u96jSZSE","braatericm85ffvzdubk");
                $res = mysqli_query($conexion,$query);
                return $res;
            } 

    function insertar($tabla, $datos){
                $resultado = array_keys($datos);
                $sql = "insert into ".$tabla."(".implode(',',$resultado).") values('".implode("','",$datos)."')";
                return db($sql);
            } 
    

?>