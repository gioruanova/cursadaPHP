<?php

require_once('validador_input.php');

$nombre = test_input($_POST['nombre'] ?? null);
$email = test_input($_POST['email'] ?? null);
$sexo = test_input($_POST['sexo'] ?? null);
$aptitudes = $_POST['aptitudes'] ?? [];
$archivo = $_FILES['archivo'] ?? null;


$errores = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    // Se recibe la informacion del form completado por usuario
    if (empty($nombre)) {
        $errores[] = 'El nombre es mandatorio';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'El formato del E-Mail no es valido';
    }


    if (empty($sexo)) {
        $errores[] = 'Debe seleccionar al menos un sexo';
    }

    if (count($aptitudes) == 0) {
        $errores[] = 'Debe seleccionar al menos un servicio';
    }



    if (count($errores) > 0) {
        $errores[] = "Antes de subir el archivo debe completar todos los campos";
    } else {
        if (pathinfo($archivo['full_path'], PATHINFO_EXTENSION) == "docx" || pathinfo($archivo['full_path'], PATHINFO_EXTENSION) == "pdf") {
            $archivo_desde = $archivo['tmp_name'];
            $archivo_hacia = 'uploads/' . time() . $archivo['name'];
            move_uploaded_file($archivo_desde, $archivo_hacia);
        } else {
            $errores[] = 'El formato de archivo debe ser .DOCX o PDF unicamente';
        }
    }

    if (count($errores) == 0) {
        header('Location: 1b - Formulario_ok.php');
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

    <title>Formulario para Vacante laboral</title>
</head>

<body>

    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        #comentarios {
            resize: none;
        }
    </style>


    <form action="FormularioInicial.php" method="post" enctype="multipart/form-data">

        <div class="container">
            <h1>Formulario para Vacante laboral</h1>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li class="text text-danger">
                        <?php echo $error ?>
                    </li>
                <?php endforeach ?>
            </ul>

            <label for="nombre" class="form-label mt-3">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">

            <label for="email" class="form-label mt-3">Email: </label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $email ?>">



            <label for="sexo" class="form-label mt-3">Indique su sexo</label>

            <div class="form-check">
                <input <?php if ($sexo == "Masculino"): ?> checked <?php endif ?> class="form-check-input" type="radio"
                    name="sexo" id="Masculino" value="Masculino">
                <label class="form-check-label" for="sexo">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input <?php if ($sexo == "Femenino"): ?> checked <?php endif ?> class="form-check-input" type="radio"
                    name="sexo" id="femenino" value="Femenino">
                <label class="form-check-label" for="sexo">
                    Femenino
                </label>
            </div>

            <div class="form-check">
                <input <?php if ($sexo == "No Binario"): ?> checked <?php endif ?> class="form-check-input" type="radio"
                    name="sexo" id="no_Binario" value="No Binario">
                <label class="form-check-label" for="sexo">
                    No Binario
                </label>
            </div>









            <label for="aptitudes" class="form-label mt-3">Indique sus conocimientos: </label>

            <div class="form-check">
                <input <?php if (in_array('Cable', $aptitudes)): ?> checked <?php endif ?> name="aptitudes[]"
                    value="Cable" class="form-check-input" type="checkbox" value="" id="servicio-cable">
                <label class="form-check-label" fosr="servicio-cable">
                    HTML
                </label>
            </div>

            <div class="form-check">
                <input <?php if (in_array('css', $aptitudes)): ?> checked <?php endif ?> name="aptitudes[]" value="CSS"
                    class="form-check-input" type="checkbox" value="" id="servicio-css">
                <label class="form-check-label" for="servicio-css">
                    CSSS
                </label>
            </div>

            <div class="form-check">
                <input <?php if (in_array('Javascript', $aptitudes)): ?> checked <?php endif ?> name="aptitudes[]"
                    value="Javascript" class="form-check-input" type="checkbox" value="" id="servicio-javascript">
                <label class="form-check-label" for="servicio-javascript">
                    JAVASCRIPT
                </label>
            </div>

            <div class="form-check">
                <input <?php if (in_array('PHP', $aptitudes)): ?> checked <?php endif ?> name="aptitudes[]" value="PHP"
                    class="form-check-input" type="checkbox" value="" id="servicio-PHP">
                <label class="form-check-label" for="servicio-PHP">
                    PHP
                </label>
            </div>



            <label for="archivo" class="form-label mt-3">Adjunte su factura: </label>
            <input type="file" id="archivo" name="archivo" class="form-control">


            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            <a href="FormularioInicial.php" class="btn btn-secondary mt-2">Limpiar formulario</a>

        </div>



    </form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>