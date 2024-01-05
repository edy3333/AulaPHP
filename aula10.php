<?php
//FUNÇÕES DE ARRAY #1\\
//Ex.....
$nomes = array("Edy","Regy","Mimizoka","Time");
echo is_array($nomes);
echo "<br>";
var_dump(is_array($nomes));
echo "<br>";
echo "<hr>";
if(is_array($nomes)):
echo "É um Array";
else:
    echo "Não é um Array";
endif;
echo "<br>";
echo in_array("Edy", $nomes);


?>