<?php $titulo = 'Bienvenido a mi web';?>
<?php $validacion=true;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezclar HTML con PHP</title>
</head>
<body>

<h1>
<?php echo $titulo; ?></h1>

<?php if($validacion): ?>
    <div> Bienvenido usuario </div>
    <?php else: ?>
   <div> Loguearse para comenzar</div>
    <?php endif ?>
</body>
</html>