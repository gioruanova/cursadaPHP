<?php

require_once('funciones_input.php');

$nombre = test_input($_POST['nombre'] ?? null);
$email = test_input($_POST['email'] ?? null);
$edad = test_input($_POST['edad'] ?? null);
$servicios = $_POST['servicios'] ?? [];
$comentarios = $_POST['comentarios'] ?? null;
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

  $opciones_edad = array(
    'options' => array(
      'min_range' => 18,
      'max_range' => 100
    )
  );

  if (!filter_var($edad, FILTER_VALIDATE_INT, $opciones_edad)) {
    $errores[] = 'El valor minimo es 18 y el maximo 100';
  }

  if (count($servicios) == 0) {
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

  <title>Formulario</title>
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

    .edad {
      max-width: 100px;
    }
  </style>


  <form action="1 - Formularios.php" method="post" enctype="multipart/form-data">

    <div class="container">
      <h1>Formulario</h1>
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


      <label for="edad" class="form-label mt-3">Edad: </label>
      <input type="number" name="edad" id="edad" class="form-control edad" min="18" value="<?php echo $edad ?>">

      <label for="servicios" class="form-label mt-3">Servicios: </label>

      <div class="form-check">
        <input <?php if (in_array('Cable', $servicios)): ?> checked <?php endif ?> name="servicios[]" value="Cable"
          class="form-check-input" type="checkbox" value="" id="servicio-cable">
        <label class="form-check-label" fosr="servicio-cable">
          Cable
        </label>
      </div>

      <div class="form-check">
        <input <?php if (in_array('Internet', $servicios)): ?> checked <?php endif ?> name="servicios[]"
          value="Internet" class="form-check-input" type="checkbox" value="" id="servicio-internet">
        <label class="form-check-label" for="servicio-internet">
          Internet
        </label>
      </div>

      <div class="form-check">
        <input <?php if (in_array('Telefono', $servicios)): ?> checked <?php endif ?> name="servicios[]"
          value="Telefono" class="form-check-input" type="checkbox" value="" id="servicio-telefono">
        <label class="form-check-label" for="servicio-telefono">
          Telefono
        </label>
      </div>



      <label for="archivo" class="form-label mt-3">Adjunte su factura: </label>
      <input type="file" id="archivo" name="archivo" class="form-control">


      <label for="comentarios" class="form-label mt-3">Comentarios: </label>
      <textarea name="comentarios" id="comentarios" cols="30" rows="10" class="form-control"
        placeholder="Ingrese su comentario...">
        <?php echo $nombre ?>
      </textarea>


      <button type="submit" class="btn btn-primary mt-2">Enviar</button>
      <a href="1 - Formularios.php" class="btn btn-secondary mt-2">Limpiar formulario</a>

    </div>



  </form>











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>