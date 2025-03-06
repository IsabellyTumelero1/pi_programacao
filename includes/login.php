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
    <link rel="shortcut icon" href="assets\img\favicon.png" type="image/x-icon">
</head>
 
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
 
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #e9a0a1;
    }
 
    .formulario {
        width: 440px;
        background-color: transparent;
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        color: white;
        padding: 50px 40px;
    }
 
    .formulario h2 {
        font-size: 36px;
        text-align: center;
    }
 
    .formulario .input_box {
        width: 100%;
        height: 50px;
        margin: 30px;
        padding-right: 20px;
    }
 
    .input_box input {
        width: 100%;
        height: 100%;
        background-color: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 255);
        border-radius: 40px;
    }
 
    .formulario .btn {
        width: 100%;
        height: 45px;
        background-color: white;
        border: none;
        outline: none;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        cursor: pointer;
        font-size: 16px;
        color: black;
        font-weight: 600;
    }
 
    .formulario .btn:hover {
        background-color: black;
        color: white;
    }
 
    .formulario .cadastrar {
        font-size: 15px;
        text-align: center;
        margin-top: 20px 0 15px;
    }
 
    .cadastrar a {
        color: white;
        text-decoration: none;
    }
 
    .cadastrar a:hover {
        color: black;
    }
 
    /* Estilo para a mensagem de erro */
    .erro {
        color: red;
        font-size: 16px;
        text-align: center;
        margin-bottom: 20px;
    }
</style>
 
<body>
    <div class="formulario">
        <h2>Login</h2>
 
        <?php
        // Exibe a mensagem de erro se houver
        if (isset($_SESSION['login_error'])) {
            echo "<p class='erro'>$_SESSION[login_error]</p>";
            unset($_SESSION['login_error']); // Apaga a variável de erro após exibição
        }
        ?>
 
        <form action="login.php" method="POST">
            <div class="input_box">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="input_box">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <input type="submit" name="submit" value="Logar" class="btn">
            <div class="cadastrar">
                <a href="cadastro.php">Ainda não se cadastrou?</a>
            </div>
        </form>
    </div>
</body>
 
</html>