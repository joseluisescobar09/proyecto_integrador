<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Women not only make the dishes, men also.</title>

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
				<a class="navbar-brand" href="index.php">
					<img src="/images/wd.png" width="100" height="80" class="d-inline-block align-top " alt="" >
          </a>
          <h2 class="d-flex justify-content-center col-md-1 font-weight-bold font-italic"></h2>
          <h1 class="d-flex justify-content-center col-md-7 font-weight-bold font-italic">  HOMBRES + MUJERES = IGUALDAD</h1>
					<ul class="col-form-label mb-0">
            <div class="dropdown">
                <button class="btn btn-lg text-info dropdown-toggle h5" type="button" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre'];?></button>
                <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="my-profile.php">Mi perfil</a>
                    <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                </div>
            </div>
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
        <a class="navbar-brand h4 mr-5 text-info" href="check/test.php">Evaluate</a>
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
                <a class="dropdown-item  text-dark" href="concepts/what-is.php">¿Qué es?</a>
                <a class="dropdown-item  bg-white text-dark" href="concepts/features.php">Características</a>
                <a class="dropdown-item  bg-white text-dark" href="concepts/history.php">Antecedentes históricos</a>
                <a class="dropdown-item  bg-white text-dark" href="concepts/importance.php">Importancia</a>
                <a class="dropdown-item  bg-white text-dark" href="concepts/2030-agenda.php">Agenda 2030</a>
              </div>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link text-info mr-5 h5" href="sections/news.php">Noticias<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="sections/videos.php">Vídeos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="sections/articles.php">Artículos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mr-5 h5" href="sections/recommendations.php">Recomendaciones</a>
            </li>        
          </ul>
        </div>
      </nav>
      </div>			</div>
    </div> 
    
    </div> <br> <br> <br>
    

    <div class="row">
      <label for="" class="col-form-label col-md-2 h1"></label>
      <div class="col-sm-8">

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
 
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
              <a href="sections/news.php"> <img src="../images/carousel/papasolteroarco33.png" align="center"  class="d-block w-100"
              width="800px" height="400px" alt="..."> </a>
              <div class="carousel-caption d-none d-md-block  text-dark"></a>
                <p> </p>
              </div><h4 class="font-weight-bold text-center">Buscan fortalecer igualdad de género para papás solteros en Hidalgo.</h4>
            </div>
            <div class="carousel-item" data-interval="5000">
              <a href="sections/news.php"> <img src="../images/carousel/marco3ciber.png" align="center"  class="d-block w-100"
              width="800px" height="400px" alt="..."></a>
              <div class="carousel-caption d-none d-md-block text-dark">
              </div><h3 class="font-weight-bold text-center">Hombres más acosados que mujeres.</h3> <br> <br>
            </div>
            <div class="carousel-item">
              <a href="sections/news.php"> <img src="../images/carousel/marco3.png" align="center" class="d-block w-100"
              width="800px" height="400px" alt="..."></a>
              <div class="carousel-caption d-none d-md-block text-dark">
                
              </div><h3 class="font-weight-bold text-center">Alinearán las políticas con proigualdad.</h3> <br> <br>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div><br> <br>
    <div class="col-md-14">

      <hr class="bg-primary"><br>
    </div>
    <div class="comtainer bg-light">
    <div class="col-md-12 ">
      <h1 class=" display-4 font-weight-bold font-italic text-center">¡Bienvenido <?php echo $_SESSION['nombre'];?>!</h1><br>
      <p class="h4 pb-0 mb-0">Los hombres y mujeres somos iguales. Por eso hemos tomado la iniciativa de crear este portal web donde juntos podamos conocer el valor de ambos. Para que la igualdad de género no sea un sueño, sino una realidad</p> <br>

      <p class="h4 pb-0 mb-0"> <strong>¡Únete!…</strong> Aquí encontraras información verídica y datos importantes sobre el tema, podrás evaluar tu nivel de equidad; además de reflexionar sobre las experiencias de otras personas y compartir las tuyas. </p><br>

      <div class="row form-group">
        <label for="" class="col-form-label col-md-2 h1"></label>
      <div class="col-md-9">
        
        <img src="https://igualdad.ine.mx/wp-content/uploads/2019/01/inicio-unidadgenero.png" align="center" width="85%"  >
      <br><br>
      </div>
      </div>
</div> 
    </div></div>
    </div> <br>

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