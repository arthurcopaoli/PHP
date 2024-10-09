<?php

$nomeArquivo = 'frases.txt';

$frases = [
    "Boa noite",
    "Boa tarde",
    "Boa noite"
];

$arquivo = fopen($nomeArquivo, 'w');

if ($arquivo) {
    foreach ($frases as $frase) {
        fwrite($arquivo, $frase . "\n");
    }
    
    fclose($arquivo);
    echo "Frases gravadas! $nomeArquivo.<br><br>";
} else {
    echo "Erro!<br><br>";
}
?>
