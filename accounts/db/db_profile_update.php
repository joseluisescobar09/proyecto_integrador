<?php
    session_start();

    $id_usuario = $_SESSION['login'];

    $db = new SQLite3("../../proyecto.db");

    $resultado = $db->query("SELECT * from accounts where email='$id_usuario';");

    while ($row = $resultado->fetchArray()) {
        $id_usuario = $row["id_usuario"];
        $nombre = $row['nombre'];
        $apellido_paterno = $row['apellido_paterno'];
        $apellido_materno = $row['apellido_materno'];
        $apellido_materno = $row['apellido_materno'];
        $nacimiento = $row['fecha_nacimiento'];
        $sexo = $row['genero'];
        $email = $row['email'];
    }

    if ($sexo === "H") {
        $genero = "Masculino";
    } else {
        $genero = "Femenino";
    }

    $profile = "
        <div class='row form-group'> 
				<label for='' class='col-form-label col-md-3'></label>
            <label for='nombre' class='col-form-label col-md-2  h1'>No. cuenta:</label>
            <div class='col-md-4'>
                <input type='text' readonly name='id_usuario' value='$id_usuario' id='nombre' class='form-control' required>
            </div>
        </div>
        <div class='row form-group'> 
				<label for='' class='col-form-label col-md-3'></label>
            <label for='nombre' class='col-form-label col-md-2  h1'>Nombre(s):</label>
            <div class='col-md-4'>
                <input type='text' readonly name='nombre' value='$nombre' id='nombre' class='form-control' required>
            </div>
        </div>

          <div class='row form-group'>
						<label for='apellido1' class='col-form-label col-md-3 h1'></label>
            <label for='apellido1' class='col-form-label col-md-2 h1'>Apellido paterno:</label> 
            <div class='col-md-4'>
              <input type='text' name='primer_apellido' value='$apellido_paterno' id='primer_apellido' class='form-control' readonly required>
            </div>
          </div>

          <div class='row form-group'>
						<label for='' class='col-form-label col-md-3 h1'></label>
            <label for='apellido2' class='col-form-label col-md-2 h1'>Apellido materno:</label> 
            <div class='col-md-4'>
              <input type='text' name='segundo_apellido' value='$apellido_materno' id='segundo_apellido' class='form-control' readonly required>
            </div>
          </div>


          <div class='row form-group'>
						<label for='' class='col-form-label col-md-3 h1'></label>
            <label for='nacimiento' class='col-form-label col-md-2 h1'>Fecha de nacimiento:</label> 
            <div class='col-md-4'>
              <input type='date' id='nacimiento' name='nacimiento' value='$nacimiento'  maxlength='3' class='form-control' readonly required>
            </div>
          </div>


          <div class='row form-group'>
            <label for='' class='col-form-label col-md-3 h1'></label>
            <label for='genero' class='col-form-label col-md-2 h1'>Género:</label> 
           <div class='col-md-4'>
              <input type='text' id='genero' name='genero' value='$genero' class='form-control' readonly required>
            </div>
          </div> 
          
          <div class='row form-group'>
            <label for='' class='col-form-label col-md-3 h1'></label>
            <label for='exampleInputEmail1' class='col-form-label col-md-2 h1'>Correo electrónico:</label>
            
            <div class='col-md-4'>
            <input type='email' class='form-control' 
            id='email' name='email' value='$email' aria-describedby='emailHelp' placeholder='example@domain.com' required>
            <small id='emailHelp' class='form-text font-weight-bold text-danger'>* Coloca una dirección valida.</small>
            </div>
          </div>
          
          <div class='row form-group'>
            <label for='' class='col-form-label col-md-3 h1'></label>
            <label for='exampleInputPassword1' class='col-form-label col-md-2 h1'>Contraseña</label>

            <div class='col-md-4'>
              <div class='input-group' id='show_hide_password'>
            <input class='form-control' type='password' id='contrasena' name='contrasena' placeholder='mín. 8 caracteres' required minlength='8'>
            <div class='input-group-addon'>
              <a href=''> <center><i class='fa fa-eye-slash btn btn-primary ion-crop' style='width:35px; height:38px'aria-hidden='true'></i></center> </a>
              
            </div>
          </div><br>          
            </div> 
          </div>
        <br></div>
        ";

    print($profile);
?>