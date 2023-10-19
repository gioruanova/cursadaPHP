<?php


require_once('_conexion.php');
require_once('consultas/consultas_productos.php');
require_once('funciones/funciones_input.php');


if (isset($_GET['id'])) {
    $producto = getProductoById($conexion, $_GET['id']);
} else {
    $producto = [
        'id' => test_input($_POST['id'] ?? null),
        'nombre' => test_input($_POST['nombre'] ?? null),
        'precio' => test_input($_POST['precio'] ?? null),
        'descuento' => test_input($_POST['descuento'] ?? null),
        'categoria' => test_input($_POST['categoria'] ?? null),
        'descripcion' => test_input($_POST['descripcion'] ?? null),
    ];
}



$errores = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

    $errores = validarProductos($producto);


    if (count($errores) == 0) {

        if (empty($producto['id'])) {
            addProducto($conexion, $producto);

        } else {
            updateProducto($conexion, $producto);
        }
        header('Location: listar_productos.php');

    }
}
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
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                <!-- ---IMPORT SIDEBAR--- -->
                <?php require('layouts/_sidebar.php') ?>
                <!-- ---IMPORT SIDEBAR--- -->

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Agregar/Modificar/Borrar productos</h1>
                    <div class="row">

                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Productos en base de datos
                        </div>
                        <ul class="mt-3">
                            <?php foreach ($errores as $error): ?>
                                <li class="text text-danger">
                                    <?php echo $error ?>
                                </li>
                            <?php endforeach ?>
                        </ul>

                        <div class="card-body">

                            <form action="guardar_producto.php" method="post">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre"
                                        placeholder="Ingrese un nombre para el producto"
                                        value="<?php echo $producto['nombre'] ?>" />
                                </div>

                                <div class=" mb-3">
                                    <label for="precio" class="form-label">Precio:</label>
                                    <input type="number" name="precio" class="form-control" id="precio"
                                        placeholder="Ingrese un precio para el producto"
                                        value="<?php echo $producto['precio'] ?>" />
                                </div>

                                <div class="mb-3">
                                    <label for="descuento" class="form-label">Descuento:</label>
                                    <input type="number" class="form-control" id="descuento" name="descuento"
                                        placeholder="Ingrese un descuento para el producto"
                                        value="<?php echo $producto['descuento'] ?>" />
                                </div>

                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoria:</label>
                                    <input type="text" class="form-control" id="categoria" name="categoria"
                                        placeholder="Ingrese una categoria para el producto"
                                        value="<?php echo $producto['categoria'] ?>" />
                                </div>

                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripcion:</label>
                                    <textarea cols="1" rows="3" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripcion para el producto"><?php echo $producto['descripcion'] ?></textarea>

                                </div>
                                <div>
                                    <input type="hidden" name="id" id="id" value="<?php echo $producto['id'] ?>" />
                                </div>

                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a href="listar_productos.php"><button type='button'
                                        class='btn btn-danger m-2'>Cancelar</button></a>
                            </form>

                        </div>
                    </div>
                </div>
            </main>


            <!-- ---IMPORT FOOTER--- -->
            <?php require('layouts/_footer.php') ?>
            <!-- ---IMPORT FOOTER--- -->

        </div>
    </div>
    <!-- ---IMPORT JS--- -->
    <?php require('layouts/_js.php') ?>
    <!-- ---IMPORT JS--- -->
</body>

</html>