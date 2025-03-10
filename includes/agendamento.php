<?php
session_start();
include 'config.php'; // Conexão com o banco de dados
 
// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    // Se não estiver logado, redireciona para o login
    header("Location: login.php");
    exit();
}
 
// Variáveis para controle de resposta de AJAX
$ocupados = [];
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pega os dados do formulário
    $procedimento = $_POST['procedimento'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $email = $_SESSION['email'];
 
    // Pega o ID do usuário logado
    $sql = "SELECT id FROM usuarios WHERE email = '$email'";
    $result = $conexao->query($sql);
    $user = $result->fetch_assoc();
    $userId = $user['id'];
 
    // Verifica se já existe um agendamento para a data e hora escolhida
    $sql = "SELECT * FROM agendamentos WHERE data = '$data' AND hora = '$hora'";
    $result = $conexao->query($sql);
   
    if ($result->num_rows > 0) {
        echo "<p>Este horário já está ocupado. Por favor, escolha outro horário.</p>";
    } else {
        // Insere o agendamento no banco de dados
        $sql = "INSERT INTO agendamentos (id_usuario, procedimento, data, hora)
                VALUES ('$userId', '$procedimento', '$data', '$hora')";
       
        if ($conexao->query($sql) === TRUE) {
            header("Location: sucesso.php");
            exit;
            // echo "<p>Agendamento realizado com sucesso!</p>";
            // echo "<button class='botao-sair'><a href='/pi_programacao'>Sair</a></button>";
        } else {
            echo "<p>Erro ao agendar: " . $conexao->error . "</p>";
        }
    }
}
 
// Verificação de horários ocupados via AJAX
if (isset($_GET['data'])) {
    // Obtém a data passada via GET
    $data = $_GET['data'];
 
    // Consulta os horários agendados para a data fornecida
    $sql = "SELECT hora FROM agendamentos WHERE data = '$data'";
    $result = $conexao->query($sql);
 
    // Cria um array com os horários já ocupados
    while ($row = $result->fetch_assoc()) {
        $ocupados[] = $row['hora'];
    }
 
    // Retorna os horários ocupados em formato JSON
    echo json_encode($ocupados);
    exit();  // Finaliza a execução do PHP após retornar a resposta AJAX
}
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(233, 160, 161, 0.5);
            outline: none;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input:focus, select:focus {
            border: 1px solid #E9A0A1;
            box-shadow: 0 0 5px rgba(233, 160, 161, 0.5);
            outline: none;
        }
        button {
            background-color: #E9A0A1;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: rgb(248, 123, 125);
        }
        .botao-sair{
            background-color: #E9A0A1;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            width: 60px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agende sua Consulta</h1>
        <form id="agendamento" method="POST">
            <div class="form-group">
                <label for="procedimento">Selecione o Serviço</label>
                <select id="procedimento" name="procedimento" required>
                    <option value="">Selecione...</option>
                    <option value="nano_lips">Nano Lips</option>
                    <option value="nano_sobrancelha">Nano Sobrancelha</option>
                    <option value="brows_repair">Brows Repair</option>
                    <option value="design_sobrancelha">Design De Sobrancelha</option>
                    <option value="laser">Laser</option>
                </select>
            </div>
 
            <div class="form-group">
                <label for="data">Escolha a Data:</label>
                <input type="date" id="data" name="data" required placeholder="Escolha a data">
            </div>
 
            <div class="form-group">
                <label for="hora">Escolha o Horário:</label>
                <select id="hora" name="hora" required>
                    <!-- As opções de hora serão adicionadas dinamicamente -->
                </select>
            </div>
 
            <button type="submit">Agendar</button>
        </form>
    </div>
 
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const dataInput = document.getElementById('data');
        const horaInput = document.getElementById('hora');
 
        // Impede que o usuário agende para uma data no passado
        const today = new Date().toISOString().split('T')[0];
        dataInput.setAttribute('min', today);
 
        // Criação de opções de horário de 1 em 1 hora (09:00, 10:00, etc.)
        let availableHours = [];
        for (let i = 9; i <= 18; i++) {
            const hour = i < 10 ? '0' + i : i;  // Formatação para horas de 1 dígito (08, 09, etc.)
            const time = `${hour}:00:00`;  // Horário completo (hora cheia)
            availableHours.push(time); // Adiciona a hora ao array de horários disponíveis
        }
 
        // Função para carregar horários bloqueados e atualizar a lista de horas
        dataInput.addEventListener('change', function() {
            const selectedDate = dataInput.value;
           
            if (selectedDate) {
                fetch('?data=' + selectedDate)  // Requisição para o próprio arquivo
                    .then(response => response.json())
                    .then(data => {
                        // Limpa o seletor de horas
                        horaInput.innerHTML = '';
 
                        // Filtra os horários disponíveis
                        const availableTimes = availableHours.filter(time => !data.includes(time));
 
                        // Preenche o seletor de horas com as opções válidas
                        availableTimes.forEach(time => {
                            const option = document.createElement('option');
                            option.value = time;
                            option.textContent = time.substring(0, 5);  // Exibe apenas as horas e minutos
                            horaInput.appendChild(option);
                        });
                    });
            }
        });
 
        // Trigger para preencher as horas quando a data for carregada
        if (dataInput.value) {
            dataInput.dispatchEvent(new Event('change'));
        }
    });
    </script>
 
</body>
</html>