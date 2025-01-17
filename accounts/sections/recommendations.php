<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Recomendaciones</title>

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
                <a class="dropdown-item   text-dark" href="../concepts/what-is.php">¿Qué es?</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/features.php">Características</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/history.php">Antecedentes históricos</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/importance.php">Importancia</a>
                <a class="dropdown-item  bg-white text-dark" href="../concepts/2030-agenda.php">Agenda 2030</a>
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
    
      <div class="container">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Recomendaciones:</h1><br><ul></ul>
      <p class="h5 pb-0 mb-0" > Visita estos sitios que hemos preparado para ti, busca más información respecto al tema que estamos viviendo en la actualidad.

        <br>
        <br>
        </p>

<br>
      <br>
    <h3>Sitios sobre Leyes en el Estado de Hidalgo</h3>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Ley para la igualdad entre mujeres y hombres del Estado de Hidalgo:</p>
        <a href="http://www.pjhidalgo.gob.mx/transparencia/leyes_reglamentos/leyes/109_Ley_igualdad_hombres_mujeres.pdf" >http://www.pjhidalgo.gob.mx/transparencia </a> <br> </strong>
        <a href="https://legislacion.vlex.com.mx/vid/ley-igualdad-mujeres-hombres-597728294" target="_blank"><strong>https://legislacion.vlex.com.mx </a> <br> </strong>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Ley del instituto hidalguense de las mujeres:</p> 
        <a href="http://www.congresohidalgo.gob.mx/biblioteca_legislativa/Leyes/92Ley%20del%20Instituto%20Hidal_legislativa/Leyes/92Ley%20del%20Instituto%guense%20de%20las%20Mujeres.pdf" target="_blank">http://www.congresohidalgo.gob.mx</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Reglamento de operación de la Ley para la Igualdad entre mujeres y hombres del Estado de Hidalgo:</p> 
        <a href="http://cedoc.inmujeres.gob.mx/ftpg/Hidalgo/HGO_MA6_Reglamento_LeyIgualdad_12.pdf" target="_blank">http://cedoc.inmujeres.gob.mx</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Programa transversal de perspectiva de género </p> 
        <a href="http://planestataldedesarrollo.hidalgo.gob.mx/pdf/Especiales/GENERO/Programa_Transversal_Genero.pdf" target="_blank">http://planestataldedesarrollo.hidalgo.gob.mx </a> <br> </strong>
        <br>

    <h3>Datos relevantes sobre la igualdad de género</h3>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Equidad de género:</p>
        <a href="http://plural-hgo.com/egenero.php" target="_blank">http://plural-hgo.com/egenero.php </a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Participación política de las mujeres en el estado de hidalgo:</p>
        <a href="http://www.ieepco.org.mx/biblioteca_digital/SOMEE%202011/%C3%81rea%20tem%C3%A1tica%208/Casta%C3%B1%C3%B3n%20y%20Hern%C3%A1ndez.%20Participaci%C3%B3n....pdf" target="_blank">http://www.ieepco.org.mx </a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Relevancia de la dimensión para la cultura y el desarrollo:</p>
        <a href="https://es.unesco.org/creativity/sites/creativity/files/digital-library/cdis/Iguldad%20de%20genero.pdf" target=_"blank">https://es.unesco.org </a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Unidad Institucional para la igualdad entre Mujeres y Hombres:</p>
        <a href="http://uiimh.seph.gob.mx/" target="_blank">http://uiimh.seph.gob.mx</a> <br> </strong>
        <br>

   <h3>Instituciones de igualdad de género</h3>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>ONU Mujeres México:</p>
        <a href="https://mexico.unwomen.org/es/conozcanos/acerca-de-onu-mujeres"
        target="_blank">https://mexico.unwomen.org</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>CONAPRED:</p> 
        <a href="http://www.conapred.org.mx/index.php?contenido=noticias&id=4835&id_opcion=&op=214" target="_blank">http://www.conapred.org.mx</a> <br> </strong>
        <br>

   <h3>Consejos para educar a las nuevas generaciones</h3>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Cuaderno de valores:</p> 
        <a href="https://www.educo.org/Blog/como-educar-a-tus-hijos-en-la-igualdad-de-genero"
        target="_blank">https://www.educo.org/Blog </a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Cómo educar niños para un mundo con igualdad de género:</p> 
        <a href="https://believe.earth/es/como-educar-ninos-para-un-mundo-con-igualdad-de-genero/"
        target="_blank">https://believe.earth</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Educar en la igualdad: 7 aspectos a tener en cuenta:</p>
        <a href="https://www.hacerfamilia.com/educacion/educar-igualdad-educacion-igualdad-sexos-20170330145309.html"
        target="_blank">https://www.hacerfamilia.com/educacion</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Lecciones para Educar sin Machismo:</p>
        <a href="http://machistaenrehabilitacion.com/entender-el-problema/lecciones-para-educar-sin-machismo"
        target="_blank">http://machistaenrehabilitacion.com</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Consejos para educar sin machismo y en igualdad:</p> 
        <a href="https://artymanas.com/educar-sin-machismo/"
        target="_blank">https://artymanas.com/educar-sin-machismo</a> <br> </strong>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong>Cómo preparar a un niño para un mundo de igualdad:</p>
        <a href="https://elpais.com/elpais/2019/01/04/buenavida/1546637409_504712.html"
        target="_blank">https://elpais.com/elpais/2019/01/04/buenavida</a> <br> </strong>
   
     <ul>
      <ul><br>
    </div></div> </div>
  

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