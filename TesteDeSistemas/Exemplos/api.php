<?php
// Define que a resposta será no formato JSON e aceita acentuação
header("Content-Type: application/json; charset=UTF-8");

// 1. DESCOBRE QUAL MÉTODO HTTP FOI UTILIZADO
$metodo = $_SERVER["REQUEST_METHOD"];

// 2. CAPTURA PARÂMETROS DA URL (Ex: http://localhost/api.php?id=10)
$id = isset($_GET['id']) ? $_GET['id'] : null;

// 3. CAPTURA O CORPO DA REQUISIÇÃO (Para POST, PUT e PATCH)
// A função file_get_contents("php://input") lê o JSON bruto enviado pelo Postman
$json = file_get_contents("php://input");
$dados_body = json_decode($json, true); // Transforma JSON em Array associativo do PHP

// 4. ROTEAMENTO: O que fazer dependendo do método?
switch ($metodo) {
    
    case 'GET':
        if ($id) {
            // Se tem ID, busca apenas 1 registro específico
            http_response_code(200); // 200 OK
            echo json_encode([
                "status" => "sucesso",
                "mensagem" => "Retornando os dados do usuário ID: $id"
            ]);
        } else {
            // Se não tem ID, lista todos os registros
            http_response_code(200);
            echo json_encode([
                "status" => "sucesso",
                "mensagem" => "Retornando a lista de todos os usuários"
            ]);
        }
        break;

    case 'POST':
        // POST = Criar. Exige que o cliente envie dados no corpo.
        if ($dados_body) {
            http_response_code(201); // 201 Created (Criado com sucesso)
            echo json_encode([
                "status" => "sucesso",
                "mensagem" => "Novo registro criado com sucesso!",
                "dados_salvos" => $dados_body
            ]);
        } else {
            http_response_code(400); // 400 Bad Request (Requisição inválida)
            echo json_encode([
                "erro" => "Nenhum dado foi enviado no corpo da requisição."
            ]);
        }
        break;

    case 'PUT':
        // PUT = Substituição completa. Exige ID na URL e Dados no corpo.	
        if ($id && $dados_body) {
            http_response_code(200);
            echo json_encode([
                "status" => "sucesso",
                "mensagem" => "Usuário ID $id foi completamente substituído.",
                "novos_dados" => $dados_body
            ]);
        } else {
            http_response_code(400);
            echo json_encode([
                "erro" => "O método PUT exige o ID na URL e os novos dados no corpo (body)."
            ]);
        }
        break;

    case 'PATCH':
        // PATCH = Atualização parcial. Exige ID e Dados.
        if ($id && $dados_body) {
            http_response_code(200);
            echo json_encode([
                "status" => "sucesso",
                "mensagem" => "Usuário ID $id foi atualizado parcialmente.",
                "alteracoes" => $dados_body
            ]);
        } else {
            http_response_code(400);
            echo json_encode([
                "erro" => "O método PATCH exige o ID na URL e os dados parciais no corpo (body)."
            ]);
        }
        break;

    case 'DELETE':
        // DELETE = Excluir. Exige apenas o ID.
        if ($id) {
            http_response_code(200);
            echo json_encode([
                "status" => "sucesso",
                "mensagem" => "Usuário ID $id foi removido com sucesso."
            ]);
        } else {
            http_response_code(400);
            echo json_encode([
                "erro" => "O método DELETE exige o ID do registro na URL."
            ]);
        }
        break;

    default:
        // Caso o cliente envie um método não tratado (ex: OPTIONS, HEAD)
        http_response_code(405); // 405 Method Not Allowed
        echo json_encode([
            "erro" => "Método HTTP '$metodo' não permitido ou não implementado nesta API."
        ]);
        break;
}
?>