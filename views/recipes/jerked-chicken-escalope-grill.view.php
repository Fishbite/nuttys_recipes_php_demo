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
          This <strong>Jerked Chicken Escalope Grill</strong> recipe could not
          be simpler. If you have ever made our Jerk curries, this will be a
          breeze for you, if not, why not give this a try, then move onto the
          curries. Create a basic rub, put it onto your meat overnight & guess
          what, all you have to do is spray a little oil & grill, simples ;-) If
          you own a health grill, even better, it halves the time.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Jerked Chicken Escalope Grill</strong> along with some
          pictures for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/jerked-chicken-escalope-grill/650x366/jerk-chicken-escalope-plated-03.webp"
            alt="jerk chicken escalope grill plated"
            title="jerked chicken escalope grill with salad & new potatoes"
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
              <ul>
                <li>4 cloves</li>
                <li>1/2 stick Cinnamon</li>
                <li>1/2 tsp Allspice (Pimento)</li>
                <li>1 tsp Nutmeg</li>
                <li>1 tsp Salt</li>
                <li>1 tsp black pepper corns</li>
                <li>2 tsp Thyme leaves</li>
                <li>1/2 fresh Lime or lemon juiced</li>
                <li>1 scotch bonnet chilli finely chopped</li>
                <li>3 cloves garlic finely chopped</li>
                <li>1 inch piece of fresh ginger finely chopped</li>
                <li>3 spring onions finely chopped</li>
                <li>dash of worcester sauce</li>
                <li>2 thick Chicken breasts</li>
                <li>oil spray</li>
              </ul>

              <div class="spacer"></div>
              <p>
                If you require 4 servings double the spice paste quantities
                above
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
                To make the spice mix, I grind my dry ingredients, bash my wet
                ingredients into a rough paste then pop them into a food mixer
                for a quick blitz, then I use the pestal & mortar to grind the
                ingredients to a fine paste.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>grind together all your dry ingredients to a powder</li>
                <li>blend then bash your wet ingredients to a paste</li>
                <li>add your spices & combine well</li>
              </ol>

              <div class="spacer"></div>

              <p>
                I put everything into a blender & blitz, then use a pestle &
                mortar
              </p>

              <ol start="4">
                <li>
                  take the chicken breasts & bash with a rolling pin until you
                  have an even thickness
                </li>
                <li>get some gloves, rub the spice paste into your meat</li>
                <li>
                  set into a sealed container overnight turning occassionally
                </li>
                <li>
                  remove the spiced meat from the fridge 5 minutes prior to
                  cooking
                </li>
                <li>pre-heat your grill</li>
                <li>
                  spray one side of the spiced meat with cooking oil spray
                </li>
                <li>place onto the grill spray the other side</li>
                <li>close the lid & cook for approximately 7 minutes</li>
                <li>
                  under a standard oven grill they will take 14 minutes & need
                  turning half way through
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>jerked chicken escalope</figcaption>
                <img
                  src="/images/jerked-chicken-escalope-grill/650x366/chicken-breats-on-grill-01.webp"
                  alt="chicken breasts on grill"
                  title="jerked chicken escalope cooked on a health grill"
                />
                <figcaption>...cooked on the grill</figcaption>
              </div>
              <div class="spacer"></div>
              <h2>Serving suggestion</h2>

              <p>
                for <strong>Jerked Chicken Escalope Grill</strong> Fresh new
                potato & salads of your choice
              </p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>jerked chicken escalope</figcaption>
                <img
                  src="/images/jerked-chicken-escalope-grill/650x366/jerk-chicken-escalope-plated-01.webp"
                  alt="jerk chicken escalope plated"
                  title="jerked chicken escalope with salad & new potatoes"
                />
                <figcaption>...with salad & new potatoes</figcaption>
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
                    href="https://www.nuttyskitchen.co.uk/macaroni-pie.html"
                    >macaroni pie
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/jerked-pork-steaks-grill.html"
                    class="underline"
                    >jerked pork steaks grill
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