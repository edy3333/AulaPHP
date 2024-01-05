<?php
// ARRAYS #1 //

/* Não podemos armazenar um estacionamento criando variavel para cada carro 
Criando um ARRAY isso se torna o modo mais facil de armazenamento.
Exemplo abaixo... */
$carro = array(1=>"bmw", 2=>"gol", 3=>"Hilux" );
// Se eu usa "echo" vai dar um erro , entao temos uma variavel especifica para isso

//print_r($carros);
$carros[] = "Amarok";
print_r($carros);
echo "<br>";
$motos = array();
$motos[] = "yamarra";
$motos[] = "Harley";
$moto [2] = "Honda";
//print_r ($motos);
echo $moto[2];
echo "<br>";

$clientes = ["Edy", "Sofia", "Maria"];
print_r($clientes);






?>