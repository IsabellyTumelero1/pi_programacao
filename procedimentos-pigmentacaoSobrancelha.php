<?php
session_start();
include '.\includes\header.php';
?>

<section class="tecnica">
    <div class="conteudo-tecnica">
        <div class="image-centralizacao">
            <img class="img-formatacao" src="assets\img\img-nanoPigmentacao.jpg" alt="Imagem_1">
            <img class="img-formatacao" src="assets\img\img-nanoPigmentacao2.jpg" alt="Imagem_2">
        </div>


        <div class="texto-tecnica">
            <div class="titulo-tecnica">Nano Pigmentação de Sobrancelha</div>
            <p class="conteudo-descricao">Imagine acordar todos os dias com sobrancelhas perfeitas, sem precisar de maquiagem! 
                A pigmentação de sobrancelhas é a solução ideal para quem deseja um olhar mais expressivo, harmonioso e natural. 
                Com técnicas modernas e seguras, esse procedimento preenche falhas, realça o desenho natural e valoriza a beleza do rosto, 
                proporcionando um efeito sofisticado e duradouro. A aplicação é feita com pigmentos de alta qualidade, escolhidos de acordo 
                com o seu tom de pele e fios, garantindo um resultado personalizado e elegante. Além de economizar tempo na sua rotina diária, 
                a pigmentação traz mais autoestima e praticidade, deixando seu visual impecável 24 horas por dia. Nossa técnica é indolor, 
                segura e realizada por profissionais capacitados, para que você tenha uma experiência confortável e um resultado incrível. 
                Agende já a sua sessão e descubra como transformar seu olhar com sobrancelhas definidas, naturais e deslumbrantes!
                <br><br>
                <button class="btn-agendamento">
                    <?php
                    // Verifica se o usuário está logado
                    if (isset($_SESSION['email'])) {
                        // Se estiver logado, permite o acesso ao agendamento
                        echo '<a class="btn-link" href="includes/agendamento.php">Agende-se</a>';
                    } else {
                        // Se não estiver logado, redireciona para a página de login
                        echo '<a class="btn-link" href="includes/login.php">Logar</a>';
                    }
                    ?>
                </button>
            </p>
        </div>
    </div>
</section>
<?php
include '.\includes\footer.php';
?>