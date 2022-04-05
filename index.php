<?php

require_once("pessoa.class.php");

$pessoa = new pessoa();
$pessoa->setNome("Maria Eduarda Matos Moreira");
echo $pessoa->getNome();

?>