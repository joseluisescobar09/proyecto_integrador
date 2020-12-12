<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Agenda 2030</title>

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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
     <div class="comtainer">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Agenda 2030:</h1><br>
      <img src="/images/igualdad.jpg" align="center" width="90%"  >
      <br>
      <br>
      <p class="h2 pb-0 mb-0"class="text-nowrap">Objetivo 5: Lograr la igualdad entre los géneros y empoderar a todas las mujeres y las niñas</p> <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap"> <strong>La Agenda 2030 para el Desarrollo Sostenible es un plan de acción que nace del compromiso de los Estados miembro de las Naciones Unidas, cuyo objetivo principal es velar por la protección de las personas, el planeta y la prosperidad.
      <br>
      <br>
      En el año 2000, los países miembros de las Naciones Unidas acordaron conseguir los Objetivos de Desarrollo del Milenio (ODM) para el año 2015. Al terminar el periodo de cumplimiento de esos ODM, el 25 de septiembre de 2015, la Asamblea General de la ONU estableció un nuevo acuerdo mundial sobre cambio climático. Tal día se produjo un acontecimiento histórico, los 193 Estados miembros de todo el mundo se comprometieron a adoptar la Agenda 2030, un programa impulsado por la ONU que forma parte del Programa de las Naciones Unidas para el Desarrollo, y que aborda 17 Objetivos de Desarrollo Sostenible (ODS), que a su vez se disgregan en 169 metas a alcanzar.
      <br>
      <br>
      La Agenda 2030 es un llamamiento a la acción global durante los siguientes 15 años. Los países que forman las Naciones Unidas se comprometen a movilizar los medios necesarios para la implementación de los Objetivos, mediante alianzas centradas especialmente en las necesidades de los más pobres y vulnerables.
      <br>
      <br>
      Los ODS representan un camino hacia el desarrollo sostenible abarcando las diferentes esferas económica, social y ambiental, con las que pasar del compromiso a la acción. La innovación y la acción común son clave en la implementación de los Objetivos de Desarrollo Sostenible, por ello, cuentan con la participación de nuevos actores, el sector privado y la sociedad civil.</strong> </p><br>
      <br>
      <br>
      <img src="/images/ods17.jpg" align="right" width="20%">
      <p class="h6 pb-0 mb-0"class="text-nowrap">Lograr alcanzar las metas de los ODS requiere el compromiso y la participación activa de tres órdenes de gobierno: la Administración Pública, encargado de establecer las estructuras básicas y comunes; el sector privado, que juega un papel decisivo en la implementación de la Agenda 2030; y la sociedad civil, la suma de las acciones de todas las personas favorecerá el cambio para legar un futuro próspero a las siguientes generaciones.
      <br>
      La estrategia debe ir ligada a abordar una serie de necesidades sociales, como la educación, la salud, la protección social, el empleo y el medioambiente. Para lograrlo, las naciones que forman parte de la ONU y más concretamente las que se han comprometido a alcanzar los ODS, ya sean ricas, pobres o de ingresos medianos, deben adoptarlos como propios. Y cada país es el encargado del seguimiento y evaluación de sus progresos en el cumplimiento de los objetivos.
      <br>
      La Agenda 2030 es el plan de acción climática más amplio y ambicioso impulsado por la Organización de las Naciones Unidas, pero existen otras medidas a alcanzar en un período de tiempo más breve. La Estrategia Europa 2020 es la agenda de crecimiento y empleo de la UE en esta década, cuyos objetivos ofrecen un panorama global de lo que deben ser los parámetros fundamentales, relativos al empleo, la investigación y desarrollo, el cambio climático y energía, la educación y pobreza y la exclusión social.
      <br>
      Finalmente el plan de acción mundial propuesto para 2030 desea asegurar, en base a sus objetivos, el progreso social y económico sostenible y fortalecer la paz en cada uno de los rincones del mundo.
      </p> <br>
      <br>
      <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página: <a href="https://www.un.org/sustainabledevelopment/es/2015/09/la-asamblea-general-adopta-la-agenda-2030-para-el-desarrollo-sostenible/" target="_blank" </strong>>https://www.un.org/sustainabledevelopment/
     </p><br>

      <div class="row form-group">
        <label for="" class="col-form-label col-md-2 h1"></label>
      <div class="col-md-9">
      <br>
      <br>
      </div>
      </div>
</div> 
    </div></div>
    </div>
    </div></div>
    </div>  

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
  
</body>
</html>