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
          Wow! I'm so excited to bring you this recipe I could jump up and down
          while shouting enthusiastically!!! I recently invested in a George
          Forman&trade; grill. I had something similar before I had to retire
          it, but this new gadget pumps out some delicious food. I've brought
          you this new cooking method for my
          <strong>Chicken Tandoori Grill</strong>. It's so easy to do you will
          make it again and again. Juicy tender chicken thighs that literally
          melt in your mouth! Just mix a simple marinade & refrigerate
          overnight. 4 to 7 minutes cooking time in a double sided heated grill,
          what is not to love! If using a standard oven grill, you will need to
          turn the chicken over & double the cooking time, but it's still quick
          & simple!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make my <strong>Chicken Tandoori Grill</strong> along with some
          pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chicken-tandoori-grill/650x366/chicken-tandoori-grill-plated-01.webp"
            alt="chicken tandoori grill plated 01"
            title="chicken tandoori grill, salad, rice salad & raita"
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
              <p>Here's what you need :¬P</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>Serves 2</h2>
              <ul>
                <li>6 small boneless chicken thighs</li>
                <li>300g greek yogurt</li>
                <li>1 tsp salt</li>
                <li>1/2 a lemon juiced or 1 Tbsp lemon juice</li>
                <li>4 cloves garlic, minced</li>
                <li>2 tsp paprika powder</li>
                <li>1 tsp ground ginger powder</li>
                <li>1 tsp cumin powder</li>
                <li>1 tsp cayenne pepper powder</li>
                <li>1 tsp extra hot chilli powder</li>
                <li>2 tsp kashmiri chilli powder</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <!-- The method tab  does not have the class `active` by default, thus it is hidden from view. When the user clicks
            the "Method" tab the `active` class is applied here and
            removed from the "Ingredients" tab, which is then hidden
            from view
             -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                Well, get ready for this. It's probalby the fastest dinner in
                the west!
              </p>
              <p>
                Just knock your marinade up, toss in the boneless & skinless
                chicken thighs, pop it in the fridge overnight and grill it the
                next day. TaDah!!! It took 4 mins to cook on the night, but they
                were pretty skinny chicken thighs!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  Set your yogurt into a plastic or glass (do not use metal
                  containers!) pot large enough to hold the marinade and chicken
                  pieces
                </li>
                <li>
                  Add all the spices, 2 tsp paprika, 1 tsp ground ginger, 1 tsp
                  cumin powder, 1 tsp cayenne pepper, 1 tsp extra hot chilli
                  powder, 2 tsp kashmiri chilli powder, lemon juice and garlic
                  &mdash; mix well
                </li>
                <li>Add your chicken flattening it out into the mariade</li>
                <li>
                  Cover with a lid and shake well then put in the fridge
                  overnight
                </li>
                <li>
                  Remove from the fridge 30 minutes prior to grilling and
                  transfer into a colander, so some of the excess marinade
                  drains off
                </li>
                <li>Lay out onto a board & spray with oil on the upper side</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>lay the chicken on a board</figcaption>
                <img
                  src="/images/chicken-tandoori-grill/650x366/marinated-chicken-on-a-board.webp"
                  alt="marinated chicken on a board"
                  title="marinated chicken thghs for chicken tandoori grill"
                />
                <figcaption>& spray with oil</figcaption>
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  Heat the grill, lay the chicken oiled-side down & spray the
                  other side while on the grill
                </li>
                <li>
                  Close the lid and wait until steam stops approximately 4 to 7
                  minutes
                </li>
                <li>
                  Check the chicken is cooked before removing from the grill
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken tandoori grill</figcaption>
                <img
                  src="/images/chicken-tandoori-grill/650x366/tandoori-chicken-grilling.webp"
                  alt="tandoori chicken grilling"
                  title="chicken tandoori grilling"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken tandoori grill dinner</figcaption>
                <img
                  src="/images/chicken-tandoori-grill/650x366/tandoori-chicken-grill-dinner.webp"
                  alt="tandoori chicken grill dinner"
                  title="chicken tandoori grill dinner for a summer's day evening meal"
                />
                <figcaption>served with cool refreshing salad</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Perfect for those hot summer evenings, a little bit of spice
                with a refreshingly cool and tasty salad, with dressing and
                Raita on the side!
              </p>

              <div class="card_image_round">
                <figcaption>chicken tandoori grill</figcaption>
                <img
                  src="/images/chicken-tandoori-grill/650x366/chicken-tandoori-grill-plated-01.webp"
                  alt="chicken tandoori grill plated 01"
                  title="chicken tandoori grill, salad, rice salad & raita"
                />
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Chicken tandoori grill</strong> served with homemade
                potato salad, rice salad, mixed salad & raita
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
                    href="https://www.nuttyskitchen.co.uk/tandoori-chicken.html"
                    >classic tandoori chicken
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chicken-tikka-grilled-escalope.html"
                    class="underline"
                    >chicken tikka grilled escalope
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