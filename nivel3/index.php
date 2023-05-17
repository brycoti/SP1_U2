<?php

echo "<h2>Nivel 3</h2>";

function Eratostenes($numIndicado) {
    $listaNumeros = array();
    for ($i = 2; $i <= $numIndicado; $i++) {
        $listaNumeros[$i] = true;
    }

    for ($n = 2; $n <= $numIndicado; $n++) { 
        if ($listaNumeros[$n]) {
            for($i = $n * $n; $i <= $numIndicado; $i += $n){
                $listaNumeros[$i] = false; 
            }
        }
    }

    for ($i = 2; $i <= $numIndicado; $i++) {
        if($listaNumeros[$i]){
            echo $i . "<br>";
        }
    }
}

Eratostenes(20);
echo "<hr>";
Eratostenes(43);
?>