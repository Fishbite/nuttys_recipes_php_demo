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
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          A sauce is what makes many a dish and this is my onion sauce, the
          perfect partner to roast chicken that transforms your Sunday roast to
          the next level. I hope you enjoy this!
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide with
          pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/onionsauce/650x366/onion-sauce-pan-01.webp"
            alt="onion sauce"
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
              <h2>serves 2 - 4</h2>
              <ul>
                <li>Half a lrg white onion very finely chopped</li>
                <li>Dash of oil</li>
                <li>50g butter</li>
                <li>50g flour</li>
                <li>Pinch of salt & black pepper</li>
                <li>1 tsp Dijon mustard</li>
                <li>1 tsp English mustard powder</li>
                <li>1 tsp onion powder</li>
                <li>1 OXO&trade; vegetable stock cube</li>
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
                eliminate the taste of raw flour
              </p>
              <p>
                <b>Don't</b> allow the roux or the sauce to catch on the bottom
                of the pan or it will affect the flavour of the final sauce
              </p>
              <p>
                Onions! It takes an eternity to cook them, or it seems that way
                when you are in a bit of a rush. However, I've found that I can
                just pop them in a microwave-proof dish with a little oil and a
                pinch of salt & pepper, then zap them for a minute and they're
                perfect to go into your sauce. Yeah! Fantastic!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Pop the onions into a lidded pot</li>
                <li>Add a dash of oil</li>
                <li>A pinch of salt and pepper</li>
                <li>Pop the lid on & give them a shake</li>
                <li>Microwave on full power for 1 min</li>
                <li>Take them out & give them another a shake</li>
                <li>Pop them back in for another minute</li>
                <p><i>that's it! they're ready!</i></p>
                <li>Melt the butter in a small - med pan</li>
                <li>Add stock cube, flour, mustard & onion powder</li>
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

              <ol start="11">
                <li>Add a little milk at a time while whisking</li>
              </ol>

              <div class="spacer"></div>
              <p>
                Don't worry about the lumps, keep stirring and whisking as you
                add the milk and they will melt into the sauce
              </p>

              <ol start="12">
                <li>Stir continuously to form a thick white sauce</li>
                <li>Add your softened onions</li>
                <li>Taste it!*</li>
              </ol>

              <div class="spacer"></div>

              <p>
                <i
                  >*If the onions are a little sweet, add another pinch of salt
                  until it's perfect. You should eventually have a smooth clingy
                  sauce that coats a spoon thickly.</i
                >
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <img
                  src="/images/onionsauce/650x366/onion-sauce-pan-01.webp"
                  alt="onion sauce pan"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>onion sauce...</figcaption>
                <img
                  src="/images/onionsauce/650x366/onion-sauce-jug-02.webp"
                  alt="onion sauce jug"
                />
              </div>

              <div class="spacer"></div>

              <figcaption>...perfect with roast chicken dinner</figcaption>

              <div class="spacer"></div>
              <div class="card_image_round">
                <img
                  src="/images/onionsauce/650x366/chicken-dinner-plated.webp"
                  alt="chicken dinner plated"
                />
                <figcaption>...a perfect match</figcaption>
              </div>
              <!-- Method List Goes Above Here!!! -->
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
                    href="https://www.nuttyskitchen.co.uk/parsley-sauce"
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