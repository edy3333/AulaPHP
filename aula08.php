<?php
//---ARRAYS #2---\\

$casas[] = "grande";
print_r($casa);
echo "<br>";

$casas = array();
$casas[] = "Grande";
$casas[] = "Media";
$casas [2] = "Pequena";
//print_r ($casas);
echo $casas[2];
echo "<br>";

$clientes = ["Edy", "Regys", "Fatima"];
print_r($clientes);

//COUNT\\
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";
echo "<br>";

//FOREACH\\
foreach($casas as $valor){
// foreach quer dizer "para cada elemento da variavel $casa vai ser atribuido um valor"
echo $valor. "<br>";
};
?>