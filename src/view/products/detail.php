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
          <?php if($book['collectionbox'] === 1) : ?>

                <img src="<?php echo $book['picture1']; ?>" alt="<?php echo $book['name']; ?> combo" class="product__image image__big image__collectionbox">


            <?php else : ?>
            <div class="product__detail--images">
                <img src="<?php echo $book['picture1'] ?>" alt="<?php echo $book['name'] ?> combo" class="product__image image__big">
                <img src="<?php echo $book['picture2'] ?>" alt="<?php echo $book['name'] ?> originele cover" class="product__image image__small">
                <img src="<?php echo $book['picture3'] ?>" alt="<?php echo $book['name'] ?> Humo cover" class="product__image image__small">
            </div>
            <?php endif; ?>
            <div class="product__detail-wrapper">
                <h2 class="product__detail--title"><?php echo $book['name'] ?></h2>
            <p class="product__description">
            <?php echo $book['description'] ?>
            </p>
            <div class="product__prijzen">
                <p class="product__detail--prijs"><?php echo $book['price'] ?></p>
                <?php if($book['book'] === 1) : ?>
                <div class="ster__prijs ster__detail">
                    <p class="ster__aantal">Met code <br> <span class="ster__euros">4,99€</span></p>
                    <img class="ster__bgi ster__detail" src="../assets/fotos/ster.png" alt="ster" width="119.3" height="112.38">
                </div>
                <?php endif ?>
            </div>
                <form action="" method="post" class="product__versies">
                  <?php if($book['book'] === 1) : ?>
                    <div class="product__versies--flex">
                    <span>Versie :</span>
                    <label for="versie" class="product__versie">
                        <input type="radio" value="1" name="versie" class="product__versie--input"><?php echo $book['type1'] ?>
                        <input type="radio" value="2" name="versie" class="product__versie--rechts"><?php echo $book['type2'] ?>
                        <span class="error"></span>
                    </label>
                </div>
                <?php endif ?>
                    <div class="versies__aantal--flex">
                    <div class="product__versies--aantal">
                        <span>Aantal :</span>
                        <label for="aantal">
                            <input type="number" id="aantal" name="aantal" min="1" placeholder="1" class="input__aantal">
                        </label>
                    </div>
                    <input type="submit" value="Toevoegen aan winkelmand" class="product__submit">
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
              <div class="review">
                    <p class="review__author">Er zijn nog geen reviews voor deze product</p>
            </div>
            <?php else :?>
            <?php foreach($reviews as $review) : ?>
            <div class="review">
                <div class="review--flex">
                    <p class="review__author"><?php echo $review['naam']?></p>
                    <p class="review__score"><?php echo $review['score']?></p>
                </div>
                <p class="review__text"><?php echo $review['opmerking']?></p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>


        </section>
        <section class="review__form--section">
            <h2 class="review__form--title">Geef jouw mening !</h2>
            <form action="index.php?page=detail&id=<?php echo $book['id'];?>" method="post" class="review__form">
               <input type="hidden" name="book_id" value="<?php echo $book['id']; ?>">
               <input type="hidden" name="action" value="insertReview">
               <label for="score" class="review__form--scores">
                <span>Score :</span>
                <div class="form__circles">
                    <div class="form__circle">
                    1<input type="radio" value="1<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=score>
                    </div>
                    <div class="form__circle">
                    2<input type="radio" value="2<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=score>
                    </div>
                    <div class="form__circle">
                    3<input type="radio" value="3<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=score>
                    </div>
                    <div class="form__circle">
                    4<input type="radio" value="4<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=score>
                    </div>
                    <div class="form__circle">
                    5<input type="radio" value="5<?php if(!empty($_POST['score'])){ echo $_POST['score'];} ?>" name="score" id=score>
                    </div>
                    <span class="error"><?php if(!empty($errors)  && isset($errors['score'])){ echo $errors['score'];} ?></span>
                </div>
               </label>
               <label for="naam" class="review__form--name">
                   <span>Volledige naam :</span>
                   <input type="text" id="naam" value="<?php if(!empty($_POST['naam'])){ echo $_POST['naam'];} ?>" required>
               </label>
               <label for="opmerkingen" class="review__form--name">
                    <span>Opmerkingen :</span>
                    <textarea name="opmerkingen" id="opmerkingen" class="form__textarea"  value="<?php if(!empty($_POST['review'])){ echo $_POST['review'];} ?>" required></textarea>
                    <span class="error"><?php if(!empty($errors)  && isset($errors['review'])){ echo $errors['review'];} ?></span>
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
