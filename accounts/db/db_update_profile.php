<?php
    session_start();
    $id_user = $_GET["id_usuario"];
    $correo = $_GET['email'];
    $password = $_GET['contrasena'];
    $contrasena = password_hash($password, PASSWORD_BCRYPT);

    $db = new SQLite3('../../proyecto.db');

    $consulta_email = $db->query("SELECT * from accounts WHERE email='$correo'");

    while ($row = $consulta_email->fetchArray() ) {
                $id_usuario = $row['id_usuario'];
                $nombre = $row['nombre'];
                $correo_registro = $row['email'];
            }



    if ($id_usuario != ''){
        if ($id_usuario == $id_user){//si el usuario solo actualizó su contraseña (correo se mantiene)
            $db->exec("UPDATE accounts SET contrasena='$contrasena' WHERE id_usuario='$id_user';");
            $_SESSION = array();            // Desarmar todas las variables de sesión
            session_destroy();// Destruye la sesión
            header('Location: ../update/update-password.php'); 
            exit;  

        }else{    
            header('Location: ../update/update-error.php');
          //si el usuario actualizó un correo que ya está asignado para otro usuario
        }
      }else{
          header('Location: ../update/update-both.php');//si el usuario actualizó el e-mail y contraseña
          $_SESSION = array(); // Desarmar todas las variables de sesión
          session_destroy();// Destruye la sesión
          $db->exec("UPDATE accounts SET email='$correo', contrasena='$contrasena' WHERE id_usuario='$id_user';"); 
      }

?>