<?php
//la estructura de datos mas basica es el array (arreglo). Un array es basicamente un grupo de valores.
//en la vida real utilizamos arrays sin darnos cuenta. Cuando organizamos nuestra ropa en blanca y de color, cuando
//ponemos nuestras peliculas en orden alfabetico, cuando ponemos las canciones dependiendo su genero, etc.
//otra manera de pensar en un array es en cajas o compartimentos. Por ejemplo cuando nos vamos a mudar metemos nuestras
//cosas en cajas, en una caja metemos libros, en otra producto de limpieza, en otra platos, en otra vasos, etc.
//estamos armando un arreglo de cajas.
//PHP se diferencia de otros lenguajes en que sus arrays son dinamicos, esto significa que no importa el numero de
//elementos que tenga el array, siempre van a caber. En otros lenguajes como en C++ esto no es verdad y el arreglo
//se inicializa con un numero determinado de "cajas" e incrementar el numero de "cajas" es mas complicado.
//PHP elimina eso y podemos inicializar un arreglo sin "cajas" y llenarlo como se nos de la gana.
//un arreglo se inicializa de la siguiente manera
$days = []; //este es un array de dias

//el objetivo final es que tengamos un arreglo que marque los 7 dias de la semana. Tenemos muchas opciones para ello.
//podemos iniciarlizarlo desde un principio
$days = [
    "monday",
    "tuesday",
    "wednesday",
    "thursday",
    "friday",
    "saturday",
    "sunday",
];

//hay que fijarse bien en los estandares de codigo que utilizamos, nada nos impide escribirlo de la siguiente manera
$days = [
    "monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday",
];

//pero esa es una mala practica de codigo, lo recomendable es que cada valor vaya en su propia linea.
//para revisar nuestro arreglo y ver lo que imprime utilizaremos una funcion auxiliar de php que se llama print_r
print_r($days);

//esto imprimira lo siguiente
/*Array
(
    [0] => monday
    [1] => tuesday
    [2] => wednesday
    [3] => thursday
    [4] => friday
    [5] => saturday
    [6] => sunday
)*/

//esta es la estructura basica de un array. Vamos a explicar cada parte
//[0], indica el INDEX (indice), el indes nos dice en que posicion del array se encuentra el elemento.
//Nota, los arreglos por lo regular empiezan con el indice 0, esto es informacion importante, no lo olviden, un error
//muy general al principio es pensar que inician en 1.

//=> monday < indica que el index 0 tiene un valor de monday
//con esta logica podemos saber que friday tiene un indice de 4, y que en el indice 6 el valor es sunday.
//
//nota: no olvidar que en cada elemento en la inicializacion se separa por una , (coma), de lo contrario marcara error

//si queremos imprimir un valor en particular de un arreglo podemos acceder a su indice.
echo $days[2]; //esto imprimira wednesday
echo $days[0]; //esto imprimira monday
echo $days[6]; //esto imprimira sunday

//que pasa si queremos acceder a un indice que no existe
//echo $days[7]; //esto marca error Notice: Undefined offset: 7

//imaginemos un arreglo diferente, ahora con animales, y lo inicializemos con perro y gato
$animals = [
    "dog", //index 0
    "cat", //index 1
];

print_r($animals); //esto imprimira dog y cat

//que pasa si queremos agregar a otro animal?
//hay tres maneras de hacerlo
//especificando el indice
$animals[2] = 'duck'; //esto agregara duck a nuestro arreglo en el indice 2

print_r($animals);

//sin especificar indice
$animals[] = 'lion'; //esto agregara lion en el indice siguiente de nuestro arreglo, en este caso 3 (index 2 + 1)
print_r($animals);

//mediante la funcion de php array_push (raramente usada), esto hace lo mismo que el caso anterior, coloca el nuevo
//elemento al final
array_push($animals, 'chicken'); //esto agregara chicken en el index 4 (ultimo index 3 + 1)
print_r($animals);

//podemos incluso especificar indices que no esten en orden
$animals[10] = 'cow'; //esto agregara cow a nuestro arreglo en el index 10, dejando libres los indices del 5 al 9;
print_r($animals);

//podemos tambien modificar el elemento del indice
$animals[1] = 'elephant'; //esto sustituira el valor del index 1 (cat) con el valor elephant

print_r($animals);

//tambien podemos eliminar un valor, en PHP se utiliza la funcion unset para ello
unset($animals[10]); //esto eliminara el index 10 con el valor de cow
print_r($animals);

//si queremos eliminar todo el arreglo simplemente no especificamos el index
//unset($animals);
//print_r($animals); //marcara error porque este array ya no existe

