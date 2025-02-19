<link rel="stylesheet" href=".\assets\css\procedimento.css">

<?php
include_once '.\includes\header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimento</title>
</head>


<style>
    :root {
        --color-rosa-claro: #F3E4E4;
        --color-rosa-escuro: #E9A0A1;
        --color-rosa-intermediario: #E99F9F6E;
        --color-black: #0B0E19;
        --color-white: #F2ECE4;
    }

    .Tecnica {
        display: flex;
        flex-direction: column;
        background-color: var(--color-rosa-claro);
    }

    h1 {
        justify-content: center;
        text-align: center;
        color: var(--color-black);
        font-size: 35px;
    }

    .conteudo-tecnica {
        display: flex;
        align-items: center;
    }

    .image {
        display: flex;
        flex-direction: column;
    }

    img {
        width: 400px;
        height: 250px;
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 30px;
    }

    .descricao-tecnica{
        display: flex;
        flex-direction: column;
        overflow: hidden;
        align-items: center;
    }

    p {
        height: 500px;
        width: 800px;
        color: var(--color-black);
        font-size: 20px;
        margin-left: 40px;
        text-align: justify;
    }

    button {
        background-color: var(--color-rosa-escuro);
        border: none;
        border-radius: 10px;
        height: 50px;
        width: 160px;
        font-size: 20px;
    }

    a {
        text-decoration: none;
        color: var(--color-black);
    }

    /* button:hover{
        transform: ;
    } */
</style>

<section class="Tecnica">
    <h1>Técnica 1</h1>
    <div class="conteudo-tecnica">
        <div class="image">
            <img src="./img/1.jpg" alt="Camila">
            <img src="./img/2.jpg" alt="Camila">
        </div>

        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure in velit, voluptas sit dicta fugit sunt
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
            <button><a href="login.html">Agende-se</a></button></p>
        
    </div>
</section>
<?php
include '.\includes\footer.php';
?>