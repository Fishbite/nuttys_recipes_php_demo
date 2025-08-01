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
          <strong>Mediterranean Style Vegetables with Pork Steaks</strong> This
          dish is a wonderful mix of carrots, courgettes, aubergine & sliced
          fresh garlic. You do need to do a fair amount of chopping, creating
          various sizes of vegetable batons, i.e. each type of veg' needs to be
          of a certain baton size, so that everything cooks evenly. Once that is
          done the dish is a breeze to put together. Italian dried herbs and
          oregano mixed with olive oil and tomato puree create a light sauce to
          compliment the vegetables. Delicious sliced peppers are added to the
          bake with seasoned pork steaks that go on top of the vegetables after
          partly cooking. A final summery florish of fresh marjoram will
          complete the dish with beautiful fresh sweet pine and citrus flavours
          which elevate the dish to another level.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make
          <strong>Mediterranean Style Vegetables with Pork Steaks</strong> along
          with a few pictures for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/mediterranean-style-veg-with-pork-steaks-plated-03.webp"
            alt="Mediterranean style vegetables with pork steaks plated 03"
            title="Mediterranean style vegetables with pork steaks"
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
              <h2>Ingredients for the first bake</h2>
              <ul>
                <li>1 large carrots cut into small batons</li>
                <li>1 large red onion cut into 12 through the core</li>
                <li>1 large courgette cut into medium batons</li>
                <li>2 aubergines cut into larger batons</li>
                <li>2 bowls water & lemon juice</li>
                <li>250g fresh baby plum tomatoes halved</li>
                <li>5 cloves garlic sliced</li>
                <li>3 Tbsp olive oil</li>
                <li>1 Tbsp tomatoe puree</li>
                <li>2 tsp dried italian seasoning</li>
                <li>1 tsp dried oregano</li>
                <li>1 vegetable stock cube crumbled</li>
                <li>a good grind of salt & pepper onto each layer</li>
              </ul>

              <div class="spacer"></div>

              <p>
                Please refer to the pictures as a guide for the size of your
                batons. This is important as the carrots will take the longest
                to cook, with aubergines taking the least.
              </p>

              <h2>Ingredients for the second bake</h2>
              <ul>
                <li>1/2 red bell pepper</li>
                <li>1/2 green bell pepper</li>
                <li>1/2 yellow bell pepper</li>
                <li>4 Pork shoulder steaks</li>
                <li>a good grind of salt & pepper</li>
                <li>dust of smoked paprika</li>
              </ul>

              <div class="spacer"></div>
              <h2>to finish</h2>

              <ul>
                <li>fresh Marjoram</li>
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
                Well! There's a little bit of choppin' to do for this dish, so
                now's the time to hone those knife skills! Pay attention to the
                size of those vegetable batons, the carrots particularly need to
                be the thinnest cut so that they have a chance of cooking before
                the soft veg' (aubergines, courgettes) turn to mush!
              </p>
              <p>
                Make sure you cut those cherry tomatoes in half before adding to
                the dish and save you and your guests from the experience of
                exploding scalding <em>'hot-bombs'</em> in the mouth! This is
                quite <strong>important!!!</strong>
              </p>
              <p>
                And on that note, it's' of real benefit to let the dish rest &
                cool for a little while after you take it out of the oven. It
                just tastes better when not <em>'too hot'</em>. :¬)
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for Mediterranean style vegetables with pork steaks"
                />
                <figcaption>note the size of the veg' batons</figcaption>
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the first bake</h2>

              <ol>
                <li>pre-heat your oven to 180c</li>
                <li>
                  once chopped, place the courgettes & aubergines into lemon
                  water or they will brown
                </li>
                <li>
                  get a large ovenproof dish and create layers of aubergines,
                  courgettes, carrots, onions, tomatoes & garlic.
                  <strong
                    >Make sure to season each layer with salt & pepper</strong
                  >. Discard the lemon water
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>layer the veg'</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/ingredients-in-oven-dish.webp"
                  alt="ingredients in oven dish"
                  title="ingredients in oven dish for Mediterranean style vegetables with pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  in a separate bowl mix olive oil, tomato puree, dried herbs &
                  veg stock cube
                </li>
                <li>mix & pour across the vegetables</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>pour the mix over the veg'</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/ground-pepper-added-to-veg-03.webp"
                  alt="ground pepper added to veg 03"
                  title="olive oil & seasoning added to veg' for Mediterranean style vegetables with pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>cover with tin foil & bake @ 180c for 30 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cover with foil</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/foil-covered-oven-dish-01.webp"
                  alt="foil covered oven dish 01"
                  title="ingredients covered in foil for Mediterranean style vegetables with pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>slice your peppers & add to the dish</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add sliced peppers</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/veg-part-cooked-in-oven-dish-01.webp"
                  alt="veg part cooked in oven dish 01"
                  title="sliced peppers added to dish for Mediterranean style vegetables with pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>re-cover & cook for 15 minutes more</li>
              </ol>

              <div class="spacer"></div>

              <h4>Method for second bake</h4>

              <ol>
                <li>take your pork steaks out the fridge</li>
                <li>rub or spray oil onto each steak</li>
                <li>season each side of the steaks with salt & pepper</li>
                <li>dust with a little smoked paprika</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>season the steaks</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/raw-seasoned-pork-steaks-on-plate.webp"
                  alt="raw seasoned pork steaks on a plate"
                  title="raw seasoned pork steaks on a plate for Mediterranean style vegetables with pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>remove your vegetables from the oven & stir together</li>
                <li>add seasoned pork steaks & return to the oven uncovered</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add steaks to the dish</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/raw-seasoned-pork-steaks-added-to-dish.webp"
                  alt="raw seasoned pork steaks added to dish"
                  title="raw seasoned pork steaks added to dish for Mediterranean style vegetables with pork steaks"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  bake again @ 180 c for 20 minutes turning the steaks half way
                  through
                </li>
                <li>sprinkle with fresh marjoram when serving</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add fresh marjoram</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/mediterranean-style-veg-with-pork-steaks-cooked-01.webp"
                  alt="mediterranean style vegetables with pork steaks cooked"
                  title="mediterranean style vegetables with pork steaks cooked & sprinkled with marjoram"
                />
              </div>
              <div class="spacer"></div>

              <p>Then just dish it up and you have:-</p>

              <div class="card_image_round">
                <figcaption>Mediterranean sunshine...</figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/mediterranean-style-veg-with-pork-steaks-plated-03.webp"
                  alt="Mediterranean style vegetables with pork steaks plated 03"
                  title="Mediterranean style vegetables with pork steaks"
                />
                <figcaption>...on a plate</figcaption>
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->

              <p>
                Serving suggestion:
                <strong>Mediterranean Style Vegetables with Pork Steaks</strong>
                A big serving spoon, plates, knives, forks and if you wish
                &mdash; some baby new potatoes in chive butter "Simples" &
                Yummy!
              </p>
              <p>
                And, what to do with the left-over veg'? Well, I pulled some
                more pork steaks out and put them in a marinade of olive oil,
                lemon juice, garlic and paprika &mdash; just enough to coat them
                and left them in the fridge overnight. Next day, I simply
                seasoned them with salt and pepper, placed them into the health
                grill and re-heated the left-over veg'. 4 to 5 mins and I have
                dinner for day two! ;¬)
              </p>

              <div class="card_image_round">
                <figcaption>
                  another day of Mediterranean sunshine...
                </figcaption>
                <img
                  src="/images/mediterranean-style-vegetables-with-pork-steaks/650x366/mediterranean-style-veg-with-grilled-pork-steak-01.webp"
                  alt="Mediterranean style vegetables with grilled pork steak"
                  title="Mediterranean style vegetables with grilled pork steak"
                />
                <figcaption>...with grilled pork steak</figcaption>
              </div>
              <div class="spacer"></div>

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
                    href="https://www.nuttyskitchen.co.uk/peri-peri-pork-steaks.html"
                    >peri peri pork steaks
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/spicy-baked-beans-and-peppers.html"
                    class="underline"
                    >spicy baked beans & peppers
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