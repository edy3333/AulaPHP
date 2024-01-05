<?php
//ESCOPO DE VARIAVEIS//
//vou criar uma variavel e atribuir um valor ex.....
$nome = "Edy";
function exibeNome(){
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";
echo "<br>";
//se definir a variavel nome no escopo global nao vai dar certo
// é preciso digitar GLOBAL $Nome acima de echo 

//outro exemplo
//nao definir a variavel no escopo local 
// e sim no escpo global
function exibeCidade(){
    global $cidade;
    $cidade = "Aquidauana de Merda";
}
exibeCidade();
echo $cidade;
echo "<hr>";
echo "<br>";

//OUTRO EXEMPLO
$q = 10;
$a = 10;
$b = 10;
$c = 10;
function soma(){
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['C'] + $GLOBALS['q'];
    
}
soma();
echo "<hr>";
echo "<br>";




?>