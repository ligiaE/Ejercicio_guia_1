<!DOCTYPE html">
<html lang="en">
<head>
<meta  charset="utf-8" />
<title>Desarrollo del ejercicio dos</title>


</head>
<body>

 <p>Primer ejercicio es  Realizar un algoritmo que pida los ckoeficientes de una ecuación de 2º grado, y de las
                        posibles soluciones reales. Si no existen reales, debe indicarlo..</p>
                        
 <form id="form1" name="form1" method="post" action="desarrollo.php">
          <p>

            <label for="coficienteA">coeficiente 1</label>
            <input type="text" name="coeficienteA" id="coeficienteA" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" minlength="1" required="required"/>
          </p>
          <p>
            <label for="coficienteB">coeficiente 2</label>
            <input type="text" name="coeficienteB" id="coeficienteB" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" minlength="1" required="required" />
          </p>
          <p>
            <label for="coeficienteC">coeficiente 3</label>
            <input type="text" name="coeficienteC" id="coeficienteC" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" minlength="1" required="required" />
          </p>
          <p>
            <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
        </p>
        </form></p>
         
</body>
</html>"