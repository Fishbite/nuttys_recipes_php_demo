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
          This dish is an accompaniment: <strong>Mushroom Chow Mein</strong>. I
          served it with my Spring Onion Chicken recipe. Using 'ready-to-wok'
          noodles for a no-faff deliciously tasty side, it's a very quick cook,
          really easy to make and full of flavoursome chestnut mushrooms.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <strong>Method</strong> tab below to see a step-by-step
          guide on how to make <strong>Mushroom Chow Mein</strong> along with
          some pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/mushroom-chow-mein/650x366/mushroom-chow-mein-in-serving-dish-02.webp"
            alt="mushroom chow mein in serving dish"
            title="mushroom chow mein in serving dish"
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
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>serves 2</h2>

              <ul>
                <li>2 Tbsp vegetable oil</li>
                <li>1 red onion sliced finely</li>
                <li>1 tsp salt</li>
                <li>1 tsp sugar</li>
                <li>1 tsp light soya sauce</li>
                <li>1 tsp dark soya sauce</li>
                <li>2 Tbsp oyster sauce</li>
                <li>3 cm piece fresh ginger sliced</li>
                <li>3 cloves garlic</li>
                <li>4 chestnut mushrooms sliced thinly</li>
                <li>1 pack ready to wok noodles</li>
                <li>100g beansprouts</li>
                <li>2 spring onion whites chopped to noodle size</li>
                <li>garnish with the sliced greens of spring onions</li>
                <li>a dash of toasted sesame oil to garnish</li>
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
                To make this &mdash; as always - get all your ingredients out,
                chopped & measured &mdash; as in 5 minutes this will be complete
                and ready to serve!
              </p>
              <p>
                You need to set your hob to the highest setting and get your
                wok/pan really hot.
              </p>
              <p>
                As you add each set of ingredients - give them a good stir and
                let them fry for a minute or so until they just start to soften,
                then you can add the next set.
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Heat a heavy based wok then add 2 Tbsp vegetable oil</li>
                <li>once the oil shimmers add 1 red onion sliced finely</li>
                <li>add 1 tsp salt & 1 tsp sugar</li>
                <li>
                  add 2 tsp light soya sauce, 2 tsp dark soya sauce & 2 Tbsp
                  oyster sauce
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add salt, sugar & soy to onions</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/onions-frying.webp"
                  alt="onions frying"
                  title="onions frying for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>
                  add 3 cm piece fresh ginger sliced & 3 cloves garlic sliced
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add ginger</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/ginger-and-onions-frying.webp"
                  alt="ginger and onions frying"
                  title="ginger and onions frying for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add garlic</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/ginger-garlic-and-onions-frying.webp"
                  alt="ginger garlic and onions frying"
                  title="ginger, garlic and onions frying for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>add 4 chestnut mushrooms sliced thinly</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add mushrooms</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/mushrooms-added-to-wok.webp"
                  alt="mushrooms added to wok"
                  title="mushrooms added to wok for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>allow mushrooms to soften</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/mushrooms-fried-with-onions.webp"
                  alt="mushrooms fried with onions"
                  title="mushrooms fried with onions for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>add 1 pack ready to wok noodles</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add noodles</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/noodles-added-to-wok.webp"
                  alt="noodles added to wok"
                  title="noodles added to wok for mushroom chow mein"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>add 100g beansprouts</li>
                <li>add 2 spring onion whites - chopped to noodle size</li>
                <li>add the greens of spring onions as you serve the dish.</li>
                <li>garnish with a dash of toasted sesame oil</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add greens of spring onions</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/mushroom-chow-mein-frying.webp"
                  alt="mushroom chow mein frying"
                  title="mushroom chow mein frying in a wok"
                />
                <figcaption>...and allow them to wilt</figcaption>
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>mushroom chow mein cooked</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/mushroom-chow-mein-cooked-in-wok.webp"
                  alt="mushroom chow mein frying"
                  title="mushroom chow mein frying in a wok"
                />
                <figcaption>...in just a few minutes!</figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>mushroom chow mein</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/mushroom-chow-mein-in-serving-dish.webp"
                  alt="mushroom chow mein in serving dish"
                  title="mushroom chow mein in a serving dish"
                />
              </div>
              <div class="spacer"></div>

              <h2>Serving suggestion:</h2>

              <p>
                <strong>Mushroom Chow mein</strong> served with my Spring Onion
                Chicken recipe
              </p>

              <div class="card_image">
                <figcaption>mushroom chow mein</figcaption>
                <img
                  src="/images/mushroom-chow-mein/650x366/spring-onion-chicken-with-noodles-in-dish.webp"
                  alt="spring onion chicken with noodles in dish"
                  title="mushroom chow mein served with spring onion chicken"
                />
                <figcaption>...and spring onion chicken</figcaption>
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/pork-blackbean-sauce-and-peppers.html"
                    >pork in black bean sauce & peppers
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/special-fried-rice.html"
                    class="underline"
                    >special fried rice
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