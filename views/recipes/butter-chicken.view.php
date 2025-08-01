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
          <strong>Butter Chicken </strong>& Jeera rice. This is a revision to a
          previous dish and it is oh so improved! A bit of advise though, do not
          eat it every week :-) This is a restaurant style curry &mdash; and a
          treat to be eaten just occassionally! The original recipe calls for
          500ml of cream! I substitute with two thirds yogurt to make it
          slightly lighter & not so rich. As you all know, I do love spice, but
          this is a mild dish and the nuts do sing through, after all, I am
          Nutty!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Butter Chicken </strong>& Jeera rice, along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/butter-chicken/650x366/butter-chicken-and-jeera-rice-02.webp"
            alt="butter chicken and jeera rice"
            title="butter chicken served with jeera rice"
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
              <h2>for the marinade</h2>
              <ul>
                <li>500g diced boneless chicken (breast or thigh)</li>
                <li>50g Greek natural yogurt</li>
                <li>2 tsp finely grated ginger</li>
                <li>2 tsp finely grated garlic</li>
                <li>1 tsp garam masala</li>
                <li>1 tsp tandoori masala</li>
                <li>1 tsp cumin powder</li>
                <li>1 tsp coriander powder</li>
                <li>1 tsp red kashmiri chilli powder</li>
                <li>1 tsp salt</li>
              </ul>
              <div class="spacer"></div>

              <h2>for the sauce</h2>
              <ul>
                <li>2 Tbsp ghee</li>
                <li>2 tsp finely grated ginger</li>
                <li>2 tsp finely grated garlic</li>
                <li>2 Tbsp tomato puree</li>
                <li>1 tsp garam masala</li>
                <li>1 tsp tandoori masala</li>
                <li>1/2 tsp ground turmeric</li>
                <li>1 tsp Kashmiri chilli powder</li>
                <li>1 tsp Hot chilli powder</li>
                <li>1 Tbsp dried fenugreek leaves</li>
                <li>2 tsp salt</li>
                <li>6 Tbsp cashew nuts, ground</li>
                <li>150 ml double cream</li>
                <li>350 ml greek yogurt or plain</li>
                <li>400 ml water</li>
              </ul>
              <div class="spacer"></div>

              <h2>For the rice</h2>

              <ul>
                <li>1 cup basmati rice, soaked in cold water for 15 minutes</li>
                <li>2 tsp oil or butter</li>
                <li>1 tsp cumin seeds</li>
                <li>1 tsp salt</li>
                <li>2 cups hot water</li>
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
                Try to marinade the chicken overnight, no need to be rushing
                here, you will get away with 2 hours but, overnight pays off,
                trust me! Always use a plastic container not metal! Oddly, there
                are no onions included, but, if you wish to add them in, do so
                first and be sure to cook them until translucent then browned.
                Dice your meat into bite sized chunks so they are all coated in
                the delicious marinade & devourable with just a spoon!
              </p>
              <p>So, prepare your ingredients and spices:</p>

              <!-- Method List Goes Below Here!!! -->
              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/butter-chicken/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <h2>Method for the marinade</h2>
              <ol>
                <li>
                  set your yogurt into a plastic container & stir in all your
                  spices
                </li>
                <li>
                  add your diced chicken & place into the fridge when well
                  shaken or stired through
                </li>
                <li>shake or stir occassionally to re-combine</li>
              </ol>
              <div class="spacer"></div>
              <p>
                If you go to bed just stir to combine when you wake up & repeat
                prior to cooking
              </p>

              <h2>Pre-cook the chicken</h2>
              <ol>
                <li>pre-heat your oven to 200&deg;C or grill to med-high</li>
                <li>remove the chicken pieces from the marinade</li>
                <li>place on to an oven tray</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>marinated chicken</figcaption>
                <img
                  src="/images/butter-chicken/650x366/marinated-chicken-chunks-on-tray.webp"
                  alt="marinated chicken chunks on tray"
                  title="marinated chicken chunks on a tray for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>*cook for 10 to 12 mins until cooked & tender</li>
              </ol>
              <div class="spacer"></div>
              <p>
                *this may take less time in your oven, so check after 7 mins
              </p>

              <div class="card_image">
                <figcaption>cooked chicken</figcaption>
                <img
                  src="/images/butter-chicken/650x366/cooked-chicken-pieces-on-tray.webp"
                  alt="cooked chicken chunks on tray"
                  title="cooked chicken chunks on a tray for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <h2>Method for the sauce</h2>

              <div class="card_image">
                <figcaption>ingredients ready to go!</figcaption>
                <img
                  src="/images/butter-chicken/650x366/ground-cashews-and-spices.webp"
                  alt="ingredients"
                  title="ingredients for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>heat a heavy based pan & add the ghee</li>
                <li>once hot, add your garlic & ginger, just brown slightly</li>
                <li>add tomato puree and cook for a few mins</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomato puree</figcaption>
                <img
                  src="/images/butter-chicken/650x366/tomato-puree-in-melted-ghee.webp"
                  alt="tomato puree in melted ghee"
                  title="tomato puree in melted ghee for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  now add all your spices and stir constantly until oil
                  separates
                </li>
                <li>
                  add in salt & rub the fengreek leaves in, being sure to crush
                  them with your hands
                </li>
                <li>mix through & add your ground cashew nuts</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add ground cashews</figcaption>
                <img
                  src="/images/butter-chicken/650x366/ground-cashew-nuts-and-spices.webp"
                  alt="ground cashew nuts and spices"
                  title="ground cashew nuts and spices for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>stir fry for 5 mins until combined well</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir fry to combine</figcaption>
                <img
                  src="/images/butter-chicken/650x366/cashew-nuts-mixed-with-spices.webp"
                  alt="cashew nuts mixed with spices"
                  title="cashew nuts mixed with spices for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>add the water & marinade & stir though</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir fry to combine</figcaption>
                <img
                  src="/images/butter-chicken/650x366/water-added.webp"
                  alt="water added"
                  title="water added for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  mix your yogurt & cream together, then slowly add to the dish
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add yogurt & cream</figcaption>
                <img
                  src="/images/butter-chicken/650x366/yogurt-and-cream-added.webp"
                  alt="yogurt and cream added"
                  title="yogurt and cream added for butter chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>stir until the dish is all combined & bubbling hot</li>
                <li>
                  now turn down, add the chicken & meat juices, then cover for
                  10 to 15 minutes, depending on the size of your chicken cubes
                </li>
              </ol>
              <div class="spacer"></div>

              <h2>Method for the rice</h2>

              <ol>
                <li>drain your soaked rice & set aside to dry</li>
                <li>heat a sauce pan add the oil or ghee</li>
                <li>
                  as soon as it is hot, add in your cumin seeds & salt allow to
                  sizzle
                </li>
                <li>now add you rice & stir fry through the cumin</li>
                <li>
                  add hot water, cover with a lid, bring to the boil then, turn
                  the ring off and leave for about 20mins until all the water is
                  absorbed
                </li>
                <li>separate, stir through with a fork & serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>butter chicken</figcaption>
                <img
                  src="/images/butter-chicken/650x366/butter-chicken-and-jeera-rice-01.webp"
                  alt="butter chicken and jeera rice"
                  title="butter chicken served with jeera rice"
                />
                <figcaption>...with jeera rice</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                This is truly a top quality, restaurant curry, made in the
                comfort of your own home, saving £££'s & £££'s on an expensive
                night out for four! But, please be aware &mdash; it is
                calorific, so it is a rare a treat :-) Truely Nutty's favorite!
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
                    href="https://www.nuttyskitchen.co.uk/chicken-tandoori-grill.html"
                    >chicken tandoori grill
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/tandoori-chicken.html"
                    class="underline"
                    >tandoori chicken
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