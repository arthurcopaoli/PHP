<?php

$b_menor = $_POST['b_menor'];
$b_maior = $_POST['b_maior'];
$altura = $_POST['altura'];

$area_trapezio = (($b_maior + $b_menor) / 2) * $altura;

echo"A área do trapézio é de $area_trapezio m2";

?>