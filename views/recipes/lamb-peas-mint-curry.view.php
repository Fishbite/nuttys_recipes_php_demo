<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          This is a kinda pumped up shepherds pie mince dish. Not really a curry
          in the truest sense of the word, but, oh! so worth the minimal effort.
          It's fast to cook and really easy. It's not a dish I'd serve with rice
          as it does not really have a gravy. The delicate spicing does not over
          power the lamb which really does need to be the star! Colourful,
          flavoursome and mild enough for the kids, yet tasty enough for curry
          fans. What's not to love!
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
            src="/images/lambpeasmintcurry/650x366/curry-in-pan.webp"
            alt="curry in pan"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button class="tab-btn active" data-id="ingredients">
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
              <h2>serves 4</h2>
              <ul>
                <li>2 medium onions chopped</li>
                <li>2 Tblsp oil</li>
                <li>1 tsp garlic pulp</li>
                <li>1 tsp ginger pulp</li>
                <li>1 tsp ginger pulp</li>
                <li>1 tsp extra hot chilli powder</li>
                <li>1/2 tsp turmeric</li>
                <li>1 tsp ground coriander</li>
                <li>1 tsp sea salt</li>
                <li>3 plum tomatoes sliced</li>
                <li>475g minced / ground lamb</li>
                <li>1 large carrot cut into battons</li>
                <li>100g garden peas</li>
                <li>2 Tblsp fresh mint ( grow your own ;-> )</li>
                <li>2 tbls fresh coriander</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                Please do not use tinned tomatoes, your dish will be too tart!
                You'll also completely lose the lamb taste and it's way too
                expensive to do that!
              </p>
              <p>
                I buy two fresh bunches of coriander at a time, then wash, chop
                and freeze it, stalks and all. You can then use it just as you
                would if it were fresh
              </p>
              <p>
                Browning the onions is key, but doing this with only a little
                oil takes a while, 15 - 20mins. Try not to stir too often while
                frying the onions, as this releases water, and they will take
                longer to brown. Just turn them over every now and again, so
                they don't burn. 20mins of your life browning onions feels like
                an eternity, but it is worth it to get the depth of flavour into
                the dish.
              </p>
              <p>
                This entire dish including preparation takes 30mins I estimate
              </p>
              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>prep your ingredients</figcaption>
                <img
                  src="/images/lambpeasmintcurry/650x366/ingredients.webp"
                  alt="ingredients"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Heat a large heavy based wok</li>
                <li>Add oil till it shimmers</li>
                <li>Add your onions</li>
                <li>Set your carrot batons in another pan</li>
                <li>
                  Par boil in water with a little salt ( I hate hard carrots!)
                </li>
                <li>Mix together garlic & ginger paste</li>
                <li>Add the spices to form a paste</li>
              </ol>

              <div class="spacer"></div>
              <p>When the onions are brown:</p>
              <ol start="8">
                <li>Add your tomatoes and spice paste</li>
                <li>Stir fry until oil appears at the edges</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes & spice paste</figcaption>
                <img
                  src="/images/lambpeasmintcurry/650x366/onions-tomatoes-cooking.webp"
                  alt="onions tomatoes cooking"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  Slowly add your lamb mince breaking it down with your fingers
                </li>
                <li>Stir fry the pan on a high heat breaking down the mince</li>
              </ol>
              <div class="spacer"></div>
              <p>Once the mince looks browned:</p>

              <ol start="12">
                <li>Add your carrots peas fresh chilli coriander and mint</li>
                <li>Stir fry until you see oil at the edges</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>lamb peas & mint curry</figcaption>
                <img
                  src="/images/lambpeasmintcurry/650x366/curry-in-pan.webp"
                  alt="curry in pan"
                />
              </div>
              <div class="spacer"></div>
              <p>Serve with home-made chapatis, or even mashed potatoes.</p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>served with chapatis</figcaption>
                <img
                  src="/images/lambpeasmintcurry/650x366/lamb-pea-mint-curry-chapati-02.webp"
                  alt="lamb pea mint curry chapati"
                />
              </div>
              <div class="spacer"></div>
              <p>
                You could use this as a stuffing for samosas too, those would be
                really yummy :¬P
              </p>

              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/aloo-gobi.html"
                    >aloo gobi
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chapati.html"
                    class="underline"
                    >chapati flat bread
                  </a>
                </li>
              </ul>
            </section>
          </article>
        </article>
      </div>
    </section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>