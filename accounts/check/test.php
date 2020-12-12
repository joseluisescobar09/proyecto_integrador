<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Evaluate</title>

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

  </script>
  <script type="text/javascript" src="test.js" charset="utf-8">
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
        <a class="navbar-brand h4 mr-5 text-info" href="test.php">Evaluate</a>
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
    
<div class="container justify-content-center bg-light">
      <form name="formevaluacion"  id="miForm">
        <h2 class="text-danger">Instrucciones:</h2> 
         <div class="row form-group">
           <label for="" class="col-form-label col-md-1 h1"></label>
           <div class="col-md-11">      
              <h4>Evalúa tus pensamientos. Responde el siguiente cuestionario de evaluación, cada opción tiene un valor asignado, al final presiona el botón evaluar y en automático devolverá tus resultados:</h4><br>
            </div>
         </div>

         <div class="row form-group">    
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-6 " >1.- Para ti, ¿Qué es la igualdad de género?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg1" id="pregunta1" value="0" required/>  Mujeres requieren de más poder, es un sentimiento de ofensa hacia ellas<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg1" id="pregunta1" value="5" required/> Hombres y mujeres son iguales ante la Ley.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg1" id="pregunta1" value="10" required/>  Hombres a sus actividades y mujeres a las suyas para evitar conflictos y llevar una vida equilibrada.<br />
              </div>
            </div>
         </div>

          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-6 ">2.- ¿Confías en las habilidades de una mujer?</h5>             
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg2" id="preg2" value="5" required/>  Sí, todos tenemos las mismas capacidades.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg2" id="preg2" value="10" required/> No, las mujeres no tienen la suficiente capacidad a la de un hombre.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg2" id="preg2" value="0" required/>  La habilidad de una mujer es mucho mayor a la de los hombres.<br />
              </div>
            </div>
         </div>
         
          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-10 ">3.- ¿Qué opinas sobre los matrimonios a temprana edad o forzados?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg3" id="preg3" value="10" required/> Si es necesario casarse así sea forzoso, no hay problema.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg3" id="preg3" value="0" required/>  Es una violación a los derechos de la mujer.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg3" id="preg3" value="5" required/>  Es una violación hacia ambos géneros.<br />
              </div>
            </div>
         </div>

        <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">4.- En un trabajo duro, pesado, si fueras el dueño de ese empleo, ¿le darías la confianza a una mujer de realizarlo? </h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg4" id="preg4" value="0" /> Si, las mujeres son mejores en todo.<br required/>
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg4" id="preg4" value="10" required/>  No, es un trabajo muy delicado para ellas.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg4" id="preg4" value="5" required/>  Si, ambos géneros tienen las mismas oportunidades.<br />
              </div>
            </div>
         </div>

         <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">5.- ¿Una mujer debe ganar el mismo sueldo que un hombre si desempeñan el mismo trabajo?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg5" id="preg5" value="0" required/> Deben ganar un sueldo mucho mejor al de un hombre.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg5" id="preg5" value="5" required/>  Si demuestran el mismo desempeño es justo que ganen lo mismo.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg5" id="preg5" value="10" required/>  No, una mujer no demuestra lo suficiente para merecerlo.<br />
              </div>
            </div>
         </div>

          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">6.- ¿Crees que solo las mujeres sufren de algún maltrato, acoso?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg6" id="preg6" value="5" required/> Hoy en día cualquier persona sin importar el género puede sufrirlo.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg6" id="preg6" value="0" required/>  Si, solo ellas son las afectadas.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg6" id="preg6" value="10" required/>  No, hombres también, solo que los hombres no se andan quejando.<br />
              </div>
            </div>
         </div>

          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">7.- ¿Qué opinas de que un hombre muestre actos de caballerosidad hacia una mujer?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg7" id="preg7" value="10" required/> Por costumbre todos los hombres deben tratar así a las mujeres.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg7" id="preg7" value="0" required/>  Es un acto de debilidad hacia ellas.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg7" id="preg7" value="5" required/>  Lo considero como un acto de cortesía/bondad por parte de un hombre.<br />
              </div>
            </div>
         </div>

          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">8.- ¿Estás de acuerdo con las manifestaciones (actos de vandalismo) que las mujeres hacen en la vía pública?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg8" id="preg8" value="0" required/> Si, ya era hora de que las mujeres sean escuchadas, así sea de la forma mas drástica.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg8" id="preg8" value="5" required/>  Es correcta expresar la inconformidad, pero no es la forma correcta de hacerlo.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg8" id="preg8" value="10" required />  No, mucho patrimonio de la nación ha sido afectado por culpa de personas inconscientes como ellas.<br />
              </div>
            </div>
         </div>

          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">9.- ¿Qué opinas sobre los hombres que son agredidos en este tipo de manifestaciones?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg9" id="preg9" value="5" required /> No es necesario agredir a terceros para conseguir un fin.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg9" id="preg9" value="0" required />  Es un acción necesaria para que ellos sientan lo que ellas sufren.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg9" id="preg9" value="10" required />  Son personas ignorantes que no tienen porqué agredir a personas que no conocen, incluso merecen ir a prisión.<br />
              </div>
            </div>
         </div>

          <div class="row form-group">
            <label for="" class="col-form-label col-md-1 "></label>
            <div class="col-md-10">
                  <h5 class=" col-md-12">10.- Si conocieras a una mujer, hombre que sufre de acoso, violación, maltrato. ¿Qué harías?</h5>
              <div class="form-check font-italic">
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg10" id="preg10" value="2.5" required/> Mantenerme callado para evitar problemas.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg10" id="preg10" value="5" required/>  Hacer una denuncia anónima.<br />
                <label for="" class="col-form-label col-md-1 h1"></label>
                <input type="radio" name="preg10" id="preg10" value="7.5" required />  Ese asunto no es de mi incumbencia.<br />
              </div>
            </div>
         </div>

         <button type="button" class="btn btn-success btn-lg my-1 float-right" name="evaboton" id="botoneva" 
          onclick="evaluar()">Evaluar</button> <br> <br> <br>
          
          <div id="respuesta" class="text-center text-danger font-weight-bold h3"></div> <br>
      </form>
    </div> <br> <br><br>


    </div>
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