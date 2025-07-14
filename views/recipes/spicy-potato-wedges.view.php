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
          Here's a side with a bit of a kick:
          <strong>Spicy Potato Wedges</strong>. For when you fancy something a
          little different from fries or chips. They are so simple to make that
          you may actually stop buying frozen bags of wedges! It takes 20
          minutes in total, no peeling, no faff, just a done dinner side!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Spicy Potato Wedges</strong>.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/spicy-potato-wedges/650x366/spicy-potato-wedges.webp"
            alt="spicy potato wedges"
            title="spicy potato wedges side dish"
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
              <p>Here's whaat you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <li>2 potatoes</li>
                <li>spray oil</li>
                <li>salt & pepper</li>
                <li>1/2 tsp smoked paprika</li>
                <li>1/2 tsp Kashmiri chilli powder</li>
                <li>1/4 tsp turmeric</li>
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
                No faff, no fuss, just a really simple side dish to make an
                accompaniment to many a meal of you choosing.
              </p>
              <p>
                If you require more servings, just allow 3 minutes more in the
                microwave per potato that you add, and increase the spice mix to
                taste.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  prick the potatoes in several places & season with salt &
                  pepper
                </li>
                <li>place onto a dish & microwave for 3 mins</li>
                <li>
                  turn over & repeat for 3 minutes, we are after nearly cooked
                  Potato
                </li>
                <li>slice into wedges & spray with oil again</li>
                <li>
                  mix all the spices together and a little more salt & pepper
                </li>
                <li>place the spice mix into a sieve</li>
                <li>sprinkle over the wedges, shake, then repeat</li>
                <li>
                  bake for 180c 10 to 15 minutes in a an airfryer or 20 in a
                  standard oven
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>spicy potato wedges</figcaption>
                <img
                  src="/images/spicy-potato-wedges/650x366/spicy-potato-wedges.webp"
                  alt="spicy potato wedges"
                  title="spicy potato wedges side dish"
                />
                <figcaption>...a side with a kick!</figcaption>
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
                    href="https://www.nuttyskitchen.co.uk/spicy-baked-beans-and-peppers.html"
                    >spicy baked beans & peppers
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chickenmushroompie.html"
                    class="underline"
                    >chicken & mushroom pie
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