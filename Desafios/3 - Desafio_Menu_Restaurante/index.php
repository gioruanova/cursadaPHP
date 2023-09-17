<?php 
$lista_menu = [
    ['codigo' => 1, 'nombre' => 'Pizza con jamón y huevo', 'categoria' => 'Pizzas', 'precio' => 2000, 'descuento' => 0],
    ['codigo' => 2, 'nombre' => 'Pizza napolitana', 'categoria' => 'Pizzas', 'precio' => 2500, 'descuento' => 0],
    ['codigo' => 3, 'nombre' => 'Pizza caprese', 'categoria' => 'Pizzas', 'precio' => 2700, 'descuento' => 500],
    ['codigo' => 4, 'nombre' => 'Ensalada caesar', 'categoria' => 'Ensaladas', 'precio' => 800, 'descuento' => 0],
    ['codigo' => 5, 'nombre' => 'Ensalada rusa', 'categoria' => 'Ensaladas', 'precio' => 500, 'descuento' => 0],
    ['codigo' => 6, 'nombre' => 'Hamburguesa simple', 'categoria' => 'Hamburguesas', 'precio' => 900, 'descuento' => 0],
    ['codigo' => 7, 'nombre' => 'Hamburguesa completa', 'categoria' => 'Hamburguesas', 'precio' => 1700, 'descuento' => 400],
    ['codigo' => 8, 'nombre' => 'Coca cola', 'categoria' => 'Bebidas', 'precio' => 300, 'descuento' => 0],
    ['codigo' => 9, 'nombre' => 'Fanta', 'categoria' => 'Bebidas', 'precio' => 300, 'descuento' => 20],
    ['codigo' => 10, 'nombre' => 'Agua mineral', 'categoria' => 'Bebidas', 'precio' => 150, 'descuento' => 0],
    ['codigo' => 11, 'nombre' => 'Helado', 'categoria' => 'Postres', 'precio' => 550, 'descuento' => 50],
    ['codigo' => 12, 'nombre' => 'Flan casero', 'categoria' => 'Postres', 'precio' => 400, 'descuento' => 0],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Menu Restaurante</title>
    <style>
        .nuevoPrecio {
            color: green;
            font-weight: bold;
        }

        .precioViejo{
            text-decoration: line-through;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

  <div class="container">
        <h1 class="text text-center"> Menú </h1>
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
                        echo "<td class='text-center'> <img src='img/iconos/{$comidas['categoria']}.png' alt=''> {$comidas['categoria']} </td>";
                        echo "<td class='text-center'> {$comidas['nombre']} </td>";
                        
                        if($comidas['descuento'] == 0) {
                        echo "<td class='text-center'> $ {$comidas['precio']} </td>";    
                        } else {
                            
                            echo "<td class='text-center'><span class='nuevoPrecio'>$". ($comidas['precio'] - $comidas['descuento'])."</span> <span class='precioViejo'>$". ($comidas['precio']) ."</span> </td>";

                        }
                        
                        echo "</tr>";
                    }
                ?>
                
                
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>

