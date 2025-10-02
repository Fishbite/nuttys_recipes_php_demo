<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          <strong>Chicken in Cashew Nut Sauce</strong> Now this really is a
          Nutty dish! &mdash; delicate bite sized pieces of chicken, what's not
          to love! A rich thick sauce, not overly spiced, but delicious. Buy
          unsalted cashew nuts if possible or omit the salt completely.
        </p>
        <p>
          The flavour of this dish is quite unique, the cashew nuts lend a mild
          creamy texture to the sauce while the taste of the sultanas really
          permeate throughout and then pop like little jewels of amazing
          fruitiness when you bite into them. It really is quite remarkable, you
          just have to try this.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Chicken in Cashew Nut Sauce</strong> with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chicken-in-cashew-nut-sauce/650x366/sprinkle-with-coriander.webp"
            alt="sprinkle with coriander"
            title="chicken in cashew nut sauce"
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

          <!-- This is where the "Ingredients" & "Method" tabs are created -->
          <!-- about content -->
          <article class="about-content">
            <!-- single item -->

            <!-- the class `active` is applied to show the contents of the tab. "Ingredients" is active by default -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>

              <h2>serves 4</h2>

              <!-- Ingredients List Goes Below Here!!! -->
              <h3>for the spice paste</h3>

              <ul>
                <li>2 medium onions quartered</li>
                <li>50g cashew nuts</li>
                <li>1 & 1/2 tsp garam masala</li>
                <li>1 tsp hot chilli powder</li>
                <li>2 tsp kashmiri chilli powder</li>
                <li>1/2 tsp turmeric</li>
                <li>1 level tsp coarse sea salt</li>
                <li>2 Tbsp tomato puree</li>
                <li>1 Tbsp garlic pulp</li>
                <li>1 Tbsp plain yogurt</li>
                <li>1 Tbsp lemon juice</li>
              </ul>

              <div class="spacer"></div>

              <h3>to cook with</h3>

              <ul>
                <li>2 Tbsp vegetable oil</li>
                <li>450g diced chicken thighs</li>
                <li>175g mushrooms quartered or button mushrooms</li>
                <li>2-3 Tbsp sultanas</li>
                <li>100ml water</li>
                <li>1 Tbsp chopped fresh corriander</li>
                <li>1 - 2 tsp garam masala</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <!-- The method tab  does not have the call `active` by default, thus it is hidden from view. When the user clicks
            the "Method" tab the `active` class is applied here and
            removed from the "Ingredients" tab, which is then hidden
            from view
             -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                You can cook <strong>Chicken in Cashew Nut Sauce</strong> in
                about 10 - 15mins , so I make the spice paste in advance,
                generally a day or two before, that's a great chunk of work done
                with and you will be ready to knock up this amazing dish in no
                time at all.
              </p>

              <p>Gather all your ingredients:</p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <p>Put all the dry spices in a dish..</p>

              <div class="card_image">
                <figcaption>spice ingredients</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/spices-in-dish-02.webp"
                  alt="spices in a dish"
                  title="spices in a dish for chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Put all the wet ingredients &mdash; except the oil into another
                pot.
              </p>

              <div class="card_image">
                <figcaption>wet ingredients</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/wet-ingredients-in-dish.webp"
                  alt="wet ingredients in a dish"
                  title="wet ingredients in a dish for chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <p>Now you can clear up ready to make the spice paste!</p>

              <h3>prep' your spice paste</h3>

              <p>
                Here I use a food processor to chop the onions down and create a
                spicy sauce, if you do not have one, chop everything very very
                finely, then use a pestle and mortar to grind the nuts down to a
                very fine powder
              </p>
              <p>
                Set the mushrooms aside, we're not going to put them in the food
                processor.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  quarter the onions, then process them for 1 minute until
                  totally chopped
                </li>
                <li>add the rest of the ingredients for the spice paste</li>
                <li>
                  process for another minute & a half until totally chopped
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>spice paste ready!</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/curry-paste-in-a-tub.webp"
                  alt="curry paste in a tub"
                  title="spice paste ready to make chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Now set this aside until you're ready to cook. I make this the
                day before and pop it in the fridge in a sealed container, then
                everything is ready for the pan the next day and we'll have it
                cooked in about ten minutes! Simples! :¬)
              </p>

              <h3>time to cook!</h3>

              <ol>
                <li>heat a heavy based pan & add oil</li>
                <li>lower to medium & add your spice mixture</li>
                <li>stir fry for two minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir-fry the spice paste</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/stir-frying-curry-paste.webp"
                  alt="wet ingredients in a dish"
                  title="stir-frying curry paste for chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  turn up the heat of your pan add your chicken stir fry till
                  combined
                </li>
                <li>then add fresh coriander, mushrooms & sultanas</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add chicken & mushrooms etc.</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/add-chicken-mushroom-coriander-sultanas.webp"
                  alt="add chicken mushroom coriander sultanas"
                  title="chicken & other ingredients added to chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>stir fry for two minutes then add the water</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add water</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/add-water-and-simmer.webp"
                  alt="add water and simmer"
                  title="water added to chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>cover and cook for 10 minutes</li>
                <li>
                  check to see if the chicken is cooked through & if the sauce
                  has thickened to your liking
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>check after ten min's</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/curry-after-ten-mins.webp"
                  alt="curry after ten mins"
                  title="chicken & other ingredients added to chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>check the seasoning and adjust as required</li>
                <li>
                  add 1 or 2 tsp of garam masala, stir well & leave for 2 mins
                </li>
              </ol>

              <div class="spacer"></div>

              <p>Finish with a sprinkle of coriander!</p>

              <div class="card_image">
                <figcaption>check after ten min's</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/sprinkle-with-coriander.webp"
                  alt="sprinkle with coriander"
                  title="coriander added to finish chicken in cashew nut sauce"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/chicken-in-cashew-nut-sauce/650x366/chicken-in-cashew-nut-sauce-plated.webp"
                  alt="chicken in cashew nut sauce plated"
                  title="chicken in cashew nut sauce with basmati rice"
                />
                <figcaption>
                  chicken in cashew nut sauce with basmati rice
                </figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Share this with a friend or two, they'll absolutely love you for
                it, I promise! ;¬)
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't fuk with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/butter-chicken.html"
                    >butter chicken
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chicken-with-mango.html"
                    class="underline"
                    >chicken with mango
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