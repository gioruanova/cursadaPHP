<?php

require_once('funcion_menu.php');

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
$lista_menu = getMenu($categoria);
$categorias = getCategoriasMenu();

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

<body>
    <style>
        .nuevoPrecio {
            color: green;
            font-weight: bold;
        }

        .precioViejo {
            text-decoration: line-through;
        }
    </style>

    <div class="container">

        <h1>Nuevo Desafio: Menu Categorias</h1>

        <form action="MenuNew.php" method="get">
            <div>
                <label for="categoria" class="form-label mt-2 mb-2">Categoria</label>

                <select name="categoria" id="categoria" class="form-control mt-2 mb-2">
                    <option value="null">Selecciona la categoria</option>

                    <?php foreach ($categorias as $cat): ?>
                        <option <?php if ($categoria == $cat): ?> selected <?php endif ?>value="<?php echo $cat ?>">
                            <?php echo $cat ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="mt-2 mb-2">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <a href="MenuNew.php" class="btn btn-danger">Limpiar</a>
            </div>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center"> Categoría </th>
                        <th class="text-center"> Nombre </th>
                        <th class="text-center"> Precio </th>
                    </tr>



                    <?php
                    foreach ($lista_menu as $comidas) {
                        echo "<tr>";
                        echo "<td class='text-center'> <img src='img/iconos/{$comidas['categoria']}.png' alt='{$comidas['categoria']}'> {$comidas['categoria']} </td>";
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
        </form>
    </div>
    </head>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>