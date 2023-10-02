<?php

session_start();

$user = $_SESSION['user'] ?? null;


if (is_null($user)) {
    header('Location: login.php');
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sesion iniciada</title>
</head>


<body>
    <!-- ----NAVBAR---- -->
    <?php require('layout/_nav.php') ?>
    <!-- ----NAVBAR---- -->

    <div class="container mt-5 pt-5">
        <h1>
            Hola
            <?php echo $user['nombre'] ?>
        </h1>
        <?php if ($user['rol'] == 'Postulante'): ?>
            <div>Estamos analizando tu perfil. Nos pondremos en cotnacto a la brevedad</div>
        <?php else: ?>
            <div>Gracias por trabajar con nosotros</div>
        <?php endif ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>