<link rel="stylesheet" href="assets\css\carrossel.css">

<section>
    <h1>Procedimentos</h1>

    <div class="carrossel">
        <div class="carrossel-container">
            <div class="carrossel-procedimento">
                <img src="assets\img\1.jpg" alt="Procedimento 1">
            </div>
            <div class="carrossel-procedimento">
                <img src="assets\img\2.jpg" alt="Procedimento 2">
            </div>
            <div class="carrossel-procedimento">
                <img src="assets\img\3.jpg" alt="Procedimento 3">
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
        </div>
    </div>
</section>