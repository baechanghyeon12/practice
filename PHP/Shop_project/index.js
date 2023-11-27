
let prevButton = document.querySelector('.prev');
let nextButton = document.querySelector('.next');
let carousel = document.querySelector('.main-img');

let index = 0;

prevButton.addEventListener('click', () => {
  if (index === 0) {
    index = 4;
  }
  index -= 1;

  carousel.style.transform = `translateX(-${100 * index}vw)`;
});

nextButton.addEventListener('click', () => {
  if (index === 3){
    index = -1;
  }
    index += 1;

  carousel.style.transform = `translateX(-${100 * index}vw)`;
});