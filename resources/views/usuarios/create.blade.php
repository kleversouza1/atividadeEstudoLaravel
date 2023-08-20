<!DOCTYPE html>
<html>
<head>
    <title>Criar Usuário</title>
    <style>
        body {
            background-color: #f0f8ff; /* Cor de fundo azul claro */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            min-height: 100vh; /* Altura mínima da viewport */
        }

        .container {
            background-color: #fff; /* Cor de fundo do container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
            text-align: center; /* Centraliza o conteúdo horizontalmente */
        }

        /* Estilos para o botão "Criar Usuário" */
        .btn-criar-usuario {
            background-color: #007bff; /* Cor de fundo azul */
            color: #fff; /* Cor do texto branco */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Estilos adicionais para o botão de "Ver Detalhes" */
        #ver_id {
            margin-right: 10px;
        }

        #link-detalhes a {
            text-decoration: none;
            color: #007bff; /* Cor do link azul */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Novo Usuário</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Exibir mensagens de erro de validação -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Exibir mensagem de erro de criação de usuário -->
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <form method="POST" action="/usuarios">
            @csrf
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required><br>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required><br>

            <!-- Botão "Criar Usuário" estilizado -->
            <button type="submit" class="btn-criar-usuario">Criar Usuário</button>
        </form>

        <!-- Campo de entrada para o ID -->
        <label for="ver_id">Ver Detalhes pelo ID:</label>
        <input type="text" id="ver_id" name="ver_id">
        
        <!-- Botão para Ver Detalhes -->
        <button type="button" onclick="verDetalhes()" class="btn-criar-usuario">Ver Detalhes</button>

        <!-- Este div irá conter o link de redirecionamento -->
        <div id="link-detalhes"></div>
    </div>

    <script>
        function verDetalhes() {
            // Obtenha o valor do ID inserido no campo
            var id = document.getElementById('ver_id').value;

            // Crie o link com base no ID e redirecione para a página de detalhes
            var link = '<a href="/usuarios/' + id + '">Ver Detalhes do Usuário</a>';
            
            // Atualize o conteúdo do div com o link de redirecionamento
            document.getElementById('link-detalhes').innerHTML = link;
        }
    </script>
</body>
</html>
