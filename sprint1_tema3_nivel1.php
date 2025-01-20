<?php
declare(strict_types = 1);

// Exercici 1: Afegir 5 nombres enters a un array

$nombres=[];
$nombres[]=0;
$nombres[]=1;
$nombres[]=2;
$nombres[]=3;
$nombres[]=4;



foreach($nombres as $key => $value) {
    echo "clave: $key es $value <br>";
}

echo "Exercici 2 <br>";

$X = array (10, 20, 30, 40, 50,60);
echo count($X) . "<br>";
unset($X[3]);               // borra el registro
$X = array_values($X);      //reindexa: traslada los valores de un array a uno nuevo
echo count($X)."<br>";

echo "Exercici 3. True si totes les paraules contenen el caracter <br>";

$paraules = array ("dissabte", "espanta", "peseta", "cavall", "moneda");
$caracter = "E";

echo trobaCaracter($paraules, $caracter)? "true" : "false";

function trobaCaracter(array $paraules, string $caracter) : bool{
    foreach ($paraules as $paraula) {
        if (stripos($paraula, $caracter) === false) {
            echo "La paraula $paraula no conté el caracter $caracter. <br>"; 
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