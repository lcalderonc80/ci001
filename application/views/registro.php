<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Registro
    <ul>
    <?php foreach ($menu as $key => $value): ?>
        <li><a href="<?php echo $value["url"]; ?>"><?php echo $value["titulo"]; ?></a></li>
    <?php endforeach ?>
    </ul>
    <form action="registro/guardar" method="POST">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>