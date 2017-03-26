<?php
//un array esta conformado de dos partes, [x], el index (tambien llamado key) y el valor.
//Nota, el valor de un array puede ser un array, a esto se llama multidimensional array (arreglo multidimensional)
//eso lo pueden ver en lecciones mas avanzadas
//en un array normal el index o key es un numero, esto se conoce normalmente como un numeric array (array numerico)
//una de las desventajas que tiene este tipo de array es que para acceder a un valor necesaitamos saber el indice que
//corresponde al valor. Tambien son mas propensos al error de "off by 1" ya que muy comunmente tomamos en ucneta un
//index de mas. La solucion son los associative array o arreglos asociativos. Los cuales nos permiten asociar una
//llave cualquiera a un valor. En vez de tener un index numerico [0] asociado a un valor 25 puedes tener un
// index de tipo string ["peter"] con un valor 25.
//imaginemos el siguiente arreglo
$ages = [
    25, //este es la edad de peter, index 0
    30, //esta es la edad de sean, index 1
    35, //esta es la edad de nick, index 2
];
//si nos piden imprimir la edad de sean, tenemos que recordar que la edad de sean es el index 1 e imprimir
echo $ages[1];

//con un array asociativo eso es mucho mas facil. Se introduce el concepto de key
$ages = [
    "peter" => 25, //notar que => es un operador de ASOCIACION, este asocia un valor con un index o key.
    "sean" => 30, // tambien notar que esto es diferente que el operador de comparacion >= es diferente (es al reves)
    "nick" => 35,
];

//y si queremos imprimir la edad de sean no tenemos que recordar el index, simplemente hacemos
echo $ages["sean"];

//si queremos imprimir todos utilizamos la funcion que ya sabemos
print_r($ages);

//este es el array que nos imprime. Cada index (key) del arreglo tiene asociado un valor, pero el key es un string
/*Array
(
    [peter] => 25
    [sean] => 30
    [nick] => 35
)*/

//para agregar nuevos elementos es igual de facil
$ages["maria"] = 31;

print_r($ages);
/*Array
(
    [peter] => 25
    [sean] => 30
    [nick] => 35
    [maria] => 31
)*/

//para eliminar elementos debemos de utilizar un string valido
unset($ages["maria"]);

/*Array
(
    [peter] => 25
    [sean] => 30
    [nick] => 35
)*/

//para hacer un traverse a este tipo de arreglo podemos usar el loop for, pero para este tipo de arrays tenemos otro
//tipo de ciclo mucho mas potente y es el que es el pan de cada dia en nuestro desarrollo. El loop foreach
//lo veremos en la siguiente leccion


