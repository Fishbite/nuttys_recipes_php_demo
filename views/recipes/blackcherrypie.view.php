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
          Ooooh! This is going to be a really quick one! I only tend to make
          something like this when I have a little bit of pastry left over
          and... because I've just made my chicken & mushroom pie and... the
          oven is still hot, this is the perfect time! It's a really scrummy
          tart that only needs a tin of black cherries to go with the left over
          pastry. It's not too sweet and just needs a dollop of cream or ice
          cream to melt over the top, truely delicious and really quick :¬P
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
            src="/images/blackcherrypie/650x366/cherry-pie-cooked.jpg"
            alt="cherry pie cooked"
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
              <p>Here's what you need</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>serves 4</h2>
              <ul>
                <li>A tin of black cherries</li>
                <li>Left over pastry</li>
                <li>Pinch of sugar</li>
                <li>1 beaten egg for glue & glaze</li>
                <li>A whole lotta luv!</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                My heart sinks at the thought of throwing anything away so I'll
                just grab a little oven proof dish (small cake tin etc.) and a
                tin of fruit, black cherries, in this case, which make a
                dazzlingly beautiful tart that is good to finish off many a
                meal. Just make sure the cherries have no stones in them!
              </p>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Roll your pastry into a disc about 3 - 4mm thick</li>
                <li>Grease your dish with butter</li>
                <li>Lay the pastry onto the dish</li>
                <li>Ease the pastry into the edge of the dish</li>
                <li>Prick the bottom all over with a fork</li>
                <li>Sprinkle a pinch of sugar over the base</li>
                <li>Line with baking paper</li>
                <li>Fill with uncooked rice or baking beans</li>
                <li>Pop in the oven for 10 mins</li>
                <li>Take out of the oven, remove paper & rice</li>
                <li>Pop back in the oven for another 10 mins</li>
                <li>Meanwhile, make some strips of pastry to make a lattice</li>
                <li>Take the base out of the oven</li>
                <li>Trim the edge of the pastry with a sharp knife</li>
                <li>Tip in the black cherries, juice & all</li>
                <li>Brush some egg wash around the edge of the base</li>
                <li>Decorate the top with strips of pastry</li>
                <li>Brush some egg over the lattice work</li>
                <li>Sprinkle a pinch of sugar over the top</li>
                <li>Pop back in the oven for about 30 mins*</li>
              </ol>
              <p>
                <i>*the cherries should be bubbling & pastry be golden brown</i>
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>black cherry pie</figcaption>
                <img
                  src="/images/blackcherrypie/650x366/cherry-pie-cooked.jpg"
                  alt="cherry pie cooked"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>black cherry pie</figcaption>
                <img
                  src="/images/blackcherrypie/650x366/cherry-pie-cream-served.jpg"
                  alt="cherry pie cream served"
                />
              </div>
              <div class="spacer"></div>
              <p>Serve with a dollop of double cream!</p>
              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/damson-and-soured-cream-tart.html"
                    >damson & soured cream tart
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/blackberry-and-soured-cream-flan.html"
                    class="underline"
                    >blackberry & soured cream flan
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