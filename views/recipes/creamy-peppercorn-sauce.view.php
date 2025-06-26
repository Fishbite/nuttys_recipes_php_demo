<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          Now this <i><b>creamy peppercorn sauce</b></i> is a sauce to top any
          jar or packet on the market ! It's loaded with vegetables, bacon &
          chestnut mushrooms, what is not ta love! Oh! Then there's the BUTTER -
          not optional to omit in my opinion. I'd suggest not eating this daily
          but as a treat, truely a real treat.. Yes some work's involved and
          some cooking but once you've learnt it, tried and tasted it, your
          brain will work as mine does ( lets hope not ) Gammon, chicken, pork,
          rump, or ribeye of beef steaks!!! You could just add a whole pack of
          smoked bacon and simply serve with rice for dinner - I've done it and
          that is scrummy. The options are simply endless you could even oven
          bake some blanched cauliflower and pour the sauce over that!
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide with
          pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/sausagepepperpie/sausageandpepperpie03.jpg"
            alt="sausage and pepper pie"
            title=""
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button
              title="Click this tab to reveal the ingredients"
              class="tab-btn active"
              data-id="ingredients"
            >
              ingredients
            </button>
            <button
              title="Click this tab to read the recipe method and see pictures of how to make this dish"
              class="tab-btn"
              data-id="method"
            >
              method
            </button>
          </div>

          <!-- about content -->
          <article class="about-content">
            <!-- single item -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>serves 2 - 4</h2>

              <ul>
                <li>8 chestnut mushrooms cut into slices</li>
                <li>4 streaky smoked bacon cut into 2cm pieces</li>
                <li>1/2 a medium onion finely diced</li>
                <li>1 stick of celery finely diced</li>
                <li>1 carrot grated</li>
                <li>3 cloves garlic roughly chopped</li>
                <li>1 1/2 tsp black pepper corns - roughly ground</li>
                <li>1 tsp salt</li>
                <li>OXO&trade; veg stock cube crumbled</li>
                <li>2 tsp Worcestershire sauce</li>
                <li>1 Tbls plain flour</li>
                <li>2 Tbls butter x 2</li>
                <li>3/4 pint of whole or semi-skimmed milk</li>
                <li>Left over gravy**</li>
              </ul>
              <div class="spacer"></div>
              <p>**Not essential, but do not use gravy granules!!!</p>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>

              <p>Heat wok or heavy based pan to med - high heat</p>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Add bacon to a heated wok</li>
                <li>Fry until it starts to brown</li>
                <li>Add butter until it melts</li>
                <li>Add all your vegetables</li>
                <li>Add garlic, salt and pepper</li>
                <li>stir-fry on a high heat 6 for 10 mins*</li>
              </ol>

              <div class="spacer"></div>
              <p>
                *You want your veg to reduce by a third and stop producing steam
              </p>

              <ol start="7">
                <li>Add mushrooms stir-fry for 5 mins</li>
                <li>Lower the heat cover for 5 mins</li>
                <li>Push everything to one side of the pan</li>
                <li>Add the second lot of butter</li>
                <li>Add your flour when the butter starts to melt</li>
                <li>Gently coax the flour into the butter</li>
                <li>When you have thick roux (paste) add the milk slowly</li>
                <li>Slowly add your milk stirring continuously**</li>
              </ol>

              <div class="spacer"></div>
              <p>
                **Don't panic if it goes lumpy, just keep stirring while adding
                a little more milk at a time, it will smooth out!
              </p>
              <ol start="15">
                <li>When you have a smooth sauce, add the gravy if using</li>
                <li>Add the Worcestershire sauce</li>
                <li>Stir to combine all the ingredients</li>
                <li>Cover & lower the heat to low-med for 10 mins</li>
                <li>Check after 5 mins & add water if it's too thick</li>
                <li>Remove the lid and taste!</li>
                <li>Adjust seasoning & Worcestershire sauce if needed</li>
              </ol>

              <div class="spacer"></div>

              <h2>serving suggestion</h2>
              <p>
                With any meat of your choice accompanied with rice, mash or new
                potatoes, along with some veg of your choice if you have any,
                although they're not essential as veg is contained within the
                sauce
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown sausages</figcaption>
                <img
                  src="/images/sausagepasta/650x366/sausage-browning-in-pan-02.jpg"
                  alt=""
                  title=""
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->
          </article>
        </article>
      </div>
    </section>
  <?php require __DIR__ . '/../partials/footer.php'; ?>
  <script src="/scripts/tabs.js"></script>
</body>
</html>
