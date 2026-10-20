<!DOCTYPE html>
<html>
        <head>
                <title>Filtro de Aprobados</title>
        </head>
        <body>
               	<?php
require '../menu.php';
                ?>
<br>
                <?php
//Crea una función llamada obtenerAprobados($listaNotas) que reciba ese array y devuelva un nuevo array únicamente con los estudiantes que tengan una nota igual o mayor a 5.0.
//Objetivo: Manipular y filtrar arrays dentro de funciones.

function obtenerAprobados($listaNotas)
{
// variable que almacena un array vacío que va a guardar los estudiantes que cumplan los siguientes requisitos.
$aprobados = [];
// Bucle
foreach ($listaNotas as $estudiante => $nota) {
// Filtro por los que tengan nota de 5 o mayor de este.
        if ($nota >= 5.0) {
//  Si se cumple la confición, guarda en "aprobados" representado los valores que correspondan en el array nuevo
        $aprobados[$estudiante] = $nota;
}
}
   // return: Devuelve el array
    return $aprobados;
}
// Array proporcionado por el ejercicio:
$notas = [
    "Juan" => 8.5,
    "Maria" => 4.2,
    "Carlos" => 6.0,
    "Laura" => 3.8
];

$estudiantes_aprobados = obtenerAprobados($notas);

// "<pre>": Define etiquetas preformateadas para una visualización más estetica. Sacado de mis apuntes de ciberseguridad
echo "<pre>";
// print_r: Muetra una estructura básica del nuevo array y omite saltos de línea
print_r($estudiantes_aprobados);
echo "<pre>";
                ?>
        </body>
</html>
