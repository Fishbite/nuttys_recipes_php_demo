<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          I'm so excited to bring you my
          <strong>Chicken Tikka Grilled Escalopes</strong>
          recipe that I can hardly contain myself! Now we all know this dish
          from the Indian takeaways as a truly delicious starter: little chunks
          of marinaded chicken served with raita & side salad. I'm switching it
          up here, as I want to use my Health Grill and create a complete dinner
          served with naan bread, raita & salad. Now you could of course do this
          in an air fryer, please refer to instructions of your Air fryer! But,
          be sure to cut your chicken breast escalope to fit on the grill plate!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Chicken Tikka Grilled Escalopes</strong>, along
          with some pictures for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chicken-tikka-grilled-escalope/650x366/chicken-tikka-dinner-01.webp"
            alt="chicken tikka dinner"
            title="chicken tikka dinner served with raita, salad & naan bread"
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
                <li>150ml greek yogurt</li>
                <li>4 Tbsp lemon juice</li>
                <li>1 tsp salt</li>
                <li>1 tsp extra hot chilli powder</li>
                <li>2 tsp kashmiri chilli powder</li>
                <li>1/4 tsp turmeric</li>
                <li>1 tsp garlic pulp</li>
                <li>1 tsp ginger pulp</li>
                <li>2 large chicken breasts</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients to grill</h2>

              <ul>
                <li>spray oil</li>
                <li>sprinkle of fresh chopped coriander</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients for the raita</h2>

              <ul>
                <li>2 Tbsp greek yogurt</li>
                <li>2 tsp mint sauce</li>
                <li>1 tsp ground cumin</li>
                <li>pinch salt</li>
                <li>dash lemon juice</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <div class="content" id="method">
              <h2>method</h2>
              <p>
                You will be pleasantly surprised as to how easy it is to make
                <strong>Chicken Tikka Grilled Escalopes</strong>. It's just a
                matter of making the marinade, which is really easy to do too!
              </p>
              <p>
                Chicken escalopes are just flattened pieces of chicken, in this
                case, chicken breasts. We need to flatten them out so that they
                are an even thickness all over, then they will cook evenly on
                the grill. My only word of caution is, make sure the breast is
                well wrapped before you bash it, because you seriously don't
                want to spray raw chicken all over your kitchen!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the marinande</h2>

              <div class="card_image">
                <figcaption>ingredients for the marinade</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for chicken tikka grilled escalope"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  get a suitable container, add yogurt & lemon juice, stir
                  together
                </li>
                <li>add all the spices, ginger & garlic pulps, mix well</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>marinade</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/marinade.webp"
                  alt="ingredients"
                  title="ingredients for chicken tikka grilled escalope"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  get a zip bag & place one of the chicken breasts in the bag
                </li>
                <li>
                  bash out to flatten to an even thickness with a rolling pin
                </li>
                <li>place the flattened breast into the marinande and coat</li>
                <li>
                  repeat with the second breast, shake to cover in mariande
                </li>
                <li>refridgerate for a minimum of 2 hrs or overnight</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>marinate 2hr min'</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/chicken-marinating.webp"
                  alt="chicken marinating"
                  title="chicken marinating for chicken tikka grilled escalope"
                />
                <figcaption>overnight is better</figcaption>
              </div>
              <div class="spacer"></div>

              <h2>method to grill</h2>

              <ol>
                <li>remove the chicken from the fridge & set onto a board</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>marinated chicken</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/marinated-chicken-on-board.webp"
                  alt="marinated chicken on a board"
                  title="marinated chicken on a board for chicken tikka grilled escalope"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>
                  pre-heat the grill & sprinkle fresh coriander over each
                  escalope
                </li>
                <li>spray the top of each escalope with oil</li>
                <li>
                  place each escalope, oiled-side-down, onto the pre-heated
                  health grill
                </li>
                <li>spray the other side with oil & close the lid</li>
                <li>grill for 5 to 7 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>5 to 7 mins on a health grill</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/cooked-chicken-on-grill.webp"
                  alt="cooked chicken on grill"
                  title="cooked chicken tikka grilled escalopes on grill"
                />
              </div>
              <div class="spacer"></div>

              <p>
                If using an in-oven grill, place the meat as close to the grill
                as you can, it will take twice as long &mdash; 10 to 14 minutes,
                & needs turning half way through
              </p>

              <h2>test for doneness</h2>
              <p>
                No matter how you cook it, you need to check it is properly
                cooked all the way through. Put a meat thermometor into the
                center of one breast, as an absolute minimum 75c is perfect, as
                it will continue to cook a little while resting*. Resting is
                quite important, as it will allow the meat to relax and let the
                juices soak back into the meat.
              </p>

              <div class="card_image_round">
                <figcaption>keep warm & allow to rest</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/chicken-tikka-on-plate-01.webp"
                  alt="chicken tikka on a plate"
                  title="chicken tikka grilled escalope resting on plate"
                />
              </div>
              <div class="spacer"></div>

              <p>
                *if you do not have a meat thermometer simply slice into the
                center of the breast & ensure it is white all the way through
              </p>

              <p>You can make the raita while the chicken is resting:</p>

              <div class="card_image">
                <figcaption>raita ingredients</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/ingredients-raita-02.webp"
                  alt="ingredients raita"
                  title="raita ingredients for chicken tikka grilled escalopes"
                />
              </div>
              <div class="spacer"></div>

              <h2>Make the raita</h2>
              <p>
                simply mix all the ingredients together and then place into
                serving bowls.
              </p>

              <p>
                Serving suggestion:
                <strong>Chicken Tikka Grilled Escalope</strong>, Naan, Salad &
                raita is perfect for this and really easy to make.
              </p>

              <p>
                This dish was delightful, mild in spice yet full of flavour, and
                my health grill cooked it to perfection! So tender, just
                writting this makes me want more! This was the finished result
                below :-)
              </p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>chicken tikka grilled escalope</figcaption>
                <img
                  src="/images/chicken-tikka-grilled-escalope/650x366/chicken-tikka-dinner-01.webp"
                  alt="chicken tikka dinner"
                  title="chicken tikka grilled escalope served with naan, raita & salad"
                />
                <figcaption>with naan, raita & salad</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Editors Choice:
                <em
                  >You have to try this, it is absolutely fantastic! The chicken
                  is so juicy, moist and tasty. The blackened chargrill marks
                  add another depth of flavour and authenticity to the light,
                  delicate spices. A truly delcious dish and a real appetite
                  satisfying, healthy portion! Yum! Yum!</em
                >
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
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
