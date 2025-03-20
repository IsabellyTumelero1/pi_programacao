<?php
session_start();
include '.\includes\header.php';
?>

<section class="tecnica">
    <div class="conteudo-tecnica">
        <div class="image-centralizacao">
            <img class="img-formatacao" src="assets\img\img-browsRepair.jpg" alt="Imagem_1">
            <img class="img-formatacao" src="assets\img\img-browsRepair2.jpg" alt="Imagem_2">
        </div>


        <div class="texto-tecnica">
            <div class="titulo-tecnica">Brows Repair</div>
            <p class="conteudo-descricao">O "Brows Repair" é um tratamento inovador voltado para o cuidado das sobrancelhas, focado no fortalecimento dos fios, na estimulação do crescimento e na melhoria da saúde da região. Esse procedimento é especialmente indicado para quem sofre com sobrancelhas ralas, fracas ou danificadas devido a fatores como uso excessivo de pinças, depilação, genética ou até mesmo estresse. O "Brows Repair" utiliza uma combinação de vitaminas, nutrientes e ativos especializados para tratar as sobrancelhas diretamente na raiz dos fios. O tratamento é realizado com a aplicação de produtos ricos em substâncias que fortalecem e revitalizam os fios, promovendo o crescimento saudável. Alguns dos ingredientes mais comuns incluem o vitaminas A, E, D, biotina, pantenol, além de ácidos graxos essenciais que estimulam o crescimento dos fios e aumentam a espessura da sobrancelha. O procedimento é simples e indolor: o profissional realiza a aplicação tópica dos ativos na região das sobrancelhas, de forma cuidadosa, para garantir que o produto penetre de maneira eficiente. Dependendo da necessidade de cada cliente, o tratamento pode ser combinado com massagens específicas que ajudam na circulação local, potencializando os resultados.
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