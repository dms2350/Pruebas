<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Nacimientos</title>
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
                <h6 align="center">REGISTRO DE NACIMIENTOS</h6>
            </div>
            <form action="" method="POST">

                <select class="form-control" name="padre" required>
                    <option value="" hidden selected>Seleccione el padre</option>
                    
                </select><br>

                <select class="form-control" name="madre" required>
                    <option value="" hidden selected>Selecciones la madre</option>
                    
                </select><br>
                <select class="form-control" name="sexo" required>
                    <option value="" hidden selected>Seleccione sexo</option>
                    
                    
                </select><br>
                <div class="form-group">
                    <input type="text" onfocus="(this.type='date')"  class="form-control" name="fecha" placeholder="Fecha de nacimiento" required>
                </div>
                <select class="form-control" name="lote" required>
                    <option value="" hidden selected>Seleccione el lote</option>
                    
                </select><br>
                <button type="submit" name="submit" class="btn btn-primary btn-block"> Guardar</button>
            </form>

        </div>
    </div>
    <div class="col-md-3"></div>
</div>
    </div>
</body>
</html>