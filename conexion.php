<?php 
	/**
	* Create by 3l_Sami -- v 2.0
	*/
	class Mysql{
		private $host = 'localhost';
		private $user = 'root';
		private $password = '';
		private $database = 'bdarecord';
		private $cnx; 
		
		function __construct(){
			$this->cnx = mysqli_connect($this->host,$this->user,$this->password,$this->database);
			return $this->cnx;
		} // me conecto a la base de datos apenas creo el objeto

		function desconectar(){
			mysqli_close($this->cnx);
		} // Desconectar de la base de datos

		function ejecutarDml($query){
			if (mysqli_query($this->cnx,$query)) {
				return true;
			}else{
				return mysqli_error($this->cnx);
			}
		} // ejecuto instrucciones dml (insert, update, detele)

		function consultar($query){
			return mysqli_query($this->cnx,$query);
		} //ejecuto consultas (select)

		function contarRegistros($result){
			return mysqli_num_rows($result);
		} // contar cuantos registros tiene una consulta
	}
?>