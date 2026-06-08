<?php
// 1. Inicia a sessão para ter acesso aos dados do usuário logado
session_start();

 $_SESSION['usuario'] = "admin"; //essa linha é apenas para testar;

// 2. Define o nome do usuário (usa um padrão caso não esteja logado, para testes)
$usuarioLogado = $_SESSION['usuario'];

$pastaDestino = "fotos_perfil/";

if (!is_dir($pastaDestino)) {
    mkdir($pastaDestino, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    // 3. Extrai a extensão original do arquivo (ex: .jpg, .pdf, .png)
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);

    // 4. Limpa o nome do usuário para evitar problemas na URL ou no sistema de arquivos
    // Remove espaços e caracteres especiais do nome do usuário
    $usuarioLimpo = preg_replace('/[^a-zA-Z0-9_\-]/', '', $usuarioLogado);

    // 5. Cria o novo nome:
    $novoNomeArquivo = MD5($usuarioLimpo). "." . $extensao;

    // 6. Define o caminho final completo
    $caminhoArquivo = $pastaDestino . $novoNomeArquivo;

    if (move_uploaded_file($arquivo['tmp_name'], $caminhoArquivo)) {
        echo "Sucesso: Arquivo salvo como <strong>" . $novoNomeArquivo . "</strong>";
    } else {
        echo "Erro: Não foi possível salvar o arquivo.";
    }
} else {
    echo "Erro: Nenhum arquivo foi enviado.";
}
?>
