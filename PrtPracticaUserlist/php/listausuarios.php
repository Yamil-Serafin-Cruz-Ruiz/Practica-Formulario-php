<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lista de Usuarios</title>
</head>
<body>
    <div class="container-h">
        <Header>
            <h2>Lista de Registros</h2>
            <h3>Yamil Serafin Cruz Ruiz 3°C </h3>
        </Header>
    </div>

    <?php

    $nombre = $_POST['nomb'];
    $nombreus = $_POST['nombus'];
    $pass = $_POST['pss1'];
    $mail = $_POST['mail'];
    $edad = $_POST['edad'];
    
    ?>
    <div class="container-tbl">
        <table>
        <tr>
            <th>Nombre</th>
            <th>Nombre Usuario</th>
            <th>Correo Electronico</th>
            <th>Edad</th>
        </tr>
        <tr>
            <td> <?php echo($nombre) ?></td>
            <td> <?php echo($nombreus) ?></td>
            <td> <?php echo($mail) ?></td>
            <td> <?php echo($edad) ?></td>
        </tr>
    </div>

</body>
</html>