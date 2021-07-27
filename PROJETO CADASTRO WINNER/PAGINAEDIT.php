<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="PAGINAEDIT.php">Listar</a><br>
		<a href="pesquisar.php">Pesquisar</a><br>
		<h1>Listar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM cliente LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
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
			echo "telefone: " . $row_usuario['telefone'] . "<br>";echo "ID: " . $row_usuario['id'] . "<br>";
			echo "email1: " . $row_usuario['email1'] . "<br>";
			echo "email2: " . $row_usuario['email2'] . "<br>";
			echo "ie: " . $row_usuario['ie'] . "<br>";
			echo "im: " . $row_usuario['im'] . "<br>";
			echo "situacao: " . $row_usuario['situacao'] . "<br>";
			echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
			echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM cliente";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='PAGINAEDIT.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href= PAGINAEDIT.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='PAGINAEDIT.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='PAGINAEDIT.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>