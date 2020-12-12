<?php
    $db = new SQLite3("../../proyecto.db");

    $resultado = $db->query("SELECT * from accounts;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID:</th>
                <th>Nombre:</th>
                <th>Apellido paterno:</th>
                <th>Apellido materno:</th>
                <th>E-mail:</th>
                <th>Contraseña:</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";

    print($table);
    

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $id_usuario = $row['id_usuario'];
        $nombre = $row['nombre'];
        $apellido_paterno = $row['apellido_paterno'];
        $apellido_materno = $row['apellido_materno'];
        $email = $row['email'];
        $contrasena = $row['contrasena'];

        $table = "
            <tr>
                <td>$id_persona</td>
                <td>$nombre</td>
                <td>$apellido_paterno</td>
                <td>$apellido_materno</td>
                <td>$email</td>
                <td>$contrasena</td>
                <td><a href='view.php?id_persona=$id_persona'>View</a></td>
                <td><a href='update.php?id_persona=$id_persona'>Update</a></td>
                <td><a href='delete.php?id_persona=$id_persona'>Delete</a></td>
            </tr>
        ";

        print($table);


/*
        //Forma 2 para mostrar los datos
        print("<tr>");
        print("<td>".$row['id_persona']."</td>");
        print("<td>".$row['nombre']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("<td><a href='view.php?id_persona=".$row['id_persona']."'>View</a></td>");
        print("<td><a href='update.php?id_persona=".$row['id_persona']."'>Update</a></td>");
        print("<td><a href='delete.php?id_persona=".$row['id_persona']."'>Delete</a></td>");
        print("</tr>");
        */
    }
 
    print("</table>");
    print("<p> $email </p>");
?>