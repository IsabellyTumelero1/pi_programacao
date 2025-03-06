<?php
session_start();
session_unset();  // Remove todas as variáveis de sessão
session_destroy();  // Destroi a sessão
header('Location: /pi_programacao');  // Redireciona o usuário para a página inicial após o logout
exit();
?>