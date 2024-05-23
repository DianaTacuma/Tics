<?php
	//variables de conexión a la base de datos
	$host="127.0.0.1";
	$username="administrador";
	$password="Dptr10+";
	$db_name="basedatos";
	$tbl_name="usuarios";

	$mysqli = new mysqli($host, $username, $password, $db_name);
	echo "Conexión exitosa a la base de datos!";
?>