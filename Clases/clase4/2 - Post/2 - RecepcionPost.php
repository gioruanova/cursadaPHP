<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
setcookie('testeo','esp',time()+3600,'/');

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Envio Formulario</h1>
    <div class="">

        <div>
            <span>Su usuario es: <?php echo $usuario ?> </span>
            <br>
            <span>Su contraseña es: <?php echo $password ?></span>
            <br>
            <a href="1 - EnvioPost.php">Volver</a>
        </div>
        </dvi>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


</body>

</html>