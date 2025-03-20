<?php
session_start();
include '.\includes\header.php';
?>

<section class="tecnica">
    <div class="conteudo-tecnica">
        <div class="image-centralizacao">
            <img class="img-formatacao" src="assets\img\img-laser.jpg" alt="Imagem_1">
            <img class="img-formatacao" src="assets\img\img-laser2.jpg" alt="Imagem_2">
        </div>


        <div class="texto-tecnica">
            <div class="titulo-tecnica">Laser</div>
            <p class="conteudo-descricao">Se você está buscando uma solução prática, eficaz e duradoura para se livrar dos pelos indesejados ou apagar aquela tatuagem que já não combina com você, a depilação e remoção de tatuagem a laser são as escolhas perfeitas. Com a depilação a laser, você conquista uma pele lisa e sem pelos de forma permanente, sem o desconforto da cera ou lâmina, e com resultados rápidos e duradouros. Já a remoção de tatuagem a laser oferece uma maneira segura e eficaz de eliminar a tatuagem que você não quer mais, com resultados gradativos e sem deixar marcas ou cicatrizes. Ambos os procedimentos são rápidos, seguros e praticamente sem dor, além de exigirem um número reduzido de sessões para alcançar o resultado desejado. Agende sua consulta e experimente a transformação que esses tratamentos podem proporcionar para sua autoestima e bem-estar!



.
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