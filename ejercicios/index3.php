<!DOCTYPE html>
<html>
        <head>
                <title>Gestor de Inventario</title>
        </head>
        <body>
	        <?php
require '../menu.php';
                ?>
<br>
                <?php
//Crea un array asociativo con 3 productos. Cada producto debe tener nombre, precio y stock.
//Escribe un script que:

// 1.Recorra el array usando un bucle foreach.
// 2.Muestre el nombre y precio de cada producto.
// 3.Si el stock es 0, debe imprimir al lado: "(Agotado)".

//Objetivo: Dominar el bucle foreach con arrays asociativos y combinarlo con condicionales.
// Array proporcionado por el ejercicio:
$inventario = [
         ["nombre" => "Teclado", "precio" => 25, "stock" => 10],
         ["nombre" => "Ratón", "precio" => 15, "stock" => 0],
         ["nombre" => "Monitor", "precio" => 150, "stock" => 5],
    ];
// Bucle
foreach ($inventario as $producto) {
        echo $producto['nombre'] . ": " . $producto['precio'] . " euros";

// "===": Verifica si el stock es cero em el array a través del campo "stock", al ser así devuelve "agotado".
if ($producto['stock'] === 0) {
   echo " (Agotado)";
}

echo "<br>";
}
                ?>
        </body>
</html>
