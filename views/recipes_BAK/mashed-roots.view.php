<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          Nutty's Kitchen's <strong>Mashed Roots</strong> side dish is a
          lighter, healthier alternative to mashed potatoes. &mdash; As it's
          using root vegetables. All the weights are solely for guidance and are
          roughly what I used. Feel free to adjust, but be sure to have equal
          swede and carrots with slightly more potatoes as we're doing this as
          an accompaniment for a dinner with no additional potatoes. A complete
          creamy mash for a winters night. We have thunder and lighting here
          today, so this will make a perfect accompaniment to my rich Roast Pork
          Stroganoff.
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Mashed Roots</strong> with pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/mashed-roots/650x366/swede-carrot-potato-mash-1.webp"
            alt="swede carrot potato mash 1"
            title="mashed roots side dish"
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
                <li>260g peeled potatoes</li>
                <li>160g peeled swede</li>
                <li>160g peeled carrot</li>
                <li>1 Tbsp salt</li>
                <li>Water to cover</li>
                <li>50g Butter</li>
                <li>50ml milk</li>
                <li>Pinch of pepper</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                Chop your vegetables into chunks, potatoes are the softest so
                leave them a little larger. Put them into a large pan so the
                veg' is just one layer, cover with cold water and add salt
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>prep' the root veg'</figcaption>
                <img
                  src="/images/mashed-roots/650x366/potatoes-carrots-swede-on-chopping-board.webp"
                  alt="potatoes carrots swede on chopping board"
                  title="vegetables for mashed roots side dish"
                />
              </div>
              <div class="spacer"></div>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Put them on a high heat until they come to the boil</li>
                <li>Lower the heat & simmer for 20 minutes</li>
                <li>Check each type of root is soft with a fork</li>
              </ol>

              <div class="spacer"></div>
              <p>
                *The age of the root vegetables determines how quickly they cook
                &mdash; the older they are, the longer they take to cook. So be
                sure to check thoroughly that they are ready to mash. If, heaven
                forbid you have stubborn swede don't panic simply remove the
                others with a drainer and mash them. Whilst continuing to cook
                the swede until tender enough &mdash; then mash that and combine
                with the other mashed veg'. I'm going to use a potato ricer then
                a whisk. This can be done with a potato masher, but I find it's
                easier with a ricer.
              </p>

              <ol>
                <li>Put the roots into a colander to drain</li>
                <li>Tip into a bowl when dry</li>
                <li>Mash down to a smooth consistency**</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>mashed roots cooling</figcaption>
                <img
                  src="/images/mashed-roots/650x366/potatoes-carrot-swede-in-a-dish.webp"
                  alt="potatoes carrots swede in a dish"
                  title="mashed root veg for mashed root side dish"
                />
              </div>
              <div class="spacer"></div>

              <p>
                **You can leave these in the bowl then reheat with your butter &
                milk when ready to serve. Just cover with cling film once
                cooled. But <em><strong>do not</strong></em> place into the
                fridge, as your mash will change consistancy. Don't ask me why,
                it's all scientific stuff ho! hum!
              </p>

              <ol>
                <li>Add butter & milk to a pan on med heat</li>
                <li>Allow the butter to melt</li>
                <li>
                  Now i keep mine aside allowed to cool & remove any steam
                </li>
                <li>
                  I,m going to reheat reducing the liquid from the swede &
                  carrots
                </li>
                <li>Then just stir & combine with a low heat.</li>
                <li>Check the seasoning add your pepper & serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>mashed roots with broccoli side</figcaption>
                <img
                  src="/images/mashed-roots/650x366/swede-carrot-potato-mash-1.webp"
                  alt="swede carrot potato mash 1"
                  title="mashed roots side dish"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->
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
