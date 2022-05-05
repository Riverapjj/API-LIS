<?php
//INVOCACION DE PHP DE API

include_once 'APInotas.php';

$api = new APInotas ();

//VERIFICACION DE LA EXISTENBCIA DEL DATO
if (isset($_POST['identifi'])) 
{
	$id = $_POST['identifi'];
//VERIFICACION DE QUE EL DATO SEA NUMERICO Y UNICO
	if (is_numeric($id)) {
		//EJECUCION DE FUNCION PARA IMPRIMIR DATO EN ESPECIFICO
		$api->getOne($id);
		}

		//EN CASO DE ERROR DE INGRESO DE DATO 
	else
		{
			$api->error('El parametro es incorrecto');
		
	}
	
}
//EN CASO DE NO HABER SOLICITADO DATO ESPECIFICO SE MOSTRARA TODA LA INFORMACION DE LA TABLA 
else {
	$api->getAll();

}

echo "</br>";
echo "<a href= menu.php><button type= button >Regresar al menu</button></a>";

  ?>