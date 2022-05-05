<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Datos alumnos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fond.css" />

    
</head>
<body class='container'>


<section class="container">


<nav class="navbar navbar-dark bg-primary text-white">
<h1>Menu</h1>
</nav>

   <article>


<table>
  <tr>
    <th>
<form  action="agregar.php" method="POST">
<fieldset>
<div class="form-group">   
</div>   
   <input type="submit" name="Agregar alumno" class="btn btn-primary mb-2" value="Nuevo alumno" class="inputButton" />&nbsp;  
   </fieldset>
</form>

    </th>



    <th>
<form  action="eliminar.php" method="POST">
<fieldset>
<div class="form-group">   
</div>   
   <input type="submit" name="eliminar" class="btn btn-primary mb-2" value="Eliminar alumno" class="inputButton" />&nbsp;  
   </fieldset>
</form>
    </th>




    <th>
<form  action="readNotas.php" method="POST">
<fieldset>
<div class="form-group">   
</div>   
   <input type="submit" name="visualizar" class="btn btn-primary mb-2" value="Visualizar todos los datos" class="inputButton" />&nbsp;  
   </fieldset>
</form>
    </th>



     <th>
<form  action="visualizaNota.php" method="POST">
<fieldset>
<div class="form-group">   
</div>   
   <input type="submit" name="visualizar" class="btn btn-primary mb-2" value="Visualizar un dato" class="inputButton" />&nbsp;  
   </fieldset>
</form>
    </th>



  


  </tr>
  </table>

</article>
</section>
</body>
</html>