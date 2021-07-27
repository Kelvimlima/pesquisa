<?php
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Pesquisar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="PAGINAEDIT.php">Listar</a><br>
		
		<h1>Pesquisar Usuário</h1>
		
		<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM cliente WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "Id: " . $row_usuario['id'] . "<br>";
				echo "cnpj: " . $row_usuario['cnpj'] . "<br>";
				echo "codigo: " . $row_usuario['codigo'] . "<br>";
				echo "empresa: " . $row_usuario['empresa'] . "<br>";
				echo "cep: " . $row_usuario['cep'] . "<br>";
				echo "endereco: " . $row_usuario['endereco'] . "<br>";
				echo "bairro: " . $row_usuario['bairro'] . "<br>";
				echo "municipio: " . $row_usuario['municipio'] . "<br>";
				echo "uf: " . $row_usuario['uf'] . "<br>";
				echo "complemento: " . $row_usuario['complemento'] . "<br>";
				echo "sites: " . $row_usuario['sites'] . "<br>";
				echo "telefone: " . $row_usuario['telefone'] . "<br>";
				echo "email1: " . $row_usuario['email1'] . "<br>";
				echo "email2: " . $row_usuario['email2'] . "<br>";
				echo "ie: " . $row_usuario['ie'] . "<br>";
				echo "im: " . $row_usuario['im'] . "<br>";
				echo "situacao: " . $row_usuario['situacao'] . "<br>";
				echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
				
				echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
				echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
			}
		}
		?>
	</body>
</html>