<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="login";

//criar conexao
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);


	$conn = new mysqli("localhost", "root", "", "registro"); // conexão com o banco de dados

	if ($conn->connect_error) {
		echo "Error" . $conn->connect_error; //caso de erro na conexão
		exit;
	}
?>