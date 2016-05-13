<?php
	include('conexion.php');

	/**
	* 
	*/
	class Usuario
	{
		public $model;

		public $usuario;
		public $password;
		public $nombre;
		public $apellido;
		public $telefono;
		public $correo;
		public $cedula;
		
		function __construct($usuario, $password, $nombre, $apellido, $telefono, $correo, $cedula) 
		{
			$this->usuario = $usuario;
			$this->password = $password;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->telefono = $telefono;
			$this->correo = $correo;
			$this->cedula = $cedula;

			$this->model = new Modelo();
		}

		function registrarUsuario() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO sistema_ice.usuario (nombre, apellido, cedula, telefono, correo, usuario, pass) VALUES ('".$this->nombre."','".$this->apellido."','".$this->cedula."','".$this->telefono."','".$this->correo."','".$this->usuario."','".$this->password."')");
			/*
			$result = pg_query($this->model->cnx, "INSERT INTO public.usuario(\"user\", pass, nombre, apellido, telefono, correo) VALUES ('".$this->usuario."','".$this->password."','".$this->nombre."','".$this->apellido."','".$this->telefono."','".$this->correo."')");

			if (!$result) {
				echo "Query: error presenciado";
			}

			$this->model->cerrarConexion();
			*/
			return 0;
		}
	}
?>