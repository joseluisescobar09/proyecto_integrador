<?php
// Inicializa la sesión
session_start();
 
// Desarmar todas las variables de sesión
$_SESSION = array();
 
// Destruye la sesión
session_destroy();
 
// Redirecciona a index
header("location: ../index.html");
exit;
?>