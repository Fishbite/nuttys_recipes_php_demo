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
          This will keep in a cake tin, or air-tight container, for a week. Try
          not to place it in a fridge as it'll spoil the texture of the cake.
          Easy and scrummy snack sized cakes that will be perfect after a Sunday
          roast or popped onto a side plate with a lovely cup of tea.
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
            src="/images/gingerbread/650x366/cake-finished.jpg"
            alt="cake finished"
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
              <p>Here's what you need :¬)</p>

              <h2>serves 16 pieces</h2>

              <!-- Ingredients List Goes Below Here!!! -->

              <h2>Dry ingredients</h2>
              <ul>
                <li>300g plain Flour</li>
                <li>125g light brown sugar</li>
                <li>2 tsp ginger powder</li>
                <li>2 tsp freshly ground cinnamon</li>
                <li>1 tsp Bicarb of soda or baking powder</li>
              </ul>

              <div class="spacer"></div>

              <h2>Wet ingredients</h2>

              <ul>
                <li>2 beaten eggs</li>
                <li>175g black treacle</li>
                <li>175g golden syrup</li>
                <li>125g butter</li>
                <li>150ml cold water</li>
              </ul>

              <div class="spacer"></div>

              <h2>to finish</h2>

              <ul>
                <li>1/2 tsp icing sugar</li>
                <li>jar of preserved ginger to decorate / top with</li>
              </ul>

              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                I'm using a food mixer to make this sticky ginger cake, but it
                can be easily be done by hand. You just need to add the wet
                ingredients gradually and finish with a whisk.
              </p>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Set the oven to 180c</li>
                <li>Grease and line a square tin with baking paper</li>
                <li>Put all the dry ingredients into a food mixer</li>
                <p><i> or large mixing bowl and combine</i></p>
                <li>Put the wet ingredients in a small pan</li>
                <li>Warm gently untill it's a liquid</li>
                <li>Add the cold water to cool it</li>
                <li>Put the eggs into the dry mixture</li>
                <li>Tip in the wet ingredients</li>
                <li>Blend the mixture until completely combined</li>
                <li>Pour the cake mix into the tin</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cake mix ready for oven</figcaption>
                <img
                  src="/images/gingerbread/650x366/cake-mix-in-tin.jpg"
                  alt="ckae mix in tin"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>put into the oven immediately for 40 to 45mins</li>
                <li>Check the center is cooked*</li>
              </ol>

              <div class="spacer"></div>
              <p>
                <i>*prick with a small skewer it should come out clean</i>
              </p>

              <ol start="13">
                <li>Transfere to a cooling rack</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>allow to cool</figcaption>
                <img
                  src="/images/gingerbread/650x366/cake-cooked.jpg"
                  alt="cake cooked"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>Once cool, cut into squares</li>
                <li>Dust with icing sugar</li>
                <li>Put a dab of preserved ginger on each square and serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>allow to cool</figcaption>
                <img
                  src="/images/gingerbread/650x366/cake-finished.jpg"
                  alt="cake finished"
                />
              </div>

              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>serve with a cup of tea</figcaption>
                <img
                  src="/images/gingerbread/650x366/cake-served.jpg"
                  alt="cake served"
                />
              </div>
              <div class="spacer"></div>
              <p>
                Store in an air-tight container in a dark cupboard for up to one
                week
              </p>
              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/chocolate-cake.html"
                    >chocolate cake
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/fruit-cake.html"
                    class="underline"
                    >fruit cake
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