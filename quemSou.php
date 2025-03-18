<?php
session_start();
include 'includes/header.php';
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Sou Eu?</title>
    <style>
        :root {
            --color-rosa-claro: #F3E4E4;
            --color-rosa-escuro: #E9A0A1;
            --color-rosa-intermediario: #E99F9F6E;
            --color-black: #0B0E19;
            --color-white: #F2ECE4;
        }
 
        body {
            margin: 0;
            padding: 0;
            background-color: var(--color-rosa-claro);
            font-family: 'Roboto', sans-serif;
        }
 
        section.quemSou {
            padding: 80px 4%;
            background-color: var(--color-rosa-intermediario);
        }
 
        .flex {
            display: flex;
        }
 
        .quemSou .flex {
            align-items: center;
            justify-content: center;
            gap: 90px;
        }
 
        .quemSou h2 {
            color: var(--color-black);
            font-size: 38px;
            text-align: center;
            letter-spacing: -0.5px;
        }
 
        .quemSou h2 span {
            color: #ec7c7e;
        }
 
        .quemSou .txt-portfolio {
            margin: 40px 0;
        }
 
        .btn-contato {
            margin-top: 30px;
            padding: 10px 20px;
            background-color: var(--color-rosa-escuro);
            font-size: 20px;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
 
        section.sobre{
            background-color: var(--color-rosa-escuro);
        }
 
        .img-portfolio {
            position: relative;
            animation: flutuar 2s ease-in-out infinite alternate;
        }
 
        @keyframes flutuar {
            0% {
                top: 0;
            }
 
            100% {
                top: 30px;
            }
        }
 
        section.especialidades {
            padding: 40px 4%;
        }
 
        section.especialidades .flex {
            gap: 60px;
        }
 
        .especialidades .especialidades-box {
            padding: 40px;
            border-radius: 20px;
            margin-top: 45px;
            transition: .2s;
        }
 
        .especialidades .especialidades-box:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #ec7c7e;
        }
 
        .especialidades-box h3 {
            font-size: 28px;
            margin: 15px 0;
        }
 
        section.sobre {
            padding: 80px 4%;
            background-color: var(--color-rosa-intermediario);
        }
 
        section.sobre .flex {
            align-items: center;
            gap: 60px;
        }
 
        .sobre .txt-sobre h2 {
            font-size: 34px;
            line-height: 40px;
            margin-bottom: 30px;
        }
 
        .sobre .txt-sobre h2 span {
            display: block;
            color: #ec7c7e;
        }
 
        .sobre .txt-sobre p {
            margin: 20px 0;
            text-align: justify;
        }
 
        section.sobre .img-sobre{
            height: 400px;
            width: 700px;
            border-radius: 15px;
            object-fit: cover;
        }
 
        section.portfolio {
            padding: 80px 4%;
        }
 
        section.portfolio .flex {
            justify-content: space-around;
            margin-top: 60px;
        }
 
        section.portfolio .img-port {
            width: 360px;
            height: 460px;
            background-size: cover;
            background-position: 100% 0%;
            cursor: pointer;
            border-radius: 20px;
            transition: 15s;
            position: relative;
        }
 
        section.portfolio .img-port:hover {
            background-position: 100% 100%;
        }
 
        .site1 {
            background-image: url(assets/img/rolagem_sobrancelha.jpg);
        }
 
        .site2 {
            background-image: url(assets/img/rolagem_boca.jpg);
        }
 
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0000009f;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            font-weight: 600;
            color: var(--color-rosa-claro);
            opacity: 0;
            transition: .5s;
        }
 
        .overlay:hover {
            opacity: 1;
        }
 
        @media screen and (max-width: 768px) {
            section.portfolio .flex {
                flex-direction: column;
                gap: 20px;
                align-items: center;
            }
 
            section.portfolio .img-port {
                width: 100%;
                height: 400px;
                background-size: cover;
                background-position: 100% 0%;
                cursor: pointer;
                border-radius: 20px;
                transition: background-position 1s ease;
                position: relative;
            }
 
            section.portfolio .img-port:hover {
                background-position: 100% 100%;
            }
 
            .site1 {
                background-image: url(assets/img/rolagem_sobrancelha.jpg);
            }
 
            .site2 {
                background-image: url(assets/img/rolagem_boca.jpg);
            } 
            
            @media screen and (max-width: 480px) {
                section.portfolio .img-port {
                    height: 250px;
                    width: 100%;
                }
            }
        }
    </style>
