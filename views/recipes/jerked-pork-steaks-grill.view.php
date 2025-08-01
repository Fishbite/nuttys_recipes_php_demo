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
          My grilled <strong>Jerked Pork Steaks</strong> could not be simpler,
          if you have ever made our Jerk curries this will be a breeze for you,
          if not, why not give this a try then move onto the curries. Create a
          basic rub, put it onto your meat overnight & guess what? All you have
          to do is spray a little oil onto the pork steaks and grill, simples
          ;-) If you own a health grill even better it halves the cooking time!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Jerked Pork Steaks</strong> along with some pictures
          as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/jerked-pork-steaks/650x366/jerked-pork-steak-plated-01.webp"
            alt="jerked pork steak plated"
            title="jerked pork steak served with potato salad & salad"
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
              <h2>dry ingredients</h2>
              <ul>
                <li>4 cloves</li>
                <li>1/2 stick cinnamon</li>
                <li>1/2 tsp allspice (Pimento)</li>
                <li>1 tsp nutmeg</li>
                <li>1 tsp salt</li>
                <li>1 tsp black pepper corns</li>
              </ul>

              <div class="spacer"></div>

              <h2>wet ingredients</h2>
              <ul>
                <li>2 tsp thyme leaves</li>
                <li>1/2 fresh lime or lemon juiced</li>
                <li>1 scotch bonnet chilli finely chopped</li>
                <li>3 cloves garlic finely chopped</li>
                <li>1 inch piece of fresh ginger finely chopped</li>
                <li>3 spring onions finely chopped</li>
                <li>dash of Worcestershire sauce</li>
              </ul>

              <div class="spacer"></div>

              <h2>meat</h2>
              <ul>
                <li>4 thick pork leg steaks</li>
                <li>oil spray</li>
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
                First of all, make the <strong>Jerked Pork</strong> marinade and
                coat the pork steaks well before setting them in the fridge
                overnight &mdash; or as long as possible.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>main ingredients</figcaption>
                <img
                  src="/images/jerked-pork-steaks/650x366/ingredients-01.webp"
                  alt="ingredients"
                  title="main ingredients for jerked pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Grind together all your dry ingredients to a powder</li>
                <li>Blend or bash your wet ingredients to a paste</li>
                <li>Combine everything together*</li>
              </ol>

              <div class="spacer"></div>

              <p>*I put everything into a blender and blitz</p>

              <div class="card_image">
                <figcaption>jerk marinade</figcaption>
                <img
                  src="/images/jerked-pork-steaks/650x366/jerk-marinade-01.webp"
                  alt="jerk marinade"
                  title="marinade for jerked pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>Get some gloves & rub the spice paste into your meat</li>
              </ol>

              <ol start="5">
                <li>
                  Set into the fridge in a sealed container overnight (if
                  possible) & turn occassionally
                </li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>pork steaks marinating</figcaption>
                <img
                  src="/images/jerked-pork-steaks/650x366/pork-steaks-marinating-01.webp"
                  alt="pork steaks marinating"
                  title="pork steaks marinating for jerked pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  Remove the spiced meat from the fridge 30 minutes prior to
                  cooking
                </li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>remove from fridge</figcaption>
                <img
                  src="/images/jerked-pork-steaks/650x366/raw-jerked-pork-steaks-on-a-board.webp"
                  alt="raw jerked pork steaks on a board"
                  title="pork steaks marinating for jerked pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Preheat your grill</li>
                <li>
                  Spray one side of the spiced meat with cooking oil spray
                </li>
                <li>Place onto the grill & spray the other side</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>place on grill</figcaption>
                <img
                  src="/images/jerked-pork-steaks/650x366/jerked-pork-steaks-grilling-01.webp"
                  alt="jerked pork steaks grilling"
                  title="jerked pork steaks on a grill"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>Close the lid & cook for approximately 4 minutes</li>
              </ol>

              <div class="spacer"></div>

              <p>
                To check for doneness, make sure the colour of the pork is white
                inside the thickest part. If still pink, put them back on the
                grill for a minute and check again.
              </p>
              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/jerked-pork-steaks/650x366/jerked-pork-steak-plated-01.webp"
                  alt="jerked pork steak plated"
                  title="jerked pork steak with potato salad & salad"
                />
              </div>
              <div class="spacer"></div>

              <p>
                A delicious slice of spice in the form of my
                <strong>Jerked Pork Steaks</strong> served with lightly buttered
                new potatoes and a sprinkle of fresh chives with a side of salad
                with lettuce, cucumber, red pepper & tomato topped with
                sweetcorn.
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
                    href="https://www.nuttyskitchen.co.uk/jerked-chicken-escalope-grill.html"
                    >jerked chicken escalope
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/jamaican-pumpkin-soup.html"
                    class="underline"
                    >jamaican pumpkin soup
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