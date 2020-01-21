<?php if($product['abonnement'] === 1) :?>
  <div class="yellow__bg"></div>
    <section class="abonnement__header">

      <a href="./index.php?" class="backlink">
        <h2 class="hidden">Humo abonnement</h2>
        <img src="../assets/fotos/pijl.png" alt="home link" width="19.47" height="16.22" class="backlink__pijl">
        </a>
        <picture>
            <source media="(max-width: 834px)" srcset="./assets/products/abonnementen/abonnement_small.png">
            <source media="(min-width: 835px)" srcset="./assets/products/abonnementen/abonnement__big.png">
            <img src="./assets/products/abonnementen/abonnement__big.png" alt="abonnement" class="abonnement__image abonnement__image--detail">
    </picture>
    </section>
    <section class="abonnement__info">
        <h2 class="info__title">!!! ABONNEER NU !!!</h2>
        <p class="info__subtitle">DIGITAAL + PAPIER</p>
    </section>
    <div class="abonnement__description--flex">
    <section class="abonnement__description">

        <p class="info__description">Door de wol geverfde journalisten en een roedel jonge wolven maken week na week van Humo een blad met zo’n sterke inhoud dat u het niet naast u neer kunt leggen. Spraakmakende coverstory’s, diep in en achter de actualiteit. Onthullende interviews en dossiers met een aparte kijk op onderwerpen die er echt toe doen. Eerder dan het nieuws achterna te hollen, gaat Humo er zélf naar op zoek — ook als het goed nieuws is. Daar bovenop sprankelende stukken over sport, film, pop en jongerencultuur, de snedigste columns, eigenzinnige boeken-, concert-, festival- en cd-besprekingen, leuke wedstrijden en humor, véél humor. U vindt Humo natuurlijk ook op het web, Facebook, Twitter en op uw tablet.</p>
        <ul class="info__list">
            <li class="info__list--item"> <p> Onbeperkte toegang tot straffe onderzoeksjournalistiek</p></li>
            <li class="info__list--item"> <p>Eigenzinnige columns en het beste uit film, muziek en literatuur</p></li>
            <li class="info__list--item"> <p> Lees Humo waar en wanneer u wilt, op papier en tablet</p>
            </li>
        </ul>
    </section>
    <section class="abonnement__prijzen">
        <form action="index.php?page=cart" method="post" class="abonnement__form">
          <?php foreach($products as $product) :?>
            <label for="prijs">
                <div class="abonnement__prijs">
                    <input type="radio" value="<?php echo $product['name'] ?>" name="prijs">
                    <p class="abonnement__prijs--maanden"><?php echo $product['name'] ?> </p>
                    <p class="abonnement__prijs--aantal" >€<?php echo $product['price'] ?>/mnd</p>
                </div>
            </label>
            <?php endforeach ; ?>

            <input type="hidden" name="id" value="<?php echo $product['id'];?>" />
            <button class="link form__submit link--red form__submit--abonnement" type="submit" name="action" value="add">ABONNEREN</button>
        </form>
    </section>