</head>
 
<body>
    <section class="quemSou">
        <div class="interface">
            <div class="flex">
                <div class="txt-portfolio">
                    <h2>Transformando Beleza, Elevando Autoestima: <span>Meu Trabalho, Sua Confiança</span></h2>
                    <p>Com anos de experiência e formação especializada, sou uma profissional dedicada à arte do design de sobrancelhas, micro pigmentação de sobrancelhas e bocas, além de tratamentos com laser. Meu compromisso é oferecer resultados excepcionais, realçando sua beleza e autoestima com técnicas modernas e de alta qualidade. Confie em quem entende do assunto e transforme sua beleza com segurança e perfeição.</p>
 
                    <div>
                        <a href="https://wa.me/5519981758558" target="_blank">
                            <button class="btn-contato">
                                Entre em contato
                            </button>
                        </a>
                    </div>
                </div>
 
                <div class="img-portfolio">
                    <img src="assets/img/camila-portifolio.png" alt="Camila">
                </div>
            </div>
        </div>
    </section>
 
    <section class="especialidades">
        <div class="interface">
            <h2 style="text-align: center; font-size: 34px;">MINHAS <span style="color: #ec7c7e;">ESPECIALIDADES</span></h2>
            <div class="flex">
                <div class="especialidades-box">
                    <img src="assets/img/sobrancelha.png" alt="Sobrancelha">
                    <h3>Sobrancelhas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa culpa illo optio adipisci nam ex laudantium quasi sed, eius provident?</p>
                </div>
                <div class="especialidades-box">
                    <img src="assets/img/boca.png" alt="Boca">
                    <h3>Boca</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa culpa illo optio adipisci nam ex laudantium quasi sed, eius provident?</p>
                </div>
                <div class="especialidades-box">
                    <img src="assets/img/laser.png" alt="Laser">
                    <h3>Laser</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa culpa illo optio adipisci nam ex laudantium quasi sed, eius provident?</p>
                </div>
            </div>
        </div>
    </section>
 
    <section class="sobre">
        <div class="flex">
            <img class="img-sobre" src="assets/img/camila.jpg" alt="Camila">
            <div class="txt-sobre">
                <h2>MUITO PRAZER, <span>CAMILA SANTI!</span></h2>
                <p>Desde 2011, minha paixão pelo embelezamento e empoderamento feminino me guia em cada passo da minha jornada. Com graduação em Fisioterapia Dermatofuncional, encontrei minha verdadeira vocação nas sobrancelhas, um universo que me encanta e transforma vidas.</p>
                <p>Em 2016, comecei a compartilhar meu conhecimento como Master Trainer Beauty, com o objetivo de não apenas realçar a beleza das minhas clientes, mas também formar profissionais de alta performance para o mercado.</p>
                <p>Com 13 anos de experiência em estética, atendimento e vendas, trouxe toda minha expertise para os meus cursos. Minha missão é ajudar você a alcançar a excelência profissional, assim como eu.</p>
            </div>
        </div>
    </section>
 
    <section class="portfolio">
        <div class="interface">
            <h2 style="text-align: center; font-size: 34px;">MEU <span style="color: #ec7c7e;">PORTFÓLIO:</span></h2>
            <div class="flex">
                <div class="img-port site1">
                    <div class="overlay">Sobrancelhas</div>
                </div>
                <div class="img-port site2">
                    <div class="overlay">Bocas</div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include '.\includes\footer.php'; ?>