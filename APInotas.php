<?php
//LLAMADA AL PHP DE ALMACENAMIENTO DE QUERYS DE QUERY
include_once 'notas.php';

//DEFINICION DE LA CLASE PARA API REST 
class APInotas
{
	//EJECUCION DE LA FUNCION PARA OBTENER JSON DE TODA LA TABLA DE NOTAS
	function getALL ()
	{
		$NOTA = NEW Notas ();
		$NOTAS = array ();
		$NOTAS["items"] = array ();
		//EJECUCION DE LA FUNCION ALMACENADA EN NOTAS.PHP
		$res = $NOTA->obtenerNotas();
		//VERIFICACION DE ELEMENTOS
		if ($res ->rowCount())
		 {
		 	//RECORRIDO DE TODOS LOS DATOSSDE LA TABLA 
			while ($row = $res->fetch(PDO:: FETCH_ASSOC)) {
				//VARIABLE PARA CAMPO CALCULADO DE PROMEDIO
				$prom =($row['parcial']+$row['investigacion']+$row['tarea'])/3;
				//ORGANIZACION DE LOS DATOS EN UN ARREGLO 
				$item = array(
					'ID'=> $row['ID'],
					'Nombre'=> $row['nombre'],
					'Parcial'=> $row['parcial'],
					'Investigacion'=> $row['investigacion'],
					'Tarea'=> $row['tarea'],
					'Promedio'=> round($prom,2)
				);
				//INGROSO DE LOS DATOS AL ARREGLO 
				array_push($NOTAS['items'], $item);
			}


			//IMPRECION DEL ARREGLO EN FORMATO JSON
			$this->imprecionJson($NOTAS);

		}
		//MENSAJE DE ERROR EN CASO DE TABLA VACIA
		else{
			$this-> error('No se encuentran elementos registrados');
		}

	}

//EJECUCION DE FUNCION PARA UN UNICO ID
function getOne($id)
	{
		$NOTA = NEW Notas ();
		$NOTAS = array ();
		$NOTAS["items"] = array ();

		//EJECUCION DE LA FUNCION ALMACENADA EN NOTAS.PHP
		$res = $NOTA->obtenerNota($id);
		//VERIFICACION QUE SER UN UNICO DATO 
		if ($res ->rowCount()==1)
		 {
		 	//RECORRIDO DE LA FILA DEL ID SOLICITADO 
			while ($row = $res->fetch(PDO:: FETCH_ASSOC)) {
				$prom =($row['parcial']+$row['investigacion']+$row['tarea'])/3;
				

				//ALMACENAMIENTO DE LOS DATOS EN ARREGLO 
				$item = array(
					'ID'=> $row['ID'],
					'Nombre'=> $row['nombre'],
					'Parcial'=> $row['parcial'],
					'Investigacion'=> $row['investigacion'],
					'Tarea'=> $row['tarea'],
					'Promedio'=> round($prom,2)
				);
				//INGRESO DE LOS DATOS AL ARREGLO 
				array_push($NOTAS['items'], $item);
			}
			//IMPRECION DE LOS DATOS DEL ARREGLO EN FORMATO JSON
			$this->imprecionJson($NOTAS);
		}
		//ERROR EN CASO DE NO ENCONTRARCE EL ID EN LA BD
		else{
			$this-> error('No se encuentran elementos registrados');
		}

	}

//EJECUION DE LA FUNCION PARA INGRESO DE NUEVOS DATOS 
function newNota($item)
{
	//INVOCACION DEL PHP NOTAS
	$nota = new Notas ();
	//EJECICION DE FUNCION EN NOTAS
	$res= $nota->newNota($item);
	$this->exito('Nota registrada con exito');
}

//EJECUION DE LA FUNCION PARA ELIMINAR DATOS
function deleteNota($item)
{
	//INVOCACION DEL PHP NOTAS
	$id = new Notas ();
	$res= $id->deleteNota($item);
	//VERIFICACION DE SER UN UNICO DATO SOLICITADO
	if ($res ->rowCount()==1)
		 {
	//EJECION DE FUNCION DE EXITO DE PROCESO 
	$this->exito('Informacion del estudiante eliminada con exito');

		}
		//MENSAJE  DE ERROR DE NO REALIZARCE LA FUNCION
		else{
			$this-> error('No se encuentran el elemnto que de sea eliminar');
		}
}







//FUNCIONES DE IMPRESION, MENSAJE DE ERROR, MENSAJE DE EXITO DE EJECUCION


	function imprecionJson ($array)
{
	echo '<code>'.json_encode($array).'</code>';


}
	function error ($mensaje)
{
	echo '<code>'.json_encode(array ('mensaje'=> $mensaje)).'</code>';
}
	function exito ($mensaje)
{

echo '<code>'.json_encode(array ('mensaje'=> $mensaje)).'</code>';
}


}



  ?>