<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>
<body>
    <h1>Testando Tipos Primitivos</h1>
    <?php
         $num = 0x1A;
         echo "o valor da conta é $num";
         echo "<br>";
         echo "<hr>";
         echo "<br>";

         $num = 300;
         var_dump($num);
         echo "<br>";
         echo "<hr>";
         echo "<br>";

         $var = 5e3;
         echo "o valor é $var";
         echo "<br>";
         echo "<hr>";
         echo "<br>";

         $num = (int)340;
         var_dump($num);
         echo "<br>";
         $num = (float)340;
         var_dump($num);

?>
</body>
</html>