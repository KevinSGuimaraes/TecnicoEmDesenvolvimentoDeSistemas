<?php

	session_name('MinhaSessao');
	session_start();
	
?>
<html lang="pt-br">
      <head>
        <title>Contatos Cadastrados</title>
        <meta charset="utf-8">
      </head>
      <body>
		<form method="post" action="form.php">
			<h1>Listar Contatos</h1>
			<table>
				<tr>
					<td align="right" colspan="2"><input type="submit" value="Buscar" name="Buscar" /></td>
				</tr>
			</table>
		</form>      
	</body>
</html>
<?php

	extract($_POST);
	if(isset($_POST["Buscar"]))
	{
		include_once("Conect.php" );
		$obj = new Conect();
		$resultado = $obj->ConectarBanco();
		
		$sql = "SELECT * FROM Contatos ;";
		
		$query = $resultado->prepare($sql);
		$indice = 0;
		if($query->execute())
		{
			
			print '<table border="1">
				<tr>
					<td>Nome</td>
					<td>Endereço</td>
					<td>Telefone</td>
					<td>E-mail</td>
					<td>Celular</td>
					<td></td>
				</tr>';
			while($linha = $query->fetch(PDO::FETCH_ASSOC))
			{
				$linhas[$indice] = $linha;
				print '
					<tr>
						<td>'.$linhas[$indice]["nome"].'</td>
						<td>'.$linhas[$indice]["endereco"].'</td>
						<td>'.$linhas[$indice]["telefone"].'</td>
						<td>'.$linhas[$indice]["email"].'</td>
						<td>'.$linhas[$indice]["celular"].'</td>
						<td><a href="editarContato.php?var='.$linhas[$indice]["id_contatos"].'"><img width="30px" heigth="30px" src="editar.png"</a></td>
					</tr>
				';
				$indice++;
			}
			
			print '</table>';
				
		}
		
		unset($_POST["Buscar"]);
	
	}
?>