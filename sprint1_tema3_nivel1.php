<?php
declare(strict_types = 1);

// Exercici 1: Afegir 5 nombres enters a un array

$nombres=[];
$nombres[]=0;
$nombres[]=1;
$nombres[]=2;
$nombres[]=3;
$nombres[]=4;

echo $nombres[0]. "<br>";
echo $nombres[1]. "<br>";
echo $nombres[2]. "<br>";
echo $nombres[3]. "<br>";
echo $nombres[4]. "<br>";

/*
for ($i=0; $i<count($nombres);$i++) {
    echo $nombres[$i] . "<br>";
}

foreach($nombres as $key => $value) {
    echo "$value <br>";
}
*/
echo "Exercici 2 <br>";

$X = array (10, 20, 30, 40, 50,60);
echo count($X) . "<br>";
unset($X[3]);
$X = array_values($X);
echo count($X)."<br>";

echo "Exercici 3. True si totes les paraules contenen el caracter <br>";

$paraules = array ("dissabte", "tempesta", "peseta", "cavall", "moneda");
$caracter = "e";

echo trobaCaracter($paraules, $caracter)? "true" : "false";

function trobaCaracter($paraules, $caracter) : bool{
    foreach ($paraules as $paraula) {
        if (strpos($paraula, $caracter) == false) {
            return false;
        } 
    }
    return true;
}

echo "<br> Exercici 4. Presentar dades personals. <br>";

$dadesPersonals = ["nom" => "Cristina Cardona", 
"edat" => 54, "email" => "elmeunom@hotmail.com", "menjarFavorit" => "carxofes"];

print_r($dadesPersonals);


?>