<?php

$username = filter_input(input_post,'username',FILTER_SANITIZE_STRING);
$date = filter_input(input_post,'date',FILTER_SANITIZE_DATE);
$opcao = filter_input(input_post,'opcao',FILTER_SANITIZE_STRING);
$telefone = filter_input(input_post,'telefone',FILTER_SANITIZE_STRING);
$pedidoparcial = filter_input(input_post,'pedidoparcial',FILTER_SANITIZE_STRING);
$pedidototal = filter_input(input_post,'pedidototal',FILTER_SANITIZE_STRING);
$notafiscal = filter_input(input_post,'notafiscal',FILTER_SANITIZE_STRING);




echo "NOME: $username<BR></BR>";
echo "data: $date;<BR><BR>";

?>