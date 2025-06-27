<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          Now I don't make this
          <strong>Saffron and Cardamom Rice</strong> recipe too often, saffron
          being <em>the most expensive spice in the world!</em> However, I
          bought 1g of it a little while back and I wanted something a little
          special to go with my
          <a
            class="in-link"
            href="/fish-fillets-with-chilli-sauce.html"
            target="_blank"
            >Fish Fillets with Chilli Sauce Recipe</a
          >
          so, I reached for my little pot of treasure!
        </p>
        <p>
          This is a fairly simple side to make, it takes a little more
          <em>TLC</em> than your plain boiled / steamed rice, but, it's well
          worth your effort. If you have guests, be ready to impress! Its
          delicate flavours are just delightful.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Saffron and Cardamom Rice</strong> along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/saffron-and-cardamom-rice/650x366/saffron-and-cardamom-rice.webp"
            alt="saffron and cardamom rice"
            title="saffron and cardamom rice in a serving dish"
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
              <h2>serves 2</h2>
              <ul>
                <li>100g basmati rice</li>
                <li>1 & 1/2 pints water</li>
                <li>3 cardamom pods - cracked open slightly</li>
                <li>2 cloves</li>
                <li>1 tsp salt</li>
                <li>1/2 tsp crushed saffron strands</li>
                <li>3 Tbsp semi-skimmed milk - warmed</li>
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
                There are generally two ways to cook rice, the total absorbtion
                method, or, the boil and drain method. The latter loses the most
                starch from the rice and helps create individual, separate
                grains, so that's how I'll cook my rice for this dish.
              </p>
              <p>
                First of all, wash your rice well at least a couple of times.
                Measure your rice out, tip it into a pan and fill with water,
                stir with your fingers until the water goes cloudy, drain the
                water and repeat until the water stays virtually clear when
                stirred.
              </p>
              <p>
                <strong>IMPORTANT!</strong> Cook in a pan that has a tight
                fitting lid.
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/saffron-and-cardamom-rice/650x366/ingredients-for-saffron-rice.webp"
                  alt="ingredients for saffron rice"
                  title="ingredients for saffron rice on chopping board"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Soak the washed rice in water for 30 mins</li>
                <li>
                  drain and rinse, then replace with 1 & 1/2 pints of fresh
                  water
                </li>
                <li>add 3 cardamom pods, 2 cloves & 1 good tsp salt</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add the whole spices</figcaption>
                <img
                  src="/images/saffron-and-cardamom-rice/650x366/rice-cardamom-and-cloves-in-pan.webp"
                  alt="rice, cardamom & cloves in a pan"
                  title="rice, cardamom & cloves in a pan for saffron and cardamom rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  bring to the boil & simmer until the rice is soft on the
                  outside, but still a little firm in the middle 7 - 10 mins
                </li>
                <li>
                  meanwile, put the warm the milk into a cup & add the saffron
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>soak the saffron in milk</figcaption>
                <img
                  src="/images/saffron-and-cardamom-rice/650x366/saffron-in-milk.webp"
                  alt="saffron in milk"
                  title="saffron in milk for saffron and cardamom rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  allow the saffron to infuse into the milk for a few mins
                </li>
                <li>
                  when the rice is nearly cooked, carefully drain the rice
                  through a seive & put it back into the pan
                </li>
                <li>sprinkle the saffron milk all over the rice</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>spinkle the rice with saffron milk</figcaption>
                <img
                  src="/images/saffron-and-cardamom-rice/650x366/saffron-milk-poured-on-rice-02.webp"
                  alt="saffron milk poured on rice"
                  title="saffron milk poured on rice for saffron and cardamom rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  put it back onto a very low heat with a tight fitting lid for
                  7 - 10 mins
                </li>
                <li>
                  when cooked, take off the heat & allow it to stand with the
                  lid on for another 5 mins
                </li>
                <li>
                  stir gently with a fork to coax the grains of rice apart
                </li>
                <li>transfer to a warm serving dish</li>
              </ol>

              <div class="spacer"></div>

              <p>
                For the perfect dinner, serve with fish fillets with chilli
                sauce.
              </p>

              <div class="card_image_round">
                <figcaption>saffron rice</figcaption>
                <img
                  src="/images/saffron-and-cardamom-rice/650x366/fish-filletes-with-chilli-sauce-and-saffron-rice-02.webp"
                  alt="fish fillets with chilli sauce and saffron rice"
                  title="fish fillets with chilli sauce and saffron and cardamom rice"
                />
                <figcaption>...& fish fillets with chilli sauce</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Head over to my
                <a
                  class="in-link"
                  href="/fish-fillets-with-chilli-sauce.html"
                  target="_blank"
                  >Fish Fillets with Chilli Sauce Recipe</a
                >
                to make the perfect fish to impress :¬P
              </p>

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
