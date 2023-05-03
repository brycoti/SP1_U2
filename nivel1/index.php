<?php
// Ejercicio 1

   $promocion = 2023; // num entero 
   var_dump($promocion);
   $nota = 5.05; // float
   var_dump($nota);
   $ciudad = "Barcelona"; // String
   var_dump($ciudad);
   $estudiante = true; // booleano
   var_dump($estudiante);

   echo " <br><br> Llevo estudiando programacion  desde el primer semestre de "
   . $promocion . " y espero que la nota media sea superior a " . $nota
   . ".<br> Estoy en el IT Academy, Bootcamp de BCN ACtiva ubicado en la ciudad de " . $ciudad 
   . ". Si me preguntan que soy estudiante de programacion de PHP, la respuesta es "
      . $estudiante . "! <br><br>"; 

   define("NOMBRECOMPLETO", "Bryan Cozar Titos"); // Const en PHP
   echo "Mi nombre y apellidos son: " . NOMBRECOMPLETO  . "<hr>";
?>

<?php
// Ejercicio 2 

   $holaMundo = "Hello, World!";
   $curso = "Aquest és el curs de PHP";

   echo strtoupper($holaMundo) . "<br>"; // funcion Echo que imprime  los caracteres en upperCase
   echo strlen($holaMundo) . "<br>"; // devuelve la cantidad de caracteres
   echo strrev($holaMundo) . "<br>"; // imprime una cadena al reves
   echo $holaMundo . " " . $curso . ". <hr>"; // imprime dos variables string
?>

<?php
// Ejercicio 3
// Declaracion y asignacion 
   $X = 100;
   $Y = 200;
   $N = 95.55;
   $M = 45.45;
// X y Y por pantalla
   echo "El valor de X es $X y el de Y es $Y . <br>";
   echo "La suma de X + Y = " . ($X + $Y) . "<br>";
   echo "La resta de X - Y = " . ($X - $Y) . "<br>";
   echo "El producto de X * Y = " . ($X * $Y) . "<br>";
   echo " El modulo de X % Y = " . ($X % $Y) . "<br><br>";
// N y M por panatalla
   echo "El valor de N es $N y el de M es $M . <br>";
   echo "La suma de N + M = " . ($N + $M) . "<br>";
   echo "La resta de N - M = " . ($N - $M) . "<br>";
   echo "El producto de N * M = " . ($N * $M) . "<br>";
   echo " El modulo de N % M = " . ($N % $M) . "<br><br>";
// Doble por pantalla
   $doble_x = $X * 2;
   $doble_y = $Y * 2;
   $doble_n = $N * 2;
   $doble_m = $M * 2;

//Suma de totes les variables
   $suma_total = $X + $Y + $N + $M;

//Producte de totes les variables
   $producto_total = $X * $Y * $N * $M;

//Mostra el resultat final
   echo "Doble de X: " . $doble_x . "<br>";
   echo "Doble de Y: " . $doble_y . "<br>";
   echo "Doble de N: " . $doble_n . "<br>";
   echo "Doble de M: " . $doble_m . "<br>";
   echo "Suma total de X + Y + N + M = " . $suma_total . "<br>";
   echo "Producte total de X + Y + N + M = " . $producto_total . "<br><br>";
?>

<h2>Calculadora</h2>
<form method="post" action="">
   <!-- post envia datos y action vacio para funcione en la misma pagina  -->
	<label for="num1">Número 1:</label>
	<input type="number" name="num1" id="num1" required><br>
	<label for="num2">Número 2:</label>
	<input type="number" name="num2" id="num2" required><br>
   <!-- el label es para dar una etiqueta y saber el tipo de dato que se introduce en el input,
   el for permite asociar la etiqueta con el id del elemento input
       necesitamos crear dos input de tipo numerico y
      asociarlos a un name e id para que el script PHP reciba su valor para $num1 y $num2-->
	<br>

   <!-- El select permite crear un desplegable con opciones con el tipo de operador aritmetico-->
       <label for="operacion">Operación:</label>
	<select name="operacion" id="operacion" required>
		<option value="+">Suma</option>
		<option value="-">Resta</option>
		<option value="*">Multiplicación</option>
		<option value="/">División</option>
	</select><br>
	<input type="submit" name="calcular" value="Calcular">
   <!-- el boton envia los datos al script PHP,
    y este llama a la funcion calculadora recogiendo los inputs como parametros-->
</form>

<?php
function calculadora($num1, $num2, $operacion) {
	switch ($operacion) {
		case '+':
			return $num1 + $num2;
			break;
		case '-':
			return $num1 - $num2;
			break;
		case '*':
			return $num1 * $num2;
			break;
		case '/':
			if ($num2 == 0) {
				return "Error: división por cero";
			} else {
				return $num1 / $num2;
			}
			break;
	}
}
// usamos un switch para determinar el case recogido desde el menu desplegable y hacer la operacion aritmetica

/* la funcion isset() comprueba si el boton se ha pulsado como condifion de if,
 Si es asi procede a realizar la operacion de los datos recogidos con el metodo POST del formulario HTML. 
 Los datos los hemos guardados en las variables que tienen de valor en una array asociativa;
donde el nombre del campo del form es la clave y el valor introducido por el user es el valor correspondiente. 
 */
if (isset($_POST['calcular'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacion = $_POST['operacion'];

	$resultado = calculadora($num1, $num2, $operacion);
// la se imprime la variable $resultado para representar el resultado de la funcion calculadora()
	echo "El resultado es: $resultado";
}
?>
<hr>


<form method="post" action="">
		<label for="maximo">Número máximo:</label>
		<input type="number" name="maximo" id="maximo"><br>
		<label for="incremento">Incremento:</label>
		<input type="number" name="incremento" id="incremento" required><br>
		<input type="submit" name="contar" value="Contar">
	</form>

<?php

function contar($maximo, $incremento) {
   for ($i = 1; $i <= $maximo; $i += $incremento) {
       echo "$i<br>";
   }
}

if (isset($_POST['contar'])) {
   if (!empty($_POST['maximo'])) {
      $maximo = $_POST['maximo'];
   } else {
      $maximo = 10;
   }
   
    $incremento = $_POST['incremento'];
   contar($maximo, $incremento);
}

?>

<h2>Ejercicio 5</h2>

<form   method="post" action="">
    <label for="nota">Nota del estudiente:</label>
    <input type="text" name="nota" id="nota"><br><br>
    <button type="submit" name="enviar">Enviar notas</button>
</form>




<?php

if (isset($_POST['enviar'])) {
    $nota = $_POST['nota'];
  echo  verificarNota($nota);
 }


function verificarNota($nota) {
    if ($nota >= 60) {
            $resultado = "Primera división";
        } elseif ($nota >= 45 && $nota <=59) {
            $resultado = "Segunda división";
        } elseif ($nota >= 33 && $nota <=44) {
            $resultado = "Tercera división";
        } else {
            $resultado = "Suspenso";
        }

        return $resultado;
}
?>
<br><br><hr>
<h2>Ejercicio 6</h2>


<?php 


echo isBitten();


function isBitten() {
   echo  "Mi suerte ha sido del "  . $suerte = rand(1, 100) . "% <br>";

    if ($suerte >=51) {
        $opcion = "TRUE";
    } else {
        $opcion = "FALSE";
    }

    return $opcion;
}


?>
 