<?php
echo "<h1>Ejercicio 1</h1>";
function calcular_cost_trucada($durada_trucada) {
    if ($durada_trucada <= 3) {
        $cost = 0.10 * $durada_trucada;} else {
            $cost = 0.30 + (0.05 * ($durada_trucada - 3));
        }

 
    return number_format($cost, 2, '.', '');
}
echo(calcular_cost_trucada(3)) . "<br>";
echo(calcular_cost_trucada(4));


echo "<h1>Ejercicio 2</h1>";

$GLOBALS['total'] = 0;

$chocolatePrecio = 1;
$chiclesPrecio = 0.50;
$caramelosPrecio = 1.50;

function calcularSubtotal  ($cantidad, $precio) {
    $subtotal = $cantidad * $precio;
    $GLOBALS['total'] += $subtotal;
}

calcularSubtotal(2,$chocolatePrecio);
calcularSubtotal(1,$chiclesPrecio);
calcularSubtotal(1,$caramelosPrecio);

echo $GLOBALS['total'];
?>