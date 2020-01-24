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
    const whoamis = document.querySelectorAll(`.lr--scene_5__charachter`);
    for (const whoami of whoamis) {
      whoami.addEventListener(`click`, () => {
        showami(whoami);
      });
    }

    const showami = whoami => {
      const thisismes = whoami.querySelectorAll(`.scene_5__charachter--top`);
      thisismes.forEach(thisisme => {
        thisisme.style.display = `none`;
      });
      const thisismesbutton = whoami.querySelectorAll(`.scene_5--button__bgi`);
      thisismesbutton.forEach(thisismebutton => {
        thisismebutton.style.display = `none`;
      });
    };

  };

  init();
}
