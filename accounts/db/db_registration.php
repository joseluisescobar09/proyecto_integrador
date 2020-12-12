<?php
    $db = new SQLite3('../../proyecto.db');
        
        $nombre = $_GET['nombre'];
        $primer_apellido = $_GET['primer_apellido'];
        $segundo_apellido = $_GET['segundo_apellido'];
        $nacimiento = $_GET['nacimiento'];
        $genero = $_GET['genero'];
        #$nacimiento = $_GET['nacimiento'];
        #$imagen = base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
        $correo = $_GET['email'];
        $password = $_GET['contrasena'];
        $contrasena = password_hash($password, PASSWORD_BCRYPT);   

        $consulta_email = $db->query("SELECT * from accounts WHERE email='$correo'");
        while ($row = $consulta_email->fetchArray() ) {
                $id_usuario = $row['id_usuario'];
            }

        if ($id_usuario != "") {
           header("Location: ../sign-up-error.php");

        } else {
            $db->exec("INSERT INTO accounts (nombre, apellido_paterno, apellido_materno, fecha_nacimiento, genero, email, contrasena) VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$nacimiento', '$genero', '$correo','$contrasena' );");
            header("Location: ../sign-up-success.php"); 
            
        }


?>