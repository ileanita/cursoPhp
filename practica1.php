<?php 

//este es un comentario de una sola línea

/*
todo lo 
que escriba
*/

print('Hello ');

echo "World \n"; 

$boolean = true;
$boolean = false;

//variables
$int1 = 12;
$int2 = -12;
$int3 = 012; //Octal
$int4 = 0xf; //hexadecimal
$int5 = 0111111; //255

$float = 1.234;
$float = 1.2e3;
$float = 7E-10;

unset($init1);

var_dump($float);
var_dump($int4);

$sum = 1 + 1; //suma
$res = 2 - 1; //resta
$mul = 4 * 6; //multiplicación
$div = 2 / 4; //división

var_dump($res);
var_dump($div);

$num = 0;

$num = 0;
$num +=1; 
echo $num++;
echo ++$num;

$num /= $float;



//Strings
$num = 5;
$varString = 'num';
echo $varString;
$varString = "el valor de la variable num = $num \n";
echo $varString;
$otroString = "otra forma de incluir variable {$num}";
echo $otroString;

$stringMult = <<<'END'
Multi line  
string
END;

echo $stringMult;

echo $stringMult;
echo 'Este es un '.'String';
echo 'multiples', 'parametros', 'en echo';


//constantes
define("FOO","algo");
echo FOO;
echo "este es el valor de la constante FOO =".FOO;

define("_FOO", "algo");






