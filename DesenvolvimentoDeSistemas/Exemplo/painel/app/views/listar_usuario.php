<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="../../public/css/style_listar_usuario.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="container">

        <div class="topo">

            <h1>Usuários</h1>

            <a href="#" class="btn">
                Novo Usuário
            </a>

        </div>

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>

            </thead>

            <tbody>

                <!-- LOOP PHP -->

                <tr>
                    <td>1</td>
                    <td>João</td>
                    <td>joao@email.com</td>

                    <td>
                        <a href="#" class="editar">Editar</a>
                        <a href="#" class="excluir">Excluir</a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</body>
</html>