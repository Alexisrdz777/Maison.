<?php

$conexion = mysqli_connect('localhost', 'root', '', 'maisons');

insertar($conexion);

function insertar($conexion){

	$nombre = $_POST['nombre'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];
	$mensaje = $_POST['mensaje'];

	$consulta = "INSERT INTO maison(nombre, celular, email, direccion, mensaje) VALUES ('$nombre', '$celular', '$email', '$direccion', '$mensaje')";
	mysqli_query($conexion, $consulta);

}

?>