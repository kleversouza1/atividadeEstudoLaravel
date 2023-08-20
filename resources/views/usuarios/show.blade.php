<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Cor de fundo azul claro */
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333; /* Cor do título */
        }

        .user-details {
            background-color: #fff; /* Cor de fundo do container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
            text-align: left;
            max-width: 400px;
            margin: 0 auto; /* Centraliza horizontalmente */
        }

        .user-details p {
            margin: 10px 0;
        }

        .back-link {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff; /* Cor de fundo do botão */
            color: #fff; /* Cor do texto do botão */
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #0056b3; /* Cor de fundo do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <h1>Detalhes do Usuário</h1>

    <div class="user-details">
        <p><strong>Nome:</strong> {{ $usuario->nome }}</p>
        <p><strong>CPF:</strong> {{ $usuario->cpf }}</p>
        <p><strong>Data de Nascimento:</strong> {{ $usuario->data_nascimento }}</p>

        <a href="/usuarios" class="back-link">Voltar para a lista de usuários</a>
    </div>
</body>
</html>
