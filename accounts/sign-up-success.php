<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inicia sesión</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
	 crossorigin="anonymous">

   <link rel="stylesheet" 
      href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
      integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" 
      crossorigin="anonymous">

	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	 crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
	 crossorigin="anonymous">
	</script>

	<link rel="icon" href="/images/icono.png" type="image/png" />
</head>

<body>

	<div class="row justify-content-center">
		<div class="container-fluid">
			<nav class="navbar navbar-light bg-white">
				<a class="navbar-brand" href="../index.html">
					<img src="/images/wd.png" width="100" height="80" class="d-inline-block align-top " alt="" >
          </a>
          <h2 class="d-flex justify-content-center col-md-1 font-weight-bold font-italic"></h2>
          <h1 class="d-flex justify-content-center col-md-7 font-weight-bold font-italic">  HOMBRES + MUJERES = IGUALDAD</h1>
					<ul class="col-form-label mb-0">
						<a class="dropdown  float-right text-dark h4" href="sign-up.php" role="button">Registrate</a>
					</ul>
				</nav>
		</div>
	</div>
    <div class="container">
      <div class="row mt-3">
        <div class="col">
      
<div class="container bg-white">
      <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <label for="" class="col-form-label col-sm-0 "></label>
        <a class="navbar-brand h4 mr-5 text-info" href="../check/test.php">Evaluate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mr-5"></span>
        </button>

        <div class="collapse navbar-collapse bg-light" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-info mr-5 h5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Conceptos generales
              </a>
              <div class="dropdown-menu bg-white" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item   text-dark" href="../concepts/what-is.html">¿Qué es?</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/features.html">Características</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/history.html">Antecedentes históricos</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/importance.html">Importancia</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/2030-agenda.html">Agenda 2030</a>
              </div>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link text-info mr-5 h5" href="../sections/news.html">Noticias<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="../sections/videos.html">Vídeos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="../sections/articles.html">Artículos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="../sections/recommendations.html">Recomendaciones</a>
            </li>        
          </ul>
        </div>
      </nav>
      </div>			</div>
    </div> 
    </div> <br> <br> <br>
    

<div class="container bg-light">
    <div class="alert alert-success text-center" role="alert">
        Registro creado con exito, ahora inicia sesión. 
    </div><br>
              <form action="db/db_login.php" method="GET">
          <br>
          <div class="row form-group">
            <label for="" class="col-form-label col-md-3 h1"></label>
            <label for="exampleInputEmail1" class="col-form-label col-md-2 h1">Correo electrónico:</label>
            <div class="col-md-5">
            <input type="email" class="form-control" 
            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@domain.com" name="email" id="email" required>
            <small id="emailHelp" class="form-text font-weight-bold text-danger">Ingresa una dirección valida.</small>
            </div>
          </div>
          
          <div class="row form-group">
            <label for="" class="col-form-label col-md-3 h1"></label>
            <label for="exampleInputPassword1" class="col-form-label col-md-2 h1">Contraseña:</label>
            <div class="col-md-5">
              <div class="input-group" id="show_hide_password">
            <input class="form-control" type="password" name="contrasena" name="contrasena" placeholder="mín. 8 caracteres" required minlength="8">
            <div class="input-group-addon">
              <a href=""> <center><i class="fa fa-eye-slash btn btn-primary ion-crop " style='width:35px; height:38px'aria-hidden="true"></i></center> </a>
              
            </div>
          </div>
            </div>
          </div><br> <br>
<br>

        <label for="" class="col-form-label col-md-9 h1"></label>
        <button type="reset" class="btn btn-warning btn-lg my-1 font-weight-bold text-white float-center">Limpiar</button>
        <button type="submit" class="btn btn-success btn-lg my-1 font-weight-bold float-right">Iniciar sesión</button>
        <label for="" class="col-form-label col-md-1 h1"></label>

        </form>

    </div> <br> <br><br>

    </div></div>
    </div>
    <div class="container-fluid">
      
      <nav class="navbar navbar-light bg-dark">
        <ul>
          <a class="text-white col-md-1" href=""></a>
        </ul>
        <ul>
          <a class="text-white" href="mailto:womenmenequals@gmail.com">Contactanos</a>
        </ul>

        <ul>
          <a class="text-white" href="/docs/privacy.pdf" target="_blank">Aviso de privacidad</a>
        </ul>

        <ul>
          <a class="text-white" href="/docs/terms.pdf" target="_blank">Terminos y condiciones</a>
        </ul> 

          <br>
          <p class="text-white text-center col-md-12" >&#169; 2020 Todos los derechos reservados.</p>
          
      </nav>
    </div>
  </div> 

  <script>
  $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
  
</body>
</html>