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
          Now <strong>Savory Mince and Mash</strong> is so easy to make in a
          rush. It is exactly what you need when the nights are long or you just
          want a deliciously tasty, comforting dish. This can be done when you
          get in from work, no need to bake, just one pan &
          <strong>Savory Mince</strong> is dinner done. I made double the mash
          needed the day before, saving even more time on a Monday night! I also
          have beef joint gravy from the freezer, but I have included the recipe
          to make gravy on the day if you don't have any to hand.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Savory Mince and Mash</strong>, along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/savoury-mince-and-mash/650x366/savoury-mince-and-mash-plated.webp"
            alt="savoury mince and mash plated"
            title="savoury mince and mash served in a dish"
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
              <h2>serves 4</h2>
              <h2>Mince</h2>
              <ul>
                <li>350g beef & pork mince</li>
                <li>1 medium onion finely diced</li>
                <li>1 medium carrot finely grated</li>
                <li>2 sticks celary finely diced</li>
                <li>3 cloves garlic finely diced</li>
                <li>4 small tomatoes finely diced</li>
                <li>1 tsp Worcestershire sauce</li>
                <li>125g garden peas</li>
                <li>1/2 tsp sea salt crushed</li>
                <li>1 tsp black pepper corns crushed</li>
              </ul>
              <div class="spacer"></div>

              <h2>Gravy</h2>
              <ul>
                <li>10g salted butter</li>
                <li>1/2 dessert spoon bisto powder</li>
                <li>1/2 dessert spoon plain flour</li>
                <li>1 OXO beef stock cube</li>
                <li>1 OXO veg stock cube</li>
                <li>300ml cold water</li>
              </ul>
              <div class="spacer"></div>

              <h2>Mash</h2>
              <ul>
                <li>1.2 kg potatoes, peeled & quartered</li>
                <li>1 heaped Tbsp Salt</li>
                <li>50ml warm milk</li>
                <li>50g warm butter</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <!-- The method tab  does not have the class `active` by default, thus it is hidden from view. When the user clicks
            the "Method" tab the `active` class is applied here and
            removed from the "Ingredients" tab, which is then hidden
            from view
             -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                This is such an easy dish to put together and perfect to use up
                those mashed potatoes that you have left over from the day
                before. There's just a little veg' prep' of onions, carrots and
                celery, which are key to obtaining truly flavoursome meal.
              </p>
              <p>
                No left-over mash? No worries, I've got you covered! Here's how
                I make perfect fluffy mashed potatoes. You can put these on to
                boil while you make the <strong>Savory Mince</strong> :-)
              </p>

              <h2>fluffy mashed potatoes</h2>
              <ol>
                <li>
                  rinse the potatoes in a large pan to remove some of the starch
                </li>
                <li>cover with cold water</li>
                <li>add 1 good heaped Tbsp salt</li>
                <li>cover and bring to the boil</li>
                <li>
                  simmer for 20mins, or until soft enough to stick a fork in
                  them without any resistance
                </li>
                <li>drain through a colander</li>
                <li>put the milk & butter into the potato pan</li>
                <li>add the potatoes back into the pan</li>
                <li>
                  cover and allow them to steam for a couple of mins while the
                  butter melts
                </li>
                <li>
                  mash with a potato masher until they are all broken down
                </li>
                <li>
                  finish by whisking the mash vigorously with a fork until it is
                  completely lump free*
                </li>
              </ol>

              <div class="spacer"></div>
              <p>
                *Finishing the mash with a fork stops it from going 'gloopy' and
                starchy (as it can do with a potato masher) giving you the
                perfect fluffy mash.
              </p>

              <p>prepare the ingredients for the savoury mince:</p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/savoury-mince-and-mash/650x366/ingredients.webp"
                  alt="ingredients"
                  title="main ingredients for savoury mince and mash"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Brown off the minced beef</li>
                <li>add carrots, onions and celery</li>
                <li>add salt & pepper</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add carrots, onions & celery</figcaption>
                <img
                  src="/images/savoury-mince-and-mash/650x366/carrots-onion-celery-added-to-browned-mince.webp"
                  alt="carrots onion celery added to browned mince"
                  title="main ingredients for savoury mince and mash"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  add carrots, onions and celery, then sweat down until soft
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes & garlic</figcaption>
                <img
                  src="/images/savoury-mince-and-mash/650x366/tomatoes-and-garlic-added.webp"
                  alt="tomatoes and garlic added"
                  title="tomatoes and garlic added to savoury mince"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>add tomatoes & garlic, stir well until soft</li>
                <li>add a good dash of Worcestershire sauce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add peas</figcaption>
                <img
                  src="/images/savoury-mince-and-mash/650x366/peas-added.webp"
                  alt="peas added"
                  title="peas added to savoury mince"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>add peas & stir in</li>
              </ol>
              <div class="spacer"></div>

              <h2>method for gravy</h2>
              <p>Make the gravy in a separate pan.</p>
              <ol>
                <li>add your butter to a medium sauce pan allow it to melt</li>
                <li>add your flour and combine to create a roux</li>
                <li>mix your bisto with the 300ml of water & whisk</li>
                <li>crumble in both your stock cubes</li>
                <li>add the water & bisto mix to your pan</li>
                <li>stir constantly until it thickens & starts to simmer</li>
                <li>now add into your savory mince</li>
                <li>check the seasoning add salt if required</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add gravy</figcaption>
                <img
                  src="/images/savoury-mince-and-mash/650x366/gravy-added.webp"
                  alt="gravy added"
                  title="gravy added to savoury mince"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>add gravy, stir & heat through</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>savoury mince & mash</figcaption>
                <img
                  src="/images/savoury-mince-and-mash/650x366/savoury-mince-and-mash-plated.webp"
                  alt="savoury mince and  mash plated"
                  title="savoury mince and  mash plated"
                />
              </div>
              <div class="spacer"></div>

              <p>quick, easy and oh! So tasty.</p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->
          </article>
        </article>
      </div>
    </section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>