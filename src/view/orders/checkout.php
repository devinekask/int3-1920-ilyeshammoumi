<header class="winkelmand__header">
        <h1 class="winkelmand__title">Winkelmand</h1>
    </header>
    <section class="winkelmand__indicators">
        <h2 class="hidden">Winkelmand stappen</h2>
        <div class="winkelmand__indicator compleet">
            <p class="winkelmand__indicator--number">1</p>
            <p class="winkelmand__indicator--name">Overzicht</p>
        </div>
        <div class="winkemand__indicator compleet indicator__bolletjes"></div>
        <div class="winkelmand__indicator compleet">
            <p class="winkelmand__indicator--number">2</p>
            <p class="winkelmand__indicator--name">Gegevens</p>
        </div>
        <div class="winkemand__indicator compleet indicator__bolletjes"></div>
        <div class="winkelmand__indicator">
            <p class="winkelmand__indicator--number">3</p>
            <p class="winkelmand__indicator--name">Betaling</p>
        </div>
    </section>

    <section class="winkelmand__gegevens">
        <form action="index.php?page=checkout" method="post" class="gegevens__formulier">
            <input type="hidden" name="action" value="insertForm">
            <label for="aanhef" class="gegevens__form--radiofield gegevens__form--aanhef">

                <span>Aanhef:</span>
                <div class="gegevens__form--wrapper">
                <input type="radio" value="1" name="aanhef" >Dhr
                <input type="radio" value="2" name="aanhef" class="form__radiofield--rechts" >Mvr
            </div>
            </label>
            <label for="voornaam" class="gegevens__form--inputfield gegevens__form--voornaam">

                <span>Voornaam :</span>
                <input type="text" name="voornaam" value="<?php if (!empty($_POST['voornaam'])){echo $_POST['voornaam'];}  ?>" class="gegevens__form--input">
                <span class="error"><?php if(!empty($errors['voornaam'])){ echo $errors['voornaam'];} ?></span>

            </label>
            <label for="achternaam" class="gegevens__form--inputfield gegevens__form--achternaam">
                <span>Achternaam :</span>
                <input type="text" name="achternaam"  value="<?php if (!empty($_POST['achternaam'])){echo $_POST['achternaam'];}  ?>" class="gegevens__form--input">
                <span class="error"><?php if(!empty($errors['achternaam'])){ echo $errors['achternaam'];} ?></span>

            </label>
            <label for="land" class="gegevens__form--radiofield gegevens__form--land">

                <span>Land:</span>
                <div class="gegevens__form--wrapper">
                <input type="radio" value="1" name="land" >België
                <input type="radio" value="2" name="land" class="form__radiofield--rechts" >Nederland
            </div>
            </label>
            <label for="woonplaats" class="gegevens__form--inputfield gegevens__form--woonplaats">
                <span>Postcode + woonplaats :</span>
                <input type="text" name="woonplaats" value="<?php if (!empty($_POST['woonplaats'])){echo $_POST['woonplaats'];}  ?>" class="gegevens__form--input" placeholder="Bv. 8500 Kortrijk">
                <span class="error"><?php if(!empty($errors['woonplaats'])){ echo $errors['woonplaats'];} ?></span>

            </label>
            <label for="straatnaam" class="gegevens__form--inputfield gegevens__form--straat">
                <span>Straatnaam :</span>
                <input type="text" name="straatnaam" value="<?php if (!empty($_POST['straatnaam'])){echo $_POST['straatnaam'];}  ?>" class="gegevens__form--input" >
                <span class="error"><?php if(!empty($errors['straatnaam'])){ echo $errors['straatnaam'];} ?></span>

            </label>
            <label for="huisnummer" class="gegevens__form--inputfield gegevens__form--huis">
                <span>Huisnummer en bus :</span>
                <input type="text" name="huisnummer"  value="<?php if (!empty($_POST['huisnummer'])){echo $_POST['huisnummer'];}  ?>" class="gegevens__form--input gegevens__form--huis" placeholder="Bv. 81-C">
                <span class="error"><?php if(!empty($errors['huisnummer'])){ echo $errors['huisnummer'];} ?></span>

            </label>
            <label for="email" class="gegevens__form--inputfield gegevens__form--email">
                <span>E-mail :</span>
                <input type="email" name="email" value="<?php if (!empty($_POST['email'])){echo $_POST['email'];}  ?>" class="gegevens__form--input" >
                <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
            </label>
            <label for="telefoonnummer" class="gegevens__form--inputfield gegevens__form--telefoon">
                <span>Telefoonnummer :</span>
                <span class="telefoon__updates">(Voor levering updates)</span>
                <input type="telefoonnummer" name="telefoonnummer" value="<?php if (!empty($_POST['telefoonnummer'])){echo $_POST['telefoonnummer'];}  ?>" class="gegevens__form--input" >
                <span class="error"><?php if(!empty($errors['telefoonnummer'])){ echo $errors['telefoonnummer'];} ?></span>


            </label>
            <label for="betaalwijze" class="gegevens__form--betalingen gegevens__form--betaal">
                <span>Betaalwijze :</span>
                <div class="betaling__flex">
                <div class="gegevens__form--betaling">
                    <img src="../assets/fotos/Bancontact_logo.png" class="betaling__logo" alt="Bancontact">
                    <input type="radio" value="1" name="betaalwijze">
                </div>
                <div class="gegevens__form--betaling">
                    <img src="../assets/fotos/mastercard.png" class="betaling__logo" alt="Bancontact">
                    <input type="radio" value="1" name="betaalwijze">
                </div>
                <div class="gegevens__form--betaling">
                    <img src="../assets/fotos/visa_logo.png" class="betaling__logo" alt="Bancontact">
                    <input type="radio" value="1" name="betaalwijze">
                </div>
                <div class="gegevens__form--betaling">
                    <img src="../assets/fotos/paypal.jpg
                    " class="betaling__logo betaling__logo--paypal" alt="Bancontact">
                    <input type="radio" value="1" name="betaalwijze">
                </div>
            </div>
            </label>

            <input type="submit" value="Verder met betaling" action="formsubmit" class="link link--red">
        </form>
    </section>
    <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;

      ?>
    <section class="gegevens__prijzen">
        <div class="gegevens__prijzen--wrapper">
        <p class="gegevens__prijzen--sub prijzen__sub--prijs">Totaal : <?php echo money_format("%i", $total);?></p>
        <p class="gegevens__prijzen--sub  prijzen__sub--korting">Korting : Geen</p>
        <h2 class="gegevens__prijzen--totaal">Totaalprijs: <?php echo money_format("%i", $total);?></h2>
        <input type="submit" value="Verder met betaling" action="formsubmit" class="link link--red">
    </div>
        <a href="index.php?page=cart" class="link link--white">Terug naar de webshop</a>
    </section>

<?php  } ?>
