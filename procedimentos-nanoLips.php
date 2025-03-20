<?php
session_start();
include '.\includes\header.php';
?>

<section class="tecnica">
    <div class="conteudo-tecnica">
        <div class="image-centralizacao">
            <img class="img-formatacao" src="assets\img\img-nanoLips.jpg" alt="Imagem_1">
            <img class="img-formatacao" src="assets\img\img-nanoLips2.jpg" alt="Imagem_2">
        </div>


        <div class="texto-tecnica">
            <div class="titulo-tecnica">Nano Lips</div>
            <p class="conteudo-descricao">O procedimento "Nano Lips" é uma técnica moderna de micro pigmentação labial, que visa aprimorar a aparência dos lábios, proporcionando mais definição e cor natural. Esse tratamento é ideal para pessoas que desejam corrigir assimetrias, dar volume ou simplesmente realçar a cor dos lábios sem recorrer a intervenções invasivas. O "Nano Lips" utiliza uma tecnologia de microagulhas ultrafinas para depositar pigmentos na camada superficial da pele dos lábios. A técnica é chamada de micro pigmentação, pois o pigmento é aplicado de forma precisa e controlada, com agulhas em tamanho nanométrico. O objetivo é criar um efeito mais suave e natural, diferente de outras técnicas mais tradicionais que podem deixar o resultado com contornos mais marcados. Durante o procedimento, o profissional realiza um mapeamento personalizado dos lábios, levando em consideração a forma e a cor desejada. O uso das agulhas de nano precisa permite uma aplicação uniforme e delicada, evitando a sensação de lábios artificiais.</p>
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