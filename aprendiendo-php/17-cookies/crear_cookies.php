<?php
/*
Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, co el fin de recordar datos o rastrear el comportamiento del mismo en
 * la web.
 */
//Crear Cookie
//setcookie('nombre','valor que solo puede ser texto', caducidad, ruta, dominio);
//Cookie básica
setcookie('micookie','valor de mi galleta');
//Cookie con expiración
setcookie('unyear','a', time()+(5));

?>
<a href ="ver_cookies.php">Ver galletas</a>
