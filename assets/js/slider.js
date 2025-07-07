
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".hero-slider img");
    let current = 0;

    function showNextSlide() {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    }

    setInterval(showNextSlide, 4000); // troca a cada 4 segundos
});

