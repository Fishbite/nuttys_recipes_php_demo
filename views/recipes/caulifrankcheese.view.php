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
          This dish could easily be totally vegetarian just use vegetarian
          frankfurters (yummy) Serve with a warm crusty baguette with lashings
          of butter and a dash of Worcestershire sauce if it takes your fancy. I
          buy bake at home bagettes as life is too short to make one :¬) If you
          like this dish please try Cauliflower Cheese & Beans Bake.
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
            src="/images/caulifrankcheese/650x366/meal-cooked-01.jpg"
            alt="meal meal-cooked-01"
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

              <h2>serves 4</h2>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <h2>cheese sauce</h2>
                <li>50g butter</li>
                <li>50g flour</li>
                <li>Pinch of salt & black pepper</li>
                <li>1 tsp Dijon mustard</li>
                <li>1 tsp English mustard powder</li>
                <li>1 tsp onion powder</li>
                <li>1 OXO&trade; vegetable stock cube</li>
                <li>150g extra strong (6) cheddar cheese</li>
                <li>1 pint of whole milk</li>

                <div class="spacer"></div>
                <h2>roasting dish</h2>
                <li>1 large cauliflower broken into florets</li>
                <li>1 Tblsp salt</li>
                <li>Fresh cauliflower leaves</li>
                <li>Pack of 10 frankfurters</li>
                <li>3 small cherry tomatoes cut into half</li>
                <li>1 tin baked beans</li>
                <li>1 slice of bread crumbed</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                To prep the cauli', cut the florets in half or quarter to make
                sure they cook evenly. The stalks of the florets and leaves are
                quite fiberous and therefore, don't cook quite as easily as the
                florets themselves. You can also run a sharp knife down the
                middle of the stalks on the leaves if you wish. Once the cauli'
                is done, we can move onto the cheese sauce before finally
                building the final dish.
              </p>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <h2>prep the cauli</h2>
                <li>Cut the cauli' florets into even size pieces</li>
                <li>Place into a large pan of salted (1 Tblsp) water</li>
                <li>Bring to the boil & simmer rapidly for 5 mins</li>
                <li>Add the cauliflower leaves for a minute or so</li>
                <li>Drain & immerse in ice-cold water</li>
                <li>Drain well when stone-cold</li>

                <div class="spacer"></div>
                <h2>make the cheese sauce</h2>
                <li>Melt the butter in a pan on low to med heat</li>
                <li>Add stock cube, flour, mustard & onion powder</li>
                <li>Stir to form a roux</li>
                <li>Add a little milk slowly while whisking</li>
                <li>Add more milk gradually while whisking</li>
                <li>Whisk continuously as it thickens*</li>
              </ol>

              <div class="spacer"></div>
              <p>
                <i
                  >*you should end up with a thick smooth sauce that clings
                  nicely to the back a spoon</i
                >
              </p>

              <ol start="13">
                <li>Turn off the heat and add 2/3rds of the cheese</li>
                <li>Mix the rest of the cheese with the breadcrumbs</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cheese & breadcrumbs</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/cheese-breadcrumb-topping.jpg"
                  alt="cheese breadcrumb topping"
                />
              </div>
              <div class="spacer"></div>

              <h2>prep the roasting dish</h2>
              <ol>
                <li>Tip the beans into the baking dish</li>
                <li>Place the frankfurters on top</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>beans & frankfurters</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/beans-frankfurters-02.jpg"
                  alt="beans frankfurters"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>Arrange the cauli' on the frankfurters</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cooked cauliflower</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/cauli-added.jpg"
                  alt="cauli added"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>Pour the cheese sauce over the top</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cheese sauce</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/cheese-sauce-cauli.jpg"
                  alt="cheese sauce cauli"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>Place the cauli leaves on top</li>
                <li>Sprinkle the breadcrumbs & cheese on top</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cheese & breadcrumbs</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/cheese-topped-cauli.jpg"
                  alt="cheese topped cauli"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Top with the cherry tomato halves</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/meal-oven-ready-01.jpg"
                  alt="meal oven ready"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>Give the tomatoes a twist of salt & pepper</li>
                <li>Roast in the oven at 180c for about 45 mins</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>ready to serve</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/meal-cooked-01.jpg"
                  alt="meal cooked"
                />
              </div>
              <div class="spacer"></div>

              <p>
                <b>Cooking time & temp:</b> Roast in the oven @ 180c for about
                45 minutes, or until the top is nicely toasted and the center
                hot. A sharp knife should easily go through the cauliflower stem
                with ease. The reason the timing can not be exact is every
                cauliflower is different, some have a more open florets and no
                two are exact in size / weight
              </p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>...and plated!</figcaption>
                <img
                  src="/images/caulifrankcheese/650x366/dinner-plated.jpg"
                  alt="cheese breadcrumb topping"
                />
              </div>
              <p>
                a dash of Worcestershire sauce gives it a bit of a kick if you
                like :¬P
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
                    href="https://www.nuttyskitchen.co.uk/sausagepepperpie.html"
                    >sausage & pepper mash pie
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/caulicheese.html"
                    class="underline"
                    >cauliflower cheeese bake with beans
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