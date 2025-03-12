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
                            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required>
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
            if (valor_do_campo.length < minimo_de_caracteres) {
                return false;
            } else {
                return true;
            }
        }
 
        function fnValidarCampoObrigatorio(valor_do_campo) {
            if (valor_do_campo.trim().length == 0) {
                return false;
            } else {
                return true;
            }
        }
 
        function fnAdicionarMensagemDeErro(id_mensagem, mensagem) {
            if (mensagem == "limpar") {
                document.getElementById(id_mensagem).style.display = "none";
                document.getElementById(id_mensagem).innerHTML = "";
                return;
            }
 
            document.getElementById(id_mensagem).style.display = "block";
            if (document.getElementById(id_mensagem).innerHTML == "")
                document.getElementById(id_mensagem).innerHTML = mensagem
            else {
                document.getElementById(id_mensagem).innerHTML += "<br>" + mensagem
            }
        }
 
        function fnValidarSenhaIgual(confirmar_senha, senha) {
            if (confirmar_senha != senha) {
                return false;
            } else {
                return true;
            }
        }
 
        function fnValidarSenhaMaiuscula(senha) {
            let regex = /[A-Z]/;
            if (regex.test(senha)) {
                return true;
            } else {
                return false;
            }
        }
 
        function fnValidarSenhaCaracterEspecial(senha) {
            let regex = /[^a-zA-Z0-9]/;
            if (regex.test(senha)) {
                return true;
            } else {
                return false;
            }
        }
 
        function fnValidarEmail(email) {
            let regex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/;
            if (regex.test(email)) {
                return true;
            } else {
                return false;
            }
        }
 
        // Função de validação para o campo de gênero
        function fnValidarGenero(generoRadios, mensagemErroId) {
            // Verificar se algum botão de rádio foi selecionado
            let generoSelecionado = false;
 
            for (let i = 0; i < generoRadios.length; i++) {
                if (generoRadios[i].checked) {
                    generoSelecionado = true;
                    break;
                }
            }
 
            if (!generoSelecionado) {
                fnAdicionarMensagemDeErro(mensagemErroId, "* Campo obrigatório");
            } else {
                fnAdicionarMensagemDeErro(mensagemErroId, "limpar");
            }
        }
 
 
        document.getElementById("nome").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-nome", "limpar");
 
            let nomevalido = fnValidarMinimoDeCaracteres(3, this.value);
            if (nomevalido == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-nome", "* No mínimo 3 caracteres");
            }
 
            let nomeobrigatorio = fnValidarCampoObrigatorio(this.value);
            if (nomeobrigatorio == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-nome", "* Campo obrigatório");
            }
        })
 
        document.getElementById("senha").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-senha", "limpar");
 
            let senhavalida = fnValidarMinimoDeCaracteres(8, this.value)
            if (senhavalida == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* No mínimo 8 caracteres");
            }
 
            let confSenhaigual = fnValidarSenhaIgual(this.value);
            if (confSenhaigual == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "* Senha incompatível");
            }
 
            let senhaobrigatoria = fnValidarCampoObrigatorio(this.value);
            if (senhaobrigatoria == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* Campo obrigatório");
            }
 
            let senhamaiuscula = fnValidarSenhaMaiuscula(this.value);
            if (senhamaiuscula == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* Obrigatório letra maiúscula");
            }
 
            let caracterespecial = fnValidarSenhaCaracterEspecial(this.value);
            if (caracterespecial == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-senha", "* Obrigatório caracter especial")
            }
        })
 
        document.getElementById("confirmar_senha").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "limpar");
 
            let confSenhaigual = fnValidarSenhaIgual(this.getElementById("senha").value);
            if (confSenhaigual == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "* Senha incompatível");
            }
 
            let confSenhavalida = fnValidarMinimoDeCaracteres(8, this.value)
            if (confSenhavalida == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "* No mínimo 8 caracteres");
            }
 
            let confSenhaobrigatoria = fnValidarCampoObrigatorio(this.value);
            if (confSenhaobrigatoria == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-confSenha", "* Campo obrigatório");
            }
 
        })
 
        document.getElementById("email").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-email", "limpar");
 
            let emailvalido = fnValidarMinimoDeCaracteres(5, this.value);
            if (emailvalido == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-email", "* No mínimo 5 caracteres");
            }
 
            let emailobrigatorio = fnValidarCampoObrigatorio(this.value);
            if (emailobrigatorio == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-email", "* Campo obrigatório");
            }
 
            let validacaoemail = fnValidarEmail(this.value);
            if (validacaoemail == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-email", "* E-mail inválido");
                this.value = "";
            }
        })
 
        document.getElementById("telefone").addEventListener("blur", function() {
            fnAdicionarMensagemDeErro("mensagem-erro-telefone", "limpar");
 
            let telefonevalido = fnValidarMinimoDeCaracteres(10, this.value)
            if (telefonevalido == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-telefone", "* No mínimo 10 caracteres");
            }
 
            let telefoneobrigatorio = fnValidarCampoObrigatorio(this.value);
            if (telefoneobrigatorio == false) {
                fnAdicionarMensagemDeErro("mensagem-erro-telefone", "* Campo obrigatório");
            }
        })
 
        document.getElementById("feminino").addEventListener("blur", function() {
            const generoRadios = document.getElementsByName("genero");
            fnValidarGenero(generoRadios, "mensagem-erro-genero");
        });
 
        document.getElementById("masculino").addEventListener("blur", function() {
            const generoRadios = document.getElementsByName("genero");
            fnValidarGenero(generoRadios, "mensagem-erro-genero");
        });
 
        document.getElementById("outro").addEventListener("blur", function() {
            const generoRadios = document.getElementsByName("genero");
            fnValidarGenero(generoRadios, "mensagem-erro-genero");
        });
    </script>
</body>
</html>