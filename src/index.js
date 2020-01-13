require('./style.css');
//geforceerd iets toevoegen
import Player from './js/model/Player.js';
{
  const $filterForm = document.querySelector(`.filter__form`);
  const $players = document.querySelector(`.players__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
  };

  const handleLoadPlayers = data => {
    $players.innerHTML = data
      .map(player => createPlayer(player))
      .join(``);
  };

  const createPlayer = playerObj => {
    const player = new Player(playerObj);
    return player.createHTML();
  };

  const handleSubmitFilterForm = e => {
    console.log();
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadPlayers(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };


  init();
}
