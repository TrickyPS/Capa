<?php

class Connection{

public static function  connect() {
		$databasehost = "pwci-aws.cqlg5afhee1c.us-east-1.rds.amazonaws.com";
		$databasename = "capadb";
		$databaseuser = "admin";
		$databasepass = "12345678";

		$mysqli = new mysqli($databasehost, $databaseuser, $databasepass, $databasename);
		if ($mysqli->connect_errno) {
			echo "Problema con la conexion a la base de datos";
		}
		return $mysqli;
	}

public static function disconnect($mysqli) {
		mysqli_close($mysqli);
	}




}

?>