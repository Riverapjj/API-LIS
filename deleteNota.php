<?php
//INVOCACION DEL PHP DE API 
include_once 'APInotas.php';
$api = new APInotas();
//VERIFICACION DE LA EXISTENCIA DEL ID
if(isset($_POST['identifi']))  
{

	//CONVERCION A TIPO ARRAY 
        $item = array(

                    'ID'=> $_POST['identifi']                 
    );
    //EJECUCION DE LA FUNCION PARA ELIMINAR
    $api->deleteNota($item);
    }
    //EN CASO DE PRESENTARCE ERROR DE ELIMINACION DE DATO 
    else 
    {
        $api->error('Error al eliminar datos del estudiante');
    
    }
//SISPOCISION DE BOTON PARA REGRESAR AL MENU 
echo "<a href= menu.php><button type= button >Regresar al menu</button></a>";

?>