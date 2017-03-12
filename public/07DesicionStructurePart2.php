<?php
//En el video anterior aprendimos las sentencias IF-ELSE, en este continuaremos con este tema y veremos los IF anidados
//y un poco de logica booleana que complementaran nuestro conocimiento.
//
//en primer paso un ejemplo. La vez anterior nuestro programa imprimia si nuestro nombre era Maria o no.
//pero que pasa si ademas de revisar el nombre tambien tenemos que revisar el apellido.
//ejemplo
//Paso 1. preguntar Es tu nombre Maria?
//Si la respuesta es Si, vamos al paso 2, sino vamos al paso 3
//Paso 2. preguntar Es tu apellido Perez?
//Si la respuesta es si, vamos al paso 4, sino vamos al paso 5
//Paso 3. preguntar Cual es tu nombre?
//Paso 4. Responder "hola Maria Perez";
//Paso 5. preguntar cual es tu apellido?

//Si se fijan ahora tenemos algo un poco mas elaborado en donde tenemos que seguir una serie de pasos y dependiendo
//de la desicion que tomemos nos lleva a otros pasos diferentes. Esto es la definicion basica de un algoritmo. Una
//serie de pasos, que al seguirlos nos da siempre el mismo resultado.
//Lo que hicimos tambien se conoce como pseudocodigo, es una buena practica cuando algo es bastante complicado
//primero ponerlo en palabras que es lo queremos hacer, plasmarlo, y poco a poco ir cambiando ese pseudocodigo en
//codigo

//otra de las ventajas de la programacion es que hay muchas formas de llegar al mismo resultado. Para este video
//mostrare tres posibles soluciones, la primera usando IF anidados, la segunda usando logica booleana, y la ultima
//usando una funcion. La ultima opcion es solo para mostrarles diferentes soluciones, aun estamos algunos videos
//lejos de aprender que es una funcion y para que se utiliza.

//Si usamos la forma que les dije, iremos por pasos, primero es tener nuestro pseudocodigo
//Paso 1. preguntar Es tu nombre Maria?
//Si la respuesta es Si, vamos al paso 2, sino vamos al paso 3
//Paso 2. preguntar Es tu apellido Perez?
//Si la respuesta es si, vamos al paso 4, sino vamos al paso 5
//Paso 3. preguntar Cual es tu nombre?
//Paso 4. Responder "hola Maria Perez";
//Paso 5. preguntar cual es tu apellido?

//CONVERTIMOS A CODIGO EL PASO 1
$yourName = "Maria";

if($yourName == "Maria") {
    //Paso 2. preguntar Es tu apellido Perez?
    //Si la respuesta es si, vamos al paso 4, sino vamos al paso 5
} else {
    //Paso 3. preguntar Cual es tu nombre?
}

//Paso 4. Responder "hola Maria Perez";
//Paso 5. preguntar cual es tu apellido?

//CONVERTIMOS A CODIGO EL PASO 2
$yourName = "Maria";

if($yourName == "Maria") {
    $lastName = "Perez";
    if($lastName == "Perez"){
        //Paso 4. Responder "hola Maria Perez";
    } else {
        //Paso 5. preguntar cual es tu apellido?
    }
} else {
    //Paso 3. preguntar Cual es tu nombre?
}

//CONVERTIMOS A CODIGO EL PASO 3
$yourName = "Maria";

if($yourName == "Maria") {
    $lastName = "Perez";
    if($lastName == "Perez"){
        //Paso 4. Responder "hola Maria Perez";
    } else {
        //Paso 5. preguntar cual es tu apellido?
    }
} else {
    echo "cual es tu nombre?";
}

//CONVERTIMOS A CODIGO EL PASO 4
$yourName = "Maria";

if($yourName == "Maria") {
    $lastName = "Perez";
    if($lastName == "Perez"){
        echo "Hola Maria Perez!";
    } else {
        //Paso 5. preguntar cual es tu apellido?
    }
} else {
    echo "cual es tu nombre?";
}

//CONVERTIMOS A CODIGO EL PASO 5
$yourName = "Maria";

if($yourName == "Maria") {
    $lastName = "Perez";
    if($lastName == "Perez"){
        echo "Hola Maria Perez!";
    } else {
        echo "Cual es tu apellido?";
    }
} else {
    echo "cual es tu nombre?";
}

//de esa manera tenemos un codigo completo que hace exactamente lo que se nos pidio en el algoritmo.
//esta manera de resolverlo contiene un IF anidado (nested if), que aunque correcto, no es una forma recomendada
//imaginense el caso en donde despues de preguntar por el apellido, tengamos que ademas preguntar, la edad, y luego
//la direccion, y luego el telefono, terminariamos con un codigo parecido al que sigue
if(1){
    if(2){
        if(3) {
            if(4){
                if(5){
                    //if anidado a 5 niveles
                    echo "nunca hacer esto";
                }
            }
        }
    }
}
//aunque no nos marcara ningun error, si alguna vez vemos un codigo que tenga tantos if anidados, nos daremos cuenta
//de que fue hecho por un principiante. (yo alguna vez los hice asi!) pero es mejor aprender la forma correcta desde un
//principio y no cometer este tipo de errores que a la larga nos costaran caro

