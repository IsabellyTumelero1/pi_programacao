<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9a0a1;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario {
            width: 440px;
            background-color: transparent;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            padding: 50px 40px;
            color: white;
        }

        .formulario h2 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 30px;
        }

        .formulario .input_box {
            width: 100%;
            height: 50px;
            margin-bottom: 30px;
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

        .cadastrar {
            font-size: 15px;
            text-align: center;
            margin-top: 20px;
        }

        .cadastrar a {
            color: white;
            text-decoration: none;
        }

        .cadastrar a:hover {
            color: black;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <form action="controle_login.php">
            <h2>Login</h2>

            <div class="input_box mb-3">
                <input type="text" name="nome" class="form-control rounded-pill" placeholder="E-mail" required>
            </div>

            <div class="input_box mb-3">
                <input type="password" name="senha" class="form-control rounded-pill" placeholder="Senha" required>
            </div>

            <input type="submit" name="submit" value="Logar" class="btn mb-3">

            <div class="cadastrar">
                <a href="cadastro.php">Ainda não se cadastrou?</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>