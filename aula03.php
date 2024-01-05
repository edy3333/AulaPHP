<?php
//VARIAVEIS DINAMICAS NO PHP (variaveis variaveis)

$bebida = "refrigerante"; //criamos uma variavel chamada bebida

// e logo em baixo vamos criar uma variavel variavel 

// acabei de criar uma variavel que o nome dessa variavel é o valor da variavel $bebida e posso dizer que o valor da variavel $bebida é igual a variavel "refrigerante"
$$bebida = "guaraná";
//o nome desta variavel é o valor da variavel $bebida

echo $refrigerante;
echo "<br>";
echo "<hr>";

// OUTRO EXEMPLO......

$destino = "cidade";
$$destino = "Aquidauana";
echo $destino;
echo "<br>";
// se eu atribuir a variavel 
echo $cidade //exibirá.....//tudo será como uma troca...







?>