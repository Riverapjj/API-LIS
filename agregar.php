<!DOCTYPE html>
<!-- HTML PARA AGRENAR NUEVO DATO   -->
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ingreso de notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fond.css" />

    
</head>
<body class='container'>


<section class="container">


<nav class="navbar navbar-dark bg-primary text-white">
<h1>Ingresar Datos Del Estudiante</h1>
</nav>
   <article>

<!--   PHP DESTINATARIO AL FINALIZAR FORMULARIO -->
<form  action="newNota.php" method="POST">

   <fieldset>

    <!--   DATO NOMBRE -->
   <div class="form-group">
    <label for="nombre">Nombre alumno:</label>
    <input type="text" name="nombre" id="nombre" size="25" maxlength="200" class="inputField form-control" required /><br />
</div>
  <!--    NOTA PARCIAL-->
    <div class="form-group">
    <label for="parcial">Nota parcial:</label>
    <input type="text" name="parcial" id="parcial" size="25" maxlength="4" class="inputField form-control" required /><br />
</div>
  
  <!--    NOTA INVESTIGACIONL-->
    <div class="form-group">
    <label for="investigacion">Nota investigacion:</label>
    <input type="text" name="investigacion" id="investigacion" size="8" maxlength="4" class="inputField form-control" required /><br />
</div>

  <!--    NOTA TAREA-->
    <div class="form-group">
    <label for="tarea">Nota tarea:</label>
    <input type="text" name="tarea" id="tarea" size="4" maxlength="4" class="inputField form-control" required /><br />
</div>


  <!--    DISPOCION PARA BOTONES DE INGRESO DE DATOS Y LIMPIEZA DE FORMULARIO-->
   <input type="submit" name="enviar" class="btn btn-primary mb-2" value="Enviar" class="inputButton" />&nbsp;
   <input type="reset" name="limpiar" class="btn btn-primary mb-2" value="Restablecer" class="inputButton" />


   </fieldset>

</form>

<!--    BOTON PARA REGRESO AL MENU -->
<form  action="menu.php" method="POST">
<fieldset>
<div class="form-group">   
</div>   
   <input type="submit" name="regresar" class="btn btn-primary mb-2" value="Regresar al menu" class="inputButton" />&nbsp;  
   </fieldset>
</form>


   </article>
</section>
</body>







</html>