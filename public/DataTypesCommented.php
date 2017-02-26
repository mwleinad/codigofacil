<?php
//En programacion una variable puede tener distintos Data Types, (tipos de datos). PHP tiene la ventaja de que no es necesario
//especificar el tipo de dato, esto se conoce como Dynamically Typed Language (lenguage escrito dinamicamente)
//ejemplo
$string = "Hello World";
echo $string; echo "\n";
$number = 100;
echo $number; echo "\n";
$decimal = 1.11;
echo $decimal; echo "\n";
$character = "a";
echo $character; echo "\n";
//en otros lenguajes, tienes que especificar el tipo de dato, ejemplo en C
//int number = 100; float decimal = 1.11

//los Data Types principales son string, integer, float, char, otros Data Types mas avanzados son, boolean, array
//object, los cuales veremos adelante

//para probar que todo esto este funcionando, vamos a usar la consola de php, la consola de php solo la utilizaremos
//para ejemplos basicos, como estos ya que nos da una manera rapida de comprobar el resultado.
//para usarla dependera si estan usando homestead o wamp, pero en cualquiera de los casos, primero tenemos que
//encontrar la carpeta donde esta nuestro archivo DataTypesCommented.php y ahi escribir
//php DataTypesCommented.php esto ejecutara el archivo, y si hemos seguido las instrucciones, nos arrojara el resultado
//no se les olvide el ; al final de cada instruccion!!
//la cadena \n es un salto de linea en consola.

//en cualquier lenguaje de programacion tambien es posible llevar a cabo operaciones aritmeticas, sumas, restas
//multiplicaciones y divisiones son solo algunas de las basicas
$result = 2 + 2; //esto imprimira 4
echo $result; echo "\n";

$result = 3 * 3; //esto imprimira 9
echo $result; echo "\n";

//como concepto extra tenemos el caracter =, este es un caracter de asignacion de variables, basicamente le estamos
//diciendo, asigna el valor de 3 * 3 a la variable resultado, si probamos esto en la consola debemos de ver el resultado
//correcto. tambien hay que darse cuenta que el valor de $result que era 4, cambio y al final es 9
//incluso podemos tener operaciones aritmeticas con variables
$multiplier = 3;
echo $result = $result * $multiplier; //$result = 9, $multiplier = 3. 9 * 3 = 27, esta operacion deberia imprimir 27
echo "\n";

