<?php
$nomeArquivo = 'frases.txt';

if (file_exists($nomeArquivo)) {
    $conteudo = file_get_contents($nomeArquivo);
    
    echo $conteudo; 
} else {
    echo "Arquivo não encontrado";
}
?>
