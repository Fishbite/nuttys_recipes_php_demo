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
          Now who does not love well made, well seasoned
          <strong>Fluffy mashed potatoes</strong>? These can add so much
          pleasure to any dinner, whether you top your dish off and bake it or
          simply serve it alongside your fish or meat. A winner @ Nutty's place
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Fluffy Mashed Potatoes</strong> along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/fluffy-mashed-potatoes/650x366/fluffy-mash-in-a-bowl-02.webp"
            alt="fluffy mash in a bowl"
            title="fluffy mashed potatoes in a bowl"
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
              <h2>serves 3 -4</h2>
              <ul>
                <li>900g potatoes, peeled & quartered</li>
                <li>1 heaped Tbsp Salt</li>
                <li>50ml warm milk</li>
                <li>50g warm butter</li>
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
                The best potatoes to use for
                <strong>Fluffy Mashed Potatoes</strong> are the less
                <em>waxy</em> ones such as maris piper, king edwards etc. These
                have a high starch content and make perfect fluffy mash. General
                <em>all purpose</em> varieties make a good mash if you like a
                heavy rich consistency.
              </p>
              <p>
                Use a pan larger than required so you are not at risk of the
                water boiling over. Completely cover the rinsed potatoes and add
                a good tablespoon of salt. Once boiling, reduce the heat so that
                they just simmer gently and set a timer for 20 minutes.
              </p>
              <p>
                Check the potatoes after 20 mins.
                <em>I'm no stranger to some potatoes taking longer</em> than 20
                mins! You should be able to pierce them easily with a fork when
                they are ready to mash.
              </p>
              <p>
                <strong>Note:</strong> Don't over mash the potatoes, just break
                them down with a potato masher and finish them off with a fork
                to get that perfect lump-free
                <strong>Fluffy Mashed Potatoes</strong>.
              </p>

              <!-- Method List Goes Below Here!!! -->
              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/fluffy-mashed-potatoes/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for fluffy mashed potatoes"
                />
              </figure>
              <div class="spacer"></div>

              <ol>
                <li>
                  rinse the potatoes in a large pan to remove some of the starch
                </li>
                <li>cover with cold water</li>
                <li>add 1 good heaped Tbsp salt</li>
                <li>cover and bring to the boil</li>
                <li>
                  simmer for 20 mins, or until soft enough to stick a fork in
                  them without any resistance
                </li>
                <li>drain through a colander</li>
                <li>put the milk & butter into the potato pan</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>warm the milk & soften the butter</figcaption>
                <img
                  src="/images/fluffy-mashed-potatoes/650x366/butter-melting-in-milk.webp"
                  alt="butter melting in milk"
                  title="butter melting in milk for fluffy mashed potatoes"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="8">
                <li>put the pan back on the heat and warm through</li>
                <li>turn off the heat & add the potatoes back into the pan</li>
                <li>
                  cover and allow them to steam for a couple of mins while the
                  butter melts
                </li>
                <li>
                  mash with a potato masher until they are all broken down
                  finish by whisking the mash with a fork until it is completely
                  lump free*
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>eliminate lumps with a fork</figcaption>
                <img
                  src="/images/fluffy-mashed-potatoes/650x366/fluffy-mash-in-a-pan.webp"
                  alt="fluffy mash in a pan"
                  title="fluffy mash in a pan for fluffy mashed potatoes"
                />
              </figure>
              <div class="spacer"></div>

              <p>
                *Finishing the mash with a fork stops it from going 'gloopy' and
                starchy (as it can do with a potato masher) giving you the
                perfect fluffy mash.
              </p>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>perfect Fluffy Mashed Potatoes</figcaption>
                <img
                  src="/images/fluffy-mashed-potatoes/650x366/fluffy-mash-in-a-bowl-01.webp"
                  alt="fluffy mash in a bowl"
                  title="fluffy mashed potatoes in a bowl"
                />
              </figure>
              <div class="spacer"></div>

              <p>
                Any dish with a gravy just calls out for the perfect
                <strong>Fluffy Mashed Potatoes</strong>. I've paired them here
                with my Mexican chicken, with its rich spicy tomato based sauce
                infused with the flavours of choritzo sausage. Mmmmmm! Yummy!

                <figure class="card_image_round">
                  <figcaption>perfect side to many a dish</figcaption>
                  <img
                    src="/images/fluffy-mashed-potatoes/650x366/mash-and-mexican-chicken-04.webp"
                    alt="mash and mexican chicken"
                    title="fluffy mashed potatoes with mexican chicken in a bowl"
                  />
                </figure>
              </p>

              <div class="spacer"></div>

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
                    href="https://www.nuttyskitchen.co.uk/spicy-potato-wedges.html"
                    >spicy potato wedges
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