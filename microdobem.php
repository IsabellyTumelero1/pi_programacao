<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro do Bem</title>
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

        section.micro-do-bem{
            padding: 80px 10%;
            background-color: var(--color-rosa-intermediario);
            font-family: 'Roboto', sans-serif;
        }
        .OQueE-MicroDoBem{
            display: flex; 
            gap: 100px; 
        }
        .txtInicio-doBem{
            border-top: 1px solid black;
            border-right: 1px solid black;
            
        }
        .txt-doBem{
            text-align: left; 
            margin-right: 10%; 
            margin-left: 7%;
           
        }
        .txtInicio-doBem h2{
            font-size: 38px;
            letter-spacing: -0.5px;
            margin-left: 3%;
            margin-top: 100px;
        }
       
    </style>
    <section class="micro-do-bem">
        <div class="flex-doBem">
            <div class="OQueE-MicroDoBem">

                <div class="img-inicio-dobem" style="min-height: 500px; max-height: 500px; min-width: 300px; max-width: 300px; border-radius: 15px; background-color: red;">
                    <img src="" alt="">
                </div>
                <div class="txtInicio-doBem">
                    <h2 class="">Micro do Bem</h2>
                    <div class="txt-doBem">
                    <p>
                        Transformar a dor em esperança através da micropigmentação paramédica tem sido um propósito que me acompanha há alguns anos. 
                        Pequenos detalhes podem fazer uma enorme diferença na vida das mulheres que superaram o câncer de mama. 
                    </p>
                    <p><br>
                        A micropigmentação paramédica reconstrói as aréolas de forma natural, proporcionando uma nova percepção de si mesmas e restaurando a autoestima. 
                        Esse trabalho vai além da estética, é um verdadeiro recomeço, permitindo que essas mulheres se vejam e se sintam novamente completas e confiantes.
                    </p>
                    </div>
                </div>
                <div>
                    <div>

                    </div>
                </div>
     
            </div>
        </div>
    </section>
</body>
</html>
<?php include '.\includes\footer.php';?>