<?php
//El loop for es el ciclo mas comunmente usado. En lo particular para mi es el segundo ciclo mas usado despues del
// foreach, los ciclos while y do-while raramente lo utilizo, es mas no recuerdo la ultima vez que los utilice.
// no dudo que en otros lenguajes se utilcen mas pero por lo pronto nos enfocaremos en solo 2 ciclos, for y foreach
// El ciclo for tiene una forma de armarse muy particular, ya completo se ve de la siguiente forma
// for($argument1; $argument2; $atgument3)
// $argument1, nuestro punto inicial, generalmente es 0 pero podemos iniciar en cualquier punto dependiendo de
// nuestro algoritmo, en nuestro ejemplo, empezamos en el metro 0
// $argument2, nuestro punto final. Una de las particularidades de los ciclos es que en el 99.9 de los casos van a
// tener un final, volviendo a nuestro ejemplo el final seria en el metro 4000
// $atgument3 es cuanto vamos a incrementar nuestro $startingPoint cada vez que se repita, de nuevo al ejemplo
// digamos que cada paso que damos incrementamos 1 metro.
// Cuantos ciclos tenemos que hacer para llegar a la meta? Nuestra mente puede calcular eso muy facil, si incrementamos
// 1 metro cada ciclo, necesitamos 4000 ciclos para llegar a la meta de 4km o 4000 metros. Como le decimos esto a
// nuestro software?

for($currentDistance = 0; $currentDistance <= 4000; $currentDistance += 1) {
    //accion a ejecutar en cada ciclo
}

//entonces, tenemos un ciclo que iniciara en 0, seguira mientras $startingPoint sea menor o igual que 4000, y se
// incrementara 1 cada vez //tenemos una instruccion nueva, el +=, significa que nuestro starting point se incrementara
// 1 cada vez que se ejecute el ciclo

//un ejemplo mas sencillo para que podamos ver como funciona en tiempo real. Digamos que queremos un programa que
//cuente del 1 al 10

for($number = 1; $number <= 10; $number += 1) {
    echo $number;
    echo "\n";
    sleep(1);
}

//ahora tenemos un ciclo que inicia en 1, termina en 10 y se incrementa de 1 en 1.
//la instruccion sleep nos sirve simplemente para aguardar X numero de segundos antes de continuar, en este caso
//queremos esperar 1 segundo en cada instruccion. Esto para que el programa no se ejecute demasiado rapido y podamos
//irlo viendo conforme se ejecuta

//si queremos ejecutarlo en la consola, les recomiendo ver el video de usando gitbash que es una herramienta que nos
//servira justamente para eso

//podemos tambien contar para atras, lo unico que tenemos que cambiar es nuestra asignacion y hacerlo -= 1,
//iniciamos en 10, nuestro numero final sera 1, y decrementamos 1 cada ciclo
for($number = 10; $number >= 1; $number -= 1) {
    echo $number;
    echo "\n";
    sleep(1);
}

//veamos cuanto tiempo tardamos en correr 4000 metros en nuestra computadora, sin ponerle el sleep, para que se den
//una idea de que tan rapido hace los calculos la computadora
for($currentDistance = 0; $currentDistance <= 4000; $currentDistance += 1) {
    echo "Nuestra distancia es".$currentDistance;
    echo "\n";
}

//hay dos cosas muy importantes, un error muy comun es hacer esto
//for($currentDistance = 0; $currentDistance = 4000; $currentDistance += 1) {
//se fijan en el = 4000, solo tiene un signo de igual, un solo signo de = es ASIGNACION, esto es muy importante
//el operador de COMPARACION es ==, y para los ciclos generalmente la comparacion es <= (MENOR O IGUAL), o >= (MAYOR
//o IGUAL) esto es porque generalmente queremos comparar que nuestro ciclo se siga ejecutando HASTA que lleguemos al
//valor final, por ejemplo en el siguiente ciclo, lo que pasa es lo siguiente
for($number = 1; $number <= 10; $number += 1) {
    echo "number es igual a".$number;
    echo "\n";
    echo "es number MENOR A 10?";
    echo "\n";
    echo "Si, number es MENOR O IGUAL QUE 10";
    echo "\n";
    sleep(2);
}