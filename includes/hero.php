<!-- 🔰 HERO SPLIT SECTION -->
<section class="hero-split">
  <div class="hero-split-text">
    <h1>First Work</h1>
    <h2>Create a site</h2> 
    <p>Delivering precision, performance and partnership in every cast and forge. 
    From concept to completion, we engineer reliable casting and forging solutions that reduce complexity, save time, and deliver value across industries</p>
  </div>
  <a href="/contact.php" class="hero-btn">Contact Us</a>


  <div class="hero-split-slider">
    <img src="/dev/assets/img/slider/slider1.jpg" class="active" alt="Slide 1">
    <img src="/dev/assets/img/slider/slider2.jpg" alt="Slide 2">
    <img src="/dev/assets/img/slider/slider3.jpg" alt="Slide 3">
    <img src="/dev/assets/img/slider/slider4.jpg" alt="Slide 3">
    <img src="/dev/assets/img/slider/slider5.jpg" alt="Slide 3">
    <img src="/dev/assets/img/slider/slider6.jpg" alt="Slide 3">
    <img src="/dev/assets/img/slider/slider7.jpg" alt="Slide 3">
    <img src="/dev/assets/img/slider/slider8.jpg" alt="Slide 3">
    <img src="/dev/assets/img/slider/slider9.jpg" alt="Slide 3">
  </div>
</section>

<script>
  // Hero Split Slider
  let current = 0;
  const slides = document.querySelectorAll('.hero-split-slider img');
  setInterval(() => {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 5000);
</script>
