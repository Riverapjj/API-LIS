<!DOCTYPE html>
<!--  HTML PARA SOLICITUR DE VISUALISACION DE DATO ESPECIFICO-->
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Visualizar notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fond.css" />

    
</head>
<body class='container'>


<section class="container">
<!--  FORMULARIO DE SOLICITUD DE ID-->
<nav class="navbar navbar-dark bg-primary text-white">
<h1>Ingrese ID del alumno que desea visualizar nota</h1>
</nav>
   <article>
    <!--  REDIRECCION AL PHP LECTURA DE DATO -->
<form  action="readNotas.php" method="POST">
   <fieldset>
<!-- SOLICITUD DE ID A BUSCAR  -->
   <div class="form-group">
    <label for="id">ID alumno:</label>
    <input type="text" name="identifi" id="identifi" size="25" maxlength="2" class="inputField form-control" required /><br />
</div>
  <input type="submit" name="visualizar" class="btn btn-primary mb-2" value="Visualizar notas de alumno" class="inputButton" />&nbsp;
</form>

<!-- DISPOCISION DE BOTON PARA REGRESAR AL MENU -->
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