document.addEventListener("DOMContentLoaded", () => {
    let index = 0; // Índice do slide atual
    const slides = document.querySelectorAll(".carrossel-procedimento");
    const totalSlides = slides.length;
    const carrosselContainer = document.querySelector(".carrossel-container");
    const dots = document.querySelectorAll(".dot");

    if (!carrosselContainer || slides.length === 0 || dots.length === 0) {
        console.error("Erro: Elementos do carrossel não encontrados no DOM.");
        return;
    }

    // Função para atualizar a posição do carrossel
    function updateCarrossel() {
        const slideWidth = slides[0].offsetWidth; // Obtém a largura real do slide
        const offset = -index * slideWidth;
        carrosselContainer.style.transform = `translateX(${offset}px)`;

        // Atualizar os indicadores
        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });
    }

    // Função para ir para o próximo slide
    function nextSlide() {
        index = (index + 1) % totalSlides; // Volta para o primeiro ao chegar no último
        updateCarrossel();
    }

    // Função para ir para o slide anterior
    function prevSlide() {
        index = (index - 1 + totalSlides) % totalSlides; // Volta para o último ao chegar no primeiro
        updateCarrossel();
    }

    // Função para ir para um slide específico ao clicar nos indicadores
    function goToSlide(slideIndex) {
        index = slideIndex;
        updateCarrossel();
    }

    // Adiciona evento aos botões de navegação (evita erro caso não existam)
    document.querySelector(".prev")?.addEventListener("click", prevSlide);
    document.querySelector(".next")?.addEventListener("click", nextSlide);

    // Troca automática de slides a cada 10 segundos
    setInterval(nextSlide, 3000);

    // Atualiza a posição inicial do carrossel
    updateCarrossel();
});
