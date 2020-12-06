<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Mysql Php</title>
  </head>
  <body>
<?php include_once 'app.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <?php foreach($result as $data): ?>
                    
                    <div class="alert alert-<?php echo $data['color'] ?> text-uppercase" role="alert">
                        
                        <?php echo $data['id'] ?>
                        -
                        <?php echo $data['color'] ?>
                        -
                        <?php echo $data['descripcion'] ?>

                        <a href="delete.php?id=<?php echo $data['id'] ?>" class="float-right"><i class="fas fa-trash-alt ml-3"></i></a>
                        <a href="index.php?id=<?php echo $data['id'] ?>" class="float-right"><i class="fas fa-pencil-alt"></i></a>
                    </div>

                <?php endforeach ?>
            </div>

            <div class="col-md-6">
                <?php if(!$_GET): ?>
                    <h2>AGREGAR ELEMENTOS</h2>
                    <form method="POST">
                        <input type="text" name="color" class="form-control">
                        <input type="text" name="descripcion" class="form-control mt-3">
                        <button class="btn btn-primary mt-3">Agregar</button>
                    </form>
                <?php endif ?>

                <?php if($_GET): ?>
                    <h2>EDITAR ELEMENTOS</h2>
                    <form action="edit.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $result_edit['id'] ?>">
                        <input type="text" name="color" class="form-control" value="<?php echo $result_edit['color'] ?>">
                        <input type="text" name="descripcion" class="form-control mt-3" value="<?php echo $result_edit['descripcion'] ?>">
                        <button class="btn btn-primary mt-3">Guardar</button>
                    </form>
                <?php endif ?>
            </div>

        </div>
    </div>

    <script src="https://kit.fontawesome.com/001e4f22f5.js" crossorigin="anonymous"></script>
  </body>
</html>