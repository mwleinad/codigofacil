<?php //las data structures (estructura de datos) nos sirven para recolectar y organizar datos de manera que las operaciones
//con esos datos puedan efectuarse de manera mas sencilla. Una manera en la que nosotros usamos estructuras de datos
//en la vida real son las carpetas, o libretas. Cuando vamos a la escuela organizamos cada materia en una libreta
//si utilizaramos una sola libreta para todas nuestras materias, seria un desastre y no podriamos organizar y estudiar
//se nos complicaria mas, esto es lo que hace una estructura de datos.
//Existen varios tipos de estructuras de datos, y cada una tiene sus ventajas y desventajas. Las principales son
//array, linked list, queue, stack, hash table, tree, graph. No es necesario saber que son ni para que sirven aun.
//eso lo pueden ver en lecciones mas avanzadas. Para esta primeras lecciones de estructuras de datos solo veremos
//el array (arreglos) ya que es la estructura que mas utilizaran y la mas util, ademas de que en PHP los arreglos son
//bastante poderosos y pueden ser usados como subtitutos de otras estructuras cuando no se tenga el conocimiento de
//ellas. Siendo honestos, los otros tipo de estructuras rara vez los utilizaran en un ambiente de trabajo real pero
//es bueno saberlos, ya que nos hacen pensar de una forma diferente y podriamos encontrar una  respuesta simplemente
//sabiendo el concepto (aunque no sepamos implementarlo), ademas son super importantes si piensan algun dia
//aplicar para alguna empresa grande (ej. google), ya que los procesos de entrevista para ese tipo de empresas
//se basan en el conocimiento avanzado de estas estructuras.

//un ejemplo  codigo que usa no usa estructura de datos se veria de la siguiente forma
$monday = 1;
$tuesday = 2;
$wednesday = 3;
$thurday = 4;
$friday = 5;
$saturday = 6;
$sunday = 7;

//mientras uno que utiliza una estructura de datos (array, un arreglo) se veria asi (no es necesario que sepan que
//significa aun
$days = [
    "monday" => 1,
    "tuesday" => 2,
    "wednesday" => 3,
    "thurday" => 4,
    "friday" => 5,
    "saturday" => 6,
    "sunday" => 7,
];

//y para acceder la primer forma utilizariamos
echo $wednesday; //esto imprimiria 3

//mientras que para acceder al array utilizariamos
echo $days["wednesday"]; //esto tambien debe imprimir 3

//eso se ve mas complicado que la primer forma. pero y si nos piden imprimir todos?
//sin estructura de datos, para imprimit todos los 7 valores tenemos que hacer esto

echo $monday; //linea 1
echo $tuesday; //linea 2
echo $wednesday; //linea 3
echo $thurday; //linea 4
echo $friday; //linea 5
echo $saturday; //linea 6
echo $sunday; //linea 7

//conla estructura de datos podemos hacer algo como esto (de nuevo, no es necesario que sepan como lo hace)
foreach($days as $day) { //linea 1
    echo $day;          //linea 2
}                       //liniea 3

//ahora son 3 lineas en vez de 7, ahora imaginense que no sean 7 elementos, que sean 1000, o 1000000, o 10000000000
//es ahi donde uno empieza a darse cuenta del valor que tienen las estructuras de datos