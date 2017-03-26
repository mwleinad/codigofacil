<?php
//en nuestros programas anteriores he ejecutado el programa desde "consola", en mi caso vagrant que es mi maquina
//virtual nos permite hacer eso, en su caso si estan usando wampserver les mostrare una manera sencilla de ejecutarlo
//desde una consola. Lo podemos hacer desde cmd, pero a mi me gusta una herramienta que se llama git bash que nos
//permite tener una consola mas parecida a la de linux, de esa forma los mismos comandos que yo uso seran los que
//usaran ustedes

//descargamos git desde https://git-scm.com/downloads
//es importante marcar la parte de "windows explorer integration" y marcar la parte de "git bash here"
//al darle siguiente la opcion de "use git from the windows command prompt", darle siguiente, usar openssh, siguiente
//use openssl library, siguiente "checkout as-is commit unis-style line endings, siguiente, use windows default console
//window, siguiente, dejar las opciones por defecto, siguiente y finalizar.

//despues de instalarlo, ir a inicio y buscar git bash
//el primer paso es verificar nuestra version de php
//tipeamos php -v
//nos debe de salir la version de php (asegurarse que wampserver este corriendo)
//esto nos asegura que si funcionara todo lo que ejecutemos en esta consola
//si hemos seguido el tutorial, debemos de tener nuestros archivos en la carpeta c:/wamp/www/CodigoFacil
//o c:/wamp64/www/CodigoFacil
//typeamos cd /c/wamp/www/CodigoFacil en git bash para ir a este directorio
//(si nuestra instalacion es de wamp64 probablemente el directorio cambie, poner el directorio que corresponda)
// si typeamos ls nos mostrara una lista de archivos en el directorio
//finalmente ejecutamos el arhivo con el comando php, en este caso tipeamos
//php HelloWorld.php
//y veremos el resultado en pantalla, si hacemos cambios en el archivo y guardamos, y ejecutamos otra vez, veremos los
//cambios en tiempo real sin necesidad de utilizar un explorador (chrome).
//tambien tiene la ventaja de que podemos ver la ejecucion en tiempo real (cuando ejecutamos desde el explorador
//primero hace los calculos y nos muestra solo el resultado final) en la consola podemos ver en tiempo real la ejecucion
//del programa.