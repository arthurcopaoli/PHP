<?php

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$vendas = $_POST['vendas'];

$comissao = (4 / 100) * $vendas;
$salario_total = $salario + $comissao;

echo"O funcionário(a) $nome, recebeu uma comissão de R$$comissao e o seu salário total é de R$$salario_total";

?>