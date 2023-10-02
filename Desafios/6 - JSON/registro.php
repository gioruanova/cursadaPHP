<?php

require_once('funciones/validador_input.php');
require_once('funciones/funciones_Json.php');

$nombre = test_input($_POST['nombre'] ?? null);
$email = test_input($_POST['email'] ?? null);
$password = test_input($_POST['password'] ?? null);
$archivo = $_FILES['archivo'] ?? null;



$errores = [];



if ($_SERVER['REQUEST_METHOD'] == 'POST') { {

        // Valida el nombre del postulante
        if (empty($nombre)) {
            $errores[] = 'El nombre es mandatorio';
        }

        // Valida el email del postulante
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El formato del E-Mail no es valido';
        }

        // Valida la contraseña del postulante
        if (empty($password)) {
            $errores[] = 'Debe generar una contraseña';
        }

        // Validar si hay error en la subida de archivo
        if ($archivo['error'] > 0) {
            $errores[] = 'Usted debe subir un archivo';
        }

        // Paso previo a procesar subida. Validar archivo
        if ($archivo['error'] == 0) {

            $pathInfo = pathinfo($archivo['name']); // tomo el path
            $extension = $pathInfo['extension']; // tomo la extension
            $extensiones_validas = ['txt', 'docx', 'pdf']; // genero array con formatos validos

            if (!in_array($extension, $extensiones_validas)) { // Valido el archivo dentro del array
                $errores[] = 'El formato del archivo debe ser txt o docx';

            }
        }

        if (count($errores) == 0) {
            $archivo_desde = $archivo['tmp_name'];
            $archivo_hacia = 'cvs/' . time() . $archivo['name'];
            move_uploaded_file($archivo_desde, $archivo_hacia);
            echo 'Archivo validado correctamente';

            $usuario_nuevo = [
                'id' => time() . rand(1000000, 9999999),
                'nombre' => $nombre,
                'email' => $email,
                'password' => $password,
                'archivo' => $archivo_hacia,
                'rol' => 'Postulante'
            ];
            addItemJson('data/usuarios.json', $usuario_nuevo);

            header('Location: solicitud-procesada.php');
        }

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

    <title>Registro postulante</title>
</head>

<body>

    <div class="container">
        <h1>Postulante</h1>

        <ul>
            <?php foreach ($errores as $error): ?>
                <li class="text text-danger">
                    <?php echo $error ?>
                </li>
            <?php endforeach ?>
        </ul>

        <form action="registro.php" method="post" enctype="multipart/form-data">

            <label for="nombre" class="form-label mt-3">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">

            <label for="email" class="form-label mt-3">Email: </label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $email ?>">

            <label for="password" class="form-label mt-3">Password: </label>
            <input type="password" id="password" name="password" class="form-control" value="<?php echo $password ?>">


            <label for="archivo" class="form-label mt-3">Adjunte su factura: </label>
            <input type="file" id="archivo" name="archivo" class="form-control">

            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            <a href="registro.php" class="btn btn-secondary mt-2">Limpiar formulario</a>
            <a href="login.php" class="btn btn-danger mt-2">Volver</a>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>