<?php

session_start();


require_once('funciones/validador_input.php');
require_once('funciones/funciones_Json.php');

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $email = test_input($_POST['email'] ?? null);
    $password = test_input($_POST['password'] ?? null);

    $usuarios = getJson('data/usuarios.json');

    $i = 0;
    $user = null;
    while ($i < count($usuarios) && is_null($user)) {
        if ($usuarios[$i]['email'] == $email && $usuarios[$i]['password'] == $password) {
            $user = $usuarios[$i];
        }
        $i++;
    }
    if ($user) {

        $_SESSION['user'] = [
            'id_user' => $user['id'],
            'nombre' => $user['nombre'],
            'rol' => $user['rol'],

        ];

        header('Location: index.php');



    } else {
        $error = "Los datos ingresados son erroneos";
    }

}
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Iniciar sesion</title>
</head>

<body>

    <div class="container mt-3">
        <h1>Iniciar sesion</h1>

        <?php if ($error): ?>
            <div class="alert alert-danger">
                <?php echo $error ?>
            </div>
        <?php endif ?>

        <form action="" method="post">
            <label for="email" class="form-label mt-3">Email: </label>
            <input type="email" id="email" name="email" class="form-control">

            <label for="password" class="form-label mt-3">Password: </label>
            <input type="password" id="password" name="password" class="form-control">

            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary mt-2">Log in</button>
                <a class="ms-3" href="registro.php">Quiero postularme</a>
            </div>
    </div>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>