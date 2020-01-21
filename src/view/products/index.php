<header class="header__home">
        <img src="./assets/fotos/The_Handmaids_Tale.png" alt="The Handmaids Tale" class="header__img">
        <div class="header__home--wrapper">
        <h1 class="header__title">Boek van de week :</h1>
        <h2 class="header__subtitle">The Handmaid's Tale</h2>
        <a  class="header__link" href="">Ontdekken</a>
        </div>
      </header>

      <section class="kaft kaft--red">
          <h2 class="hidden">Humo Collector kaft</h2>
          <div class="kaft__description--wrapper">
          <p class="kaft__description">Bij het aankoop van een boek krijgt u een </p>

          <p class="kaft__title">Humo Collector kaft</p>
        </div>
          <picture>
              <source media="(max-width: 834px)" srcset="./assets/fotos/kaft__image--small.png">
              <source media="(max-width: 835px)" srcset="./assets/fotos/kaft__image--big.png">
          <img class="kaft__image" src="./assets/fotos/kaft__image--big.png" alt="kaft__image">
        </picture>
      </section>
      <section class="collectie">
          <div class="collectie__images">
          <img class="collectie__image" src="./assets/fotos/boekencollectie.png" alt="Boekencollectie" width="203.58" height="146.71">

          <div class="ster__prijs ster__home">
              <p class="ster__aantal">48,95€</p>
              <img class="ster__bgi" src="./assets/fotos/ster.png" alt="ster" width="79.25" height="74.65">
          </div>
        </div>
        <div class="collectie__wrapper">
         <h2 class="collectie__title">De boekencollectie</h2>
        <p class="collectie__description">
            Om het jaar af te sluiten komt het weekblad Humo uit met een nieuwe boekenreeks. Tien weken lang kan u aan een voordelige prijs een boek bijkopen dat onderdeel vormt van een uitgelezen selectie social science fiction (soft SF). Boeken die een kritische, ironische of cynische blik geven op een toekomstige maatschappij. Geen aliens of magie maar dystopische wereldvisies die onze huidige maatschappij in vraag stellen.
        </p>
        <a class="collectie__link link link--yellow" href="index.php?page=detail&id=1">Bestel de collectie</a>
        </div>
      </section>
      <section class="boeken">
        <div class="section--intro boeken__sectie">
            <h2 class="section__title boeken__title">Boeken uit de collectie</h2>
        </div>
        <div class="boeken__prijzen">
            <div class="boeken__prijs boeken__prijs--zwart">
                <p class="prijs__euros">12,99€</p>
                <p class="prijs__type">Per boek</p>
                <p class="prijs__korting">zonder korting</p>
            </div>
            <div class="boeken__prijs boeken__prijs--geel">
                <p class="prijs__euros prijs__kort">4,99€</p>
                <p class="prijs__type">Per boek</p>
                <p class="prijs__korting">Met korting</p>
            </div>
            <div class="boeken__prijs boeken__prijs--rood">
                <p class="prijs__euros prijs__kort">1,99€</p>
                <p class="prijs__type">Per E-boek</p>

            </div>
        </div>
        <div class="boeken__covers grid">
        <?php foreach($books as $book) : ?>

            <a href="index.php?page=detail&id=<?php echo $book['id']; ?>">
            <img src="<?php echo $book['picture3']; ?>" alt="<?php echo $book['name']; ?>" class="boeken__cover boeken__cover--home" width="123.53" height="175.37">
             </a>
          <?php endforeach ;?>
        </div>
      </section>

      <section class="gadgets">
        <div class="section--intro gadgets__sectie">
            <h2 class="section__title gadgets__title">Coole Gadgets</h2>
        </div>
        <div class="gadgets__products grid gadgets__products--humo">
          <?php foreach($humoProducts as $humoProduct) : ?>
            <div class="gadgets__product">
                <a href="index.php?page=detail&id=<?php echo $humoProduct['id']; ?>">
                <img src="<?php echo $humoProduct['picture1']; ?>" alt="<?php echo $humoProduct['name']; ?>" class="product__image product__image--home" width="123.53" height="175.37">
                </a>
                <p class="product__title">
                <?php echo $humoProduct['name']; ?>
                </p>
                <div class="product__prijs">
                <?php echo $humoProduct['price'];?> €
                </div>
            </div>
            <?php endforeach ; ?>

        </div>
        <div class="gadgets__products grid gadgets__products--acc">
        <?php foreach($products as $product) : ?>
            <div class="gadgets__product">
              <a href="index.php?page=detail&id=<?php echo $product['id']; ?>">
                <img src="<?php echo $product['picture1']; ?>" alt="<?php echo $product['name']; ?>" class="product__image product__image--home" width="123.53" height="175.37">
                </a>
                <p class="product__title">
                <?php echo $product['name']; ?>
                </p>
                <p class="product__prijs">
                <?php echo $product['price']; ?> €
                </p>
            </div>

        <?php endforeach ; ?>

        </div>

      </section>
      <section class="abonnement">
        <div class="section--intro abonnement__sectie">
            <h2 class="section__title abonnement__title">Abonnement</h2>
        </div>
        <div class="abonnement__flex">
                <div class="abonnement__achtergrond">
                    <picture>
                        <source media="(max-width: 834px)" srcset="./assets/products/abonnementen/abonnement_small.png">
                        <source media="(min-width: 835px)" srcset="./assets/products/abonnementen/abonnement__big.png">
                        <img src="./assets/products/abonnementen/abonnement__big.png" alt="abonnement" class="abonnement__image">
                </picture>
                </div>
                <div class="abonnement__points--wrapper">
                <p class="abonnement__subtitle">abonneer nu !</p>
            <ul class="abonnement__points">
                <div class="abonnement__points--wrapper">
                <li class="abonnement__point">Altijd toegang tot digitale versie</li>
                <li class="abonnement__point">Elke dinsdag op papier</li>
                <li class="abonnement__point">Exclusieve voordelen</li>
            </div>
                <div class="ster__prijs ster__abonnement">
                    <p class="ster__aantal ster__aantal--abonnement">Tot 20% <br> <span>korting</span></p>
                    <img class="ster__bgi ster__bgi--abonnement" src="./assets/fotos/ster.png" alt="ster" width="79.25" height="74.65">
                </div>
            </ul>
            <a class="abonnement__link link link--red" href="index.php?page=detail&id=19">bekijk het aanbod</a>
        </div>
        </div>

      </section>
    </div>
