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
          It is that time of year when free Blackberries are easy to come by.
          Over at the Cricket club there's been a bumper harvest here at
          Nutty's, so, what could be better than
          <strong>Blackberry & Soured Cream Flan</strong>? I put them into the
          freezer the day we picked them and forgot all about them. It's a
          Sunday and as we are having a Roast Beef dinner, my mind went to hmm?
          PUDDING! Those succulent little tart berries came to mind, and flan
          was the Pudding I went for. I have included a recipe for the pastry
          but do feel free to use shop brought all-butter shortcrust.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Blackberry & Soured Cream Flan</strong>, with
          pictures to guide you.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/blackberry-and-soured-cream-flan/650x366/blackberry-and-soured-cream-flan-02.webp"
            alt="blackberry and soured cream flan 02"
            title="blackberry and soured cream flan"
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
              <h2>Ingredients for the pastry</h2>

              <ul>
                <li>175g plain flour</li>
                <li>pinch salt</li>
                <li>50g icing sugar</li>
                <li>100g diced chilled salted butter</li>
                <li>1 large egg whisked</li>
                <li>1 & 1/2 Tbls ice cold water</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients for the filling</h2>

              <ul>
                <li>170ml soured cream</li>
                <li>80ml double cream</li>
                <li>1 large egg</li>
                <li>6 Tbls sugar</li>
                <li>1 Tbls plain flour</li>
                <li>1 Tbls ground almounds</li>
              </ul>

              <div class="spacer"></div>

              <h4>and the fruit</h4>

              <ul>
                <li>500g Blackberries</li>
                <li>*1 to 2 Tbls sugar</li>
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
                You are going to want to get your pastry all made rested & done
                and cooked prior to anything else. Then there will be plenty of
                time to sort your flan batter while your pastry cools.
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for blackberry and soured cream flan"
                />
              </div>
              <div class="spacer"></div>
              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the pastry</h2>

              <ol>
                <li>put all the dry ingredients into a mixer or bowl</li>
                <li>beat until you have a fine crumb</li>
                <li>add the wet ingredients and repeat until combined</li>
                <li>
                  wrap in cling film in a round disk shape, chill for 15 to 20
                  minutes
                </li>
                <li>
                  roll out on a floured surface until the depth of a £1 coin
                </li>
                <li>
                  carefully place the pastry into the dish pushing the sides
                  down & in
                </li>
                <li>prick the base of the pastry all over with a fork</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>prick the pastry</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/raw-pastry-in-flan-dish.webp"
                  alt="ingredients"
                  title="raw pastry in a flan dish for blackberry and soured cream flan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>line with baking parchment then fill with rice</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>line with parchment & rice</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/pastry-and-rice-in-flan-dish-02.webp"
                  alt="pastry and rice in flan dish"
                  title="pastry and rice in flan dish for blackberry and soured cream flan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>bake in a pre-heated 180c oven for 10 minutes</li>
                <li>remove the rice & paper, bake for another 10 minutes</li>
              </ol>

              <div class="spacer"></div>

              <h2>Method for the filling</h2>

              <ol start="11">
                <li>whisk your sour cream, double cream & egg together</li>
                <li>
                  add in sugar, flour & ground almounds, whisk until smooth
                </li>
                <li>set aside in the fridge</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>prep' the filling and</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/flan-filling-in-bowl.webp"
                  alt="flan filling in bowl"
                  title="flan filling in bowl for blackberry and soured cream flan"
                />
              </div>
              <div class="spacer"></div>

              <h2>for the fruit</h2>

              <ol start="14">
                <li>
                  we are using foraged blackberries that have been washed &
                  frozen
                </li>
                <li>place the blackberries into a bowl to defrost</li>
                <li>add sugar to the bowl to taste</li>
              </ol>

              <div class="spacer"></div>

              <h2>Putting the dish together</h2>

              <ol start="17">
                <li>place half your fruit in the pastry base</li>
                <li>top with your cream filling mixture</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cover with the filling</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/tart-filling-in-flan-dish.webp"
                  alt="tart flan filling in flan dish"
                  title="tart flan filling in flan dish for blackberry and soured cream flan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="19">
                <li>now top off your dish with other half of the fruit</li>
                <li>bake @180c for 30 to 35 minutes</li>
                <li>
                  once done the dish will have browned risen & bubbling arround
                  each piece of fruit
                </li>
                <li>
                  allow to cool for 30 mins, trim the edges with a knife then
                  dust with a florish of icing sugar if you like
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>allow to cool</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/blackberry-and-soured-cream-flan-03.webp"
                  alt="blackberry and soured cream flan 03"
                  title="blackberry and soured cream flan"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dust with icing sugar</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/blackberry-and-soured-cream-flan-02.webp"
                  alt="blackberry and soured cream flan 02"
                  title="blackberry and soured cream flan"
                />
              </div>
              <div class="spacer"></div>

              <p>
                And you are ready to serve
                <strong>Blackberry & Soured Cream Flan</strong> with clotted
                ice-cream :-)
              </p>

              <h2>where's the final picture?</h2>
              <p>
                Well, I have to confess, we ate it all before we thought of
                taking a picture or two! But, that's not entirely true, I did
                share half of it with a couple of my neighbours
                <em>BEFORE</em> we actually ate it all and trust me, we would
                have, because it was absolutely delightful :¬P
              </p>
              <p>
                I'll publish the money shot next time I make it. I have enough
                blackberries left in the freezer to do so, so watch this space!
              </p>

              <!-- <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/blackberry-and-soured-cream-flan/650x366/blackberry-and-soured-cream-flan-and-ice-cream-01.webp"
                  alt="blackberry and soured cream flan 02"
                  title="blackberry and soured cream flan"
                />
                <figcaption>clotted cream ice cream</figcaption>
              </div>
              <div class="spacer"></div> -->

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
                    href="https://www.nuttyskitchen.co.uk/damson-and-soured-cream-tart.html"
                    >damson & soured cream tart
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/blackcherrypie.html"
                    class="underline"
                    >black cherry lattice pie
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