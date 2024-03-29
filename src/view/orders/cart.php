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
        <div class="winkelmand__indicator ">
            <p class="winkelmand__indicator--number">2</p>
            <p class="winkelmand__indicator--name">Gegevens</p>
        </div>
        <div class="winkemand__indicator indicator__bolletjes"></div>
        <div class="winkelmand__indicator">
            <p class="winkelmand__indicator--number">3</p>
            <p class="winkelmand__indicator--name">Betaling</p>
        </div>
    </section>

<section class="winkelmand__products">
<form class="winkelmand__booking--product" action="index.php?page=cart" method="post" id="cartform">
<h2 class="hidden">inhoud van winkelmand</h2>

          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;

          ?>

            <div class="winkelmand__product">
                <div class="winkelmand__product--info">
                   <a href="index.php?page=detail&amp;id=<?php  echo $item['product']['id'];?>">
                     <img class='winkelmand__product--image' src="<?php  echo $item['product']['picture1'];?>"  alt="<?php echo $item['product']['name'];?>" />
                   </a>
                   <div class="product--info__flex">
                   <h3 class="winkelmand__product--title"><?php   echo $item['product']['name'];?></h3>
                   <p class="winkelmand__product--specs">Versie : <?php if(!empty($_SESSION["cart"][$item['product']['id']]["versie"])) echo $_SESSION["cart"][$item['product']['id']]["versie"];?></p>
                   <p class="winkelmand__product--prijs">Prijs P.P : <?php echo money_format("%i", $item['product']['price']);?></p>
              </div>
              </div>

              <div class="winkelmand__product--inputs">
                <label for="" class="winkelmand__product--label">
                <span class="winkelmand__product--aantal">Aantal : </span>


            <input class="winkelmand__product--input" type="number" size="4" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $_SESSION["cart"][$item['product']['id']]["quantity"];?>" class="replace" />
            <button type="submit" class="remove" name="remove" value="<?php echo $item['product']['id'];?>"><img src="../assets/fotos/cross.svg" alt="kruis"></button>
            </div>
            </div>
          <?php
          }
          ?>


        </section>
    <div class="winkelmand__links--wrapper">
    <section class="winkelmand__links">

        <h2 class="winkelmand__totaal"> Totaal : <?php echo money_format("%i", $total);?></h2>
        <a href="index.php?" class="link link--white winkelmand__webshop">Terug naar webshop</a>
        <div class="winkelmand__kortingscode">
            <p class="winkelmand__kortingscode--titel">Kortingscode toevoegen </p>
            <label for="" class="no_stock__form">
                <input type="text" class="stock__form--email">
                <input type="submit" value="Send" class="stock__form--submit">
            </label>
        </div>
        <button type="submit" id="update-cart" class="link link--black winkelmand__update " name="action" value="update">Update Cart</button>
        <button class="winkelmand__bestellen--subtmit" type="submit" id="checkout" name="action"  value="checkout"><a href="index.php?page=checkout" class="link link--red winkelmand__bestellen ">Verder met bestellen</a></button>
    </section>
</div>
<section class="related winkelmand__related">
    <div class="section--intro related__sectie section__title--related">
        <h2 class="section__title boeken__title">Dit kan misschien nog interessant zijn</h2>
        <image class="pijl white--fill" src="../assets/fotos/pijl.svg" width="24.86" height="19.89"/>
    </div>
    <div class="related--flex">
    <a class="related__product"  href="index.php?page=detail&id=16">
        <img src="../assets/products/vergrootglass/vergrootglas_cover.jpg" alt="vergrootglas" class="related__product--image winkelmand__related--image">
        <p class="related__product--title">Groot vergrootglas</p>
        </a>
    <a class="related__product" href="index.php?page=detail&id=10">
        <img src="../assets/books/the_road/The_Road_Cover.jpg" alt="The Road" class="related__product--image">
        <p class="related__product--title">The Road</p>
        </a>
    <a class="related__product" href="index.php?page=detail&id=14">
        <img src="../assets/products/boekensteun/boekensteun_cover.jpg" alt="Humo Boekensteun" class="related__product--image">
        <p class="related__product--title">Humo boekensteun</p>
    </a>
</div>
</section>
</form>
