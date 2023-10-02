<?php

session_start();
$user = $_SESSION['user'] ?? null;
$rolAFiltrar = $_GET['rol'] ?? null;

if (is_null($user) or $user['rol'] == 'Postulante') {
    header('Location: login.php');
}

require_once('funciones/funciones_Json.php');
require_once('funciones/funciones_usuarios.php');

$listadoUsuarios = obtenerUsuarios($rolAFiltrar);
$roles = rolesUsuarios();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Listas de usuarios</title>
</head>

<body>


    <!-- ----NAVBAR---- -->
    <?php require('layout/_nav.php') ?>
    <!-- ----NAVBAR---- -->


    <div class="container mt-5 pt-5">
        <h1>Listado de usuarios</h1>

        <form action="lista_usuarios.php" method="get">

            <label for="rol" class="form-label mt- mb-2">Filtrar por rol:</label>

            <select name="rol" id="rol" class="form-control mt-2 mb-2">
                <option value="null">Seleccion el rol a filtrar</option>

                <?php foreach ($roles as $rol): ?>
                    <option <?php if ($rolAFiltrar == $rol): ?> selected <?php endif ?>value="<?php echo $rol ?>">
                        <?php echo $rol ?>
                    </option>

                <?php endforeach; ?>


            </select>

            <button type="submit" class="btn btn-primary">Filtrar</button>
            <a href="lista_usuarios.php" class="btn btn-warning">Mostrar Todos</a>


            <table class="table table-bordered mt-3">

                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Rol</th>
                        <?php if ($user['rol'] == "Admin"): ?>
                            <th class="text-center">Acciones</th>
                        <?php endif ?>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($listadoUsuarios as $item): ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $item['nombre'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $item['email'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $item['rol'] ?>
                            </td>
                            <?php if ($user['rol'] == "Admin"): ?>
                                <td class="text-center">
                                    <button class="btn btn-danger" title="Eliminar usuario"><i class="bi bi-trash"></i></button>
                                    <?php if ($item['rol'] == "Postulante"): ?>
                                        <button class="btn btn-success">Contratar</i></button>
                                    <?php endif ?>
                                </td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
    </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>