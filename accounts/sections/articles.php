<?php
session_start();
?>
<!DOCTYPE html>
<html lang=es>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Artículos</title>

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
      
      <div class="container ">
      <div class="bg-light">
      <div class="col-md-12 ">
      <h1 class=" display-3 font-weight-bold font-italic" >Artículos:</h1><br><ul></ul>
      <p class="h5 pb-0 mb-0" > Experiencias reales vividas por la desigualdad e igualdad que existe en Hidalgo:  </p>
      <br>
      <br>

      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>
        <br>
        "Mi experiencia con la desigualdad de género fue cuando tenía 8 años, estaba en tercero de primaria, y tenía que hacer un trabajo en equipo con dos niñas y tres niños, al ser un equipo alguien tenía que ser quien dirigiera al equipo, yo quería ser quien lo dirigiera pero el profesor se negó, dijo que no podía ser líder de equipo por ser mujer y no tener la autoridad e inteligencia de un hombre, así que el líder fue uno de los niños".</strong> </p> <p class="text-primary">Jazmin A. </p>
      <br>
      <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>
        “Soy Padre Solero y la gente me señala como el malo de la historia por quitarle nuestro hijo a mi ex pareja, siempre nos han tachado a los hombres de malos, pero las mujeres también lo son, mi expareja hacia que en mi hogar hubiera violencia, me golpeaba a mí y a nuestro hijo. Decidí demandarla y es así como obtuve la custodia completa de nuestro hijo y mi ex pareja me debe dar manutención”.</strong> </p>
         <p class="text-primary">Luis P. </p><br>

       <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>
        "La igualdad de género no viene de un punto psicológico, igualdad viene de lo familiar y social. En la actualidad ya hay igualdad en el ámbito laboral y en pocos casos en lo familiar, el cambio está en que estas nuevas generaciones cambien su forma de educar a sus hijos sin tener estereotipos de género, las niñas ahora ya pueden jugar con carritos y los niños con muñecas".</strong> </p>
        <p class="text-primary">Psic. Norma </p>
      <br>
       <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>“Crecí con mi mamá y mi abuelita, ellas me apoyaron para ser profesional, actualmente soy Arquitecta y me considero una mujer independiente, mi experiencia en la igualdad de género fue cuando decidí casarme y mi madre y mi abuelita me dijeron que tenía que dejar mi trabajo y dedicarme únicamente a atender a mi esposo, depender de lo que él me diera, tener hijos, obedecerlo en lo que él me mandara. Ellas crecieron con esas creencias, fue la educación que les dieron sus padres, por lo que entre mi ahora esposo y yo les explicamos que en la actualidad los hombres y mujeres pueden trabajar, y que las mujeres no debemos depender de nuestra pareja o esposo.”</p> </strong>
       <p class="text-primary">Lic. Fernanda </p> <br>
       
       <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>“Mi experiencia con la desigualdad de género fue cuando tenía aproximadamente 10 años y mi abue quería que yo y mi hermana sirvieramos a mi hermano por ser hombre, mi mamá nunca apoyo eso y lo enseñó a ayudar con labores de todo tipo al igual que a mí y a mi hermana. 
       Esto es un claro ejemplo de que la educación en casa es la raíz de las malas prácticas de la sociedad”.</p> </strong>
       <p class="text-primary">Brenda P.</p><br>

        <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>“Mi ex esposa era una mujer muy feminista, no hacía nada en nuestro hogar, no quería ni cuidar a nuestra hija, siempre me hacía pagar a una persona, me hacía sentir menos, afecto mi vida laboral. Mi jefe me recomendó tomar terapia y en esa terapia supe que no debía permitirlo así que me separe de ella y hoy comparto la custodia de nuestra hija y por ley nos dividimos los gastos”.</p> </strong>
       <p class="text-primary">Juan R.</p><br>

       <p class="h6 pb-0 mb-0" class="text-nowrap text-justify"> <strong>“Me case a los 16 años, porque no me gustaba cuidar a mis hermanas, mi esposo era estéril y no tuvimos hijos, desde los 16 años yo lo obedecía y no podía decirla a nada que No, a los 25 años me escape y viaje a México encontré un trabajo en una fonda de comida, a los 35 años solicite mi divorcio, y no fue muy complicado ya que lo tomaron como matrimonio precoz, en la actualidad tengo mi propio Restaurante y vivo en un matrimonio donde mi esposo y yo trabajamos y les damos lo mejor a nuestros hijos y ellos también nos ayudan”.</p> </strong>
       <p class="text-primary">Roberta F.</p><br>

       <p class="h6 pb-0 mb-0" class="text-nowrap "> <strong class="text-justify">“He vivido muy pocas experiencias de igualdad, una de ellas sucedió en la fábrica en la que trabajaba. Uno de los encargados siempre se la pasaba diciendo que las mujeres no servían para arreglar las máquinas cuando éstas se dejaban de funcionar por cualquier cosa. Un día, se me hizo interesante aprender a arreglar esas máquinas, pero recibí un rotundo No, porque eres mujer, cuando solicité aprender a hacerlo. Tiempo después el supervisor me dijo que podía intentarlo, pues después de todo, para él, no tenía nada de malo que una mujer quisiera aprender a arreglar máquinas”.</p> </strong>
       <p class="text-primary">Isabel C.</p><br>

       <p class="h6 pb-0 mb-0" class="text-nowrap "> <strong class="text-justify">“En la secundaria que estudié, el Director brindó las mismas oportunidades a los equipos deportivos, femeninos y masculinos, para asistir a un Concurso Estatal, además en el concurso existía una categoría mixta donde ambos géneros podían participar”.</p> </strong>
       <p class="text-primary">Mariana G.</p><br>

       <p class="h6 pb-0 mb-0" class="text-nowrap "> <strong class="text-justify">“En lo personal mi testimonio como ser humano puedo decir que la igualdad de genero hoy en día es diferente en mis tiempos era realmente un problema de acuerdo las creencias de los pueblos, tanto niños como niñas en mi época de la primaria el respeto y la igualdad era una problemática, ya que muchas de las familias decían que niños con niños y niñas con niñas para trabajar en equipo, hoy en día la igualdad para mí es una historia la cual puedo decir que ya no solo son niños y niñas si no existe la familia LGTB donde muchos seres humanos deben ser respetados de igual manera, que todos no importa el sexo el respeto es la herramienta clave para ser mejores personas y una mejor comunicación”.</p> </strong>
       <p class="text-primary">David B.</p>
       <br> 

        </div>

    </div></div> <br>

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