<?php
//--ARRAYS #3--//

//arrays associativos > é quando os índice ou a chave são strings
//EX...
$pessoa = array("nome"=> "Edy","Idade" => 28 , "altura"=> 1.56);
$pessoa["cidade"] = "Aquidauna";
print_r($pessoa);
echo "<br>";
echo "<hr>";

echo $pessoa["nome"];
echo "<br>";
echo $pessoa["Idade"];
echo "<br>";
echo $pessoa["altura"];
echo "<br>";
echo "<hr>";  

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor. "<br>;";
};
echo "<br>";
echo "<hr>";

//Arrays multidimensionais > é um array que contém um ou mais arrays
//EX....
$hardware = array("placa mae" => array("processador"=> "bateria Mcos" , "ssd", "ventoinha"),
"pasta termica" => array("impressoras"=> "resfriador","placa de video"));
echo $hardware["placa mae"][0];
echo "<br>";
echo "<hr>";

foreach($hardware["placa mae"] as $indice => $valor);
  echo $indice.":".$valor."<br>";
?>