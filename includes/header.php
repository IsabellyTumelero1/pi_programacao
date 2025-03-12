<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camila</title>
    <link rel="shortcut icon" href="assets\img\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\footer.css">
    <link rel="stylesheet" href="assets\css\procedimentos-formatacao.css">

<body>
    <div class="header">
        <header>
            <a href="index.php"><img class="img-logo-header" src="assets\img\img_logo_preto.png" alt="img-logo"></a>

            <nav>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="quemSou.php">Quem somos</a></li>
                    <li><a href="#">Procedimentos</a>
                        <ul class="dropdown">
                            <li><a href="procedimentos-nanoLips.php">Nano Lips</a></li>
                            <li><a href="procedimentos-pigmentacaoSobrancelha.php">Nano Sobrancelhas</a></li>
                            <li><a href="procedimentos-browsRepair.php">Brows Repair</a></li>
                            <li><a href="procedimentos-designSobrancelha.php">Design de Sobrancelha</a></li>
                            <li><a href="procedimentos-laser.php">Laser</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Micro do Bem</a></li>
                    <?php
                    if (!isset($_SESSION['email'])) {
                        // Se o usuário não estiver logado, exibe o link de login
                        echo "<li><a href='includes/login.php'>Login</a></li>";
                    } else {
                        // Caso contrário, exibe o nome dele e o link de logout
                        echo "<li><a href='#'>{$_SESSION['nome']}</a>";
                        echo "<ul class='dropdown'>";
                        echo "<li><a href='includes/logout.php'>Logout</a></li>";
                        echo "<li><a href='includes/agenda.php'>Minha agenda</a></li>";
                        echo "</ul>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </nav>
        </header>
    </div>