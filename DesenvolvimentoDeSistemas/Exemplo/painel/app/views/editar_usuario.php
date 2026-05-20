<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="../../public/css/style_editar_usuario.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="box">

        <h1>Editar Usuário</h1>

        <form action="#" method="POST">

            <input type="hidden" name="id" value="1">

            <div class="input-group">
                <label>Nome</label>
                <input type="text" name="nome" value="João">
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="joao@email.com">
            </div>

            <button type="submit" name="acao" value="editar">
                Atualizar
            </button>

        </form>

    </div>

</body>
</html>