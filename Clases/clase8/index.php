<?php

// Importo el archivo
require_once('_conexion.php');

// preparo la consulta
$consulta = $conexion->prepare('SELECT nombre, precio, descuento, categoria FROM productos');

// ejecuto consulta
$consulta->execute();

// recupero la lista
$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);



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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .nuevoPrecio {
            color: green;
            font-weight: bold;
        }

        .precioViejo {
            text-decoration: line-through;
        }
    </style>
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center"> Categoría </th>
                                    <th class="text-center"> Nombre </th>
                                    <th class="text-center"> Precio </th>
                                </tr>
                                <?php
                                foreach ($productos as $comidas) {
                                    echo "<tr>";
                                    echo "<td class='text-center'> <img src='img/iconos/{$comidas['categoria']}.png' alt=''> {$comidas['categoria']} </td>";
                                    echo "<td class='text-center'> {$comidas['nombre']} </td>";
                                    if ($comidas['descuento'] == 0) {
                                        echo "<td class='text-center'> $ {$comidas['precio']} </td>";
                                    } else {
                                        echo "<td class='text-center'><span class='nuevoPrecio'>$" . ($comidas['precio'] - $comidas['descuento']) . "</span> <span class='precioViejo'>$" . ($comidas['precio']) . "</span> </td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <!-- ---IMPORT FPPTER--- -->
            <?php require('layouts/_footer.php') ?>
            <!-- ---IMPORT FPPTER--- -->

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>