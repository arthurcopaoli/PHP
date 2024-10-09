<?php
function calcularTabuada($numero) {
    $resultado = "";
    for ($i = 1; $i <= 10; $i++) {
        $resultado .= "$i * $numero = " . ($i * $numero) . "<br>"; 
    }
    return $resultado;
}

if (isset($_POST['numero'])) {
    $numero = (int)$_POST['numero'];
    $arquivo = 'tabuada.txt';
    
    $tabuada = calcularTabuada($numero);
    
    file_put_contents($arquivo, $tabuada);
    
    echo "Tabuada do $numero foi calculada e salva em '$arquivo'.<br><br>";
    
    echo "<h2>Tabuada do $numero:</h2>"; 
    echo $tabuada; 
} else {
    echo "Nenhum númerofornecido.";
}
?>
