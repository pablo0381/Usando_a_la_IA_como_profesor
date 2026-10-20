<!DOCTYPE html>
<html>
        <head>
                <title>Calculadora de IVA</title>
        </head>
        <body>
	        <?php
require '../menu.php';
                ?>
<br>
                <?php
// Escribe una función llamada calcularPrecioFinal($precioBase, $porcentajeIva = 21) que:

// 1.Reciba el precio de un producto.
// 2.Reciba opcionalmente el porcentaje de IVA (con valor por defecto del 21%).
// 3.Retorne el precio final redondeado a 2 decimales usando round().

// Objetivo: Comprender el uso de parámetros opcionales/por defecto en funciones.

function calcularPrecioFinal($precioBase, $porcentajeIva = 21)
{
    // Calcula el valor del IVA
    $valor_iva = $precioBase * ($porcentajeIva / 100);
    $total = $precioBase + $valor_iva;

    // return: Devuelve el precio redondeado a 2 decimales
    return round($total, 2);
}
// El numero que defino es el del precio del producto al cual le quiero aplicar el 21% de IVA.
echo "Precio del producto con 21% IVA es: " . calcularPrecioFinal(60) . " euros <br>";
// En la funcion definimos en la variable "porcentajeIva" por defecto 21, cual equivale al 21% por ello no se pone nada anteriormente
// Para un % personalizado ponemos (Precio, %). Me ha parecido muy interesante y bueno el ejercicio.
echo "Precio del producto con IVA definido (10%): " . calcularPrecioFinal(60, 10) . " euros";
                ?>
        </body>
</html>
