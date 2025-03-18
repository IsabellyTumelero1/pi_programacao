<link rel="stylesheet" href="assets/css/carrossel.css">

<section>
    <h2 class="titulo">Procedimentos</h2>

    <div class="carrossel">
        <div class="carrossel-container">
            <div class="carrossel-procedimento">
                <img src="assets\img\pigmentacao-labios.jpg" alt="Procedimento 1">
            </div>
            <div class="carrossel-procedimento">
                <img src="assets\img\design-sobrancelha.jpg" alt="Procedimento 2">
            </div>
            <div class="carrossel-procedimento">
                <img src="assets\img\remocao-laser.jpg" alt="Procedimento 3">
            </div>
            <div class="carrossel-procedimento">
                <img src="assets\img\imagem_natural.jpg" alt="Procedimento 4">
            </div>
            <div class="carrossel-procedimento">
                <img src="assets\img\imagem_artificial.jpg" alt="Procedimento 5">
            </div>
        </div>

        <!-- Botões de navegação -->
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>

        <!-- Indicadores -->
        <div class="indicadores">
            <span class="dot" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
            <span class="dot" onclick="goToSlide(4)"></span>
        </div>
    </div>
</section>