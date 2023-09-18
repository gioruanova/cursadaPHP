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
</head>

<body>
    <div class="container">
        <h1>Consultar tabla</h1>

        <!-- ENVIAR VARIABLE A TRAVES DEL LINK -->
        <ul>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <li>
                    <a href="1C- Tabla_Resultado.php?numero=<?php echo $i ?>">Ver tabla del
                        <?php echo $i ?>
                    </a>
                </li>
            <?php endfor ?>

        </ul>
        

        <form action="1C- Tabla_Resultado.php" method="get">
            <input type="number" class="form-control" name="" id="">
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



</body>

</html>