<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Last</th>
              <th scope="col">Nombre</th>
              <th scope="col">Cantidad</th>
              <th scope="col"><a class="btn btn-success btn-block" href="operacion/nuevo" role="button">Nuevo</a></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($libros as $indice => $libro) { ?>
              <tr>
                <th scope="row"><?php echo ++$indice; ?></th>
                <td><?php echo $libro->titulo; ?></td>
                <td><?php echo $libro->isbn; ?></td>
                <td><?php echo $libro->autor; ?></td>
                <td><?php echo $libro->cantidad; ?></td>
                <td>
                  <button type="button" class="btn btn-primary w-180" style="width:40%">Editar</button>
                  <a class="btn btn-danger" href="operacion/eliminar/<?php echo $libro->id; ?>" role="button">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>