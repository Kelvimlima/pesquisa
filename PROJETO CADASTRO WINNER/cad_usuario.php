<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="PAGINAEDIT.php">Listar</a><br>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>id: </label>
			<input type="text" name="id" placeholder="Digite o nome completo"><br><br>
			
			<label>cnpj: </label>
			<input type="text" name="cnpj" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>codigo: </label>
			<input type="text" name="codigo" placeholder="Digite o nome completo"><br><br>
			
			<label>empresa: </label>
			<input type="text" name="empresa" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>cep: </label>
			<input type="text" name="cep" placeholder="Digite o nome completo"><br><br>
			
			<label>bairro: </label>
			<input type="text" name="bairro" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>municipio: </label>
			<input type="text" name="municipio" placeholder="Digite o nome completo"><br><br>
			
			<label>uf: </label>
			<input type="text" name="uf" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>complemento: </label>
			<input type="text" name="complemento" placeholder="Digite o nome completo"><br><br>
			
			<label>sites: </label>
			<input type="text" name="sites" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>telefone: </label>
			<input type="number" name="telefone" placeholder="Digite o nome completo"><br><br>
			
				
			<label>email1: </label>
			<input type="email" name="email1" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>email2: </label>
			<input type="email" name="email2" placeholder="Digite o nome completo"><br><br>	
			
			<label>ie: </label>
			<input type="text" name="ie" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>im: </label>
			<input type="text" name="im" placeholder="Digite o nome completo"><br><br>
			
			<label>situacao: </label>
			<input type="text" name="situacao" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>