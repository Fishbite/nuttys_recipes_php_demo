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
          With the festive season rapidly approaching, I made this delicious
          <strong>Tomato Chutney</strong> especially as an accompaniment to my
          <em>sausage roll & caramalised onion</em> but, believe me, it will go
          with anything that you would use tomato ketchup or relish for, such
          as, chips, burgers, pork pies, sausages, you name it! It's a perfect
          match and so much tastier than anything you can buy in the shops. And
          as a Nutty bonus, it's really easy to make! And, it only takes about
          25 - 30 minutes to cook!
        </p>
        <p>
          I do encourage you to have a go at making this, it's really special,
          you will not be dissapointed, I promise :-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make this <strong>Tomato Chutney</strong> along with some pictures
          as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <figure class="about-img">
          <img
            src="/images/tomato-chutney/650x366/tomato-chutney-in-jars-03.webp"
            alt="tomato-chutney-in-jars"
            title="tomato chutney in storage jars"
          />
        </figure>

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
              <h2>Makes about 900ml</h2>
              <ul>
                <li>
                  2 x 400g tinned tomatoes drained & chopped - save the juices
                </li>
                <li>6 Tbsp veg oil</li>
                <li>5cm cinnamon stick</li>
                <li>4 cloves</li>
                <li>1 tsp cumin seeds - freshly roasted</li>
                <li>1 tsp nigela seeds</li>
                <li>4 bay leaves</li>
                <li>1 tsp mustard seeds</li>
                <li>4 garlic cloves - crushed</li>
                <li>5cm ginger - crushed</li>
                <li>1 tsp chilli powder</li>
                <li>1tsp turmeric</li>
                <li>1 Tbsp brown sugar*</li>
                <li>1 tsp salt</li>
              </ul>

              <div class="spacer"></div>

              <p>
                * If you like a <em>sweet chutney</em>, simply add up to three
                more tablespoons of sugar, personally, I prefer my chutney a
                little on the tangy side, but, whatever your preference, just
                taste and adjust as you are cooking!
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
              <h2>method</h2>
              <p>
                If you intend on storing your finished
                <strong>Tomato Chutney</strong> for more than a few days, you
                will need to steralise some storage jars, so, rather than me
                <em>re-inventing the wheel</em>, so to speak, here's an
                excellent link for the
                <a
                  href="https://preserveandpickle.com/sterilise-jars-preserving/"
                  target="_blank"
                  class="underline"
                  ><strong>steralising process</strong></a
                >. Otherwise, you can keep the chutney in suitable containers
                for about four to five days.
              </p>
              <p>
                I used tinned tomatoes to make this
                <strong>Tomato Chutney</strong>, so all you need to do is drain
                the juices into a pan to reduce, chop the tomatoes ready for
                cooking, fry the spices and combine everything together and cook
                for around 20 mins. Simples!
              </p>

              <p>So, gather all your ingredients and get ready to cook!</p>

              <figure class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for tomato chutney"
                />
              </figure>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>drain the tinned tomato juices into a pan</li>
                <li>
                  simmer until reduced to a thick paste &mdash; about 1/4 of the
                  original volume
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>reduced tomato juices</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/tomato-juice-reducing-02.webp"
                  alt="tomato juice reducing"
                  title="tomato juice reducing for tomato chutney"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="3">
                <li>chop the tomatoes while spices are frying, see below</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>chop the tomatoes</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/chopped-tomatoes-on-a-board.webp"
                  alt="chopped tomatoes on a board"
                  title="chopped tomatoes on a board for tomato chutney"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="4">
                <li>in a heavy bottomed pan, heat the oil to med heat</li>
                <li>
                  add cinnamon, cloves, toasted cumin, nigela & mustard seeds
                </li>
                <li>add bay leaves & fry for 5 mins</li>
                <li>add garlic & fry until golden</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>fry the spices</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/whole-spices-frying.webp"
                  alt="whole spices frying"
                  title="whole spices frying for tomato chutney"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="8">
                <li>add ginger, chilli powder, sugar & salt</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>fried spices</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/fried-spices-in-a-pan.webp"
                  alt="fried spices in a pan"
                  title="fried spices in a pan for tomato chutney"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  tip the spices into the reduced tomato juice & stir well
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add spices to the reduced tomato juice</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/fried-spices-added-to-reduced-tomato-juice.webp"
                  alt="fried-spices-added-to-reduced-tomato-juice"
                  title="fried-spices-and-tomato-juice-for-tomato-chutney"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="10">
                <li>add the tomatoes, stir well to combine everything</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add the tomatoes</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/tomatoes-added-to-spiced-juice-in-a-pan.webp"
                  alt="tomatoes-added-to-spiceed-juice-in-a-pan"
                  title="tomatoes-added-to-spiced-juice-for-tomato-chutney"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="11">
                <li>cook for about 20 mins on a low - med heat</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>cook for 20 mins</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/tomato-chutney-cooking-in-pan.webp"
                  alt="tomato chutney cooking in pan"
                  title="ttomato chutney cooking in a pan"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="12">
                <li>allow to cool</li>
                <li>
                  transfer into steralised storage jars - or serve immediately
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image_round">
                <figcaption>transfer to storage jars</figcaption>
                <img
                  src="/images/tomato-chutney/650x366/tomato-chutney-in-jars-02.webp"
                  alt="tomato-chutney-in-jars"
                  title="tomato chutney in storage jars"
                />
              </figure>
              <div class="spacer"></div>

              <p>
                Something special, for those extra special moments... that you
                love to share.
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
                    href="https://www.nuttyskitchen.co.uk/christmas-prepared.html"
                    class="underline"
                    >christmas prepared
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