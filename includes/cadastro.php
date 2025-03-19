<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $confirmarSenha = $_POST['confirmarSenha'];

    // Verificar se o e-mail já existe no banco de dados
    $check_email = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email'");
    if (mysqli_num_rows($check_email) > 0) {
        echo "<script>alert('Este e-mail já está cadastrado!'); window.location.href='cadastro.php';</script>";
        exit();
    }

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, genero, confirmarSenha) 
        VALUES('$nome', '$senha', '$email', '$telefone', '$genero', '$confirmarSenha')");

    header('Location: login.php'); //redireciona para tela de login
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
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

        .erro {
            color: red;
            font-size: 12px;
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
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required>
                            <span class="erro" id="mensagem-erro-nome"></span>
                        </div>
                        <div class="mb-3">
                            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                            <span class="erro" id="mensagem-erro-email">
                        </div>
                        <div class="mb-3">
                            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required maxlength="11">
                            <span class="erro" id="mensagem-erro-telefone">
                        </div>
                        <div class="mb-3">
                            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                            <span class="erro" id="mensagem-erro-senha">
                        </div>
                        <div class="mb-3">
                            <input type="password" id="confSenha" name="confirmarSenha" class="form-control" placeholder="Confirmar Senha" required>
                            <span class="erro" id="mensagem-erro-confSenha">
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
                            <span class="erro" id="mensagem-erro-genero">

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
    <script>
        function fnValidarMinimoDeCaracteres(minimo_de_caracteres, valor_do_campo) {
            return valor_do_campo.length >= minimo_de_caracteres;
        }

        function fnValidarCampoObrigatorio(valor_do_campo) {
            return valor_do_campo.trim().length > 0;
        }

        function fnAdicionarMensagemDeErro(id_mensagem, mensagem) {
            let elemento = document.getElementById(id_mensagem);
            if (!elemento) return;

            if (mensagem === "limpar") {
                elemento.style.display = "none";
                elemento.innerHTML = "";
            } else {
                elemento.style.display = "block";
                elemento.innerHTML = mensagem;
            }
        }

        function fnValidarSenhaIgual(confirmar_senha, senha) {
            return confirmar_senha === senha;
        }

        function fnValidarSenhaMaiuscula(senha) {
            return /[A-Z]/.test(senha);
        }

        function fnValidarSenhaCaracterEspecial(senha) {
            return /[^a-zA-Z0-9]/.test(senha);
        }

        function fnValidarEmail(email) {
            let regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
            return regex.test(email);
        }

        function fnValidarGenero(generoRadios, mensagemErroId) {
            let generoSelecionado = Array.from(generoRadios).some(radio => radio.checked);
            fnAdicionarMensagemDeErro(mensagemErroId, generoSelecionado ? "limpar" : "* Campo obrigatório");
        }

        // Eventos
        document.getElementById("nome").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-nome", "limpar");

            if (!fnValidarMinimoDeCaracteres(3, this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-nome", "* No mínimo 3 caracteres");
            }
            if (!fnValidarCampoObrigatorio(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-nome", "* Campo obrigatório");
            }
        });

        document.getElementById("senha").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-senha", "limpar");

            if (!fnValidarMinimoDeCaracteres(8, this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* No mínimo 8 caracteres");
            }
            if (!fnValidarSenhaMaiuscula(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* Deve conter pelo menos uma letra maiúscula");
            }
            if (!fnValidarSenhaCaracterEspecial(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* Deve conter pelo menos um caractere especial");
            }
        });

        document.getElementById("confSenha").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "limpar");

            let senha = document.getElementById("senha").value;
            if (!fnValidarSenhaIgual(this.value, senha)) {
                fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "* Senha incompatível");
            }
            if (!fnValidarCampoObrigatorio(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "* Campo obrigatório");
            }
        });

        document.getElementById("email").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-email", "limpar");

            if (!fnValidarMinimoDeCaracteres(5, this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-email", "* No mínimo 5 caracteres");
            }
            if (!fnValidarCampoObrigatorio(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-email", "* Campo obrigatório");
            }
            if (!fnValidarEmail(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-email", "* E-mail inválido");
                this.value = "";
            }
        });

        document.getElementById("telefone").addEventListener("blur", function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // Permite apenas números
            fnAdicionarMensagemDeErro("mensagem-erro-telefone", "limpar");

            // Formatar para (XX)XXXXX-XXXX
            if (this.value.length >= 2) {
                this.value = `(${this.value.slice(0, 2)})${this.value.slice(2, 7)}-${this.value.slice(7, 11)}`;
            }
            if (!fnValidarMinimoDeCaracteres(10, this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-telefone", "* No mínimo 10 caracteres");
            }
            if (!fnValidarCampoObrigatorio(this.value)) {
                fnAdicionarMensagemDeErro("mensagem-erro-telefone", "* Campo obrigatório");
            }
        });

        // Validação do gênero
        document.querySelectorAll("input[name='genero']").forEach(radio => {
            radio.addEventListener("blur", function() {
                fnValidarGenero(document.getElementsByName("genero"), "mensagem-erro-genero");
            });
        });
    </script>
</body>

</html>