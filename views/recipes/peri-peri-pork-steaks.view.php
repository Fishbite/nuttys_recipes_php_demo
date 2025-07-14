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
          <strong>Peri Peri Pork Steaks</strong> are so easy to make, try to
          allow 24hrs for the marinade to tenderise the meat, it'll cook on my
          health grill in about 4 minutes, or, about 8 minutes under a standard
          grill. This recipe is always a winner as it's bouncing with flavour
          and very few ingredients are required, and, if you have marinated the
          pork steaks overnight, all you need to do is knock up some healthy
          summer salad to accompany the steaks. <strong>Please note:</strong> I
          have not added salt as the spice mix I am using contains salt already,
          so you will need to check your spice mix ingredients
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Peri Peri Pork Steaks</strong> along with pictures as
          a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/peri-peri-pork-steaks/650x366/peri-peri-pork-steak-dinner.webp"
            alt="peri peri pork steak dinner"
            title="peri peri pork steaks served with side salad & jacket potato with cheese"
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
              <h2>for the marinade</h2>
              <h2>serves 2 to 4</h2>

              <ul>
                <li>1 red pepper grilled</li>
                <li>1/2 fresh lemon or 1 whole lime juiced</li>
                <li>1 Tbsp apple cider vinegar</li>
                <li>5 cloves garlic</li>
                <li>1 Tbsp peri peri seasoning</li>
              </ul>

              <div class="spacer"></div>

              <p>
                alternative to peri peri seasoning is 1 tsp salt, 1 tsp red
                chilli flakes, 1 tsp ground cumin & 1 tsp smoked paprika
              </p>

              <ul>
                <li>1 Tbsp dried oregano</li>
                <li>1 tsp black pepper</li>
                <li>1 tsp sugar</li>
                <li>2 or 4 shoulder of pork steaks</li>
              </ul>

              <div class="spacer"></div>

              <p>
                Reserve 2 Tbsp of the the peri peri marinade for the perinaise
                then use the rest to coat the dry pork steaks with
              </p>

              <h2>Ingredients for the perinaise</h2>

              <ul>
                <li>1 to 2 Tbsp marinade</li>
                <li>2 to 4 Tbsp mayonaise</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients to cook with</h2>

              <ul>
                <li>spray oil</li>
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
                First things first! Grill / blacken your red pepper as we are
                going to use this in the marinade. I'm using a long pointy red
                pepper, but a normal bell pepper will do just as well. When done
                and cooled, gather the rest of the ingredients for the marinade
                and pop everything (except the pork & mayonaise!) into a food
                processor (or mash everything up in a pestal and mortar) and
                process until it forms a paste.
              </p>
              <p>Marinate overnight if you can, it helps tenderise the meat.</p>
              <p>
                I've included a little 10 second recipe for a sauce &mdash;
                Perinaise &mdash; to go on the side, it really goes excellently
                with the <strong>Peri Peri Pork Steaks</strong>.
              </p>

              <h2>Here's the method in detail:</h2>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  1/2 or 1/4 your red pepper, de-seed it and pop it onto a grill
                  to roast until soft. Allow to cool
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>grill peppers until soft</figcaption>
                <img
                  src="/images/peri-peri-pork-steaks/650x366/long-peppers-grilling.webp"
                  alt="long peppers grilling"
                  title="long red peppers grilling for peri peri pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>
                  Process or grind the ingredients for the marinade: grilled red
                  pepper, 1/2 lemon or 1 lime juiced, 1 Tbsp apple cider
                  vinegar, 5 garlic cloves, 1 Tbsp peri peri seasoning, 1 Tbsp
                  oregano, 1 tsp ground black pepper & 1 tsp sugar
                </li>
                <li>
                  Take a little of the marinade (1 or 2 Tbsp) and add it to your
                  mayonaise to create a creamy sauce: "Pernaise"
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>perinaise ingredients</figcaption>
                <img
                  src="/images/peri-peri-pork-steaks/650x366/perinaise-sauce-ingredients.webp"
                  alt="perinaise sauce ingredients"
                  title="perinaise sauce ingredients for peri peri pork steaks"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>perinaise Sauce</figcaption>
                <img
                  src="/images/peri-peri-pork-steaks/650x366/perinaise-sauce.webp"
                  alt="perinaise sauce"
                  title="perinaise sauce in a sauce boat for peri peri pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  Put your "Pernaise" into the fridge to keep & coat the steaks
                  with the rest of marinade
                </li>
                <li>
                  Put the steaks into the fridge in a suitable container with
                  any remaining marinade for as long as you can, 24hrs is ideal
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>marinate the steaks overnight</figcaption>
                <img
                  src="/images/peri-peri-pork-steaks/650x366/pork-steaks-marinating.webp"
                  alt="pork steaks marinating"
                  title="pork steaks marinating for peri peri pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  Remove your steaks from the fridge & allow to come to room
                  temperature, about 20 minutes or so on a warm day
                </li>
                <li>Spray one side of the steaks with oil</li>
                <li>
                  Pre-heat your health grill & add your steaks (oiled side down)
                  then spray the other side with oil & close the grill for 2
                  minutes then turn the steaks over and close for another 2
                  minutes. Under a standard grill they will take twice as long
                </li>
              </ol>

              <div class="spacer"></div>
              <h2>Serving suggestion:</h2>
              <div class="card_image_round">
                <figcaption>peri peri pork steak...</figcaption>
                <img
                  src="/images/peri-peri-pork-steaks/650x366/peri-peri-pork-steak-dinner.webp"
                  alt="peri peri pork steak dinner"
                  title="peri peri pork steaks served with side salad & jacket potato with cheese"
                />
                <figcaption>...with salad, jacket potato & cheese</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Peri Peri pork Steaks</strong> with Perinaise sauce on
                the side, a salad and a little vinaigrette dressing with a
                jacket potato and cheese is going to make one very simple and
                deliciously scrummy dinner. Everyone's gonna love this :-)
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
                    href="https://www.nuttyskitchen.co.uk/mediterranean-style-vegetables-with-pork-steaks.html"
                    >mediterranean style vegetables with pork steaks
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/spicy-masala-chicken.html"
                    class="underline"
                    >spicy masala chicken
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