<?php
    function db($query){#conecta a la base de datos
                #$conexion = mysqli_connect("braatericm85ffvzdubk-mysql.services.clever-cloud.com","ulxzbzalpkjcpfze","aAjROCXTZkQ4u96jSZSE","braatericm85ffvzdubk");
                $conexion = mysqli_connect("localhost","root","admin","p1");
                $res = mysqli_query($conexion,$query);
                return $res;
            } 

    function insertar($tabla, $datos){#registra todos los formularios
                $resultado = array_keys($datos);
                $sql = "insert into ".$tabla."(".implode(',',$resultado).") values('".implode("','",$datos)."')";
                return db($sql);
            } 
    function datatime() {#carga la fecha y hora del sistema
        date_default_timezone_set('America/Panama');
                return date('Y-m-d H:i:s');
            }

?>