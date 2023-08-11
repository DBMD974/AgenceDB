$(document).ready(function() {
    const carouselContainer = $('.carousel-container');
    const carouselSlides = $('.carousel-slide');
    const prevButton = $('.carousel-prev');
    const nextButton = $('.carousel-next');
    let slideIndex = 0;
  
    function showSlide(index) {
      carouselContainer.css('transform', `translateX(-${index * 100}%)`);
    }
  
    function nextSlide() {
      slideIndex = (slideIndex + 1) % carouselSlides.length;
      showSlide(slideIndex);
    }
  
    function prevSlide() {
      slideIndex = (slideIndex - 1 + carouselSlides.length) % carouselSlides.length;
      showSlide(slideIndex);
    }
  
    nextButton.on('click', nextSlide);
    prevButton.on('click', prevSlide);
  
    setInterval(nextSlide, 3000); // Change d'image toutes les 5 secondes
  });
  