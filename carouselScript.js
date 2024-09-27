const carouselWrapper = document.querySelector('.carousel-wrapper');
let isDragging = false;
let startPos = 0;
let scrollLeft = 0;

carouselWrapper.addEventListener('mousedown', (e) => {
  isDragging = true;
  startPos = e.pageX - carouselWrapper.offsetLeft;
  scrollLeft = carouselWrapper.scrollLeft;
  carouselWrapper.style.cursor = 'grabbing';
});

carouselWrapper.addEventListener('mouseleave', () => {
  isDragging = false;
  carouselWrapper.style.cursor = 'grab';
});

carouselWrapper.addEventListener('mouseup', () => {
  isDragging = false;
  carouselWrapper.style.cursor = 'grab';
});

carouselWrapper.addEventListener('mousemove', (e) => {
  if (!isDragging) return;
  e.preventDefault();
  const x = e.pageX - carouselWrapper.offsetLeft;
  const walk = (x - startPos) * 3; // scroll-fast
  carouselWrapper.scrollLeft = scrollLeft - walk;
});