<?php
    if(isset($_POST['submit'])){
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
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <style>
        :root {
            --color-rosa-claro: #F3E4E4;
            --color-rosa-escuro: #E9A0A1;
            --color-rosa-intermediario: #E99F9F6E;
            --color-black: #0B0E19;
            --color-white: #F2ECE4;
        }

        .cadastro {
            height: 100vh;
            background-color: var(--color-rosa-escuro);
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset{
            border: 2px solid var(--color-rosa-escuro);
        }

        legend{
            border: 1px solid var(--color-rosa-intermediario);
            padding: 10px;
            text-align: center;
            background-color: var(--color-rosa-escuro);
            border-radius: 8px;
            color: black;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid var(--color-rosa-escuro);
            outline: none;
            font-size: 15px;
            width: 100%;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: var(--color-rosa-escuro);
        }

        #submit{
            background-color: var(--color-rosa-escuro);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover{
            background-color: #d88f92;
        }
    </style>

    <section class="cadastro">
        <div class="box">
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend><b>Formulário de Cadastro</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br>

                    <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>

                    <input type="submit" id="submit" name="submit">
                </fieldset>
            </form>
        </div>
    </section>
</body>

</html>