<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Popins", sans-serif;
    }

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #e9a0a1;
    }
    
    .formulario{
        width: 440px;
        background-color: transparent;
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        color: white;
        padding: 50px 40px;
    }
    
    .formulario h2{
        font-size: 36px;
        text-align: center;
    }

    .formulario .input_box{
        width: 100%;
        height: 50px;
        margin: 30px;
        padding-right: 20px;
    }

    .input_box input{
        width: 100%;
        height: 100%;
        background-color: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 255);
        border-radius: 40px;
    }

    .formulario .btn{
        width: 100%;
        height: 45px;
        background-color: white;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        cursor: pointer;
        font-size: 16px;
        color: black;
        font-weight: 600;
    }

    .formulario .cadastrar{
        font-size: 15px;
        text-align: center;
        margin-top: 20px 0 15px;
    }

    .cadastrar a{
        color: white;
        text-decoration: none;
    }

    .cadastrar a:hover{
        text-decoration: underline;
        color: #e9a0a1;
    }
</style>
<body>
    <div class="formulario">
        <form action="">
            <h2>Login</h2>
            <div class="input_box">
                <input type="text" name="nome" placeholder="Usuário" required>
            </div>
            <div class="input_box">
                <input type="password" name="senha" placeholder="Senha" required>                
            </div>
            <button type="submit" class="btn">Logar</button>
            <div class="cadastrar">
                <a href="cadastrar.php">Ainda não se cadastrou?</a>
            </div>
        </form>
    </div>
    <br>
    
</body>
</html>