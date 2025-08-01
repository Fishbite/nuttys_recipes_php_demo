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
          I've been called many things, but this is one of my favourites:-
          <strong>Fruit Cake!</strong> No Nuts included! Oh! Dear! Forgive me, I
          couldn't resist that one<span class="rotatetext">{:¬)</span>There are
          so many variations of this cake, but don't worry, this one is
          <em>probably the best <strong>fruit cake</strong> in the world!</em>
          It's easy to make and completely and utterly delicious with a cup of
          afternoon tea. I don't decorate my cakes with icing and stuff, as to
          be honest, I really can not stand it! Also, this cake could be served
          warm with custard, however, we're not doing that today
          <span class="rotatetext">:-P</span>
          The choice is yours as always though, so, feel free to knock up a
          crème anglaise at your leisure!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Fruit Cake</strong> along with a few pictures to help
          you along.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/fruit-cake/650x366/fruit-cake-sliced-02.webp"
            alt="fruit cake sliced 02"
            title="Freshly baked fruit cake sliced on a chopping board"
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
              <ul>
                <li>2 tea bags - for the sweet tea</li>
                <li>300ml hot sweet tea - no milk!</li>
                <li>125g salted butter</li>
                <li>125g light brown sugar</li>
                <li>220g self-raising flour</li>
                <li>5g (1 heap tsp) baking powder</li>
                <li>2 large eggs</li>
                <li>3 - 5 Tbsp milk*</li>
                <li>200g mixed fruit</li>
                <li>1 tsp grated lemon rind</li>
              </ul>

              <div class="spacer"></div>

              <p>
                *Use 3 Tbsp of milk to start with, then add another 1 or 2 Tbsp
                if the mixture is a little dry.
              </p>
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
              <p>
                This fruit cake is so easy to make that I know you wont have any
                problems! The main thing you need to do is soak your dried fruit
                overnight, this is to plump up them currents and raisins which
                will help ensure that your finished cake is wonderfully
                delicious and moist.
              </p>

              <p>
                It's taken me three attempts at combining three old recipes to
                perfect this. And, I baked it a second time, just to make sure
                that the recipe was perfect to publish!
              </p>

              <p>
                The only thing to take note of is the 'wetness' of the cake
                batter. You can see in the pictures that there is more fruit
                towards the bottom of the cake than the top. This is because the
                cake batter was a little on the wet side. That's why I say
                "start with 3 Tbps of milk & add a little more if needed.
                Practice will make perfect, but, personally, I'd rather
                guarantee that my finished cake is moist.
              </p>

              <p>
                So! Don't worry if your fruit sinks, you are still gonna love
                it!
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/fruit-cake/650x366/ingredients.webp"
                  alt="ingredients"
                  title="fruit cake ingredients"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->
              <h2>method</h2>

              <ol>
                <li>Soak your dried fruit overnight in the prepared tea</li>
                <li>Drain off the tea before you need the fruit</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>
                  drain off the tea before using the fruit
                </figcaption>
                <img
                  src="/images/fruit-cake/650x366/soaked-fruit-drained-in-sieve.webp"
                  alt="soaked fruit drained in a sieve"
                  title="soaked dried fruit being drained in a sieve for the fruit cake"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  Prepare a 15cm cake tin or a 1lb loaf tin lining it with
                  grease proof paper*
                </li>
              </ol>

              <div class="spacer"></div>

              <p>* <em>I use cake tin liners it's quicker!</em></p>

              <ol start="4">
                <li>Pre heat your oven to 180c</li>
                <li>
                  Place your flour, baking powder, sugar & butter into a
                  blender*
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                *<em
                  >If doing by hand, cream the butter, milk, eggs & sugar first.
                  Then add your flour etc.</em
                >
              </p>

              <ol start="6">
                <li>Now add your grated lemon rind, eggs & milk</li>
                <li>
                  Mix until all is creamed together & check the consistancy, if
                  a little dry add more milk
                </li>
                <li>
                  Now place your soaked dried fruit into a bowl & add the cake
                  batter
                </li>
                <li>
                  Stir the fruit through the batter by hand until fully
                  dispersed
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>mix the soaked fruit into the batter</figcaption>
                <img
                  src="/images/fruit-cake/650x366/mixed-fruit-added-to-cake-batter.webp"
                  alt="mixed fruit added to cake batter"
                  title="mixing fruit into the fruit cake batter"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  Pour into your prepared cake tin & place into the hot oven
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>
                  pour the fruit cake mix into a lined tin
                </figcaption>
                <img
                  src="/images/fruit-cake/650x366/fruit-cake-mix-in-lined-loaf-tin.webp"
                  alt="fruit cake mix in a lined loaf tin"
                  title="fruit cake mix in a lined loaf tin"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>
                  Bake 180c for 50 to 55mins, test for doneness using a wooden
                  skewer
                </li>
                <li>If the skewer comes out clean the cake is done</li>
                <li>
                  Leave for 10 minutes then
                  <strong>remove from the tin in the paper</strong> & set onto a
                  cooling rack
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>
                  remove the fruit cake in the baking paper
                </figcaption>
                <img
                  src="/images/fruit-cake/650x366/fruit-cake-in-baking-paper.webp"
                  alt="fruit cake in baking paper"
                  title="fruit cake in baking paper on a chopping board"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>
                  Store in an air tight container
                  <strong>in the baking paper</strong> when cooled
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sliced fruit cake</figcaption>
                <img
                  src="/images/fruit-cake/650x366/fruit-cake-sliced-01.webp"
                  alt="fruit cake sliced 01"
                  title="sliced fruit cake on a chopping board"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>probably a slice of...</figcaption>
                <img
                  src="/images/fruit-cake/650x366/slice-of-cake-on-a-plate.webp"
                  alt="slice of cake on a plate"
                  title="a slice fruit cake on a plate"
                />
                <figcaption>...the best fruit cake in the world!</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Fruit Cake:</strong> Serve with a smile & mug of tea!
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't mess with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/gingerbread.html"
                    >sticky gingerbread cake
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/steamed-sponge-pudding.html"
                    class="underline"
                    >steamed sponge pudding
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