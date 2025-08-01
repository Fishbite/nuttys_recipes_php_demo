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
          This <strong>Lamb Tikka Grill Steaks</strong> recipe is a mirror of my
          Chicken Tikka Grilled Escalopes, but, this time I'm using lamb leg
          steaks as a real treat, it definitely requires a longer time in the
          marinade, but apart from that, the recipe is the same except that I've
          used plain yogurt and fresh lemon juice, instead of a thick Greek
          yogurt, as the lamb is harder to tenderise. Now we all know this dish
          from the Indian takeaways as a truly delicious starter &mdash; little
          chunks of marinated lamb served with raita & side salad. I'm switching
          it up here, as I want to use my health grill to create a main dinner
          dish served with tomato basmati rice & raita. Now you could of course
          do this in an air fryer &mdash; please refer to instructions of your
          air fryer! But, be sure marinade your steaks overnight. If you can get
          full sized leg steaks, great! Just do two, if they are small and thin,
          use four!
        </p>

        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Lamb Tikka Grill Steaks</strong>, along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/lamb-tikka-grill-steaks/650x366/lamb-tikka-grill-steak-plated-02.webp"
            alt="lamb tikka grill steaks plated"
            title="lamb tikka grill steaks with basmati tomato rice & raita"
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
              <h2>Serves 2</h2>

              <h2>for the marinande</h2>

              <ul>
                <li>150ml plain yogurt</li>
                <li>1/2 fresh lemon, juiced</li>
                <li>1 tsp salt</li>
                <li>1 tsp extra hot chilli powder</li>
                <li>2 tsp kashmiri chilli powder</li>
                <li>1/4 tsp turmeric</li>
                <li>1 tsp minced garlic</li>
                <li>1 tsp minced ginger</li>
                <li>1 tsp meat tenderiser</li>
                <li>450g Lamb Leg Steaks</li>
                <li>sprinkle of fresh chopped coriander</li>
              </ul>

              <div class="spacer"></div>

              <h2>to grill</h2>

              <ul>
                <li>spray oil</li>
              </ul>
              <div class="spacer"></div>

              <h2>for the raita</h2>

              <ul>
                <li>2 Tbsp plain yogurt</li>
                <li>2 tsp mint sauce</li>
                <li>1 tsp ground coriander</li>
                <li>pinch salt</li>
                <li>dash lemon juice</li>
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
                I think you're going to love making this dish, as there's no
                chopping, no browning of onions, nothing, nada! All we have to
                do is make the marinade, coat the lamb steaks really well, then
                leave in the fridge overnight. When you are ready to eat the
                following day, just pop the grill on and cook for a few minutes,
                as described below.
              </p>
              <p>The crowd is going to love you for this!</p>

              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>marinade ingredients</figcaption>
                <img
                  src="/images/lamb-tikka-grill-steaks/650x366/marinade-ingredients.webp"
                  alt="marinade ingredients"
                  title="marinade ingredients for lamb tikka grill steaks"
                />
              </div>
              <div class="spacer"></div>

              <h2>Method for the marinande</h2>

              <ol>
                <li>
                  get a suitable container, add yogurt & lemon juice, stir
                  together
                </li>
                <li>
                  add all the spices, tenderiser, minced ginger & garlic, mix
                  well
                </li>
                <li>add chopped coriander</li>
                <li>add the lamb steaks & coat well</li>
                <li>refridgerate overnight</li>
              </ol>
              <div class="spacer"></div>

              <h2>Method to grill</h2>

              <ol>
                <li>remove the Lamb from the fridge & set onto a board</li>
                <li>pre-heat the grill</li>
                <li>spray the top of the steak with oil</li>
                <li>
                  place each steak oil side down onto the pre-heated health
                  grill
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>place steaks on grill</figcaption>
                <img
                  src="/images/lamb-tikka-grill-steaks/650x366/marinated-lamb-steaks-on-grill.webp"
                  alt="marinated lamb steaks on grill"
                  title="marinated lamb steaks on grill making lamb tikka grill steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>spray the other side with oil & close the lid</li>
                <li>grill for 5 to 7 minutes*</li>
              </ol>

              <div class="spacer"></div>

              <p>
                *If using an in-oven grill, place the meat as close to the grill
                as you can, it will take twice as long &mdash; 10 to 14 minutes,
                & needs turning half way through
              </p>

              <h2>test for doneness</h2>

              <ol>
                <li>
                  put a meat thermometor into the center of one steak, just
                  below 60&deg;C for medium or 75-80&deg;C for well done, is
                  perfect, as it will continue to cook a little while resting*
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>check the lamb is cooked</figcaption>
                <img
                  src="/images/lamb-tikka-grill-steaks/650x366/cooked-lamb-steaks-on-grill.webp"
                  alt="cooked lamb steaks on grill"
                  title="cooked lamb tikka steaks on grill"
                />
              </div>
              <div class="spacer"></div>

              <p>
                *if you do not have a meat thermometer, simply slice into the
                center of the steak & ensure it is cooked all the way through
              </p>

              <p>
                Serving suggestion for
                <strong>Lamb Tikka Grill Steaks</strong>: Tomato basmati rice &
                raita is perfect for this and as a bonus, easy to make!
              </p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>lamb tikka grill steaks</figcaption>
                <img
                  src="/images/lamb-tikka-grill-steaks/650x366/lamb-tikka-grill-steak-plated-01.webp"
                  alt="lamb tikka grill steaks plated"
                  title="lamb tikka grill steaks served tomato basmati rice & raita"
                />
                <figcaption>...with tomato rice & raita</figcaption>
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
                    href="https://www.nuttyskitchen.co.uk/lamb-tikka-grill-steaks.html"
                    >lamb tikka grill steaks
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