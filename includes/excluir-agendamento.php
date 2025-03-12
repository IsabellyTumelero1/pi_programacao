<?php
session_start();
include 'config.php'; // Conexão com o banco

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Pegando o ID do usuário logado para garantir que ele só exclua seus próprios agendamentos
    $email = $_SESSION['email'];
    $sql = "SELECT id FROM usuarios WHERE email = '$email'";
    $result = $conexao->query($sql);
    $user = $result->fetch_assoc();
    $userId = $user['id'];

    // Excluir apenas se o agendamento pertencer ao usuário logado
    $sql = "DELETE FROM agendamentos WHERE id = ? AND id_usuario = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ii", $id, $userId);

    if ($stmt->execute()) {
        echo "<script>alert('Agendamento desmarcado com sucesso!'); window.location.href='agenda.php';</script>";
    } else {
        echo "<script>alert('Erro ao desmarcar agendamento.'); window.location.href='agenda.php';</script>";
    }

    $stmt->close();
    $conexao->close();
} else {
    header("Location: agenda.php");
    exit();
}
?>