<?php
//existe otro tipo de loop llamado foreach, en lo particular es el loop que mas utilizo, y seguramente sera tambien
//para ustedes. en PHP tenemos la palabra clave foreach, lista para usarse, la mayoria de los lenguajes mas nuevos o mas
//populares la tienen, o algunos lenguajes que no lo tienen (como C) es facil construirlos o ya hay maneras standard
//de emularlos. el loop foreach tiene 2 estructuras basicas
//foreach($array as $value) y foreach($array => $key as $value)
//les recomiendo usar la segunda siempre ya que es la mas completa. Lo que dice es muy facil
//foreach se puede traducir como "por cada", el primer argumento de la funcion es nuestro array
//entonces basicamente lo que le estamos diciendo es "por cada elemento de nuestro array" ejecuta la siguiente accion
//los argumentos 2 y 3 que son $key as $value simplemente "envia" la informacion del $key y del $valor del arreglo a
//esa vuelta del ciclo en particular. Si hacemos el ejemplo que con el arreglo de la leccion anterior

$ages = [
    "peter" => 25,
    "sean" => 30,
    "nick" => 35,
];

//nuestro ciclo foreach quedaria de la siguiente manera

//nota: generalmente tendremos una palabra en plural para nuestro array, y una en singular para el valor
foreach($ages as $key => $age) {
    //acction a ejecutar
}

//para saber que esta pasando exactamente imprimiremos los valores de $key y de $age
foreach($ages as $key => $age) {
    echo $key;
    echo "\n";
    echo $age;
    echo "\n";
    //sleep(1);
}

/*
peter   actual $key         ciclo 1
25      actual $value       ciclo 1
sean    actual $key         ciclo 2
30      actual $value       ciclo 2
nick    actual $key         ciclo 3
35      actual $value       ciclo 3
*/

//de esa manera podemos hacer traverse a todos los elementos de nuestro array sin necesidad de contar el numero de
//elementos que existen en el array, ni tampoco hay que preocuparnos por el "off by 1" error ya que el ciclo en si
//manejara todo eso por defecto.

//ahora podemos hacer lo que queramos con ese ciclo, vamos a hacer algo un poco mas util. Digamos que queremos hacer un
//algoritmo que nos diga que persona con mas edad y que edad tiene esa persona

//recordermos que nuestro algoritmo debe de funcionar igual tanto para 3 personas (nuestro array actual) como con 1000
//el algoritmo para saber que persona es la de mas edad quedaria como sigue

//1.crear una variable $maxAge e iniciarlizarla en 0, esta variable nos servira para comparaciones
//2.crear una variable $name e inicizarlo con una cadena vacia, esta variable guardara el nombre de la persona con mayor edad
//3.ciclar todas las personas en el array
//4.si la edad de la persona es mayor que $maxAge actualizar el valor de $name, el nuevo valor de $name sera el nombre
//de la persona
//5. al mismo tiempo actualizar el valor de $maxAge con la edad de la persona actual en el ciclo (esta es nuestra edad
//maxima al momento

//paso 1 y 2
$maxAge = 0;
$name = '';
//3.ciclar todas las personas en el array
//4.si la edad de la persona es mayor que $maxAge actualizar el valor de $name, el nuevo valor de $name sera el nombre
//de la persona
//5. al mismo tiempo actualizar el valor de $maxAge con la edad de la persona actual en el ciclo (esta es nuestra edad
//maxima al momento

//paso 3
$maxAge = 0;
$name = '';

foreach($ages as $key => $age) {
    //4.si la edad de la persona es mayor que $maxAge actualizar el valor de $name, el nuevo valor de $name sera el nombre
    //de la persona
    //5. al mismo tiempo actualizar el valor de $maxAge con la edad de la persona actual en el ciclo (esta es nuestra edad
    //maxima al momento
}

//pasos 4 y 5
$maxAge = 0;
//notese que cambie el nombre de esta variable ya que hacia conflicto con la variable $name que esta ahora en nuestro
//ciclo
$oldestPerson = '';
//notese que cambie el atributo $key por $name, ya que todos los valores que tenemos aqui corresponden a un nombre
//de esa manera sabemos de que estamos hablando, es una buena practica de codigo
foreach($ages as $name => $age) {
    if($age > $maxAge) {    //si el $age es mayor que el $maxAge, el nuevo valor de $maxAge sera igual que el de $age
        $maxAge = $age;     //por ejemplo al prinxipio $maxAge es igual a 0, en el primer ciclo el valor de $age es 25
                            //por lo que esto sera verdadero, el nuevo valor de $maxAge sera 25
        $oldestPerson = $name;  //igualmente el nombre de la persona con mas edad sera el nombre actual del ciclo.
    }
}

//imprimimos nuestros valores de $maxAge y $oldestPerson que deberian de ser en este caso nick con 35 aöos
echo "la persona con mas edad es ".$oldestPerson." tiene ".$maxAge." años";

//y como les comente, esto es un algoritmo y debe de funcionar igual asi tengamos 1000 elementos en el array
//que pasa si agregamos mas nombres y edades al array
$ages["maria"] = 31;
$ages["seth"] = 18;
$ages["ryan"] = 23;
$ages["danny"] = 45;
$ages["erick"] = 13;
$ages["michael"] = 27;

//si imprimimos el arreglo
print_r($ages);

/*Array
(
    [peter] => 25
    [sean] => 30
    [nick] => 35
    [maria] => 31
    [seth] => 18
    [ryan] => 23
    [danny] => 45
    [erick] => 13
    [michael] => 27
)*/
$maxAge = 0;
$oldestPerson = '';
foreach($ages as $name => $age) {
    if($age > $maxAge) {
        $maxAge = $age;
        $oldestPerson = $name;
    }
}

echo "la persona con mas edad es ".$oldestPerson." tiene ".$maxAge." años";
//con loque confirmamos que nuestro algoritmo muy probablemente funcione con cualquier cantidad de anios
//con esto tambien reforzamos lo que aprendimos, utilizando un loop foreach y una estructura de desicion (el if)
//podemos saber quien es la persona con mas edad en un array