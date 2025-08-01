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
          Now as you know we love a pie and pastry here @ Nutty's, savory or
          sweet, it's a lovely thing, so, I thought I would share my
          <strong>Cheese & Onion Quiche</strong> recipe with you. I made a huge
          one, so we'd have a dinner, snacks & some left over to take out to the
          cricket ;-). A home made quiche is nothing like those plastic, cold
          and tasteless items that nowadays seem to be £3+. So, why not give it
          a go, even if you buy shortcrust pastry so be it. You will still get a
          flavour some dish. I have included the pastry crust here if you want
          to try making it, if not just skip down ;-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Cheese & Onion Quiche</strong>, along with some
          pictures for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/cheese-and-onion-quiche/650x366/cheese-and-onion-quiche-cooked.webp"
            alt="cheese and onion quiche cooked"
            title="cheese and onion quiche cooked"
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
              <h2>serves 4 to 6</h2>

              <h2>for the pastry</h2>
              <ul>
                <li>185g plain flour</li>
                <li>100g salted butter diced</li>
                <li>3 Tbls cold water</li>
              </ul>

              <div class="spacer"></div>

              <h2>for the egg mixture</h2>

              <ul>
                <li>4 eggs whisked</li>
                <li>150ml thick double cream</li>
                <li>150ml sour cream</li>
                <li>pinch salt & pepper</li>
              </ul>
              <div class="spacer"></div>

              <h2>for the filling</h2>

              <ul>
                <li>dash oil</li>
                <li>a knob of butter</li>
                <li>1 large onion finely diced</li>
                <li>1 or 2 cloves garlic</li>
                <li>150g No6 extra strong grated cheddar</li>
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
                I've included the method for the pastry, if you are going to
                make your own, otherwise, if you are using the great time saving
                <em>'all butter shortcrust'</em> from the shop, roll it out and
                line your flan dish with it, then follow the rest of the method.
              </p>
              <p>
                You'll need a 23cm flan dish, or alternatively, split the pastry
                and mixture out into two smaller dishes.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the pastry</h2>

              <ol>
                <li>blend or rub the flour together until fine bread crumbs</li>
                <li>gradually add water until the pastry forms a dough ball</li>
                <li>flatten to a disc shape</li>
                <li>
                  wrap tightly on cling film & refridgerate for 30 minutes
                </li>
                <li>once chilled, roll to line a 23cm flan dish</li>
                <li>
                  push well into the edges & down into the base
                  <strong><em>DON'T</em></strong> trim excess!
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>push the pastry into the dish</figcaption>
                <img
                  src="/images/quiche-lorraine/650x366/raw-pastry-flan-base.webp"
                  alt="raw pastry flan base"
                  title="raw pastry flan base for the Ultimate Quiche lorraine"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>prick the base all over with a fork</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>prick the base</figcaption>
                <img
                  src="/images/quiche-lorraine/650x366/raw-pastry-flan-base-pricked.webp"
                  alt="raw pastry flan base pricked"
                  title="raw pastry flan base pricked for the Ultimate Quiche lorraine"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>cut some grease-proof paper to cover the base & sides</li>
                <li>pour in baking beans or rice</li>
                <li>place into the fridge to chill</li>
              </ol>

              <div class="spacer"></div>

              <h2>Method for the egg mixture</h2>

              <ol>
                <li>whisk the eggs, add the creams & whisk again</li>
                <li>season & set into the fridge to chill</li>
              </ol>

              <div class="spacer"></div>

              <h2>Method for the filling</h2>

              <ol>
                <li>*heat a heavy based pan</li>
                <li>once hot, add oil & a little butter</li>
                <li>
                  add in your onions stir only occassionally or they will
                  release water!
                </li>
                <li>
                  add in your garlic, stir until the substance dries out then
                  set aside
                </li>
              </ol>

              <div class="spacer"></div>
              <p>
                *alternatively microwave oil, butter & the fine diced onions for
                2 to 3 minutes
              </p>

              <div class="card_image">
                <figcaption>cheese onion & egg mix</figcaption>
                <img
                  src="/images/cheese-and-onion-quiche/650x366/cheese-onion-and-egg-mix.webp"
                  alt="cheese onion & egg mix"
                  title="cheese onion & egg mix for cheese and onion quiche"
                />
              </div>
              <div class="spacer"></div>

              <h2>baking method</h2>

              <ol>
                <li>preheat oven to 180c</li>
                <li>
                  once hot, place your covered pastry base into the middle for
                  10 minutes
                </li>
                <li>
                  remove the beans / rice & paper & return to the oven for 10
                  more minutes
                </li>
                <li>as that finishes cooking, re-whisk your egg mixture</li>
                <li>
                  add most of your cheese & all your onion mix to the eggs
                </li>
                <li>
                  pastry should be done, so tip your egg ect. into the pastry
                  case
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>quiche oven ready</figcaption>
                <img
                  src="/images/cheese-and-onion-quiche/650x366/quiche-oven-ready.webp"
                  alt="quiche oven ready"
                  title="cheese onion quiche oven ready"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  top with a little set aside cheese & bake for 30 to 35 minutes
                </li>
                <li>
                  once cooked it should look golden all over but not set hard in
                  the center
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cheese and onion quiche</figcaption>
                <img
                  src="/images/cheese-and-onion-quiche/650x366/cheese-and-onion-quiche-cooked.webp"
                  alt="cheese and onion quiche cooked"
                  title="cheese and onion quiche cooked"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>leave to cool for at least 10, preferably 30 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>
                  cheese and onion quiche &mdash; my bit :-)
                </figcaption>
                <img
                  src="/images/cheese-and-onion-quiche/650x366/cheese-and-onion-quiche-sliced-02.webp"
                  alt="cheese and onion quiche sliced"
                  title="cheese and onion quiche sliced in flan case"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/cheese-and-onion-quiche/650x366/cheese-and-onion-quiche-and-salad-02.webp"
                  alt="cheese and onion quiche and salad"
                  title="cheese and onion quiche served with salad"
                />
                <figcaption>a little salad on the side</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Cheese & Onion Quiche</strong> a Plate, a fork & a smile
                ;-) You could of course add salads of your choice.
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
                    href="https://www.nuttyskitchen.co.uk/quiche-lorraine.html"
                    >quiche lorraine
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/luxury-chicken-pie.html"
                    class="underline"
                    >luxury chicken pie
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