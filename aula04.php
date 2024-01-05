<?php
//TIPOS DE DADOS NO PHP
/**********ESCALARES ********/
//string > Uma sequencia de caracteres

// se eu apagar o > ola mundo deixa de ser string
//$nome = "OLÁ MUNDO"; 

$nome = 123; //nao se pode ter string com numeros a nao ser que esteja "entre as aspas"
//esta é uma variavel nome do tipo string
var_dump($nome); // esta é uma função que mostra informações sobre uma variavel
echo "<br>";
echo "<hr>";

//UMA FUNÇÃO QUE VALIDA O TIPO DE DADO
if(is_string($nome)):
    echo "esta é uma string";
else:   
    echo "não é uma string";
endif;
echo "<br>";
echo "<hr>";

//OUTRO EXEMPLO....Int.

$idade = 28;
var_dump($idade);
if(is_int($idade)):
      echo "é um inteiro";
      echo "<br>";
      echo "<hr>";
else:
    echo "não é um inteiro";
endif;
        echo "<br>";
        echo "<br>";

        //FLOAT

$salario = 5.000;
var_dump($salario);
if(is_float($salario)):
    echo "isso é float";
else:
    echo "isso não é float";
    echo "<hr>";
endif;
    echo "<br>";
    echo "<hr>";

    //BOLEAN > que só representa dois estados possiveis que é true ou false

$soma = true;
var_dump($soma);
if(is_bool($soma)):
    echo "ta chovendo";
else:
    echo "nao ta chovendo";
endif;
      echo "<hr>";

      //false
$ta_chovendo = false;
var_dump($ta_chovendo);
if(is_bool($ta_chovendo)):
    echo "sim, está chovendo";
    echo "<br>";
else:
    echo "não,não está chovendo";
endif;
         echo "<hr>";
         echo "<br>";
         echo "<br>";


/*********COMPOSTOS ********/
//array> como uma variavel que armazena varios valores

$carros = array("Hilux", "Uno", "Gol", "Camaro", "Ferrari", 12,20.30, true);
var_dump($caroos);
if(is_array($carros)):
    echo "poisé";
else:
    echo "Mas não";
endif;
echo "<hr>";
echo "<br>";
echo"<br>";

//     object   //
class Cliente {
    public $nome;
    public function atribuirNome($nome){
      $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente ->atribuirNome("Edy");
var_dump($cliente);

if(is_object($cliente)):
    echo "é um obejto";
else:
    echo "não é um objeto";
endif;
echo "<hr>";
echo "<br>";
echo "<br>";

/*********ESPECIAIS*********/
//NULL
$cidade = NULL;
var_dump($cidade);

//RESOURCE=>um tipo de dado que faz referencias a recursos externos.





        




?>