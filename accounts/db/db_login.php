<?php
    session_start();

    $db = new SQLite3('../../proyecto.db');
    $correo = $_GET['email'];
    $password = $_GET['contrasena'];

    $consulta_email = $db->query("SELECT * from accounts WHERE email='$correo'");

    while ($row = $consulta_email->fetchArray() ) {
                $id_usuario = $row['id_usuario'];
                $nombre = $row['nombre'];
                $correo_registro = $row['email'];
                $contrasena_registro = $row['contrasena'];
            }

    if ($id_usuario !=""){
        if (password_verify($password, $contrasena_registro)){
           $_SESSION["id_usuario"]=$id_usuario;
           $_SESSION["login"]=$correo;
           $_SESSION["nombre"]=$nombre;
           header('Location: ../index.php');    
        }else{      
          header('Location: ../log-in-error-pass.php');
        }
      }else{
       header('Location: ../log-in-error.php');
      }
    
?>
