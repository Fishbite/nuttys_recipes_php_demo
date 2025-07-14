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
          This is a super easy recipe to whip up —
          <strong>Mushroom Fried Rice</strong> — but the real magic is in the
          chopping, so take your time with it! Pair that with my Sweet & Sour
          Pork (one of my top pork dishes), and you’ve got yourself the ultimate
          'Home Away' meal.
        </p>

        <p>
          Some dishes, once you master them, will save you serious MONEY! But
          they do take time—and a bit of knife skills! Now, I’ve gone with
          easy-cook long-grain rice here, so technically, it’s not authentic
          Chinese fried rice… but hey, I’ve never been one to follow all the
          rules!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Mushroom Fried Rice</strong> along with some pictures
          as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/mushroom-fried-rice/650x366/sweet-and-sour-pork.webp"
            alt="sweet and sour pork"
            title="sweet and sour pork with mushroom fried rice"
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
              <ul>
                <li>
                  3/4 cup easy cook rice soaked for 15 minutes & rinsed 3 times
                </li>
              </ul>

              <div class="spacer"></div>

              <p>
                Once your rice is rinsed, place into the fridge to dry or you're
                going to have a problem. Spitting, boiling hot oil stuffs
              </p>

              <ul>
                <li>2 Tbsp veg oil</li>
                <li>1/2 a small white onion finely diced</li>
                <li>3 cloves garlic finely diced</li>
                <li>100g white mushrooms sliced</li>
                <li>3/4 cup of easy cook rice</li>
                <li>1 1/2 cup water add in stages</li>
                <li>1 OXO&trade; veg stock cube</li>
                <li>1 tsp dark soya</li>
                <li>1 tsp light soya</li>
                <li>1 tsp table salt</li>
                <li>1 tsp garlic powder</li>
                <li>1/2 bunch of spring onions chopped into fine disks</li>
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
                Rinse and soak your rice first 3 times and for 15 mins, be sure
                to let it dry out for as long as you can or, you're going to
                have mess. This needs a really hot stir fry pan. The wider the
                base the better.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  Very hot pan? I mean the hottest ring, on the hottest setting
                  & pan that can handle the heat!
                </li>
                <li>add finely diced white onions & sweat down</li>
                <li>add stock cube, garlic & mushrooms stir fry</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add mushrooms etc.</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/mushrooms-with-seasonings.webp"
                  alt="mushrooms with seasonings"
                  title="mushrooms with seasonings for mushroom fried rice"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="4">
                <li>add soya, salt & garlic powder & combine</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add soya, garlic & salt</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/cooked mushrooms-in-a-pan.webp"
                  alt="cooked mushrooms in a pan"
                  title="cooked mmushrooms in a pan for mushroom fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>add your rice</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add rice</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/rice-added-to-mushrooms.webp"
                  alt="rice added to mushrooms"
                  title="rice added to mushrooms in a pan for mushroom fried rice"
                />
              </figure>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>stir fry to combine</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/rice-and-mushrooms-stir-fried.webp"
                  alt="rice and mushrooms stir fried"
                  title="rice and mushrooms stir fried in a pan for mushroom fried rice"
                />
              </figure>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>stir fry until well coated</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/rice-and-mushrooms-stir-fried-02.webp"
                  alt="rice and mushrooms stir fried"
                  title="rice and mushrooms stir fried in a pan for mushroom fried rice"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="6">
                <li>add water*</li>
                <li>
                  turn the ring down as soon as it starts to boil & cover with a
                  well fitting lid
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add water & cover with a lid</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/water-added-to-pan.webp"
                  alt="water added to pan"
                  title="water added to pan for mushroom fried rice"
                />
              </figure>
              <div class="spacer"></div>

              <p>
                *Depends on your rice and soak time but I use 1 cup of water
                then add another half cup as needed. Just test a grain & add
                water if not soft enough. Easy cook rice is great as it does not
                dissolve to mush. But ta be honest it is the hardest rice to
                cook!
              </p>

              <ol start="8">
                <li>
                  Once completely cooked add spring onions & stir to combine &
                  allow them to just start softening
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add spring onions</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/spring-onions-added-to-pan.webp"
                  alt="spring onions added to pan"
                  title="spring onions added to pan for mushroom fried rice"
                />
              </figure>
              <div class="spacer"></div>

              <p>Transfer to a warm serving dish when cooked</p>
              <figure class="card_image">
                <figcaption>mushroom fried rice</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/mushroom-fried-rice.webp"
                  alt="mushroom fried rice"
                  title="mushroom fried rice in a serving dish"
                />
              </figure>
              <div class="spacer"></div>

              <h2>serving suggestion:</h2>

              <figure class="card_image_round">
                <figcaption>mushroom fried rice...</figcaption>
                <img
                  src="/images/mushroom-fried-rice/650x366/sweet-and-sour-pork.webp"
                  alt="sweet and sour pork"
                  title="sweet and sour pork with mushroom fried rice"
                />
                <figcaption>...with sweet & sour pork</figcaption>
              </figure>
              <div class="spacer"></div>

              <p>
                Serve with the <em>zingy</em> flavours of my Sweet & Sour Pork
                for the ultimate 'Home Away' meal :-P
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
                    href="https://www.nuttyskitchen.co.uk/sweet-and-sour-pork.html"
                    >sweet & sour pork
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/sweet-and-sour-roast-chicken.html"
                    class="underline"
                    >sweet & sour roast chicken
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