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
          I have been working on perfecting this recipe for
          <strong>Authentic Seekh Kebabs</strong> a good while now. I've tried
          different Pork & Beef mince mixes, but they turned out too wet and
          fell apart and low fat beef mince was too dry. Hmm! Well, finally I
          think this recipe is perfect. However, I shall let you all be the
          judge of that ;¬) You need to use full fat beef mince and be sure to
          pat it dry. Try to make the mix the day before, so it has time to
          chill and firm up in the fridge, then you should end up with perfect
          kebabs that are fit for very rich and politically powerful
          <em>men</em> with no teeth! LOL ;-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Authentic Seekh Kebabs</strong> along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/authentic-seekh-kebabs/650x366/seekh-kebab-with-salad-raita-and-pita-bread-02.webp"
            alt="seekh kebab with salad raita and pita bread"
            title="authentic seekh kebab with salad raita and pita bread"
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
              <h2>serves 2 to 4</h2>
              <ul>
                <li>2 tsp coriander seeds</li>
                <li>2 tsp cumin seeds</li>
                <li>1/2 small white onion quartered</li>
                <li>4 fresh green chillies quartered</li>
                <li>8g fresh coriander leaves</li>
                <li>2g fresh mint</li>
                <li>500g 20% fat minced beef</li>
                <li>1 1/4 tsp sea salt</li>
                <li>1 tsp black pepper corns</li>
                <li>1/2 tsp red chilli flakes</li>
                <li>2 tsp garam masala</li>
                <li>1 Tbsp gram flour</li>
                <li>1 tsp meat tenderiser</li>
              </ul>

              <div class="spacer"></div>
              <p>
                This recipe makes 4 medium kebabs, if you need more, make them
                from two separate batches of the ingredients above.
              </p>
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
                You definitely need to make the beef patty mixture well before
                cooking time, giving it enough time to chill and firm up in the
                fridge, otherwise they are just too soft to handle.
              </p>

              <p>As usual, gather your ingredients:</p>

              <div class="card_image">
                <figcaption>flavouring ingredients</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for authentic seekh kebabs"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the kebab mixture</h2>

              <ol>
                <li>Heat small pan & toast your coriander & cumin seeds</li>
                <li>set into a pestle & mortar to cool</li>
                <li>
                  add the peppercorns & sea salt to the seeds & grind to a
                  powder
                </li>
                <li>
                  add all your ground spices, gram flour & meat tenderiser
                </li>
                <li>
                  place all the onions, chillies, garlic & ginger into a blender
                </li>
                <li>blitz until chopped then add your coriander & mint</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>blitz until chopped</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/onion-and-spice-mix.webp"
                  alt="onions and spice mix"
                  title="onions and spice mix for authentic seekh kebabs"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>top with your meat & blend until fully combined</li>
                <li>
                  you will need to stop the blender occasionally and push the
                  mixture down
                </li>
                <li>once it all combines, a bit like pastry your done</li>
                <li>split the mixture into 4</li>
              </ol>

              <div class="spacer"></div>
              <p>
                Choose the oven tin or air fryer rack your going to cook in so
                you know the kebabs will fit
              </p>

              <ol start="11">
                <li>
                  wrap each quarter in 3 x the amount of cling film needed
                </li>
                <li>squeeze & roll the kebabs to form a sausage</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>form each sausage shape</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/raw-kebeb-in-food-wrap.webp"
                  alt="raw kebab in food wrap"
                  title="raw kebab in food wrap for authentic seekh kebabs"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>
                  now place the kebabs into the fridge, preferably overnight to
                  chill down & firm up
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>form each sausage shape</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/raw-kebabs-in-cling-film.webp"
                  alt="raw kebabs in cling film"
                  title="raw kebabs in cling film for authentic seekh kebabs"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>

              <h2>Ready to cook</h2>

              <p>
                When you're ready to cook, be sure to space the kebabs out, do
                not crowd them or they will not cook evenly. I tried cooking
                these on my health grill, but, they tend to get crushed and
                flattened when you lower the lid! However, if you prefer that
                method, simply leave the lid up and turn frequently for 6
                minutes until they are almost done, then close the lid gently
                for the last 2 minutes and pray ;-) If they turn out looking
                like burgers "sighs" I did warn you! But, they will still taste
                great, I promise
              </p>

              <h2>Method to cook the kebabs in an oven</h2>

              <ol>
                <li>remove from the fridge & remove the cling film</li>
                <li>spray with a little oil</li>
                <li>now set onto an oven proof tin</li>
                <li>
                  bake @ 220c for 14 minutes turning 4 times until cooked
                  through
                </li>
              </ol>

              <div class="spacer"></div>

              <h2>Method to cook the kebabs in an air fryer</h2>

              <ol>
                <li>remove from the fridge & remove the cling film</li>
                <li>spray with a little oil</li>
                <li>now set onto an air fryer rack</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>set onto a rack</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/raw-kebabs-on-grill-plate-02.webp"
                  alt="raw kebabs on grill plate"
                  title="raw kebabs on grill plate for authentic seekh kebabs"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  bake @ 200c for 8 minutes turning 4 times until cooked through
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cooked kebabs</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/cooked-kebabs-on-grill-plate-01.webp"
                  alt="cooked kebabs on grill plate"
                  title="cooked authentic seekh kebabs on grill plate"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Once they are browned all over and if you have a meat
                thermometer, the core temperature should be 160f / 72c to be
                perfectly cooked
              </p>

              <p>
                Serving suggestion <strong>Authentic Seekh Kebabs</strong> Pitta
                breads, finely sliced onion, coleslaw, side salad, & mint raita
              </p>

              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/authentic-seekh-kebabs/650x366/seekh-kebab-with-salad-raita-and-pita-bread-01.webp"
                  alt="seekh kebab with salad, raita and pita bread"
                  title="authentic seekh kebab with salad, raita and pita bread"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Some place in India, quite a long time ago, a chef invented this
                dish for the rich and politically powerful men who had virtually
                everything they need in life, except of course, teeth! So, these
                <strong>Authentic Seekh Kebabs</strong> are so soft that teeth
                are optional! They are packed so full of flavour with quite a
                kick of chilli heat, so a cool mint raita and refreshing salad
                go down perfectly in between spicy meaty bites.
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
                    href="https://www.nuttyskitchen.co.uk/rogan-josh-beef-curry.html"
                    >rogan josh beef curry</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chicken-tikka-grilled-escalope.html"
                    class="underline"
                    >chicken tikka grilled escalope</a
                  >
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