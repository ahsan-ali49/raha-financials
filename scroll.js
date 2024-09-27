document.addEventListener('DOMContentLoaded', function() {
    const carouselContainer = document.querySelector('.financial-carousel-container');
  
    // Handle horizontal scroll on mouse wheel
    carouselContainer.addEventListener('wheel', (e) => {
      e.preventDefault();
      carouselContainer.scrollLeft += e.deltaY;
    });
  
    // Handle drag to scroll
    let isDown = false;
    let startX;
    let scrollLeft;
  
    carouselContainer.addEventListener('mousedown', (e) => {
      isDown = true;
      carouselContainer.classList.add('active');
      startX = e.pageX - carouselContainer.offsetLeft;
      scrollLeft = carouselContainer.scrollLeft;
    });
  
    carouselContainer.addEventListener('mouseleave', () => {
      isDown = false;
      carouselContainer.classList.remove('active');
    });
  
    carouselContainer.addEventListener('mouseup', () => {
      isDown = false;
      carouselContainer.classList.remove('active');
    });
  
    carouselContainer.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - carouselContainer.offsetLeft;
      const walk = (x - startX) * 2; // Scroll speed
      carouselContainer.scrollLeft = scrollLeft - walk;
    });
  });