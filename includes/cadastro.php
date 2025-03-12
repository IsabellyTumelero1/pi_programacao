<?php
if (isset($_POST['submit'])) {
    //TESTE
    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['telefone']);
    // print_r($_POST['genero']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, genero) 
        VALUES('$nome', '$senha', '$email', '$telefone', '$genero')");

    header('Location: login.php'); //redireciona para tela de login
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --color-rosa-claro: #F3E4E4;
            --color-rosa-escuro: #E9A0A1;
            --color-rosa-intermediario: #E99F9F6E;
            --color-black: #0B0E19;
            --color-white: #F2ECE4;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--color-rosa-intermediario);
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            color: #333;
        }

        .form-container h2 {
            color: var(--color-black);
        }

        .form-control {
            border-radius: 40px;
            border: 2px solid var(--color-rosa-escuro);
        }

        .btn-custom {
            border-radius: 20px;
            font-weight: 600;
            background-color: var(--color-rosa-escuro);
            color: white;
        }

        .btn-custom:hover {
            background-color: var(--color-rosa-intermediario);
        }

        .cadastrar a {
            color: var(--color-black);
            text-decoration: none;
        }

        .cadastrar a:hover {
            color: var(--color-rosa-escuro);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-container text-center">
                    <h2>Cadastro</h2>
                    <form action="cadastro.php" method="POST" class="mt-4">
                        <div class="mb-3">
                            <input type="text" name="nome" class="form-control" placeholder="Nome Completo" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="telefone" class="form-control" placeholder="Telefone" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gênero</label>
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="feminino" value="feminino" required>
                                    <label class="form-check-label" for="feminino">Feminino</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino" required>
                                    <label class="form-check-label" for="masculino">Masculino</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="outro" value="outro" required>
                                    <label class="form-check-label" for="outro">Outro</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-custom w-100">Cadastrar</button>
                    </form>
                    <div class="mt-3 cadastrar">
                        <a href="login.php">Já tem uma conta? Faça login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
