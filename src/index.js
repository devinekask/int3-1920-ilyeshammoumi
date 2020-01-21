import './style.css';

{


  const images = document.querySelectorAll('.product__image');
  images.forEach(image => {
    image.addEventListener('click', () => {
      if (image.classList.contains('image__small')) {
        image.classList.remove('image__small');
        image.classList.add('image__big');
      } else {
        image.classList.remove('image__big');
        image.classList.add('image__small');
      }

    });

  });
  const init = () => {

  };

  init();
}
