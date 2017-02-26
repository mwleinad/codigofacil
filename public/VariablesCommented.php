<?php
//Variable:	variable (en espaniol variable), funcionan como un contenedor que almacena informacion
//en la vida tenemos muchas variables, un ejemplo seria nuestra cuenta bancaria, tiene una cierta cantidad
//de dinero (con suerte), y cada que nos depositan esa cantidad incrementa y cada que retiramos esa cantidad disminuye,
//esa es una variable. En programacion, la variable tiene la misma funcion que en la vida real.

//en PHP las variables siempre empiezan con el simbolo $ seguidos por una letra o series de letras o el caracter _,
//no pueden continuar con un numero

//ejemplos
$helloWorld= "Hello World";
$balance = 100;
$pi = "3.1416";

//Nota: mostrar el error, descomentado la linea siguiente
//$1invalid= "esto no funciona";

//De esa manera podemos imprimir
echo $helloWorld;
echo $balance;
echo $pi;

//Lo anterior imprime todo pegado, para separarlos podemos usar dos metodos. Separarlo con espacio o con el tag de
//salto de linea <br>

echo "<br>"; //salto de linea
echo $helloWorld;
echo " "; //espacio
echo $balance;
echo "<br>"; //salto de linea
echo $pi;

//pero que es echo?
//echo es una construcion especial del lenguaje que simplemente imprime en pantalla una cadena o serie de cadenas
//podemos incluso imprimir todo con solo una instruccion, el caracter que nos servira para concatenar una cadena
//a otra es el caracter . (punto). Por ejemplo

echo $helloWorld." ".$balance." ".$pi;

//finalmente 2 estandares de codigo que me gustan y que vamos a estar utilizando siempre.
//uno es el nombre de archivo, este se llama Variables.php la primer letra Mayuscula, y las demas minusculas
//si nuestro archivo tiene mas de dos palabras, la primer letra de cada palabra se pone en mayuscula. por ejemplo
//HelloWorld.php esto se conoce como CamelCase, mas especificamente UpperCamelCase
//en el caso de las variables utilizaremos el mismo CamelCase, pero el conocido como lowerCamelCase, que es
//exactemente igual excepto que la primer letra de la palabra no se acentua. Ejemplos
//$helloWorld $balance $pi
//otra cosa super importante con las variables y que lo trataremos de utilizar siempre en estos cursos es el de dar
//un nombre significativo a nuestras variables y nunca usar abreviaciones. Esto es porque un codigo limpio y ordenado
//es mas facil de leer y si alguna vez te toca ver el codigo de otra persona que no sigue las recomendaciones
//probablemente te daras de topes en la cabeza. Siguiendo estas simples recomendaciones podemos hacer que nuestro
//codigo se vea mas profesional. En este caso, nunca usaremos variables como
//$i, $k, $j que no tienen ningun significado, ni abreviaciones como $min, que significa eso? $minute? $minimun?
//siempre palabras completas y la otra recomendacion es que sean en ingles para que no haya mezcla de codigo
//ademas de que es buena practica para saber mas ingles.
//ejemplos: $musicPlaylist, $healthPoints, $minutes
