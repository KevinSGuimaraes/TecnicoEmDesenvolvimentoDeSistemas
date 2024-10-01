<?php

	session_name('MinhaSessao');
	session_start();
	$var =  $_GET['var'];
	
?>
<html lang="pt-br">
      <head>
        <title>Contatos Cadastrados</title>
        <meta charset="utf-8">
      </head>
      <body>
		<form method="post" action="editarContato.php?var=<? echo $var; ?>">
			<h1>Editar Contatos</h1>
			<table>
				<tr>
					<td>Nome</td>
					<td>Endereço</td>
					<td>Telefone</td>
					<td>E-mail</td>
					<td>Celular</td>
					<td></td>
				</tr>
				<tr>
					<td><input type="text" name="nome" value="" /></td>
					<td><input type="text" name="endereco" value="" /></td>
					<td><input type="text" name="telefone" value="" /></td>
					<td><input type="text" name="email" value="" /></td>
					<td><input type="text" name="celular" value="" /></td>
					<td></td>
					<td align="right" colspan="2"><input type="submit" value="Atualizar" name="Atualizar" /></td>
				</tr>
			</table>
		</form>      
	</body>
</html>
<?php
	
	extract($_POST);
	if(isset($_POST["Atualizar"]))
	{
		
		include_once("Conect.php" );
		$obj = new Conect();
		$resultado = $obj->ConectarBanco();
		
		echo $sql = "UPDATE Contatos SET nome = '".$_POST["nome"]."', endereco = '".$_POST["endereco"]."', telefone = '".$_POST["telefone"]."', email = '".$_POST["email"]."', celular = '".$_POST["celular"]."' WHERE id_contatos = '".$var."' ;";
		
		$query = $resultado->prepare($sql);
		if($query->execute())
		{
			header("location: form.php");		
		}
		
		unset($_POST["Atualizar"]);
	
	}
?>