<?php
//Las estructura de desicion (desicion structure) o IF como se le conoce en PHP es una estructura que ayuda a controlar
//el flujo de nuestro proyecto. Basicamente se trata de hacer una pregunta y dependiendo de la respuesta es la accion
//que vamos a ejecutar.

//ej Pregunta: es tu nombre Maria?
//Posibles respuestas: 1. Si, es Maria. 2. No, no es Maria.
//Posibles acciones: 1. Si la respuesta fue 1. Saluda a maria. 2. Si la respuesta fue 2. Pregunta el nombre de la
//persona.

//Esto puede ser facimente traducido a un lenguage que la computadora puede entender. Antes de pasar a ello, vamos a
//aprender acerca de los operadores de comparacion (comparison operators). COmo su nombre lo dice nos sirven para
//hacer un comparativo entre la "pregunta" y la "respuesta" a fin de determinar la "accion"

//los operadores de comparacion son los siguientes

//== comparativo de igualdad, exite uno mas === que es un comparativo de que sean identicos. Lo veremos mas adelante
//< menor que
//> mayor que
//!= diferente
//<= menor o igual a
//>= mayor o igual a

//estos son los tipos basicos. Hay algunos mas que iremos utilizando conforme avancemos
//la palabra clave para hacer comparaciones en PHP (y basicamente la mayoria de los lenguajes) es la palabra IF
//el resultado que obtendremos de la ejecucion de una sentencia IF es un resultado que se conoce como booleano (boolean)
//los resultados posibles son
//TRUE, verdadero
//FALSE, falso
//TRUE tambien se interpreta como el numero 1, mientras que FALSE es el numero 0
//la logica booleana se basa en estos dos valores, teoricamente todo puede ser expresado con solo estos numeros. Por
//lo pronto no necesitamos saber demasiado de esto, solo que el keywork IF siempre nos regresara un resultado TRUE o
//FALSE

//ejemplos
//si 1 es igual a 1
if(1 == 1) {
    echo "1 es igual a 1";
}

//si uno es menor que 2
if(1 < 2) {
    echo "1 es menor que 2";
}

if(2 > 1) {
    echo "2 es mayor que 2";
}

if(1 != 2) {
    echo "1 es diferente de 2";
}

if(1 <= 2) {
    echo "1 es menor o igual a 2";
}

if(2 >= 1) {
    echo "2 es menor o igual a 1";
}

//estos son unos ejemplos sencillos pero que nos pueden llevar muy lejos
//exite otra palabra clave que va muy ligada al IF, esta se conoce como ELSE. Es muy sencilla. Una sentencia IF-ELSE
//nos dice. SI mi primer resultado es diferente a lo que se espera, ENTONCES ejecuta esta otra accion

//ejemplos
if(1 > 1) {
    echo "esto nunca se ejecutara";
} else {
    echo "1 es IGUAL a 1";
}

//antes de seguir al ejemplo final, si se dan cuenta tambien introdujimos el ejemplo de las llaves { y } (curly braces)
//en una sentencia IF-ELSE nos sirven para marcar el inicio y final de cada sentencia. Tambien debemos de notar que
//estas no necesitan un ; al final

//ejemplo
if(1 == 1) {
    echo "1 es igual a 1";
    echo "esto sigue siendo parte de la misma sentencia if";
} else {
    echo "esto es una sentencia diferente";
    echo "esta sentencia necesita un punto y coma al final";
    echo "sin embargo la llave (curly bracket) no lo necesita";
}//esto no lleva punto y coma

//hay varia maneras de escribir una sentencia if. La que mostre es la mas recomendada. Otras formas de escribirlas son
if(1 == 1)
    echo "1 es igual a 1";//cuando el if solo ejecuta una sentencia puede ir sin llaves, sin embargo realmente no
//recomiendo esta ya que se presta a muchos errores
//pueden escribirla asi
if(1 == 1) echo "1 es igual a 1"; //misma linea, mismo problema, esto puede prestarse a errores muy facilmente

if(1 == 1)
{
    echo "1 es igual a 1"; //cada  llave en su propia linea, esta es mi forma favorita aunque para los cursos
    //utilizaremos la que les mostre al principio donde la primer llave va en la misma linea que la sentencia
}

//ejemplo forma recomendada
if(1 == 1) {
    echo "1 es igual a 1"; //esta es la que usaremos y la recomendadaya que es la mas usada por las companias de software
    //mas grandes
}

//finalmente para terminar este video, con lo que ya sabemos podemos ejecutar el programa del primer ejemplo
//el ejemplo era
//ej Pregunta: es tu nombre Maria?
//Posibles respuestas: 1. Si, es Maria. 2. No, no es Maria.
//Posibles acciones: 1. Si la respuesta fue 1. Saluda a maria. 2. Si la respuesta fue 2. Pregunta el nombre de la
//persona.

//pregunta, es tu nombre maria?
echo "Es tu nombre Maria?";
$yourName = "Maria";

if($yourName == "Maria") {
    echo "Hola Maria!";
} else {
    echo "Cual es tu nombre?";
}

//Si cambiamos el valor de $yourName a otro nombre que no sea Maria, nuestro programita imprimiria "Cual es tu nombre?"
//ya que estamos comparando el valor de nuestra variable $yourName contra la cadena "Maria"

//esto es todo por este video, en el siguiente continuaremos con este tema.

