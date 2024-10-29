<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
	<script type="text/javascript">
		function ajax()
		{
			var req = new XMLHttpRequest();
			req.onreadystatechange = function()
			{
				if(req.readyState == 4 && req.status == 200)
				{
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat_refresh.php', true);
			req.send();
		}
		setInterval(function(){ajax();},1000);
	</script>
	
</head>
<body>
	<div id="chat" style="border:solid 1px;">
	
	</div>
	<form action="chat.php" method="post">
        <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>  
		<br /><br />
        <label for="msg">Mensagem:</label>
        <input type="text" id="msg" name="msg" required> 
		<button id="button" type="submit" name="Enviar">Enviar</button>
	</form>
</body>
</html>		
<?php

	extract($_POST);
    if(isset($_POST["Enviar"]))
    {
        include_once("connect.php");
        $obj = new connect();
        $resultado = $obj->conectarBanco();
		
		$sql = "INSERT INTO chat (nome, msg) VALUES ('".$_POST['name']."','".$_POST['msg']."') ;";

        $query = $resultado->prepare($sql);
        $indice = 0;
        if($query->execute())
        {
			 $_POST = [];
			 header('Location: chat.php');
			 exit();
		}
	}
?>