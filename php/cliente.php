<?php
	include('conexion.php');

	/**
	* 
	*/
	class Cliente
	{
		public $model;

		public $rif;
		public $nombre;
		public $direccion;
		public $telefono;
		public $encargado;
		public $coordenadas;

		function __construct($rif="", $nombre="", $direccion="", $telefono="", $encargado="", $coordenadas="") 
		{
			$this->rif = $rif;
			$this->nombre = $nombre;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
			$this->encargado = 	$encargado;
			$this->coordenadas = $coordenadas;

			$this->model = new Modelo();

		}

		function registrarCliente() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO sistema_ice.cliente (rif, nombre, direccion, telefono, encargado, coordenadas) VALUES ('".$this->rif."','".$this->nombre."','".$this->direccion."','".$this->telefono."','".$this->encargado."','".$this->coordenadas."')");
			/*
			$result = mysql_query("INSERT INTO probuhos_sistema_ice.cliente (rif, nombre, direccion, telefono, encargado, coordenadas) VALUES ('".$this->rif."','".$this->nombre."','".$this->direccion."','".$this->telefono."','".$this->encargado."','".$this->coordenadas."')");
			*/

			/*
			INSERT INTO sistema_ice.cliente (rif, nombre, direccion, telefono, encargado) VALUES ('j1234567', 'open', 'coche', '041635565', 'jose')

			INSERT INTO `cliente`( `rif`, `nombre`, `direccion`, `telefono`, `encargado`, `coordenadas`) VALUES ('j1210dsa00', 'asdasd', 'dasdadas', '041362622', 'asdasdad', 'adasdsad')
			*/

			$this->model->cerrarConexion();

			return 0;
		}

		function listarClientes() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM sistema_ice.cliente");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			$this->model->cerrarConexion();

			return $result;
			
		}
	}
?>