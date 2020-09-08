<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padrotes</title>
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
            <h6 align="center">REGISTRO DE PADROTES</h6>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="color" placeholder="Color" required>
                </div>
                <select class="form-control" name="cuerno" required>
                    <option value="" hidden selected>Seleccione Cuerno</option>
                    
                </select><br>
                <div class="form-group">
                    <input type="text" class="form-control" name="proce" placeholder="Procedencia" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="raza" placeholder="Raza o Genetica" required>
                </div>
                <div class="form-group">
                    <input type="text" onfocus="(this.type='date')" class="form-control" name="fecha" placeholder="Fecha de compra o cambio" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="precio" placeholder="Precio" required onclick="mostrarToast()">
                </div>
                <button class="btn btn-primary btn-block "> Guardar</button>
            </form>
        </div>
    </div>
    <div class="col-md-3">></div>
</div>
    </div>
</body>
</html>