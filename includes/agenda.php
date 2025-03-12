<?php
session_start();
include 'config.php'; // Conexão com o banco de dados

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redireciona para o login se não estiver logado
    exit();
}

// Pega o ID do usuário logado
$email = $_SESSION['email'];
$sql = "SELECT id FROM usuarios WHERE email = '$email'";
$result = $conexao->query($sql);
$user = $result->fetch_assoc();
$userId = $user['id'];

// Recupera os agendamentos do usuário
$sql = "SELECT * FROM agendamentos WHERE id_usuario = '$userId' ORDER BY data DESC";
$result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Agenda</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body>
    <style>
        /* Estilo da página "Minha Agenda" */
        body {
            font-family: Arial, sans-serif;
            background-color: #E99F9F6E;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #E9A0A1;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
            color: #333;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover td {
            background-color: #f3d1d2;
        }

        p {
            text-align: center;
            color: #E9A0A1;
            font-size: 18px;
        }

        button {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 12px;
            background-color: #E9A0A1;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        button:hover {
            background-color: rgb(248, 123, 125);
        }

        /* Estilos Responsivos */
        @media screen and (max-width: 768px) {
            .container {
                width: 95%;
                padding: 15px;
            }

            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 10px;
            }
        }

        @media screen and (max-width: 480px) {
            h1 {
                font-size: 20px;
            }

            button {
                width: 100%;
                font-size: 14px;
            }

            table {
                font-size: 12px;
            }

            th,
            td {
                padding: 8px;
            }
        }

        .botao-voltar {
            background-color: #E9A0A1;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 20px;
            width: 200px;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 20px;
        }
    </style>

    <div class="container">
        <h1>Minha Agenda</h1>

        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Procedimento</th>
                        <th>Hora</th>
                        <th>Desmarcar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo date('d/m/Y', strtotime($row['data'])); ?></td>
                            <td><?php echo $row['procedimento']; ?></td>
                            <td><?php echo $row['hora']; ?></td>
                            <td>
                            <a href="excluir-agendamento.php?id=<?php echo $row['id']; ?>"
                                onclick="return confirm('Tem certeza que deseja desmarcar este agendamento?');">
                                <img src="../assets/img/img-lixeira.png" alt="Desmarcar" width="30">
                            </a>
                        </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Você ainda não tem procedimentos agendados.</p>
        <?php endif; ?>
    </div>
    <button class='botao-voltar'><a href='/pi_programacao/index.php'>Voltar</a></button>
</body>

</html>