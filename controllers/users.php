<?php
class users {
	public function read($params){
		$query = "SELECT * FROM `users` WHERE email='$params[email]' AND password = '$params[password]'";
		$mysqli = new mysqli("localhost", "root", "", "proyecto_ayni");
		$resultado = $mysqli->query($query);
		while($registro = $resultado->fetch_assoc()){
			print_r($registro);
		}
	}

	public function otrometodo($params){
		echo "Soy otro metodo";
	}
}