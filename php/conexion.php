<?php
	class Modelo
	{	
		
		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'sistema_ice';
		
		/*
		public $usuario = 'probuhos_ice';
		public $pass = '*!Ice2016!*';
		public $baseDeDatos = 'probuhos_sistema_ice';
		*/
		public $port = 5432;
		public $host = 'localhost';

		public $strConexion = null;
		public $cnx = null;

		public function crearConexion() {
			$this->strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $this->strConexion);

			/*
			$this->strConexion = "host=$this->host port=$this->port dbname=$this->baseDeDatos user=$this->usuario password=$this->pass";
			$this->cnx = pg_connect($this->strConexion) or die("Error de conexion ".pg_last_error()); 
			*/
		}

		public function cerrarConexion() {
			mysql_close($this->strConexion);
		}
	}
?>