<?php
//bool mail ( string $to , string $subject , string $message [, string $headers [, string $parameters ]] )


// Definindo o destinatário do email
$to = "aluno@exemplo.com";  // Substitua com o email do destinatário

// Definindo o assunto do email
$subject = "Testando o envio de email via PHP";

// Definindo a mensagem
$message = "
<html>
<head>
  <title>Email de Teste</title>
</head>
<body>
  <h1>Este é um email de teste enviado pelo PHP!</h1>
  <p>Você conseguiu enviar um email usando a função mail() do PHP.</p>
</body>
</html>
";

// Definindo os cabeçalhos do email
$headers = "MIME-Version: 1.0" . "\r\n";  // Define a versão do MIME para aceitar conteúdo HTML
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  // Define que o conteúdo é HTML

// Definindo o remetente do email
$headers .= "From: professor@exemplo.com" . "\r\n";  // Substitua com o seu email

// Enviando o email
if(mail($to, $subject, $message, $headers)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Falha ao enviar o email.";
}
?>
