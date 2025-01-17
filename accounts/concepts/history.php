<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Antecedentes históricos</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
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
				<a class="navbar-brand" href="../index.php">
					<img src="/images/wd.png" width="100" height="80" class="d-inline-block align-top " alt="" >
          </a>
          <h2 class="d-flex justify-content-center col-md-1 font-weight-bold font-italic"></h2>
          <h1 class="d-flex justify-content-center col-md-7 font-weight-bold font-italic">  HOMBRES + MUJERES = IGUALDAD</h1>
					<ul class="col-form-label mb-0">
            <div class="dropdown">
                <button class="btn btn-lg text-info dropdown-toggle h5" type="button" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre'];?></button>
                <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="../my-profile.php">Mi perfil</a>
                    <a class="dropdown-item" href="../logout.php">Cerrar sesión</a>
                </div>
            </div>
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
                <a class="dropdown-item   text-dark" href="what-is.php">¿Qué es?</a>
                <a class="dropdown-item  bg-white text-dark" href="features.php">Características</a>
                <a class="dropdown-item  bg-white text-dark" href="history.php">Antecedentes históricos</a>
                <a class="dropdown-item  bg-white text-dark" href="importance.php">Importancia</a>
                <a class="dropdown-item  bg-white text-dark" href="2030-agenda.php">Agenda 2030</a>
              </div>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link text-info mr-5 h5" href="../sections/news.php">Noticias<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="../sections/videos.php">Vídeos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="../sections/articles.php">Artículos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="../sections/recommendations.php">Recomendaciones</a>
            </li>        
          </ul>
        </div>
      </nav>
      </div>			</div>
    </div> 
    </div> <br> <br> <br>

     
		 <div class="bg-light">
    <div class="comtainer">
    <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Historia:</h1><br>
      <img src="/images/historia.jpg" 
      class="rounded-circle"  align="right" width="40%"  >
      <br>
      <p class="h6 pb-0 mb-0" class="bg-danger" class="text-nowrap">Los gobiernos del mundo inician el reconocimiento de la igualdad entre mujeres y hombres comoun derecho a inicios del siglo XX cuando se reconoció que las mujeres gozaban del mismo estatus jurídico para participar en la vida pública, tanto en cargos de elección popular, como en la economía y el trabajo.
      Un hecho relevante de este reconocimiento fue la aprobación en 1979 de la Convención para la
      Eliminación de todas las formas de discriminación (CEDAW, por sus siglas en inglés) porque sintetiza el conjunto de derechos que los Estados deben garantizar a las mujeres en materia civil, política, económica y social.</p> <br>
      <p class="h6 pb-0 mb-0" class="bg-danger" class="text-nowrap">Las mayores o menores libertades y derechos que gozaban las mujeres en las distintas civilizaciones de la antigüedad estaban siempre supeditadas a la autoridad del hombre, ya fuera el marido, el padre o incluso el hermano. La situación social y familiar de la mujer se basaba en dos premisas, la fidelidad al esposo y una fecunda descendencia: una mujer estéril era despreciada y podía ser repudiada por el marido, mientras que una mujer infiel solía ser condenada a muerte..</p> <br>
      <br>
      <p class="h6 pb-0 mb-0" class="bg-danger" class="text-nowrap">Durante la Antigüedad, para una mujer dedicarse a la filosofía o a la ciencia representaba una proeza, y por lo tanto es explicable que los casos que se dieron fueran aislados. Pero también hay que tener en cuenta, como afirma Umberto Eco, que "No es que no hayan existido mujeres filósofas. Es que los filósofos han preferido olvidarlas". La misoginia de las sociedades no sólo veía con malos ojos que la mujer tuviera otras ocupaciones que las del hogar, sino que además no tenían el menor interés en que quedara constancia de sus aportaciones al mundo del conocimiento y de la cultura (razón por la cual en muchos casos, entonces y a lo largo de toda la historia, fueron sus maridos u otros hombres de su entorno los que se apropiaron de sus creaciones).</p> <br>
      <br>
      <p class="h6 pb-0 mb-0" class="bg-danger" class="text-nowrap">El naciente feminismo se centró inicialmente en la reivindicación del derecho al voto de las mujeres. En los Estados Unidos, sus principales líderes fueron Susan B. Anthony,  Lucy Stone  y  Elisabeth Cady Stanton (una de las promotoras de la Declaración de Séneca Falls), encuadradas desde 1890 en la "Asociación Nacional Americana por el Sufragio de la Mujer". No obstante, ellas no vieron el resultado de su esfuerzo, ya que el derecho de las mujeres a votar no fue reconocido en los Estados Unidos hasta 1920.</p> <br>
      <br>
      <p class="h6 pb-0 mb-0" class="bg-danger" class="text-nowrap">Tras la Segunda Guerra Mundial y con el inició en de las actividades de las Naciones Unidas, en 1952 se aprobó la Convención sobre los derechos políticos de la mujer:
        Posteriormente, las Naciones Unidas han ido aprobando otros documentos relativos a los derechos de las mujeres:</p>
        <br>
        <ul class="text-nowrap h6 pb-0 mb-0 col-md-5">
      <li>La Declaración sobre la eliminación de la discriminación contra la mujer (1967).</li> 
        <br>
        <li> La Convención sobre la eliminación de todas las formas de discriminación contra la mujer (1979).</li>
        <br>
        <li> La Declaración sobre la eliminación de la violencia contra la mujer (1993).</li>
        <br>
        <li> Los documentos de las Naciones Unidas son la concreción de las normas de convivencia fundamentales (en el caso de las declaraciones) </li> <p>y de la suma de normas y mecanismos para verificar el cumplimiento de las primeras (en el caso de las convenciones, cuando estas son </p>por los estados). 
        <br> <br>
        <p> Con relación a los derechos de la mujer, durante el siglo XX las Naciones Unidas la ha definido, por primera vez en la historia y sin ningún </p>tipo de reservas, como sujeto de derechos inalienables y como igual al varón. <br>
        <br>
        <br></ul>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página: <a href="https://www.monografias.com/trabajos104/igualdad-genero/igualdad-genero.shtml" target="_blank" </strong>>historia/de/la/igualdad
     </p><br>

    </div></div>
    </div>
    </div>


    <div class="container-fluid"> <br>
      
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
  
</body>
</html>