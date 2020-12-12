<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Noticias</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
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
  <br> <br>
<br>
    <br>
    <br>
      <div class="container">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic"class="text-justify"> 25 de noviembre, día internacional de la eliminación de la violencia contra las mujeres:</h1><br><ul></ul>
      <img src="/images/26.jpg" class="rounded"  align="right" width="40%"  >
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">

        <br></p> 

      <p class="h6 pb-0 mb-0" class="text-nowrap" class="text-justify"> <strong>Pachuca, Hgo., a 25 de noviembre de 2020.-En el marco del Día Internacional de la Eliminación de la Violencia contra la Mujer, la LXIV Legislatura del Congreso del Estado de Hidalgo realizó dos actividades, la primera, fue la conferencia realizada por la directora general del Centro de Justicia para Mujeres, Margarita Cabrera Román, así como una reunión de trabajo de la Comisión de Seguridad Ciudadana y Justicia que preside el diputado Víctor Osmind Guerrero Trejo.Durante la conferencia, Cabrera Román explicó que la discriminación de género es la que se realiza en contra de quien incumple estos roles, mientras que la violencia de género representa un ejercicio de poder orientada a causar un daño en contra de lo femenino, por ello se asocia a la violencia contra las mujeres, por lo que el delito de género se da cuando la violencia de género tiene reconocimiento o se adecúa a una norma penal.</strong> </p><br>
      <br>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página: </p>
        <a href="http://www.diarionoti7.com.mx/index.php/general/item/7154-realiza-lxiv-legislatura-actividades-en-el-marco-del-dia-naranja" target="_blank">http://www.diarionoti7.com.mx</a>
   
     <ul>
      <ul><br>
    </div></div> </div>
    <br>
    
      <div class="container">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Alinearán las políticas con proigualdad:</h1><br><ul></ul>
      <img src="/images/poli.jpg" class="rounded"  align="right" width="40%"  >
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">

        <br></p> 

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify" class="text-justify" > <strong>Activistas, académicas, investigadoras, funcionarias públicas e hidalguenses interesadas en la igualdad de géneros participaron en el foro de consulta denominado Mujeres trabajando juntas por la transformación de México, actividad organizada por el Instituto Nacional de las Mujeres (Inmujeres) con la finalidad de construir el Programa Nacional por la Igualdad entre Mujeres y Hombres (Proigualdad) 2019-2024. Sin la participación de todas las mujeres no hay un cambio real, “ni crecimiento, ni desarrollo”, expresó la titular del Inmujeres, Nadine Gasman Zylbermann, quien reconoció los avances del gobierno estatal en pro de las mujeres, entre ellos: por primera ocasión, desde hace tres años, la igualdad es un eje medular de las políticas públicas; Hidalgo es una de las primeras entidades en contar con Instancias Municipales para el Desarrollo de las Mujeres; actualmente 52 de los 84 municipios cuentan con el Sistema para Prevenir, Atender, Sancionar y Erradicar la Violencia.</strong> </p><br>
      <br>
      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página: </p>
        <a href="https://www.elsoldehidalgo.com.mx/local/alinearan-las-politicas-con-proigualdad-4036827.html" target="_blank">https://www.elsoldehidalgo.com. </a>
   
     <ul>
      <ul><br>
    </div></div> </div>

    <div class="container"><br>
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Hombres sufren más ciberacoso que mujeres en Hidalgo, revela estudio:</h1> <br><ul></ul>
      <img src="/images/acoso.jpg" class="rounded"  align="right" width="40%"  >
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">
        <br>
        <br></p> <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify" class="text-justify" > <strong>PACHUCA.- Hidalgo es el cuarto estado de la República Mexicana con mayor índice de ciberacoso a hombres entre 12 y 59 años de edad, con 20.9 por ciento; de acuerdo con cifras del Instituto Nacional de Estadística y Geografía (INEGI). El estudio Módulo sobre Ciberacoso (Mociba) 2017 muestra que, en la entidad los varones tuvieron situaciones de acoso mediante el uso de las tecnologías de la información y la comunicación (TIC), en específico el internet o el teléfono celular en 1.6 por ciento más que las mujeres.</strong> </p><br>
      <br>
      <br>
    

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página:      </p><a href="https://hidalgo.lasillarota.com/en-hidalgo-hombres-mas-acosados-que-mujereres/318176" target="_blank"> </strong>>https://hidalgo.lasillarota </a>
<br> <br>
     <ul>
      <ul>
    </div></div> </div>
    <br>

      <div class="container">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Buscan fortalecer igualdad de género para papás solteros en Hidalgo:</h1><br><ul></ul>
      <img src="/images/padre.jpg" class="rounded"  align="right" width="40%"  >
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">
        <br>
        <br></p> <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify" class="text-justify" > <strong>La diputada local, Areli Rubí Miranda Ayala, presentó una iniciativa de reforma a la Ley para Prevenir, Atender, Sancionar y Eliminar la Discriminación en el estado de Hidalgo con el objetivo de fortalecer la cultura de igualdad de género y no discriminación en contra de los padres solos que cuidan de sus hijos sin una pareja. Argumentó que la iniciativa pretende igualar las ondiciones de los padres solos con hijos y más cuando se traten de beneficios, programas o servicios que preste el Estado en apoyo de un sector específico que se encuentre en una situación de vulnerabilidad.</strong> </p><br>
      <br>
      <br>
    

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página: </p><a href="https://www.milenio.com/politica/buscan-fortalecer-igualdad-genero-papas-solteros-hidalgo" target="_blank" ></strong>>https:milenio.com </a>
     <br><br> 
     <ul>
      <ul>
    </div></div> </div>
    
    <br>
          <div class="container">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" > Mujeres representan 53% de los registros a candidaturas en Hidalgo:</h1><br><ul></ul>
      <img src="/images/diputadas.png" class="rounded"  align="right" width="40%"  >
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">
        <br>
        <br></p> <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify" class="text-justify"> <strong>PACHUCA.- Las mujeres representaron 53 por ciento de los registros de postulaciones para candidaturas del presente proceso electoral para renovación de los 84 ayuntamientos en Hidalgo, informó la consejera presidenta del Instituto Estatal Electoral (IEEH), Guillermina Vázquez Benítez. Fueron postuladas en total 6 mil 442 mujeres y 5 mil 717 hombres, representando un 53 por ciento y 47 por ciento, respectivamente, señaló durante sesión del Observatorio de Participación Política de las Mujeres de Hidalgo, que también preside. Guillermina Vázquez destacó que los números son el reflejo de las Reglas de Postulación para Garantizar la Paridad de Género y la Participación de Ciudadanas y Ciudadanos Menores de 30 Años e Indígenas que el órgano electoral fijó con la finalidad de que más mujeres accedan a cargos de elección popular.</strong> </p><br>
      <br>
      <br>
    

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página:</p> <a href="https://hidalgo.lasillarota.com/amp/estados/mujeres-representan-53-de-los-registros-a-candidaturas-en-hidalgo-ieeh-18-de-octubre-noticias-hoy-la-silla-rota/437195" target="_blank" ></strong>>https://hidalgo.com/amp/estados/mujeres </a>
     <br><br>
     <ul>
      <ul>
    </div></div> </div>
    
    <br>
          <div class="container">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" >Una violencia más silenciosa:</h1><br><ul></ul>
      <img src="/images/hom.jpg" class="rounded"  align="right" width="40%"  >
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">
        <br>
        <br></p> <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify" class="text-justify" > <strong>No es muy común escuchar sobre la violencia ejercida en contra de los hombres en una pareja, pues históricamente, en torno a la figura masculina se ha marcado un estereotipo caracterizado por la fuerza física y por la insensibilidad, caso contrario al creado para la mujer. Sin embargo, un caso de maltrato al hombre es mucho más habitual de lo que nosotros pensamos.Cabe destacar que la violencia en una relación  se entiende por cualquier agresión física, psicológica, mental y sexual con el fin de mantener el control sobre la otra persona. Comienza con cualquier comentario incómodo, después con un jaloneo que al principio puede parecer un juego entre ambos, pero conforme pasa el tiempo la situación puede llegar a ser más grave.</strong> </p><br>
      <br>
      <br>
    

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página:</p> <a href="https://www.gob.mx/imjuve/articulos/violencia-contra-hombres-una-violencia-mas-silenciosa?idiom=es" target="_blank" ></strong>>https://www.gob.mx/imjuve/articulos/violencia-contra-hombres </a>
     <br><br> 
     <ul>
      <ul>
    </div></div> <br>

    </div>
    <div class="container">
      <div class="bg-light">
  
      <h1 class=" display-4 font-weight-bold font-italic" >Desigualdad laboral en Hidalgo; mujeres ganan menos:</h1><br><ul></ul>
      <img src="/images/mujer.jpg" class="rounded"  align="right" width="40%">
      <p class="h5 pb-0 mb-0" class="bg-danger" class="text-nowrap">
        <br>
        <br></p> <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify" > <strong>En Hidalgo, la desigualdad de género se refleja, no sólo en la vida laboral, sino también en los quehaceres domésticos, ya que el Instituto Hidalguense de las Mujeres (IHM) ha registrado que el 63 por ciento de este patrón cultural lo ejercen las mujeres, mismas que se encargan también del trabajo del cuidado infantil, mientras que en este rubro, solo 37 por ciento lo desempeñan hombres. Así lo dio a conocer María Concepción Hernández Aragón, directora del IHM, quien indicó que es por esta premisa que el gobierno estatal encamina políticas públicas para insertar al sector de mujeres en el mercado laboral, ya que 30 por ciento de las personas que integran la Población Económica Activa (PEA) en la entidad son mujeres, de acuerdo con datos del Índice de Desarrollo Relativo de Género 2008-2020.</strong> </p><br>
      <br>
      <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página:</p> <a href="https://www.milenio.com/negocios/desigualdad-laboral-en-hidalgo-mujeres-ganan-menos" target="_blank" ></strong>>https:milenio.com </a>
     <br> <br>
         <div class="row form-group">
        <label for="" class="col-form-label col-md-2 h1"></label>
      <div class="col-md-9">
      </div>
      </div>
</div> 
    </div></div>
    </div>
    </div></div>
    </div>
  <br> 

    
    <div class="container-fluid"> <br>
      
      <nav class="navbar navbar-light bg-dark font-weight-normal">
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
 
  
</body>
</html>