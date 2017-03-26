<?php

//despues de las estructuras de desicion (if), el segundo concepto mas importante en el flujo de un software son los
//ciclos (loops), un loop como su nombre lo implica es algo que se cicla a si mismo y ejecuta la accion tantas veces
//como le hayamos especificado.
//En la vida real tenemos muchos ciclos, nos despertamos, desayunamos, trabajamos, regresamos a csa, dormimos, es un
//ciclo que se repite a diario por mucho tiempo
//otro ejemplo es correr en una pista de carreras, la pista tiene 400 metros de circunferencia, si queremos correr 4km
//tenemos que dar 10 loops (ciclos o vueltas) alrededor.
//PHP y en general cualquier lenguage tienen estructuras definidas para los ciclos
//en PHP existen 5 tipos de loops, no es tan importante aprenderlos todos ahorita ya que los explicaremos con ejemplos
//en los siguientes videos
//los tipos de loops son. for, foreach, while, do-while
//igualmente hay 2 palabras clavez de importancia que son continue y break, las exploraremos a fondo en los siguientes
//videos

//antes de pasar a los ciclos hay algunas operaciones que veremos y que es buena idea irlas aprendiendo.
//las operaciones de asignacion =, +=, -=, ++, --

//las operaciones de asignacion asignan un nuevo valor a la variable que queramos
$number = 5;
echo $number; //$number es igual a 5

$number = 10;
echo $number; //$number es ahora igual a 10

$number++;
echo $number; //$number es ahora 11, ++ agrega 1 a nuestro numero

$number--;
echo $number; //$number es ahora 10 de nuevo, -- decrementa 1 a nuestro numero

$number += 5; //$number es ahora 15, += agrega la cantidad de la derecha de la variable
echo $number;

$number -= 5; //$number es ahora 10, -= resta la cantidad de la derecha de la variable
echo $number;

//podemos asignar el valor de otras variables a las variables
$secondNumber = 10;
$number = $secondNumber;
echo $number; //$number es ahora igual al valor de $secondNumber que es 10

$number += $secondNumber; //
echo $number; //$number es igual a 20, porque? $number vale 10, y $secondNumber tambien vale 10, += suma ambos.

//recuerden tambien ver los operadares de comparacion que vimos hace poco, son muy importantes para

