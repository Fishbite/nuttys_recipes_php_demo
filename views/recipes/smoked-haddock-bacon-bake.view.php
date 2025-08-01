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
          <strong>Smoked Haddock & Bacon Bake</strong> is easy to make, but, it
          will test your knife skills! If you own a Mandoline, please be sure to
          use the guard or, it will test your finger tips! The dish requires
          fine slices of potatoes, however, that being said, you could slice
          slightly thicker but, you'll need to par boil for slightly longer.
          <strong>Smoked Haddock & Bacon Bake</strong> only has few ingredients
          but, it has flavour to the max, 'tis basically all my favorite
          breakfast ingredients baked in a potato gratin.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Smoked Haddock & Bacon Bake</strong>, along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/smoked-haddock-bacon-bake/650x366/smoked-haddock-bacon-bake-cooked.webp"
            alt="smoked haddock bacon bake cooked"
            title="smoked haddock bacon bake straight out off the oven"
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
              <ul>
                <li>1kg potatoes finely sliced</li>
                <li>1 Tbsp salt</li>
                <li>150g smoked back bacon sliced</li>
                <li>1 onion finely sliced</li>
                <li>2 cloves garlic finely diced</li>
                <li>150g finely sliced mushrooms</li>
                <li>400g frozen skinless smoked haddock fillets</li>
                <li>50g butter</li>
                <li>1 Tbsp flour</li>
                <li>1 tsp black peppercorns, ground</li>
                <li>1 vegetable stock cube, crumbled</li>
                <li>1 tsp onion powder</li>
                <li>1 tsp dijon mustard</li>
                <li>300ml milk</li>
                <li>125g extra strong cheddar cheese</li>
                <li>2 Tbsp parsley chopped</li>
                <li>*2 soft boiled eggs sliced - optional</li>
                <li>finely diced chives to finish - optional</li>
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
                This really is a pretty simple dish to construct, and there are
                only a few ingredients. Most of the work is in the veg' prep',
                onions, mushrooms and potatoes, but if you have a mandolin, it
                will make short work of slicing those potatoes. Just take care
                to use the finger guard if you do!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>first job is to get the potatoes onto gentle par-boil</li>
                <li>
                  allow them to come to a gentle boil & cook for 7 minutes
                </li>
                <li>
                  immediately drain into a sieve & drop into ice cold water
                  until cold, then drain well until dry
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dry the potatoes</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/sliced-potatoes.webp"
                  alt="sliced potatoes"
                  title="sliced potatoes in a colander for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  heat a heavy based pan, add the bacon and fry until just
                  slightly coloured
                </li>
                <li>
                  add the black pepper, onion, garlic & mushrooms, just soften
                  them down & set aside
                </li>
                <li>now add butter to the pan & make your sauce</li>
                <li>
                  once the butter has melted add stock, onion powder, mustard &
                  flour
                </li>
                <li>create a roux and allow it to cook</li>
                <li>now get a whisk & slowly add milk, whisking constantly</li>
                <li>
                  soon as it comes together turn off the heat & add parsley
                </li>
                <li>
                  place your bacon, mushroom & onion into the base of a
                  oven-proof serving dish
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>create the bottom layer</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/mushrooms-onions-bacon-in-dish.webp"
                  alt="mushrooms onion bacon in dish"
                  title="mushrooms onion bacon in dish for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>
                  wash your frozen haddock in cold water just for a minute
                </li>
                <li>top with your fish fillets & cover with the hot sauce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add fish fillets</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/smoked-haddock-added-to-dish.webp"
                  alt="smoked haddock added to dish"
                  title="smoked haddock added to dish for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add hot sauce</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/sauce-added-to-dish.webp"
                  alt="sauce added to dish"
                  title="sauce added to dish for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>*add eggs now across the top if using</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add eggs</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/sliced-egg-added.webp"
                  alt="sliced egg added"
                  title="sliced egg added to dish for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="15">
                <li>
                  start to layer your potatoes, adding a little cheese as you go
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add potatoes</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/sliced-potato-gratin.webp"
                  alt="sliced potato gratin"
                  title="sliced potatoes added to dish for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="16">
                <li>push the potatoes & dish down</li>
                <li>try to be sure the top is covered in cheese</li>
                <li>add a good twist of freshly ground black pepper</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add potatoes</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/grated-cheese-toppping.webp"
                  alt="grated cheese topping"
                  title="grated cheese added to potatoes for smoked haddock bacon bake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="19">
                <li>bake @180&deg;C for 45 minutes</li>
                <li>the dish should now be brown & bubbling</li>
                <li>remove from the oven</li>
                <li>
                  stick a table knife or a meat thermometer into the center of a
                  fish fillet to be sure it's all cooked through. 63&deg;C is
                  perfects!
                </li>
                <li>
                  let the dish cool for 10 minutes to allow it to relax & the
                  flavours to merge, top with chives
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>smoked haddock bacon bake</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/smoked-haddock-bacon-bake-cooked.webp"
                  alt="smoked haddock bacon bake cooked"
                  title="smoked haddock bacon bake straight out off the oven"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>Not the prettiest dish, but flavour?</figcaption>
                <img
                  src="/images/smoked-haddock-bacon-bake/650x366/smoked-haddock-bacon-bake-plated.webp"
                  alt="smoked haddock bacon bake plated"
                  title="smoked haddock bacon bake with sweetcorn & peas"
                />
                <figcaption>...Well that makes up for it!</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Serving suggestion
                <strong>Smoked Haddock & Bacon Bake</strong> Freshly steamed
                vegetables of your choosing, or, quite simply a fork ;-)
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
                    href="https://www.nuttyskitchen.co.uk/smoked-haddock-in-cheese-sauce.html"
                    >smoked haddock in cheese sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/fish-and-chorizo-potato-pie.html"
                    class="underline"
                    >fish & chorizo potato pie
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