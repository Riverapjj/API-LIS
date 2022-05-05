<!DOCTYPE html>
<!--    HTML PARA LA ELIMINACION DE DAOT -->
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ingrese ID de alumno que desea eliminar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fond.css" />;

    
</head>
<body class='container'>


<section class="container">


<nav class="navbar navbar-dark bg-primary text-white">
<h1>Ingrese ID de alumno que desea eliminar</h1>
</nav>
   <article>

<!-- REDIRECION AL PHP DELETE -->
<form  action="deleteNota.php" method="POST">
   <fieldset>
<!--  SOLICITUD DE ID A ELIMINAR-->
   <div class="form-group">
    <label for="id">ID alumno:</label>
    <input type="text" name="identifi" id="identifi" size="25" maxlength="2" class="inputField form-control" required /><br />
</div>
<!-- BOTON PARA REALIZAR ACCION -->
  <input type="submit" name="eliminar" class="btn btn-primary mb-2" value="Eliminar alumno" class="inputButton" />&nbsp;

</form>

<!-- DISPOSICON DEL BOTON PARA REGRESAR AL MENU  -->
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