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
          Now who does not love a Fish & Potato Pie! But, with the addition of
          Chorizo, a spanish style sausage, well, it is to die for! And it also
          bulks out your fish making meals go further.
          <strong>Fish & Chorizo Potato Pie</strong> was born after I made
          Chorizo Cod Stew, my mind began to race & my heart pounded, how about
          omitting the beans & baking with a potato pie topping? My mind does
          that to me some times ;-) No wonder I am called Nutty!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Fish & Chorizo Potato Pie</strong>, along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/fish-and-chorizo-potato-pie/650x366/fish-and-chorizo-potato-pie-cooked-01.webp"
            alt="fish and chorizo pie cooked"
            title="fish and chorizo pie straight from the oven"
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

              <h2>serves 4</h2>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>for the base</h2>

              <ul>
                <li>200g mild spanish Chorizo ring thinly sliced</li>
                <li>1 tsp olive oil</li>
                <li>1 onion finely chopped</li>
                <li>1 large spring onion</li>
                <li>1 clove garlic</li>
                <li>1 tsp smoked paprika</li>
                <li>pinch of salt & pepper</li>
                <li>400g fresh cherry tomatoes, halved</li>
                <li>1 vegetable stock cube</li>
                <li>250g frozen smoked haddock*</li>
                <li>250g frozen cod*</li>
                <li>1/2 lemon &mdash; juiced</li>
                <li>handful of fresh marjoram or parsley</li>
              </ul>
              <div class="spacer"></div>
              <p>
                <em
                  ><strong>*NB:</strong> the fish will naturally break up into
                  chunks, so don't worry!</em
                >
              </p>

              <h2>for the mash</h2>

              <ul>
                <li>1.2kg peeled, med' sized potatoes, quartered</li>
                <li>1 Heaped Tbsp Salt</li>
                <li>50g (at least!) salted Butter*</li>
                <li>40ml milk</li>
                <li>1 egg whisked</li>
              </ul>
              <div class="spacer"></div>
              <p><em>*More butter please!</em></p>
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
                There's just a little preparation to make this dish, but make
                sure you halve the cherry tomatoes, as this is essential to
                create the sauce for the dish.
              </p>
              <p>
                So, get everything ready, do your chopping and put your potatoes
                on to boil for the mash, then you are ready to make the pie
                filling.
              </p>
              <p>
                Frying the chorizo melts and releases the paprika infused fat,
                which is a lovely red colour, it is so full of flavour,
                especially when cooked till slightly crisp, that it permeates
                the entire dish. Totaly gorgeous!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>ingredients for the filling</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <h2>Method for the base</h2>

              <ol>
                <li>heat a heavy based pan & add oil</li>
                <li>once shimmering, add your Chorizo slices</li>
                <li>fry for 3 to 4 minutes until crisp on both sides</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry the chorizo</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/chorizo-frying.webp"
                  alt="chorizo frying"
                  title="chorizo frying for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>add onions, garlic, salt & smoked paprika</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add the onions</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/onions-added-to-frying-chorizo.webp"
                  alt="onions added to frying chorizo"
                  title="onions added to frying chorizo for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>fry for 3 mins on low</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cook until soft</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/onions-softened-with-frying-chorizo.webp"
                  alt="onions softened with frying chorizo"
                  title="onions softened with frying chorizo for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>add spring onions</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add spring onions</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/spring-onions-added-to-onions-and-chorizo.webp"
                  alt="spring onions added to onions and chorizo"
                  title="spring onions added to onions and chorizo for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>add smoked paprika</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add smoked paprika</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/smoked-paprika-added-to-pan.webp"
                  alt="smoked paprika added to pan"
                  title="smoked paprika added to pan for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>stir in the tomatoes & cook for 5 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cherry tomatoes</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/cherry-tomatoes-added-to-pan.webp"
                  alt="cherry tomatoes added to pan"
                  title="cherry tomatoes added to pan for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  nestle in your fish, lemon juice & herbs, cover & turn the
                  ring to medium to thaw the fish
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add fish</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/fish-added-to-pan.webp"
                  alt="fish added to pan"
                  title="fish added to pan for fish & chorizo potato pie"
                />
              </div>
              <div class="spacer"></div>

              <h2>Method for the mash</h2>

              <ol>
                <li>place your potatoes into a large sauce pan & add salt</li>
                <li>once boiling set a timer for 20 mins</li>
                <li>drain and allow to steam for a moment</li>
                <li>
                  place your milk & butter into the same hot pan & allow to melt
                </li>
                <li>mash until silky smooth, no lumps please!</li>
                <li>check the seasoning & more salt if required</li>
                <li>
                  add your egg, take a table fork (or whisk) and beat / whisk
                  the mash
                </li>
              </ol>
              <div class="spacer"></div>

              <h2>Build the Fish & Chorizo Potato Pie</h2>

              <p>
                Use a deep dish for this, so that you can bury all your pie
                filling under the mash
              </p>

              <ol>
                <li>pre-heat your oven to 180c</li>
                <li>
                  select a oven proof dish large enough to contain all the
                  ingredients
                </li>
                <li>add your pie filling into the dish</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>filling in for pie</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/cooked-pie-filling-tipped-into-square-dish-02.webp"
                  alt="cooked pie filling tipped into square dish"
                  title="cooked pie filling tipped into square dish"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>top with the hot mash</li>
              </ol>
              <div class="spacer"></div>
              <p>
                <strong>Note:</strong> making swirly patterns on top of the mash
                not only looks pretty, but, it creates loads of edges that will
                brown and crisp up. Some say these are the best bits!
              </p>

              <div class="card_image">
                <figcaption>top with mash</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/fish-and-chorizo-topped-with-potato-03.webp"
                  alt="fish and chorizo pie topped with potato"
                  title="fish and chorizo pie topped with potato"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>bake @ 180c for 45 minutes</li>
                <li>
                  *check the dish is hot throughout the center with a
                  thermometer &mdash; 60&deg;C is perfect
                </li>
              </ol>

              <div class="spacer"></div>
              <p>
                <strong>*</strong> or push a knife into the center and test on
                the back of your hand, it should be really hot!
              </p>

              <div class="card_image">
                <figcaption>fish and chorizo pie</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/fish-and-chorizo-potato-pie-cooked-01.webp"
                  alt="fish and chorizo pie cooked"
                  title="fish and chorizo pie straight from the oven"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Serving suggestion for
                <strong>Fish & Chorizo Potato Pie</strong>: Well this one's
                easy, remove the dish from the oven & place into the center of
                the table: four bowls & four forks is all that it requires :-)
              </p>

              <div class="card_image_round">
                <figcaption>fish and chorizo pie</figcaption>
                <img
                  src="/images/fish-and-chorizo-potato-pie/650x366/fish-and-chorizo-potato-pie-plated-02.webp"
                  alt="fish and chorizo pie plated"
                  title="fish and chorizo pie served in a dish"
                />
                <figcaption>...nothing else required!</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Fish and chorizo with a crusty, toast creamy mash, who'd have
                thought it? Absolute genius!
              </p>

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
                    href="https://www.nuttyskitchen.co.uk/chorizo-cod-stew.html"
                    >chorizo cod stew
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/fish-pie.html"
                    class="underline"
                    >mum's fish pie
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