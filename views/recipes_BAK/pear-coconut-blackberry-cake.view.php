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
          Now this <strong>Pear, Coconut & Blackberry Cake</strong> works
          perfectly as a pudding or a cake, the coconut adds flavour and texture
          to the sponge and also keeps it really moist. It's really so easy to
          make and deliciously tasty. Just add ice cream or custard for a crowd
          pleasing pudding, or, serve with a cup of afternoon tea, it's just
          perfect! I'm using up the last of the crop of blackberries from last
          years' harvest, collected from the cricket club just over the road
          from my kitchen. I'll be able to replenish my stock soon though
          &mdash; when we go foraging a little later in the year, I always look
          forward to that!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Pear, Coconut & Blackberry Cake</strong> with a few
          pictures as reference.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/pear-coconut-blackberry-cake/650x366/pear-coconut-blackberry-cake-sliced-01.webp"
            alt="pear coconut blackberry cake sliced 01"
            title="Pear, Coconut & Blackberry Cake Sliced"
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
              <h2>Serves 4 - 8</h2>
              <ul>
                <li>100g salted butter</li>
                <li>100g light brown sugar</li>
                <li>50g desiccated coconut</li>
                <li>1 tsp vanilla essence</li>
                <li>2 eggs</li>
                <li>2 tsp baking powder</li>
                <li>175g self raising flour</li>
                <li>175g blackberries</li>
                <li>400g (1 tin) of pear halves</li>
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
                Chop half the pears to a similar size as the blackberries and
                keep the remainder for the top of the cake.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>First preheat your oven to 180c & line a 20cm cake tin*</li>
              </ol>

              <div class="spacer"></div>

              <p>
                <strong>*</strong> I use shop brought cake tin liners as they
                save time & fuss, but, you can use baking paper if you prefer.
              </p>

              <ol start="2">
                <li>
                  mix butter sugar desiccated coconut & vanilla essence until
                  smooth & creamy
                </li>
                <li>add the eggs stir to combine</li>
                <li>add in baking powder & flour mix till combined</li>
                <li>add your blackberries & chopped pears</li>
                <li>
                  fold the fruit into the batter carefully so as not to bash up
                  the fruit
                </li>
                <li>
                  tip into your prepared lined tin, smooth out & top with your
                  remaining pears
                </li>
                <li>
                  sprinkle with a little extra brown sugar & bake for 40 to 45
                  minutes**
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                <strong>**</strong> It's slightly tricky to test for doneness as
                you have juice from the berries running through the cake, but,
                try sticking a wooden skewer in a couple of places to see if you
                get cake mix or just juice. The skewer should come out dry
                without cake mix stuck to it. If it comes out covered in berry
                juice, try another place! If it comes out covered in sticky cake
                mix, pop it back in the oven for 5 minutes more, then check
                again.
              </p>

              <div class="card_image">
                <figcaption>Pear, Coconut & Blackberry Cake</figcaption>
                <img
                  src="/images/pear-coconut-blackberry-cake/650x366/pear-coconut-blackberry-cake-baked-02.webp"
                  alt="pear coconut blackberry cake baked 02"
                  title="Pear, Coconut & Blackberry Cake just baked"
                />
                <figcaption>test that it's done</figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>let it cool...</figcaption>
                <img
                  src="/images/pear-coconut-blackberry-cake/650x366/pear-coconut-blackberry-cake-03.webp"
                  alt="pear coconut blackberry cake 03"
                  title="Pear, Coconut & Blackberry on a plate"
                />
                <figcaption>...or serve immediately!</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Serve <strong>Pear, Coconut & Blackberry Cake</strong> hot or
                cold, with or without custard, or ice cream! The cake is so
                moist that it doesn't need them, but, some people insist on that
                extra indulgence!
              </p>

              <div class="card_image_round">
                <figcaption>Pear, Coconut & Blackberry Cake</figcaption>
                <img
                  src="/images/pear-coconut-blackberry-cake/650x366/pear-coconut-blackberry-cake-and custard-01.webp"
                  alt="pear coconut blackberry cake and custard 01"
                  title="Pear, Coconut & Blackberry Cake:- served with custard"
                />
                <figcaption>served with custard</figcaption>
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't fuk with the closing tags or anything below here!!! -->
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
