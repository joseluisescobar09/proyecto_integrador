<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Características</title>

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
      <img src="/images/iguual.jpg" class="rounded"  align="right" width="45%"  >
      <div class="comtainer">
     <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic" align="left">Características:</h1>
      <br>
      <br>
      <br>
      <p class="h4 pb-0 mb-0" class="bg-danger" class="text-nowrap">Tienen los mismos derechos hombres y las mujeres.
      <br>
      <br>
      Tiene relación directa con los Derechos Humanos y demás derechos fundamentales.
      <br>
      <br>
      Permite reconocer los aportes sociales, políticos, económicos e investigativos que ambos géneros logran.
      <br>
      <br>
      Propicia la creación de políticas de Estado que mejoran la gobernabilidad de un país al establecer mecanismos que conlleven al desarrollo social sostenible.
      <br>
      <br>
      Promueve la creación de estructuras organizacionales más equilibradas en la que hombres y mujeres tienen las mismas oportunidades de crecer como profesionales, investigadores, gestores, así como, de capacitarse y participar en la toma de decisiones importantes, entre otros.
      <br>
      <br>
      Se evita la intolerancia y la discriminación.
      <br>
      <br>
      Reduce los índices de pobreza, ya que las mujeres tienen las mismas oportunidades de acceso de estudio, bolsa de trabajo, tienen mayores derechos maternales, entre otros.
      </p> <br>
      <br>
      <br>

    <p class="h6 pb-0 mb-0" class="text-nowrap" > <strong> Para más detalles visita la página: <a href="https://www.lifeder.com/caracteristicas-condiciones-equidad-genero/#:~:text=Algunas%20de%20las%20caracter%C3%ADsticas%20y,o%20la%20representaci%C3%B3n%20pol%C3%ADtica%20ecu%C3%A1nime.&text=Representa%20el%20reconocimiento%20de%20que%20ambos%20g%C3%A9neros%20tienen%20igualdad%20de%20capacidades." target="_blank" </strong> <br> https://www.lifeder.com/caracteristicas-condicione.
     </p> <br>

    </div>
    </div>
    </div>
    </div>
    

    </div>
    </div>
    </div>
    </div>
   

    </div></div>
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