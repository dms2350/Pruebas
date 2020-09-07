<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotes</title>
</head>
<body>
<?php
    include 'menu.php';
?>

<div class="container-fluid p-4">
<div class="row">

<div class="col-md-3"></div>


<div class="col-md-3">

<div class="card card-body">
    <div class="alert alert-primary" role="alert">
        <h6 align="center">REGISTRO DE LOTES NUEVOS</h6>
    </div>
    <form action="lotes.php" method="POST">

        <div class="form-group">
            <input type="text" class="form-control" name="finca" placeholder="Nombre de la finca" required onclick="mostrarToast()">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="estado" placeholder="Estado de la finca" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="respon" placeholder="Responsable de la finca" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="direccion" placeholder="Direccion de la finca" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="message()"> Guardar</button>

    </form>
</div>

</div>
</div>
<?php
    include '../funciones/fun.php';
        if(isset($_POST['submit'])){
            $campos = array("nombre"=>$_POST['finca'],"estado"=>$_POST['estado'],"responsable"=>$_POST['respon'],"direccion"=>$_POST['direccion']);
            $tabla = "lote_ganado";
            $guardar = insertar($tabla,$campos);

            if($guardar){
                echo "<script>alert('Registrado');</script>";
            }
            else{
                echo "No registrado";
            }
            
        }
    
    ?>
</body>
</html>