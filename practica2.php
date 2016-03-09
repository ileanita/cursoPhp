<?php
//algunas funciones de string

$str = "Hola mundo, ya no esta nevando";
var_dump($str);
print_r(explode(" ", $str));

//money_format
echo "$".money_format("%i",1000);


//str_replace
$vocales = array("a","e","i","o","u");
$soloConsonantes = str_replace($vocales, "", "Hola Mundo");
echo $soloConsonantes."\n";

$frase = "You should eat fruits, vegetables, and fiber every day";
$healthy = array("fruits", "vegetables", "fiber");
$yum = array("pizza", "beer", "ice cream");

$nuevafrase = str_replace($healthy, $yum, $frase);
echo $nuevafrase."\n";

//Hash cry "llaves para encriptar"

$password = "admin123";
$hash = crypt($password,"nhsiuh3545");

echo $password." = ".$hash;

//md5
$str = 'apple';
if (md5($str) == '1f3870be274f6c49b3e31a0c6728957f'){
	echo "bien encriptado"."\n";
}


//trim se usa cuando tenemos espacios en blanco
$str = "  prueba de string con espacio    ";
echo trim($str);
echo "\n";

$str = "Hello World";
$trimmed = trim($str,"HdWr");
echo $trimmed;
echo "\n";


