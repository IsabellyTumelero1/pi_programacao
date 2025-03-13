<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Sucesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --color-rosa-claro: #F3E4E4;
            --color-rosa-escuro: #E9A0A1;
        }

        body {
            background-color: var(--color-rosa-claro);
        }

        .container-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-custom {
            background-color: var(--color-rosa-escuro);
            border: none;
        }

        .btn-custom:hover {
            background-color: #d98283;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="container-box text-center">
        <h2 class="text-dark">Agendamento realizado!</h2>
        <p class="text-muted">Seu horário foi reservado com sucesso.</p>
        <a href="/pi_programacao" class="btn btn-custom text-white px-4 py-2">Sair</a>
        <a href="agenda.php" class="btn btn-custom text-white px-4 py-2">Agenda</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>