//otra propiedad que utilizaremos mucho de un arreglo es saber cuantos elementos tiene, esto se llama
//longitud (length) del array , para ello utilizaremos la function count de php
echo count($animals); //esto imprimira 4, cuenta cada elemento, dog, duck, lion, chicken

//otra operacion muy comun con las estructuras de datos se conoce como traverse, o recorrido, hacer un traverse del
// array significa "visitar" todos los nodos (indices), y ejecutar alguna acction con ese nodo. Para nuestro primer
//ejemplo haremos un traverse del array que simplemente imprimira el valor de cada nodo. utilizaremos el ya conocido
//ciclo for
//lo unico que necesitamos para hacer un traverse de un array es la longitud del array (cuantos elementos tiene)

//nuestro algoritmo quedaria mas o menos como sigue
//1. almacenar en una variable la longitud del array
//2. tener un ciclo que vaya desde el inicio del array, hasta su longitud final, cada vuelta del ciclo incrementamos el
//index por 1.
//3. por cada vuelta del ciclo imprimimos el valor en el index actual

$arrayLength = count($animals);
for($ii = 0; $ii <= $arrayLength; $ii++) {
    //3. por cada vuelta del ciclo imprimimos el valor
}

//finalmente tenemos
for($ii = 0; $ii <= $arrayLength; $ii++) {
    echo $animals[$ii];
    echo "\n";
}

//esto tiene un problema, Undefined offset: 5 in /home/vagrant/proyectos/proyecto/public/12Arrays.php on line 130
//nos marcara un error, este es justamente el error con los arrays, lo que esta pasando ahi es que el arreglo solo tiene
// hasta el indice 4, sin embargo nuestra comparacion es hasta el indice 5. Como podemos saber esto?
/*Array
(
    [0] => dog
    [1] => elephant
    [2] => duck
    [3] => lion
    [4] => chicken
)*/

//vamos a hacerlo de nuevo pero imprimiremos esta vez que esta pasando en cada ciclo
for($ii = 0; $ii <= $arrayLength; $ii++) {
    echo "el index actual es ".$ii;
    echo "\n";
    echo "el valor de arrayLength es es ".$arrayLength;
    echo "\n";
    echo "el valor del array en el index [".$ii."] es: ".$animals[$ii]; //cuando el valor del index sea 5, al tratar de acceder a ese index, ese index
    //no existe por lo que arroja el error
    echo "\n";
    //echo sleep(1);
}

//esto se corrige facilmente y es un error muy comun (tanto que se le conoce como el 'off by one error'
//lo solucionamos cambiando la comparacion que ejecutamos, en vez de comparar MENOR O IGUAL, solo comparamos MENOR
for($ii = 0; $ii < $arrayLength; $ii++) { //esto yano comparara hasta 5, sino hasta 4, esto detendra el ciclo en el
    //punto correcto
    echo "el index actual es ".$ii;
    echo "\n";
    echo "el valor de arrayLength es es ".$arrayLength;
    echo "\n";
    echo "el valor del array en el index [".$ii."] es: ".$animals[$ii]; //cuando el valor del index sea 5, al tratar de acceder a ese index, ese index
    //no existe por lo que arroja el error
    echo "\n";
    //echo sleep(1);
}

//otro problema con este tipo de ciclo es que es muy facil tener errores con los indices
//digamos que agregamos otra vez un elemento en el indice 10 (saltandonos los indices del 5 al 9
$animals[10] = 'cow'; //esto agregara cow a nuestro arreglo en el index 10, dejando libres los indices del 5 al 9;
$arrayLength = count($animals); //actualizamos nuestro length

//y tratamos nuestra solucion que segun es correcta
for($ii = 0; $ii < $arrayLength; $ii++) { //esto yano comparara hasta 5, sino hasta 4, esto detendra el ciclo en el
    //punto correcto
    echo "el index actual es ".$ii;
    echo "\n";
    echo "el valor de arrayLength es ".$arrayLength;
    echo "\n";
    echo "el valor del array en el index [".$ii."] es: ".$animals[$ii]; //cuando el valor del index sea 5, al tratar de acceder a ese index, ese index
    //no existe por lo que arroja el error
    echo "\n";
    //echo sleep(1);
}

//el problema aqui es que nuestro incremento es siempre de 1, sin embargo nuestros indexes son 0,1,2,3,4,10, el index
//5 no existe. Por lo que causa ese problema.

//hay varias maneras de resolver este error, pero la mas facil es utilizar otro tipo de ciclo, el foreach, esto lo vere-
//mos mas adelante.



