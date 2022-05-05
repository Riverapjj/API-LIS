<?php

//INCLUSION DEL PHP DE API REST
include_once 'APInotas.php';
$api = new APInotas();
//VERIFICACION DE EXISTENCIA DE LOS CAMPOS 
if(isset($_POST['nombre'])  && isset($_POST['parcial']) && isset($_POST['investigacion']) && isset($_POST['tarea'])  )
{
    //CONVERSION EN ARREGLO
    $item = array(

                    'nombre'=> $_POST['nombre'] ,
                    'parcial'=>$_POST['parcial'],
                    'investigacion'=> $_POST['investigacion'],
                    'tarea'=> $_POST['tarea']
                    
    );
    //EJECUCION DE LA FUNCION DE NUEVA NOTA 
    $api->newNota($item);
    

    }
    //MENSAJE DE ERROR EN CASO FALLO DE EJECION DE FUNCION 
    else 
    {
        $api->error('Error al ingresar los datos del alumno');
    
    }
//BOTON PARA REGRESAR AL MENU 
echo "<a href= menu.php><button type= button >VOLVER</button></a>";

?>