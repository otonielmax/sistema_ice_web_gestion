<?php
	include('conexion.php');

	/**
	* 
	*/
	class Ruta
	{
		public $model;

		public $localidad;
		public $nomenclatura;
		
		function __construct($localidad = "", $nomenclatura = "") 
		{
			$this->localidad = $localidad;
			$this->nomenclatura = $password;

			$this->model = new Modelo();
		}

		function registrarRuta() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO sistema_ice.ruta (localidad, nomenclatura) VALUES ('".$this->localidad."','".$this->nomenclatura."')");

			return 0;
		}
	}
?>