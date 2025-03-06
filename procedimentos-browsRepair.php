<?php
session_start();
include '.\includes\header.php';

// // Verifica se o usuário está logado
// if (!isset($_SESSION['email'])) {
//     // Se não estiver logado, redireciona para o login, passando o endereço atual na URL
//     $currentPage = "procedimentos-nanoLips.php"; // Nome da página atual
//     header("Location: includes/login.php?redirect=$currentPage");
//     exit();
// }
?>

<section class="tecnica">
    <div class="conteudo-tecnica">
        <div class="image-centralizacao">
            <img class="img-formatacao" src="assets\img\img-browsRepair.jpg" alt="Imagem_1">
            <img class="img-formatacao" src="assets\img\img-browsRepair2.jpg" alt="Imagem_2">
        </div>


        <div class="texto-tecnica">
            <div class="titulo-tecnica">Brows Repair</div>
            <p class="conteudo-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure in velit, voluptas sit dicta fugit sunt
                laboriosam recusandae doloribus odio magnam. Id, dolor architecto veniam et praesentium odio, atque
                vitae inventore in hic tempore adipisci nam voluptatibus iste itaque recusandae illum molestias sit,
                deleniti rem repellendus placeat! Necessitatibus, quisquam maiores laboriosam ullam nulla deleniti
                laudantium aspernatur autem voluptas accusamus nisi illo sed tempora ea a pariatur consequatur harum in
                ipsum vero totam exercitationem alias consequuntur? Laborum asperiores, maiores dignissimos dolores odio
                ut! Minus recusandae, non error molestias vero culpa itaque esse consequatur veniam ab magnam commodi
                maiores, tenetur molestiae quidem magni distinctio adipisci quo nobis aspernatur dolore animi voluptatem
                quos. Exercitationem consectetur velit nisi itaque. Aperiam, veritatis, repudiandae exercitationem animi
                eveniet fugit velit eaque aut dolorem voluptas impedit officiis. Laudantium iste eum commodi excepturi
                aspernatur debitis voluptate ipsa minus aperiam, nisi quis amet magni porro sed tempora totam. Veritatis
                necessitatibus deleniti sapiente deserunt qui rem reprehenderit ipsam pariatur quaerat culpa magni
                voluptas cumque accusamus tempore iste velit illum ea, totam voluptatem doloribus saepe quo maiores esse
                adipisci. Quam fuga fugit quidem? Illo ab magnam ipsum sunt, quidem iste veritatis porro, facilis
                aliquid repellendus culpa sequi eligendi, similique nam quia cum!
                <br><br>
                <button class="btn-agendamento">
                    <?php
                    // Verifica se o usuário está logado
                    if (isset($_SESSION['email'])) {
                        // Se estiver logado, permite o acesso ao agendamento
                        echo '<a class="btn-link" href="includes/agendamento.php">Agende-se</a>';
                    } else {
                        // Se não estiver logado, redireciona para a página de login
                        echo '<a class="btn-link" href="includes/login.php">Faça login para agendar</a>';
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