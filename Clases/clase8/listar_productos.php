<?php

// Importo el archivo
require_once('_conexion.php');
require_once('consultas/consultas_productos.php');
$productos = getProductos($conexion);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PHP Restaurant</title>

    <!-- ---IMPORT CSS--- -->
    <?php require('layouts/_css.php') ?>
    <!-- ---IMPORT CSS--- -->


</head>

<body class="sb-nav-fixed">

    <!-- ---IMPORT NAVBAR--- -->
    <?php require('layouts/_navbar.php') ?>
    <!-- ---IMPORT NAVBAR--- -->

    <div id="layoutSidenav">

        <!-- ---IMPORT SIDEBAR--- -->
        <?php require('layouts/_sidebar.php') ?>
        <!-- ---IMPORT SIDEBAR--- -->

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Lista de productos</h1>
                    <div class="row">
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Productos en base de datos
                        </div>
                        <div class="m-2">
                            <a href="guardar_producto.php">
                                <button type='submi' class='btn btn-primary'>Agregar producto</button>
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center"> Categoría </th>
                                    <th class="text-center"> Nombre </th>
                                    <th class="text-center"> Precio </th>
                                    <th class="text-center"> Descuento </th>
                                    <th class="text-center"> Descripcion</th>
                                    <th class="text-center"> Acciones </th>
                                </tr>
                                <?php foreach ($productos as $prod): ?>
                                    <tr>
                                        <td class='text-center align-middle'>
                                            <?php echo $prod['categoria'] ?>
                                        </td>
                                        <td class='text-center align-middle'>
                                            <?php echo $prod['nombre'] ?>
                                        </td>
                                        <td class='text-center align-middle'>
                                            <?php echo $prod['precio'] ?>
                                        </td>
                                        <td class='text-center align-middle'>
                                            <?php echo $prod['descuento'] ?>
                                        </td>
                                        <td class='text-center align-middle'>
                                            <?php echo $prod['descripcion'] ?>
                                        </td>
                                        <td class='text-center'>
                                            <a class='m-2 mt-0 mb-0'
                                                href="guardar_producto.php?id=<?php echo $prod['id'] ?>"><button
                                                    class='btn btn-primary'>Modificar</button></a>
                                            <a href="eliminar_producto.php?id=<?php echo $prod['id'] ?>" class='m-0'><button
                                                    class='btn btn-danger'>Eliminar</button></a>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <!-- ---IMPORT FOOTER--- -->
            <?php require('layouts/_footer.php') ?>
            <!-- ---IMPORT FOOTER--- -->

            <!-- ---IMPORT JS--- -->
            <?php require('layouts/_js.php') ?>
            <!-- ---IMPORT JS--- -->

        </div>
    </div>

</body>

</html>