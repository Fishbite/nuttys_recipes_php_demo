<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          So <strong>Jamaican Rice & Peas</strong> is a contentious dish, every
          'Jamaican makes it different- As da mamma did!' This is my version, a
          simple side that counteracts the spice & chilli in a Jamaican dish
          that has lots of scotch bonnet chilli. Perfect for my Pork Jerk curry
          or indeed Jerk Chicken. Simple, quick and really easy to make, you
          can't go wrong with this recipe.
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make my <strong>Jamaican Rice & Peas</strong>.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/rice-and-peas/650x366/rice-and-peas-in-bowl-01.webp"
            alt="rice and peas in a bowl 01"
            title="Jamaican rice and peas"
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

          <!-- about content -->
          <article class="about-content">
            <!-- single item -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <li>1/2 cup long grain easy cook rice</li>
                <li>1/2 tin full fat coconut milk</li>
                <li>1 tin red kidney beans all of it including the water!</li>
                <li>1 tsp salt</li>
                <li>1 scotch bonnet chilli pricked to release the flavour</li>
                <li>1/2 a tsp of pimento</li>
              </ul>

              <div class="spacer"></div>

              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                Try not to shake your coconut tin so you can remove more water
                than cream. If you like milder, use the creamier bit! All we are
                doing is making an addition to what is a fiery curry. Simply
                place all the above into a pan and bring to the boil. A bit like
                Indian cooks use ghee to get flavour and reduce the heat, we're
                using coconut milk to do the same trick, the higher the fat
                content the, higher the reduction of heat.
              </p>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Wash your rice at least twice 'till no starch remains</li>
                <li>Place everything into a pan and bring to a boil</li>
                <li>As soon as it boils, turn down to a low heat</li>
                <li>When the rice is tender turn off the ring</li>
                <li>Do not drain! Just let it naturally soak up the liquid</li>
                <li>Stir occassionally to combine</li>
                <li>As soon as 90% of the cream has gone it's done.</li>
              </ol>

              <div class="spacer"></div>
              <p>
                I always make mine the day before so the scotch bonnet fully
                infuses, but you can serve immediately. If not using immediately
                remove from the pan set into a serving dish & cool fast! I use a
                china bowl and an ice block which gets it down to temperature so
                that it can go into the fridge ASAP. This is important with
                rice! Ya have a limited time before it could kill you! Just
                warning you!
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>jamaican rice & peas</figcaption>
                <img
                  src="/images/rice-and-peas/650x366/rice-and-peas-in-bowl-01.webp"
                  alt="rice and peas in a bowl 01"
                  title="Jamaican rice and peas"
                />
                <figcaption>with a little kick of chilli</figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>rice & peas</figcaption>
                <img
                  src="/images/rice-and-peas/650x366/jerked-pork-rice-and-peas-01.webp"
                  alt="rice and peas in a bowl 01"
                  title="Jamaican rice and peas"
                />
                <figcaption>served with jerked pork curry</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Go to my recipe page to find my jerked chicken and jerked pork
                curry recipes which make perfect mains to go with
                <strong>Jamaican Rice & Peas</strong>
              </p>

              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/jerked-pork-curry.html"
                    >jerked pork curry
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/jerk-chicken.html"
                    class="underline"
                    >jerked chicken
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