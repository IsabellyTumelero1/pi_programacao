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

        section.micro-do-bem {
            padding: 80px 10%;
            background-color: var(--color-rosa-intermediario);
            font-family: 'Roboto', sans-serif;
        }

        .OQueE-MicroDoBem {
            display: flex;
            gap: 100px;
        }

        .img-inicio-dobem {
            width: 450px;
            height: 500px;
            border-radius: 15px;
        }

        .txtInicio-doBem {
            border-top: 1px solid black;
            border-right: 1px solid black;
        }

        .txt-doBem {
            text-align: left;
            margin-right: 10%;
            margin-left: 7%;

        }

        .txtInicio-doBem h2 {
            font-size: 38px;
            letter-spacing: -0.5px;
            margin-left: 3%;
            margin-top: 100px;
        }

        .flex-doBem {
            display: flex;
        }


        section.micro-do-bem2 {
            background-color: black;
            padding: 80px 10%;
            font-family: 'Roboto', sans-serif;
        }

        .prcedimento-doBem {
            display: flex;
            gap: 100px;
        }

        .txtProcedimento-doBem {
            border-left: 1px solid var(--color-rosa-escuro);
            border-bottom: 1px solid var(--color-rosa-escuro);
        }

        .txtProcedimento-doBem h2 {
            font-size: 38px;
            letter-spacing: -0.5px;
            color: var(--color-rosa-escuro);
            margin-left: 7%;
            margin-top: 70px;
        }

        .txt-doBem2 {
            text-align: left;
            color: var(--color-rosa-escuro);
            margin-left: 10%;
            margin-right: 10%;
            margin-bottom: 80px;
        }

        .img-microdobem {
            margin-top: 150px;
            margin-right: 40px;
        }

        .img-procedimento-doBem {
            border-right: 1px solid var(--color-rosa-escuro);
            border-top: 1px solid var(--color-rosa-escuro);
        }

        .h2-doBem {
            margin: 0;
        }

        

    </style>
    <section class="micro-do-bem">
        <div class="flex-doBem">
            <div class="OQueE-MicroDoBem">
                <div>
                    <!--trocar para a image definitiva-->
                    <img class="img-inicio-dobem" src="assets\img\cancer_mama.jpg">
                </div>
                <div class="txtInicio-doBem">
                    <h2>Micro do <span style="color: #ec7c7e;">Bem</span></h2>
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
            </div>
        </div>
    </section>
    <section class="micro-do-bem2">
        <div class="flex-doBem">
            <div class="prcedimento-doBem">
                <div class="txtProcedimento-doBem">
                    <h2>
                        Procedimentos
                    </h2>
                    <div class="txt-doBem2">
                        <p>
                            a mastectomia (cirurgia para remoção da mama). Diferente de uma tatuagem tradicional, este procedimento utiliza equipamentos e tintas desenvolvidas especialmente para esse tipo de trabalho, que são mais suaves e biocompatíveis com a pele.
                        </p>
                        <p><br>
                            O objetivo é criar uma aparência natural e harmônica, tanto em termos de cor quanto de textura, para que a reconstrução das aréolas seja o mais realista possível. Além de devolver a simetria e a beleza da região, a micropigmentação paramédica desempenha um papel importante na restauração da autoestima, promovendo uma nova percepção do corpo.
                        </p>
                        <p><br>
                            Dependendo da complexidade de cada caso e da reação da pele, o procedimento pode ser realizado em uma ou mais sessões, sempre com o cuidado e a atenção necessários para garantir um resultado perfeito.
                        </p>
                    </div>
                </div>
                <div class="img-procedimento-doBem">
                    <!--trocar para a image definitiva-->
                    <img class="img-microdobem" src="https://s3-alpha-sig.figma.com/img/dbe1/0a2a/cb2565b13f4ec2110eb3e67fac06e7c2?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=W6YGfFhi9KYc5Uy9oHxF96nLo3rAUKDEJF10nlWpUWWENAC4Fib0lwz18NDPMTTeHklLpDKUBvx33pYHhU0rP6e~V6huCzk3tcHJcuwYVzrl42V2S2DhRPESiokBkgz9LJmDRbA9MYZXusEC8OI~rynVvI-r09wvPLhf~Ito88-qtYxNb1LnclG5Qz1qwMay0lYbAS27LY1jTOpCCc3XVDpgjQwEBzq0dHGzH4YJBGK-sY4p~IB4hP8Mh~hzFPc2fJmNvzw3wKzBKrjEngBBfLSm8vSbEMYxau-I4C4SJ6K6p9hwZ2aqQvnv5HKRN4W64GJuV7tI32pCiHKFmsnD0Q__">
                </div>
            </div>
        </div>
    </section>
    <?php include '.\includes\feedback2.php'?>
</body>
<?php include '.\includes\footer.php'; ?>

</html>