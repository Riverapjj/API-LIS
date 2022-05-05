<?php
//LLAMADA A PHP DE CONEXION
include_once 'conexion.php';

//CLASEE DE EXTENDENDIDA PARA INGRESO Y EJECUCION DE QUERYS EN LA BD 
class Notas extends Database
{
	
	//FUNCION PARA OBTENER TODOS LOS DATOS DE LA TABLA 
	function obtenerNotas()
	{
		//EJECUCION DEL QUERY 
		$query = $this->connect()->query('SELECT * FROM notas_promedio');
		return $query;
	}
    //FUNCION PARA OBTENER UN CONJUNTO DE DATOS EN ESPECIFICO DE LA TABLA 
	function obtenerNota($id)
	{
		//EJECUCION DEL QUERY 
			$query = $this->connect()->prepare('SELECT * FROM notas_promedio WHERE ID= :id ');
			$query->execute(['id'=> $id]);
			return $query;
	}

    //FUNCION PARA AGREGAR NUEVOS DATOS A LA TABLA
	function newNota($notas)
	{
		//EJECUCION DEL QUERY 
			$query = $this->connect()->prepare('INSERT INTO notas_promedio (nombre,parcial,investigacion,tarea) VALUES (:nombre,:parcial,:investigacion,:tarea)');
			$query->execute(['nombre'=>$notas['nombre'], 'parcial'=>$notas['parcial'],'investigacion'=>$notas['investigacion'],'tarea'=>$notas['tarea']]);
			return $query;
	}

	//FUNCION PARA BORRAR UN DATO EN ESPECIFICO DE LA TABLA 
	function deleteNota($id)

	{
		//EJECUCION DEL QUERY 
			$query = $this->connect()->prepare('DELETE FROM notas_promedio WHERE ID = :id ');
			$query->execute(['id'=> $id['ID']]);

			return $query;
	}




}


 ?>