<!DOCTYPE html>
<html>
	<head>
		<title>Formateador de Nombres</title>
	</head>
	<body>
	        <?php
require '../menu.php';
                ?>
<br>
	        <?php
// Crea una función llamada formatearNombre($nombre, $apellido) que reciba dos cadenas. La función debe:

// 1.Eliminar los espacios en blanco sobrantes al inicio y al final (investiga la función trim()).
// 2.Convertir la primera letra de cada palabra a mayúscula y el resto a minúscula (ucfirst() o ucwords()).
// 3.Retornar el nombre completo formateado como: "Apellido, Nombre".

// Objetivo: Aprender a definir funciones con parámetros, retornar valores y usar funciones nativas de PHP para cadenas.

function formatearNombre($nombre, $apellido) {
//1ºPARTE: Gestionar Espacios
// trim: Elimina los espacios al inicio y al final
   $nombre_limpio = trim($nombre);
   $apellido_limpio = trim($apellido);

// 2ºPARTE: Gestionar Mayusculas y Minusculas
// ucwords: Convierte en mayuscula la primera letra de cada palabra
// strtolower: Convierte el de la cadena en minúscula
   $nombre_formateado = ucwords(strtolower($nombre_limpio));
   $apellido_formateado = ucwords(strtolower($apellido_limpio));

// return: Devuelve con el formato "Apellido, Nombre"
return "$apellido_formateado, $nombre_formateado";
}
echo "El nombre completo formateado es: ";
echo formatearNombre(" pABLo ", " MANzaneque ");
		?>
	</body>
</html>
