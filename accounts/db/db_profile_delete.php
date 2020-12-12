<?php
    session_start();

    $id_usuario = $_SESSION['login'];

    $db = new SQLite3("../proyecto.db");

    $resultado = $db->query("SELECT * from accounts where email='$id_usuario';");

    while ($row = $resultado->fetchArray()) {
        $id_usuario = $row["id_usuario"];
        $nombre = $row['nombre'];
        $email = $row['email'];
    }



    $profile = "<br>
        <h4 class='text-center'>$nombre, ¿Deseas eliminar tu cuenta? </h4> <br>
        <div class='row form-group'> 
				<label for='' class='col-form-label col-md-3'></label>
            <label for='nombre' class='col-form-label col-md-2  h1'>No. cuenta:</label>
            <div class='col-md-4'>
                <input type='text' readonly name='id_usuario' value='$id_usuario' id='nombre' class='form-control' required>
            </div>
        </div>

          
          <div class='row form-group'>
            <label for='' class='col-form-label col-md-3 h1'></label>
            <label for='exampleInputEmail1' class='col-form-label col-md-2 h1'>Correo electrónico:</label>
            
            <div class='col-md-4'>
            <input type='email' class='form-control' 
            id='email' name='email' value='$email' aria-describedby='emailHelp' readonly required>
            </div>
          </div>
        ";

    print($profile);
?>