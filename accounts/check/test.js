function evaluar() {

  let hasError = false;
  if (!document.querySelector('input[name="preg1"]:checked') | !document.querySelector('input[name="preg2"]:checked') | !document.querySelector('input[name="preg3"]:checked') |
  !document.querySelector('input[name="preg4"]:checked') |
  !document.querySelector('input[name="preg5"]:checked') |
  !document.querySelector('input[name="preg6"]:checked') |
  !document.querySelector('input[name="preg7"]:checked') |
  !document.querySelector('input[name="preg8"]:checked') |
  !document.querySelector('input[name="preg9"]:checked') |
  !document.querySelector('input[name="preg10"]:checked')) {

      alert('Falta alguna(s) pregunta(s) por responder, verifica.');
      hasError = true;
      }

      else {
              var pregunta1=document.getElementsByName('preg1');
          for(i=0; i<pregunta1.length; i++){
          if(pregunta1[i].checked){
          var memory1=pregunta1[i].value;
          
          //alert(memory1);
          }
        }

        var pregunta2=document.getElementsByName('preg2');
          for(i=0; i<pregunta2.length; i++){
          if(pregunta2[i].checked){
          var memory2=pregunta2[i].value;
          //alert(memory2);
          }
        }

        var pregunta3=document.getElementsByName('preg3');
          for(i=0; i<pregunta3.length; i++){
          if(pregunta3[i].checked){
          var memory3=pregunta3[i].value;
          //alert(memory2);
          }
        }

        var pregunta4=document.getElementsByName('preg4');
          for(i=0; i<pregunta4.length; i++){
          if(pregunta4[i].checked){
          var memory4=pregunta4[i].value;
          //alert(memory2);
          }
        }

        var pregunta5=document.getElementsByName('preg5');
          for(i=0; i<pregunta5.length; i++){
          if(pregunta5[i].checked){
          var memory5=pregunta5[i].value;
          //alert(memory2);
          }
        }

        var pregunta6=document.getElementsByName('preg6');
          for(i=0; i<pregunta6.length; i++){
          if(pregunta6[i].checked){
          var memory6=pregunta6[i].value;
          //alert(memory2);
          }
        }

        var pregunta7=document.getElementsByName('preg7');
          for(i=0; i<pregunta7.length; i++){
          if(pregunta7[i].checked){
          var memory7=pregunta7[i].value;
          //alert(memory2);
          }
        }

        var pregunta8=document.getElementsByName('preg8');
          for(i=0; i<pregunta8.length; i++){
          if(pregunta8[i].checked){
          var memory8=pregunta8[i].value;
          //alert(memory2);
          }
        }

        var pregunta9=document.getElementsByName('preg9');
          for(i=0; i<pregunta9.length; i++){
          if(pregunta9[i].checked){
          var memory9=pregunta9[i].value;
          //alert(memory2);
          }
        }

        var pregunta10=document.getElementsByName('preg10');
          for(i=0; i<pregunta10.length; i++){
          if(pregunta10[i].checked){
          var memory10=pregunta10[i].value;
          //alert(memory2);
          }
        }
            var preguntas = parseFloat(memory1)+ parseFloat(memory2)+parseFloat (memory3)+parseFloat(memory4)+parseFloat(memory5)+parseFloat(memory6)+ parseFloat(memory7)+ parseFloat(memory8)+ parseFloat(memory9)+ parseFloat(memory10);
            //alert (preguntas);
            document.getElementById("miForm").reset();

            if (preguntas >= 2.5 & preguntas <= 17.5) {
              //alert ("No todo va bien, eres demasiado feminista.");
              document.getElementById("respuesta").innerHTML = "<p> No todo va bien, eres demasiado feminista. <br>  Te invitamos a que visites todo el contenido de nuestro sitio. <br> &#128532;</p>"
            } else if (preguntas > 17.5 & preguntas <= 37.5) {
              //alert ("No todo va bien, eres algo feminista.");
              document.getElementById("respuesta").innerHTML = "<p> No todo va bien, eres algo feminista. <br>  Te invitamos a que visites todo el contenido de nuestro sitio.  <br> &#128528;</p>"
            } else if (preguntas > 37.5 & preguntas <50) {
              //alert ("Muy bien, eres igualitario.");
              document.getElementById("respuesta").innerHTML = "<p> Muy bien, tienes algunas que favorecen la igualdad de género, pero no son del todo bien. <br>  Te invitamos a que visites todo el contenido de nuestro sitio. <br> &#128556;</p>"
            } else if (preguntas == 50) {
              //alert ("Muy bien, eres igualitario.");
              document.getElementById("respuesta").innerHTML = "<p> Excelente, tienes ideas que favorecen la igualdad de género. <br>  Te invitamos a que visites todo el contenido de nuestro sitio. <br> &#128512;</p>"
            } else if (preguntas > 50 & preguntas <= 57.5) {
              //alert ("Muy bien, eres igualitario.");
              document.getElementById("respuesta").innerHTML = "<p> Muy bien, tienes algunas que favorecen la igualdad de género, pero no son del todo bien. <br>  Te invitamos a que visites todo el contenido de nuestro sitio. <br> &#128556;</p>"
            } else if (preguntas > 57.5 & preguntas <= 77.5) {
              //alert ("No todo va bien, eres algo machista.");
              document.getElementById("respuesta").innerHTML = "<p> No todo va bien, eres algo machista. <br>  Te invitamos a que visites todo el contenido de nuestro sitio. <br> &#128528;</p>"
            } else {
              //alert ("No todo va bien, eres demasiado machista.");
              document.getElementById("respuesta").innerHTML = "<p> No todo va bien, eres demasiado machista. <br>  Te invitamos a que visites todo el contenido de nuestro sitio. <br> &#128532;</p>"
            }
        
      }

}