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
          <strong>Christmas Prepared!</strong> A collection of pre-made savoury
          snacks & sides that you can pop into the freezer & then the oven as
          soon as the time is right :-)
        </p>
        <p>
          So, Christmas is a week away and I'm super organised this year (I
          think, hope & pray!) with <strong>Christmas Prepared!</strong> Today I
          pre-made sausage rolls, sausage sage & onion stuffing, ready to be
          rolled into balls, and sausages wrapped in bacon. Add to those some
          bacon & cheese puffs and I have a load of savoury snacks ready to cook
          up on request! So, bearing all that in mind, I was sure to keep 3
          sausages for a sandwich, once I was done.... I have decided to post
          these to the recipe page, all in one batch, if you require more than
          I've made, simply multiply the amounts of ingredients accordingly.
        </p>
        <p>
          I'll post pictures of everything cooked when they're cooked!!! Now I'm
          gonna have that sausage sandwich with those left over sausages!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to be <strong>Christmas prepared!</strong> Along with a few pictures
          for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/christmas-prepared/650x366/bacon-and-cheese-puffs-raw.webp"
            alt="bacon and cheese puffs"
            title="bacon and cheese puffs ready to freeze or cook"
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
              <h2>Ingredients for all</h2>
              <p>
                This is your shopping list to make sausage rolls, stuffing
                balls, pigs-in-blankets and bacon & cheese puffs, otherwise,
                I've given you the individual ingredients list for each below
                this list
              </p>
              <ul>
                <li>2 packs of 8 sausages</li>
                <li>2 x 320g packs ready rolled all butter puff pastry</li>
                <li>1 pack smoked back bacon</li>
                <li>1 egg</li>
                <li>1 tsp butter</li>
                <li>sage & onion stuffing</li>
                <li>extra mature cheese</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients: sausage rolls</h2>
              <ul>
                <li>1 pack of 8 sausages skinned*</li>
                <li>1 x 320g pack ready rolled all butter puff pastry</li>
                <li>1 egg to seal</li>
                <li>salt & pepper</li>
              </ul>

              <div class="spacer"></div>

              <p>
                * you will have one sausage too many &mdash; use it for the
                stuffing!
              </p>

              <h2>Ingredients: Sausage Stuffing Balls</h2>
              <ul>
                <li>1 sausage skinned</li>
                <li>3 x dry stuffing to sausage weight</li>
                <li>1 tsp butter</li>
                <li>boiling water</li>
                <li>salt & pepper</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients: pigs in blankets</h2>

              <ul>
                <li>1 pack smoked back bacon**</li>
                <li>5 sausages skinned</li>
              </ul>
              <div class="spacer"></div>

              <p>**just use the streaky end</p>

              <h2>Ingredients: Bacon & cheese puffs</h2>

              <ul>
                <li>1 pack smoked back bacon (the remaining medallion)</li>
                <li>1 x 320g pack ready rolled all butter puff pastry</li>
                <li>1 slice strong cheddar to top each puff</li>
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
                OK! It's time to prepare for Christmas! My idea here, is to
                gather a few simple ingredients and knock out a few different
                types of savoury snacks, as they all use similar ingredients
              </p>
              <p>
                The brilliance here is that, all this will be set onto a tray
                and placed into the freezer. Once frozen, I'll pop them into
                freezer bags ready to be pulled out over christmas or new year,
                all ready to be baked. Saves you loads of time and washing up
                when you just want to enjoy the festivities ;-) All can be baked
                @ 180c from frozen, for approximately 30 to 45 minutes in an
                uncrowded oven!
              </p>
              <p>
                NOTE: The pre-made pastry I buy comes wrapped in grease proof
                paper, which I use in the methods below.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method: Sausage rolls</h2>

              <ol>
                <li>first skin your sausages</li>
                <li>
                  simply run a sharp knife down one side, grab the skin and peel
                  back
                </li>
                <li>
                  on a large board, unroll your pastry on the grease proof paper
                  that the pastry comes in
                </li>
                <li>lay the sausages along the short length</li>
                <li>egg wash the short length of the pastry</li>
                <li>use the grease proof paper to roll</li>
                <li>take a fork and join the edge</li>
                <li>
                  cut the sausage roll away from the remaining pastry and repeat
                  twice
                </li>
                <li>turn each roll so the edge join becomes the base</li>
                <li>prick each top with a fork</li>
                <li>wrap all three in the greese proof & chill</li>
                <li>once chilled, check they are still sealed & freeze</li>
                <li>egg wash when you're ready to cook them is best</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sausage rolls</figcaption>
                <img
                  src="/images/christmas-prepared/650x366/sausage-rolls-raw-uncut-02.webp"
                  alt="sausage rolls raw uncut"
                  title="Sausage rolls ready to freeze or cook"
                />
                <figcaption>ready to freeze</figcaption>
              </div>
              <div class="spacer"></div>

              <h2>Method: Sausage Stuffing Balls</h2>

              <ol>
                <li>weigh your sausage meat</li>
                <li>
                  weigh dry sage & onion stuffing mix - 3 x the weight of the
                  sausage meat
                </li>
                <li>add a knob of butter to a bowl</li>
                <li>add the stuffing mixture</li>
                <li>now mix the stuffing with enough water to combine</li>
                <li>allow to cool completely</li>
                <li>
                  now mix your sausage meat into the stuffing & season with salt
                  & pepper
                </li>
                <li>wrap in clingfilm & set into the fridge to firm up</li>
                <li>then unwrap the clingfilm & roll into individual balls</li>
                <li>rewrap in clingfilm & freeze</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sausage stuffing balls</figcaption>
                <img
                  src="/images/christmas-prepared/650x366/sausage-stuffing-balls-01.webp"
                  alt="sausage stuffing balls"
                  title="sausage stuffing balls ready to freeze or cook"
                />
                <figcaption>ready to freeze</figcaption>
              </div>
              <div class="spacer"></div>

              <h2>Method: Pigs in blankets</h2>
              <p>
                Don't forget, we're just using the streaky end of the bacon
                rasher, we'll use the fat bit for the
                <strong>Bacon & Cheese Puffs!</strong>
              </p>

              <ol>
                <li>firstly skin your sausages</li>
                <li>
                  now stretch your bacon slightly with the back of a knife
                </li>
                <li>wrap each sausage in two rashers of the bacon</li>
                <li>once wrapped cut in half</li>
                <li>wrap in clingfilm and freeze</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>pigs in blankets</figcaption>
                <img
                  src="/images/christmas-prepared/650x366/pigs-in-blankets-02.webp"
                  alt="sausage rolls raw uncut"
                  title="Sausage rolls ready to freeze or cook"
                />
                <figcaption>ready to freeze</figcaption>
              </div>
              <div class="spacer"></div>

              <h2>Method: Bacon & Cheese puffs</h2>

              <ol>
                <li>
                  on a large board, unroll your pastry on the grease proof paper
                  that the pastry comes in
                </li>
                <li>cut into 6 equal squares</li>
                <li>
                  place a rasher and a half of back bacon medalion onto each
                  square
                </li>
                <li>top with a slice of cheddar cheese</li>
                <li>
                  now take two opposite corners egg wash each and overlap
                  pressing down firmly
                </li>
                <li>now season with salt & pepper</li>
                <li>wrap all six in the greese proof & chill</li>
                <li>once chilled, check the seal & freeze</li>
                <li>egg wash when your ready to cook them is best</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>bacon & cheese puffs</figcaption>
                <img
                  src="/images/christmas-prepared/650x366/bacon-and-cheese-puffs-raw.webp"
                  alt="bacon and cheese puffs"
                  title="bacon and cheese puffs ready to freeze or cook"
                />
                <figcaption>ready to freeze</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Once you have prepared everything, get a suitable tray that fits
                in the freezer, lay each separately, cover in clingfilm, or,
                greese proof paper, allow to freeze completely then place into
                labeled bags, so you can pull out exactly the amount you need,
                when you need it!
              </p>

              <h2>Serving suggestions</h2>
              <p>
                For all the above <strong>Christmas Prepared</strong> is simple,
                some go with a roast, others just simply need friends! Have a
                great holiday! Merry Christmas & a Happy New Year from all of us
                @ Nutty's kitchen ;-)
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
                    href="https://www.nuttyskitchen.co.uk/sausage-roll-and-caramalised-onion.html"
                    >sausage roll & caramalised onion
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/tomato-chutney.html"
                    class="underline"
                    >tomato chutney
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