//otro tip, es tratar de usar lo menos que se pueda las sentencias ELSE. Quizas al principio sea complicado.
//Especialmente debido a que aun no sabemos que es una funcion o metodo. Asi que estan perdonados por el momento
//La segunda forma de resolver este problema es usando logica booleana, la logica boolena nos permite agrupar
//"preguntas" con el "resultado" para ejecutar solo una accion
//pueden pensar en ello de una manera simple. En vez de hacer una pregunta y dependiendo del resultado, hacer la segunda
//hacer las dos al mismo tiempo.
//Ej. Es tu nombre Maria y tu apellido Perez?

//Con eso se pueden dar una idea de lo facil que es implementar logica booleana, para iniciarnos en esto solo vamos a
//tener 2 casos de logica booleana (hay mas) y se definen mediante las keywords AND (&&) y OR (||)
//AND y && son lo mismo pero prefiero usar siempre && ya que es mas facil de detectar que ahi estamos ejecutando una
//operacion booleana, el mismo caso para OR, prefiero usar ||
//como ejemplo tenemos
//Es tu nombre Maria y tu apellido perez? puede ser escrito en pseudo codigo
//Es tu nombre Maria && Es tu apellido perez?
//Para que esta condicion sea verdadera tanto tu nombre debe de ser exactamente Maria, y tu apellido debe de ser Perez
//Alguien llamado Maria Lopez nos regresaria un FALSE en la condicion
//Sin embargo tambien tenemos el || a nuestra disposicion. Si nosotros hicieramos
//Es tu nombre Maria || tu apellido perez? o lo que es lo mismo, es tu nombre Maria o es tu apellido perez?
//Si nuestro nombre es Maria Lopez, la condicion seria verdadera, tambien seria verdadera si nos llamaramos
//Daniel Perez, ya que solo esperamos que una de las dos condiciones sea verdad. En cambio con el && esperamos que
//ambas condiciones sean verdad

//entonces basado en eso, podemos reescribir nuesto algoritmo
//Paso 1: Preguntar si nuestro nombre es Maria y nuestro apellido es Perez. Si esto es verdadero, ve al paso 2, sino
//ve al paso 3
//Paso 2: saluda a "Maria Perez"
//Paso 3: pregunta cual es tu nombre y apellido?

//si seguimos los pasos del algoritmo
//CONVERTIMOS A CODIGO EL PASO 1
$yourName = "Maria";
$lastName = "Perez";

if($yourName == "Maria" && $lastName == "Perez"){
    //Paso 2: saluda a "Maria Perez"
} else {
    //Paso 3: pregunta cual es tu nombre y apellido?
}

//CONVERTIMOS A CODIGO EL PASO 2 y 3
$yourName = "Maria";
$lastName = "Perez";

if($yourName == "Maria" && $lastName == "Perez"){
    echo "Hola Maria Perez!";
} else {
    echo "cual es tu nombre y apellido?";
}

//esta es una manera bastante efectiva de reducir el numero de if anidados, sin embargo hay aun una manera mejor
//que es utilizar una funcion o un metodo. El problema con la logica booleana es que se puede complicar muy facilmente
//y puede ser muy dificil de leer, aunque uno o dos && y || son perfectamente normales, si utilizas muchos operadores
//logicos sera dificil de leer. Una cosa que siempre debemos recordar es que no escribimos codigo para nosotros
//sino para los otros desarrolladores que estan en el equipo, o incluso si regresas a ver un codigo que hiciste despues
//de 6 meses o 1 anio, posiblemente no recordaras que hiciste o porqu elo hiciste. Es por eso que es muy importante
//hacerlo de la mejor forma que sepamos desde un principio, o preguntar a otros desarrolladeores con mas experiencia
//como le harian ellos?

//siguiendo el ejemplo donde preguntamos cual es la direccion, telefono, y edad, quedaria mas o menos asi
if(1 && 2 && 3 && 4 && 5) {
    echo "no recomendable, demasiada logica booleana puede ser intimidante";
}

//basado en eso, yo lo haria de la siguiente forma. Nota, no es necesario hacerlo, solo es una demostracion

$yourName = "Maria";
$lastName = "Perez";

echo sayHiOrAsk($yourName, $lastName);

function sayHiOrAsk($yourName, $lastName) {
    if($yourName != "Maria") {
        return "Cual es tu nombre?";
    }

    if($lastName) {
        return "Cual es tu apellido?";
    }

    return "hola Maria Perez!";
}

//de esta manera si despues tenemos que preguntar la edad, telefono y direccion, es mas facil agregarlo
/*function sayHiOrAsk($yourName, $lastName) {
    if($yourName != "Maria") {
        return "Cual es tu nombre?";
    }

    if($lastName) {
        return "Cual es tu apellido?";
    }

    //if de direccion
    //if de telefono
    //if de edad

    return "hola Maria Perez!";
}*/



