<h1>Lista Usuario</h1>
<?php
 foreach ($usuarios as $usuario) {
   echo $usuario['ID'] . "<br>";
   echo $usuario['NOMEUSUARIO'] . "<br>";
   echo $usuario['EMAIL'] . "<br>";
    
 }