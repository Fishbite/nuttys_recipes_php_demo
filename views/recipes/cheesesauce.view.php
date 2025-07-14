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
          My cheese sauce is quick and easy to make and can be used in a variety
          of recipes, so bookmark this page for a quick reference in the future!
        </p>
        <ul>
          <li>Lasagne</li>
          <li>Pasta Bakes</li>
          <li>Cauliflower Cheese</li>
        </ul>

        <div class="spacer"></div>
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
            src="/images/cheesesauce/650x366/cheese-sauce-in-pan.jpg"
            alt="cheese sauce in a pan"
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
                <li>50g butter</li>
                <li>50g flour</li>
                <li>Pinch of Salt & black pepper</li>
                <li>1 tsp Dijon mustard</li>
                <li>1 tsp English mustard powder</li>
                <li>1 tsp onion powder</li>
                <li>1 OXO vegetable stock cube</li>
                <li>150g extra mature (No. 6 strength) cheddar cheese</li>
                <li>1 pint of whole or semi-skimmed milk</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                This cheese sauce can be used for loads of dishes, just add
                extra milk to make it thinner
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Melt the butter in a small - med pan</li>
                <li>Add all the flour</li>
                <li>Add the onion powder with the English & Dijon mustard</li>
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

              <ol start="5">
                <li>Add a little milk at a time while whisking</li>
              </ol>

              <div class="spacer"></div>
              <p>
                Don't worry about the lumps, keep stirring and whisking as you
                add the milk, and they will melt into the sauce
              </p>

              <ol start="6">
                <li>Stir continuously to form a thick white sauce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>white sauce</figcaption>
                <img
                  src="/images/cheesesauce/650x366/white-sauce-in-pan.jpg"
                  alt="white sauce in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>When thickened, it should coat the back of a spoon</li>
                <li>Turn the heat off</li>
                <li>Add the cheese</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>grated cheese</figcaption>
                <img
                  src="/images/cheesesauce/650x366/grated-cheese-02.jpg"
                  alt="grated cheese"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>Stir until the cheese has melted</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>cheese sauce</figcaption>
                <img
                  src="/images/cheesesauce/650x366/cheese-sauce-in-pan.jpg"
                  alt="cheese sauce in pan"
                />
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
                    href="https://www.nuttyskitchen.co.uk/whitesauce.html"
                    >white sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/onionsauce.html"
                    class="underline"
                    >onion sauce
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