</div>
<?php else : ?>
<header class="kaft kaft--yellow">
          <h2 class="hidden">Humo Collector kaft</h2>
          <div class="kaft__description--wrapper">
            <p class="kaft__description kaft__description--black">Bij het aankoop van een boek krijgt u een </p>

            <p class="kaft__title">Humo Collector kaft</p>
          </div>
            <picture>
                <source media="(max-width: 834px)" srcset="../assets/fotos/kaft__image--small.png">
                <source media="(max-width: 835px)" srcset="../assets/fotos/kaft__image--big.png">
            <img class="kaft__image" src="../assets/fotos/kaft__image--big.png" alt="kaft__image">
          </picture>
      </header>
      <a href="./index.php?" class="backlink">
        <img src="../assets/fotos/pijl.png" alt="home link" width="19.47" height="16.22" class="backlink__pijl">
        </a>
        <section class="product__detail">
          <?php if($product['collectionbox'] === 1) : ?>

                <img src="<?php echo $product['picture1']; ?>" alt="<?php echo $product['name']; ?> combo" class="product__image image__big image__collectionbox">


            <?php else : ?>
            <div class="product__detail--images">
                <img src="<?php echo $product['picture1'] ?>" alt="<?php echo $product['name'] ?> combo" class="product__image image__big">
                <img src="<?php echo $product['picture2'] ?>" alt="<?php echo $product['name'] ?> originele cover" class="product__image image__small">
                <?php if($product['picture3'] !== '-') : ?>
                <img src="<?php echo $product['picture3'] ?>" alt="<?php echo $product['name'] ?> Humo cover" class="product__image image__small">
                <?php endif ?>
            </div>
            <?php endif; ?>
            <div class="product__detail-wrapper">
                <h2 class="product__detail--title"><?php echo $product['name'] ?></h2>
            <p class="product__description">
            <?php echo $product['description'] ?>
            </p>
            <div class="product__prijzen">
                <p class="product__detail--prijs"><?php echo $product['price'] ?>€</p>
                <?php if($product['book'] === 1) : ?>
                <div class="ster__prijs ster__detail">
                    <p class="ster__aantal">Met code <br> <span class="ster__euros">4,99€</span></p>
                    <img class="ster__bgi ster__detail" src="../assets/fotos/ster.png" alt="ster" width="119.3" height="112.38">
                </div>
                <?php endif ?>
            </div>
            <form method="post" action="index.php?page=cart">
              <?php if($product['book'] === 1) : ?>
                <div class="product__versies--aantal">
                    <span>Versie :</span>
                    <label for="versie" class="product__versie">
                        <input  type="radio" value="Fysiek" name="versie" class="product__versie--input">Fysiek
                        <input type="radio" value="E-book" name="versie" class="product__versie--rechts">E-book
                    </label>
                </div>
                <?php elseif($product['id'] === 15) : ?>
                    <div class="product__versies--aantal">
                    <span>Versie :</span>
                    <label for="versie" class="product__versie">
                        <input  type="radio" value="rood" name="versie" class="product__versie--input">rood
                        <input type="radio" value="blauw" name="versie" class="product__versie--rechts">blauw
                        <input type="radio" value="groen" name="versie" class="product__versie--rechts">groen
                    </label>
                </div>
                <?php endif ?>
                <div class="versies__aantal--flex">
                    <div class="product__versies--aantal">
                        <span>Aantal :</span>
                  <label for="quantity">
                  <input type="number" id="quantity" name="quantity" min="1" placeholder="1" value="1" class="input__aantal">
                  </label>
                    </div>
                  <input type="hidden" name="id" value="<?php echo $product['id'];?>" />
                  <button class="product__submit" type="submit" name="action" value="add">Toevoegen aan winkelmand</button>
                  </div>
                </form>

            </div>
        </section>
        <div class="reviews--flex">
        <section class="reviews">
            <div class="section--intro review__sectie">
                <h2 class="section__title boeken__title section__title--reviews">Reviews</h2>

            </div>
            <?php if(empty($reviews)) : ?>
              <div class="review no__review">
                    <p class="review__author ">Er zijn nog geen reviews voor deze product</p>
            </div>
            <?php else :?>
            <?php  foreach($reviews as $review) : ?>
            <div class="review">
                <div class="review--flex">
                    <p class="review__author"><?php echo $review['naam']?></p>
                    <p class="review__score"><?php echo $review['score']?> / 5</p>
                </div>
                <p class="review__text"><?php echo $review['opmerking']?></p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>


        </section>
        <section class="review__form--section">
            <h2 class="review__form--title">Geef jouw mening !</h2>
            <form action="index.php?page=detail&id=<?php echo $product['id'];?>" method="post" class="review__form">
               <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
               <input type="hidden" name="action" value="insertReview">
               <label for="score" class="review__form--scores">
                <span>Score :</span>
                <div class="form__circles">
                    <div class="form__circle">
                    1<input type="radio" value="1<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=1>
                    </div>
                    <div class="form__circle">
                    2<input type="radio" value="2<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=2>
                    </div>
                    <div class="form__circle">
                    3<input type="radio" value="3<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=3>
                    </div>
                    <div class="form__circle">
                    4<input type="radio" value="4<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=4>
                    </div>
                    <div class="form__circle">
                    5<input type="radio" value="5<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=5>
                    </div>
                    <span class="error"><?php if(!empty($errors)  && isset($errors['score'])){ echo $errors['score'];} ?></span>
                </div>
               </label>
               <label for="naam" class="review__form--name">
                   <span>Volledige naam :</span>
                   <input type="text" name="naam" id="naam" value="<?php if(!empty($_POST['naam'])){ echo $_POST['naam'];} ?>" required>
               </label>
               <label for="opmerking" class="review__form--name">
                    <span>Opmerkingen :</span>
                    <textarea name="opmerking" id="opmerking" class="form__textarea"  value="<?php if(!empty($_POST['opmerking'])){ echo $_POST['opmerking'];} ?>"></textarea>
                    <span class="error"><?php if(!empty($errors)  && isset($errors['opmerking'])){ echo $errors['opmerking'];} ?></span>
                </label>
                <input type="submit" value="Versturen" class="link form__submit link--red">
            </form>
        </section>
    </div>
        <section class="no_stock">
            <h2 class="no_stock__title">Product niet meer beschikbaar ?</h2>
            <p class="no_stock__description">We sturen je een mail als we dit artikel weer op voorraad hebben.</p>
            <form action="" class="no_stock__form">
                <input type="email" required placeholder="E-mail adres" class="stock__form--email">
                <input type="submit" value="Send" class="stock__form--submit">
            </form>
        </section>
        <section class="related">
            <div class="section--intro related__sectie section__title--related">
                <h2 class="section__title boeken__title">Gerelateerde producten</h2>
                <image class="pijl white--fill" src="../assets/fotos/pijl.svg" width="24.86" height="19.89"/>
            </div>
            <div class="related--flex">
            <div class="related__product">
                <img src="../assets/books/wool/Wool_Cover.jpg" alt="Wool" class="related__product--image">
                <p class="related__product--title">Wool</p>
            </div>
            <div class="related__product">
                <img src="../assets/books/wool/Wool_Cover.jpg" alt="Wool" class="related__product--image">
                <p class="related__product--title">Wool</p>
            </div>
            <div class="related__product">
                <img src="../assets/books/wool/Wool_Cover.jpg" alt="Wool" class="related__product--image">
                <p class="related__product--title">Wool</p>
            </div>
        </div>
        </section>
        <?php endif ; ?>
