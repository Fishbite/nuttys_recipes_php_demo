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
          Now, as you know, we love a pie here @ Nutty's! Savoury or sweet, it's
          a lovely thing, so I thought I would share the
          <strong>Ultimate Quiche Lorraine</strong> recipe. I made a huge one,
          so we'd have dinner, snacks & some left over to take out to the
          cricket ;-). A homemade Quiche is nothing like those plastic, cold
          tasteless items that nowadays seems to be £3+. So why not give it a
          go, even if you buy shortcrust pastry &mdash; so be it! You will still
          get a delightful, flavoursome dish. I have included the pastry crust
          recipe here, if you want to try making it, if not just skip down to
          the filling ;-).
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Ultimate Quiche lorraine</strong>, along with some
          pictures for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/quiche-lorraine/650x366/quiche-lorraine-cooked.webp"
            alt="quiche lorraine cooked"
            title="the ultimate quiche lorraine"
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
              <p>
                A 23cm flan dish, or alternatively, split the pastry and mixture
                out into two smaller dishes.
              </p>

              <h2>Serves 8</h2>
              <!-- Ingredients List Goes Below Here!!! -->
              <h2>for the pastry</h2>

              <ul>
                <li>185g Plain flour</li>
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
                <li>200g smoked back or streaky bacon cut into strips</li>
                <li>1/2 medium onion finely diced</li>
                <li>1 or 2 cloves garlic</li>
                <li>125g No6 extra strong grated cheddar</li>
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

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>pastry & filling ingredients</figcaption>
                <img
                  src="/images/quiche-lorraine/650x366/ingredients-02.webp"
                  alt="ingredients 02"
                  title="ingredients for the Ultimate Quiche lorraine"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  blend or rub together the flour & butter until you have fine
                  bread crumbs
                </li>
                <li>
                  gradually add water while mixing until the pastry forms a
                  dough ball
                </li>
                <li>flatten to a disc shape, see above</li>
                <li>
                  wrap tightly in cling film & refridgerate for 30 minutes
                </li>
                <li>
                  once chilled, roll into a circle to line a 23cm flan dish
                </li>
                <li>
                  push well into the edges & down into the base, do not trim the
                  excess!
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
                <li>cut some greased proof paper to cover the base & sides</li>
                <li>pour in baking beans or rice</li>
                <li>place into the fridge to chill</li>
              </ol>

              <div class="spacer"></div>

              <h4>Method for the egg mixture</h4>

              <ol>
                <li>Whisk the eggs, add cream & soured cream, whisk again</li>
                <li>season & set into the fridge</li>
              </ol>

              <div class="spacer"></div>

              <h4>Method for the filling</h4>

              <ol>
                <li>heat a heavy based pan & add the bacon when hot</li>
                <li>leave to release water and colour slightly</li>
                <li>
                  add in your onions, stir only occassionally or they will
                  release water!
                </li>
                <li>
                  add in your garlic, stir until it all dries out then set aside
                </li>
              </ol>

              <div class="spacer"></div>

              <h4>now to bake</h4>

              <ol>
                <li>pre-heat oven to 180c</li>
                <li>
                  once hot, place your covered pastry base into the middle of
                  the oven for 10 minutes
                </li>
                <li>
                  remove the beans / rice & paper, return to the oven for 10
                  more minutes
                </li>
                <li>as that finishes cooking, re-whisk your egg mixture</li>
                <li>
                  add most of your cheese & all your bacon & onion mix to the
                  eggs
                </li>
                <li>
                  the pastry should be done after 10 mins, so tip your egg,
                  bacon ect. into the pastry case
                </li>
                <li>
                  top with a little of the"set aside cheese" & bake for 35 to 40
                  minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sprinkle with cheese</figcaption>
                <img
                  src="/images/quiche-lorraine/650x366/quiche-filling-in-pastry-base.webp"
                  alt="quiche filling in pastry base"
                  title="quiche filling in pastry base for the Ultimate Quiche lorraine"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>
                  once cooked it should look golden all over but not set hard in
                  the center
                </li>
                <li>leave to cool for at least 10, preferable 30 minutes</li>
                <li>trim off the excess pastry with a sharp knife while hot</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>trim the excess pastry</figcaption>
                <img
                  src="/images/quiche-lorraine/650x366/quiche-lorraine-cooked.webp"
                  alt="quiche lorraine cooked"
                  title="the Ultimate Quiche lorraine cooling"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Serving suggestion: the
                <strong>Ultimate Quiche lorraine</strong> with a plate, a fork
                and a smile ;-) You could of course add salads of your choice!
              </p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>quiche lorraine</figcaption>
                <img
                  src="/images/quiche-lorraine/650x366/quiche-lorraine-and-salad-02.webp"
                  alt="quiche lorraine cooked"
                  title="the Ultimate Quiche lorraine with salad on a plate"
                />
                <figcaption>...with salad</figcaption>
              </div>
              <div class="spacer"></div>

              <p>You just can't buy better :¬P</p>

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
                    href="https://www.nuttyskitchen.co.uk/cheese-and-onion-quiche.html"
                    >cheese & onion quiche
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/sausage-roll-and-caramalised-onion.html"
                    class="underline"
                    >sausage roll & caramalised onion
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