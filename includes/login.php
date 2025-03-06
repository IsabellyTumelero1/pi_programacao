<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Conexão com o banco de dados
    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta ao banco para verificar se o e-mail e a senha existem
    $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
    $result = $conexao->query($sql);

    // Verifica se o usuário foi encontrado
    if (mysqli_num_rows($result) < 1) {
        $_SESSION['login_error'] = "E-mail ou senha inválidos.";
        header('Location: login.php');
        exit();
    } else {
        // Se o login for válido, cria a sessão e redireciona para a página principal ou a página de origem
        $user = mysqli_fetch_assoc($result); // Recupera os dados do usuário
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $user['nome']; // Supondo que você tenha um campo 'nome' na tabela 'usuarios'

        // Verifica se o parâmetro 'redirect' está presente na URL
        if (isset($_GET['redirect'])) {
            $redirect = $_GET['redirect'];
            header("Location: $redirect");  // Redireciona para a página de origem
        } else {
            header('Location: /pi_programacao');  // Página após login bem-sucedido, se 'redirect' não existir
        }
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets\img\favicon.ico" type="image/x-icon">
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
            background-color: var(--color-rosa-escuro);
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            color: #333;
        }

        .form-container h2 {
            color: var(--color-rosa-escuro);
        }

        .form-control {
            border-radius: 40px;
            border: 2px solid var(--color-rosa-escuro);
        }

        /* .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        } */

        .btn-custom {
            border-radius: 20px;
            font-weight: 600;
            background-color: var(--color-rosa-escuro);
            color: white;
        }

        .btn-custom:hover {
            background-color:var(--color-rosa-intermediario);
        }

        .cadastrar a {
            color: var(--color-black);
            text-decoration: none;
        }

        .cadastrar a:hover {
            color:var(--color-rosa-escuro);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-container text-center">
                    <h2>Login</h2>
                    <?php
                    if (isset($_SESSION['login_error'])) {
                        echo "<div class='alert alert-danger mt-3'>$_SESSION[login_error]</div>";
                        unset($_SESSION['login_error']);
                    }
                    ?>
                    <form action="login.php" method="POST" class="mt-4">
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-custom w-100">Logar</button>
                    </form>
                    <div class="mt-3 cadastrar">
                        <a href="cadastro.php">Ainda não se cadastrou?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>