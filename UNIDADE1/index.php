<?php
include_once("TEMPLATES/topo.php");
include_once("TEMPLATES/menu.php");

if (empty($_SERVER["QUERY_STRING"])) { 
    $var = "conteudo.php";
    include_once($var);
} else {
    $pg = $_GET['pg'];
    include_once("$pg.php");
}

include_once("TEMPLATES/rodape.php");