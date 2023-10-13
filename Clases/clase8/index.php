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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante > SQL</title>
    <style>
        .nuevoPrecio {
            color: green;
            font-weight: bold;
        }

        .precioViejo {
            text-decoration: line-through;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>



    <!-- ----NAVBAR---- -->

    <!-- ----NAVBAR---- -->



    <div class="container mt-5 pt-5">
        <h1 class="text text-center"> Menú </h1>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
</body>

</html>