<?php
    session_start();
    $id_usuario = $_GET["id_usuario"];

    $db = new SQLite3("../../proyecto.db");

    $db->exec("DELETE FROM accounts where id_usuario='$id_usuario';");

    // Desarmar todas las variables de sesión
    $_SESSION = array();
    
    // Destruye la sesión
    session_destroy();
    
    // Redirecciona a index
    header("location: ../sign-up-del-success.php");
    exit;
?>