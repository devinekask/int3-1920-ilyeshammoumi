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
        <form action="index.php?page=cart" method="post" class="winkelmand__booking--product">
            <h2 class="hidden">inhoud van winkelmand</h2>
            <?php
            $total = 0;
            foreach($_SESSION['cart'] as $item){
              $itemTotal = $item['product']['price'] * $item['quantity'];
              $total += $itemTotal;
            }
            ?>
            <div class="winkelmand__product">
                <div class="winkelmand__product--info">
                <a href="index.php?page=detail&amp;id=<?php echo $item['product']['id'];?>">
                    <img src="<?php echo $item['product']['picture3'];?>" alt="vergrootglass" class="winkelmand__product--image">
                    </a>
                 <div class="product--info__flex">
                        <h3 class="winkelmand__product--title"><?php echo $item['product']['name'];?></h3>
                        <p class="winkelmand__product--specs">Geen specificaties</p>
                         <p class="winkelmand__product--prijs">Prijs P.P : <?php echo $item['product']['price'];?>€</p>
                    </div>
                </div>
                <div class="winkelmand__product--inputs">
                <label for="quantity" class="winkelmand__product--label">
                    <span class="winkelmand__product--aantal">Aantal : </span>
                    <input type="number" name="quantity[<?php echo $item['product']['id'];?>]" class="winkelmand__product--input" min=1>
                </label>
                <button type="submit" class="remove" name="remove" value="<?php echo $item['product']['id'];?>"><img src="../assets/fotos/cross.svg" alt="cross"></button>
                </div>
            </div>


    </section>

    <div class="winkelmand__links--wrapper">
    <section class="winkelmand__links">

        <h2 class="winkelmand__totaal"> Totaal : <?php echo money_format("%i", $itemTotal);?></h2>
        <a href="index.php?" class="link link--white winkelmand__webshop">Terug naar webshop</a>
        <div class="winkelmand__kortingscode">
            <p class="winkelmand__kortingscode--titel">Kortingscode toevoegen </p>
            <label for="" class="no_stock__form">
                <input type="text" class="stock__form--email">
                <input type="submit" value="Send" class="stock__form--submit">
            </label>
        </div>
        <button type="submit" id="update-cart" class="link link--black winkelmand__update " name="action" value="update">Update Cart</button>
        <button class="winkelmand__bestellen--subtmit" type="submit" id="checkout" name="action"  value="checkout"><a href="winkelmand-gegevens.html" class="link link--red winkelmand__bestellen ">Verder met bestellen</a></button>

    </section>
</div>
<section class="related winkelmand__related">
    <div class="section--intro related__sectie section__title--related">
        <h2 class="section__title boeken__title">Dit kan misschien nog interessant zijn</h2>
        <image class="pijl white--fill" src="../assets/fotos/pijl.svg" width="24.86" height="19.89"/>
    </div>
    <div class="related--flex">
    <div class="related__product">
        <img src="../assets/books/wool/Wool_Cover.jpg" alt="Wool" class="related__product--image winkelmand__related--image">
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
</form>
