<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant|Delius+Unicase|Oswald|Pacifico|Rosarivo|Bebas+Neue|Roboto|Cormorant+Infant:700&display=swap" rel="stylesheet">
    <title>Humo - webshop</title>
     <?php echo $css;?>
  </head>
  <body onkeydown='getKeyAndMove(event)'>
      <nav class="navigation">
      <div class="navigation__mobile">

        <ul class="navigation__list">

      <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <li class="navigation__list--item"><a href="index.php?" class="list__item--link"><img src="./assets/fotos/humo_logo.png" width="90" height="90" alt="Humo logo"></a></a></li>
        <li class="navigation__list--item"><a class="list__item--link shoppingcart__number--mobile" href="index.php?page=cart"><img src="./assets/fotos/shopping_cart.png" alt="winkelmand" width="45" height="32.93"><?php
                            if(empty($_SESSION['cart'])) {
                            echo '0';
                          } else {
                            echo sizeof($_SESSION['cart']);
                            if(sizeof($_SESSION['cart']) > 1) {

                            }
                          }
                          ?></a></li>
        </ul>
        <ul class="navigation__list menu">
          <li class="navigation__list--item"><a href="index.php?" class="list__item--link">HOME</a></li>
          <li class="navigation__list--item link--yellow"><a href="" class="list__item--link link--yellow">HUMO@FESTIVALS</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">HUMOR</a></li>
          <li class="navigation__list--item link--red"><a href="" class="list__item--link link--red">VIDEO</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">FOTOSPECIALS</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">NU IN HUMO</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">TV/FILM</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">ACTUA</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">MUZIEK</a></li>
          <li class="navigation__list--item"><a href="" class="list__item--link">BOEKEN</a></li>
          <li class="navigation__list--item link--purple"><a href="" class="list__item--link link--purple">HUMO SAPIENS</a></li>
        </ul>

        </div>

        <div class="navigation__desktop">
          <div class="desktop--subnav">
            <div class="desktop__subnav--wrapper">
            <ul class="subnav--list">
              <li class="subnav--listitem"><a class="subnav--link" href="">video</a></li>
              <li class="subnav--listitem"><a class="subnav--link" href="">Tv-gids</a></li>
              <li class="subnav--listitem"><a class="subnav--link" href="">zoekertjes</a></li>
              <li class="subnav--listitem"><a class="subnav--link" href="">abonnementen nemen</a></li>
            </ul>
            </div>
            <div class="desktop__subnav--wrapper">
            <ul class="subnav--list">
              <li class="subnav--listitem"><a class="subnav--link" href="">Nu in humo</a></li>
              <li class="subnav--listitem"><a class="subnav--link" href="">login</a></li>
              <li class="subnav--listitem"><a class="subnav--link" href="">registreer</a></li>
            </ul>
            </div>
          </div>
          <div class="desktop__mainnav">
            <ul class="mainnav--list">
            <li class="mainnav--listitem"><a class="mainnav--link" href="index.php?">Home</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link" href="">Actua</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link" href="">Humor</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link" href="">Tv/film</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link mainnav--link--img" href="index.php?"><img src="./assets/fotos/humo_logo.png" width="230" height="230" alt="Humo logo"></a></li>
            <li class="mainnav--listitem"><a class="mainnav--link" href="">Muziek</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link" href="">Boeken</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link" href="">Humor</a></li>
            <li class="mainnav--listitem"><a class="mainnav--link mainnav--search" href=""></a></li>
            <li class="mainnav--listitem"><a class="mainnav--link mainnav--winkelmand" href="index.php?page=cart"><img src="./assets/fotos/shopping_cart.png" alt="winkelmand" width="45" height="32.93"><?php
                            if(empty($_SESSION['cart'])) {
                            echo '0';
                          } else {
                            echo sizeof($_SESSION['cart']);
                            if(sizeof($_SESSION['cart']) > 1) {

                            }
                          }
                          ?></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <?php echo $content;?>
    <footer class="footer">
      <div class="footer__flex footer__mobile">
      <a href="https://www.humo.be/" class="footer__link footer__link-top ">naar de volledige website</a>
      <a href="" class="footer__link footer__link-top">Colofon</a>
      <a href="" class="footer__link footer__link-top">Contact</a>
      <a href="" class="footer__link footer__link-top">Cookie instellingen</a>
      <a href="index.php?page=cart" class="footer__link footer__link-top">Winkelmand</a>
    </div>
    <div class="footer__tablet hidden">
      <div class="footer__column footer__column--actua">
        <a href="" class="footer__link footer__link--title">Actua</a>
        <a href="" class="footer__link">NU IN HUMO</a>
        <a href="" class="footer__link">DE COLUMNS</a>
        <a href="" class="footer__link">DOSSIERS</a>
        <a href="" class="footer__link">POLITIEK</a>
        <a href="" class="footer__link">SPORT</a>
        <a href="" class="footer__link">ONZE MAN/VROUW</a>
        <a href="" class="footer__link">EERDER IN HUMO</a>
        <a href="" class="footer__link">DE EINDEJAARSVRAGEN</a>
      </div>
      <div class="footer__column footer__column--humor">
        <a href="" class="footer__link footer__link--title">Humor</a>
        <a href="" class="footer__link">CARTOONS</a>
        <a href="" class="footer__link">UITLAAT</a>
        <a href="" class="footer__link">(BULDERLACHT)</a>
        <a href="" class="footer__link">DOE HET ZELF</a>
        <a href="" class="footer__link">HUMO'S COMEDY CUP</a>
      </div>
      <div class="footer__column footer__column--tv">
        <a href="" class="footer__link footer__link--title">Tv/Film</a>
        <a href="" class="footer__link">TV-GIDS</a>
        <a href="" class="footer__link">TV-TIPS</a>
        <a href="" class="footer__link">TV-REVIEWS</a>
        <a href="" class="footer__link">FILMREVIEWS</a>
        <a href="" class="footer__link">DE 100 BESTE FILMS VOLGENS (ES)</a>
      </div>
      <div class="footer__column footer__column--muziek">
        <a href="" class="footer__link footer__link--title">Muziek</a>
        <a href="" class="footer__link">CONCERTREVIEWS</a>
        <a href="" class="footer__link">CD-REVIEWS</a>
        <a href="" class="footer__link">HUMO'S ROCK RALLY</a>
        <a href="" class="footer__link">FESTIVALITIS</a>
      </div>
      <div class="footer__column footer__column--boeken">
        <a href="" class="footer__link footer__link--title">Boeken</a>
        <a href="" class="footer__link">REVIEWS</a>
        <a href="" class="footer__link">FICTIE</a>
        <a href="" class="footer__link">NON-FICTIE</a>
        <a href="" class="footer__link">HET LEZEN ZOALS HET IS</a>
        <a href="" class="footer__link">DE GROOTSTE SCHRIJVERS VAN DEZE TIJD</a>

        <a href="" class="footer__link footer__link--title">Ga naar</a>
        <a href="" class="footer__link">VIDEO</a>
        <a href="" class="footer__link">FOTO'S</a>
        <a href="" class="footer__link">WEDSTRIJDEN</a>
        <a href="" class="footer__link">ZOEKERTJES</a>
        <a href="" class="footer__link">APPS</a>
      </div>
    </div>
  </footer>
    <?php echo $js; ?>


  </body>

</html>
