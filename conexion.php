<?php

//PHP PARA LA CONEXION CON LA BASE DE DATOS 
class Database
{

//VARIASBLES NOMBRE DEL HOST, NOMBRE DE LA BASE DE DATOS Y CREDENCIACLES PARA INGRESAR 
private $host = 'localhost';
private $dbname = 'db_notas';
private $username = 'root';
private $password = '';
private $conn;

	//FUNCION A INVOCAR PARA REALZIAR CONECCION A LA BD
	public function connect ()
	{
		$this -> conn = null;
		try {
			$this->conn = new PDO('mysql:host='. $this ->host.';dbname='.$this->dbname, $this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Error de conecxion: '. $e->getMessage();
		}
		return $this->conn;
	}
}

?>