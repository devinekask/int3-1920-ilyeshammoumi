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




    //  const katyScene2 = document.querySelector(`.scene_2--katy__bike`);

    //  window.addEventListener(`keypress`, () => {
    //    moveMeisje();
    //  });

    // const moveMeisje = () => {
    //   const keyCode = e.keyCode;
    //   if (keyCode === 39) {
    //    console.log('je gaat naar rechts');
    //  }
    // };

    //  document.onkeydown = function(e) {
    //    const moveL = `-2rem`;
    //    const katyScene2 = document.querySelector(`.scene_2--katy__bike`);
    //    const katyfiets = document.getElementById('katyfiets');
    //    switch (e.keyCode) {

    //    case 37:
    //      console.log('links');
    //      katyfiets.css(`${katyfiets.position.left + 1 }rem`);
    //      break;
    //    case 39:
    //      console.log('rechts');
    //      break;
    //    }
    // };

    

  };

  init();
}
