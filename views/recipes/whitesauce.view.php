<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <div class="title">
        <header class="title">
          <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

          <p>
            White sauce, or bechamel, as it is known in chef's kitchens, is the
            base of many sauces and dishes. You can add ingredients such as
            cheese, onion, parsley, watercress along with some appropriate
            seasoning to make that must have accompaniment for your meals.
            Simple, quick and easy to make, this is a must to perfect:
          </p>
          <ul>
            <li>Cheese Sauce</li>
            <li>Onion Sauce</li>
            <li>Parsley Sauce</li>
            <li>Watercress Sauce</li>
          </ul>
          <div class="spacer"></div>
          <p>
            Click the <b>Method</b> tab below to see a step by step guide with
            pictures.
          </p>
        </header>
      </div>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/caulifrankcheese/650x366/white-sauce.jpg"
            alt="white sauce"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button class="tab-btn active" data-id="ingredients">
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

          <!-- about content -->
          <article class="about-content">
            <!-- single item -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :-)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>serves 4</h2>
              <ul>
                <li>50g butter</li>
                <li>50g flour</li>
                <li>1 pint of whole or semi-skimmed milk</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>Some Do's and Don'ts:</p>
              <p>
                <b>Don't</b> cook the roux for too long, as it can affect the
                flour's ability to thicken the sauce.
              </p>
              <p><b>Do</b> cook the roux for long enough to cook the flour</p>
              <p>
                <b>Do</b> allow the sauce to simmer for a couple of minutes to
                cook out the taste of raw flour
              </p>
              <p>
                <b>Don't</b> allow the roux or the sauce to catch on the bottom
                of the pan or it will affect the flavour of the final sauce
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Melt the butter in a small - med pan</li>
                <li>Add all the flour</li>
                <li>Stir with a whisk or spoon to make a roux</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>make the roux</figcaption>
                <img
                  src="/images/cheesesauce/650x366/roux-in-pan.jpg"
                  alt="roux in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>Add a little milk at a time while whisking</li>
              </ol>

              <div class="spacer"></div>
              <p>
                Don't worry about the lumps, keep stirring and whisking as you
                add the milk and they will melt into the sauce
              </p>

              <ol start="5">
                <li>Stir continuously to form a thick white sauce</li>

                <li>When thickened, it should coat the back of a spoon</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>white sauce</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/white-sauce.jpg"
                  alt="white sauce"
                />
              </div>
              <div class="spacer"></div>
              <!-- Method List Goes Above Here!!! -->
              <p>
                You can now add whatever ingredients you like to make the
                perfect sauce for your meal
              </p>
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/cheesesauce.html"
                    >cheese sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/parsley-sauce.html"
                    class="underline"
                    >parsley sauce
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