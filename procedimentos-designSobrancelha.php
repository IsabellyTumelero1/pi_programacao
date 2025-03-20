<?php
session_start();
include '.\includes\header.php';
?>

<section class="tecnica">
    <div class="conteudo-tecnica">
        <div class="image-centralizacao">
            <img class="img-formatacao" src="assets\img\img-designSobrancelha.jpg" alt="Imagem_1">
            <img class="img-formatacao" src="assets\img\img-designSobrancelha2.jpg" alt="Imagem_2">
        </div>


        <div class="texto-tecnica">
            <div class="titulo-tecnica">Design de Sobrancelha</div>
            <p class="conteudo-descricao">Suas sobrancelhas são a moldura do seu rosto, e um design bem feito faz toda a diferença na sua expressão e beleza natural! O design de sobrancelhas é um procedimento essencial para alinhar, modelar e realçar o olhar, respeitando o formato do seu rosto e suas características únicas. Com técnicas precisas e modernas, removemos excessos, corrigimos assimetrias e criamos um desenho harmonioso, garantindo um acabamento impecável. Utilizamos métodos seguros e indolores para proporcionar um resultado sofisticado e natural, sem comprometer a saúde dos fios. Além disso, o design pode ser combinado com técnicas como a henna para um efeito mais preenchido e duradouro. Perfeito para quem deseja um olhar mais marcante, equilibrado e expressivo, sem precisar recorrer à maquiagem todos os dias. Venha transformar seu visual com um design de sobrancelhas personalizado e realce sua beleza de forma elegante e natural! Agende já o seu atendimento.
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
                        echo '<small style="color: red;">* Login necessário para agendamento</small>';
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