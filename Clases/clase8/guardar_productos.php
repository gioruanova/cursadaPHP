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
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>

                                <div class="mb-3">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="precio">
                                </div>

                                <div class="mb-3">
                                    <label for="descuento" class="form-label">Descuento</label>
                                    <input type="number" class="form-control" id="descuento">
                                </div>

                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoria</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>Seleccionar categoria</option>
                                        <option value="Pizzas">Pizzas</option>
                                        <option value="Ensaladas">Ensaladas</option>
                                        <option value="Hamburguesas">Hamburguesas</option>
                                        <option value="Bebidas">Bebidas</option>
                                        <option value="Postres">Postres</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripcion</label>
                                    <textarea type="text" class="form-control" id="descripcion"></textarea>
                                </div>

                                <button type="button" class="btn btn-success">Guardar</button>


                            </form>


                        </div>
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