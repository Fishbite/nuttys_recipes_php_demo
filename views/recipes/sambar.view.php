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
        <h2>South Indian Lentils & Vegetables</h2>
        <p>
          <strong>Sambar &mdash; South Indian Lentils and Vegetables</strong>
          This is a truely delicious vegetable heavy dish. Kind of a soup but oh
          so much more, tamarind brings a tart sweet note to the sauce and it
          just has to be tried. Seasoning is important and chopping is key you
          need to prepare well to have a sucessful dish. Each vegetable needs
          cutting to a similar size and timing is paramount. But do not be
          daunted follow the steps in the Ingredients then the method and trust
          me it'll be worth it. In India it is eaten for breakfast with Dosai
          (Pancakes)or Idli (Dumplings) but I will happily go for a shop brought
          Naan as I have worked hard enough already. Or I might just opt for
          another bowl ;-) Be calm and collect your thoughts, get your big pants
          on
          <img
            src="/images/icons/pants.png"
            alt="pants image"
            title="big pants!"
            style="width: 24px"
            class="inline"
          />
          and lets cook!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make
          <strong>Sambar &mdash; South Indian Lentils and Vegetables</strong>
          along with some pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/sambar/650x366/sambar-with-naan-on-the-side.webp"
            alt="sambar with naan on the side"
            title="sambar - south Indian lentils & vegetables with naan on the side"
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
              <h2>Serves 8</h2>

              <h2>Ingredients for the spice base</h2>

              <ul>
                <li>4 Tbsp vegetable oil</li>
                <li>4 dried red chillies</li>
                <li>1/2 tsp cumin seeds</li>
                <li>1/2 tsp brown mustard seeds</li>
                <li>2 Tbsp desicated coconut</li>
                <li>1/4 tsp asafoetida (Hing powder)</li>
                <li>10 fresh or frozen curry leaves</li>
                <li>2 cloves garlic crushed</li>
                <li>4 Tbsp sambar masala</li>
                <li>1/2 tsp turmeric</li>

                li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients for the lentils</h2>

              <ul>
                <li>225g split red lentils washed & soaked</li>
                <li>450ml cold water x 2*</li>
              </ul>

              <p>
                *add 450ml to the lentils to cook them initially. Then have
                another 450ml ready in a kettle to top up the dish as it absorbs
                water and you are adding your vegetables
              </p>

              <h2>Ingredients for the vegetables</h2>

              <p>Total weight of the vegetables is 1 kilo</p>

              <ul>
                <li>1/2 a medium cauliflower broken into small florettes</li>
                <li>200g small shallots peeled & halved</li>
                <li>100g green beans topped & cut in half</li>
                <li>
                  1 courgette cut in half & sliced to finger width when ready to
                  add!
                </li>
                <li>
                  1 aubergine cut into 4 & sliced to finger width when ready to
                  add!
                </li>
                <li>1/2 red bell pepper</li>
                <li>1/2 green bell pepper</li>
                <li>1/2 yellow bell pepper</li>
                <li>3 large plum tomatoes quartered & halved</li>
                <li>3 Tbsp tamarind concentrate</li>
                <li>1 tsp sea salt ground</li>
                <li>1 tsp black pepper ground</li>
                <li>1 level tsp sea salt ground / to taste</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients for the separate fry</h2>

              <ul>
                <li>4 Tbsp vegetable oil</li>
                <li>2 cloves garlic sliced</li>
                <li>fresh cauliflower leaves chopped</li>
                <li>4 Tbsp fresh corriander</li>
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
                Before we start find your biggest deepest pan, I do mean biggest
                as this dish once complete will feed 8 people. Have everything
                out and organised for each stage of the cook. Measure all your
                spices out. Cut all your vegetables bar the courgette &
                aubergine as they go brown / spoil quickily. Relax and enjoy the
                cook. We are not going to stress as I've got me big pants on
                <img
                  src="/images/icons/pants.png"
                  alt="pants image"
                  title="big pants!"
                  style="width: 24px"
                  class="inline"
                />
                and broken the dish down into stages &mdash; so no Nutty's
                stress monsters today!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the spice base</h2>
              <p>
                So, I've split the ingredients down into what you need for each
                stage of the cooking process.
              </p>

              <div class="card_image">
                <figcaption>spice base ingredients</figcaption>
                <img
                  src="/images/sambar/650x366/ingredients-spice-base.webp"
                  alt="ingredients spice base"
                  title="ingredients for the spice base of Sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Heat your heavy based large pan to hot & add oil</li>
                <li>
                  Allow the oil to shimmer add 4 dried red chillies 1/2 tsp
                  cumin seeds 1/2 tsp brown mustard seeds 2 Tbsp desicated
                  coconut 1/4 tsp asafoetida (Hing) 10 fresh or frozen curry
                  leaves & 2 cloves garlic crushed
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry the spice base</figcaption>
                <img
                  src="/images/sambar/650x366/spice-base-frying.webp"
                  alt="spice base frying"
                  title="spice base frying for Sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  allow these to fry until the garlic has browned & the spices
                  can clearly be smelt
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown the spices</figcaption>
                <img
                  src="/images/sambar/650x366/spice-base-browned.webp"
                  alt="spice base browned"
                  title="spice base browned for Sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>next add your 4 Tbsp sambar masala & 1/2 tsp turmeric</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add sambar masala & turmeric</figcaption>
                <img
                  src="/images/sambar/650x366/sambar-masala-added.webp"
                  alt="sambar masala added"
                  title="sambar masala added to Sambar spice base"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  add 225g split red lentils washed soaked & drained stir fry to
                  combine all the spices with the lentils & pour in 450ml cold
                  water
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add the soaked lentils</figcaption>
                <img
                  src="/images/sambar/650x366/lentils-added.webp"
                  alt="lentils added"
                  title="lentils added for sambar"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add 450ml water</figcaption>
                <img
                  src="/images/sambar/650x366/water-added.webp"
                  alt="water added"
                  title="water added to lentils for sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  cover allow to come to the boil then set a timer for 20
                  minutes
                </li>
                <li>
                  easiest way to test is to pop a small amount in your mouth if
                  they feel grainy hard continue to cook
                </li>
                <li>
                  check to see they are softened but not completely mush and
                  move onto the next stage
                </li>
              </ol>

              <div class="spacer"></div>

              <h2>Method for the vegetables</h2>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>vegetable ingredients</figcaption>
                <img
                  src="/images/sambar/650x366/ingredients-vegetables.webp"
                  alt="ingredients vegetables"
                  title="vegetable ingredients for sambar"
                />
              </div>
              <div class="spacer"></div>

              <p>
                You need 1 kilo of vegetables in total the order & timing is now
                crucial to the finished dish so add in as listed in Ingredients.
                If you want to add say potatoes do them first until cooked
                carrots next then cauliflower. This is your dish after all so
                feel free to improvise.
              </p>

              <ol>
                <li>
                  add 200g small shallots peeled & halved & 1/2 a medium
                  cauliflower broken into small florettes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add shallots</figcaption>
                <img
                  src="/images/sambar/650x366/shallots-added.webp"
                  alt="shallots added"
                  title="shallots added for sambar"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cauliflower</figcaption>
                <img
                  src="/images/sambar/650x366/cauliflower-added.webp"
                  alt="cauliflower added"
                  title="cauliflower added for sambar"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir well</figcaption>
                <img
                  src="/images/sambar/650x366/sambar-stirred.webp"
                  alt="sambar stirred"
                  title="sambar stirred to coat vegetables"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  set a timer for 10 minutes and add boiling water just to cover
                  the veg & stir to combine
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add water & boil for 10 mins</figcaption>
                <img
                  src="/images/sambar/650x366/water-added-to-stirred-sambar.webp"
                  alt="water added to stirred sambar"
                  title="water added to stirred sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  add in 100g green beans topped & cut in half & stir to combine
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add green beans</figcaption>
                <img
                  src="/images/sambar/650x366/green-beans-added.webp"
                  alt="green beans added"
                  title="green beans added for sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  Cut your 1 courgette sliced to finger width & aubergine sliced
                  to finger width
                </li>
                <li>
                  check there is still enough water to cook the next stage
                </li>
                <li>
                  add the courgette & aubergine to the & pan stir to combine
                  then set a timer again for 10 minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add courgette</figcaption>
                <img
                  src="/images/sambar/650x366/courgette-added.webp"
                  alt="courgette added"
                  title="courgette added for sambar"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add aubergine, cover & cook for 10 mins</figcaption>
                <img
                  src="/images/sambar/650x366/aubergine-added.webp"
                  alt="aubergine added"
                  title="aubergine added for sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  now you can add 1/2 red bell pepper 1/2 green bell pepper &
                  1/2 yellow bell pepper then stir to combine & set the timer
                  for 5 minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add bell peppers</figcaption>
                <img
                  src="/images/sambar/650x366/bell-peppers-added.webp"
                  alt="bell peppers added"
                  title="bell peppers added for sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>add 3 large plum tomatoes quartered & halved</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes</figcaption>
                <img
                  src="/images/sambar/650x366/tomatoes-added.webp"
                  alt="tomatoes added"
                  title="tomatoes added for sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  continue to cook until the peppers are to your liking texture
                  wise
                </li>
                <li>
                  add your tamarind paste allowing each Tbsp to disperse into
                  the sauce
                </li>
                <li>
                  taste & add another until you are happy with the result*
                </li>
                <li>
                  now we need to assess salt content as the sambar powder has
                  salt in it, so first taste the sauce then taste a piece of
                  vegetables
                </li>
                <li>
                  I like to get a second opinion at this point and then add 1
                  level tsp
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                *I add 3 Tbsp tamarind but you may prefer more or even less as
                this is a matter of individual taste buds
              </p>

              <h2>Method for the separate fry</h2>

              <div class="card_image">
                <figcaption>ingredients to fry</figcaption>
                <img
                  src="/images/sambar/650x366/ingredients-to-fry.webp"
                  alt="ingredients to fry"
                  title="ingredients to fry for sambar"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Use a small frying pan / egg pan here on a high heat and be
                carefull as it could & probably will spit furiously. (I know I
                did this yesterday and it hurts when hot fat hits bare arms! I
                even Nutty know it spits but still I do it again & again in a
                Tshirt )
              </p>

              <ol>
                <li>add 4 Tbsp vegetable oil allow it to shimmer hot</li>
                <li>now add your 2 cloves garlic sliced</li>
                <li>add fresh cauliflower leaves chopped</li>
                <li>add 4 Tbsp fresh or thawed coriander</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry in a small pan</figcaption>
                <img
                  src="/images/sambar/650x366/ingredients-frying.webp"
                  alt="ingredients frying"
                  title="ingredients frying to add to sambar"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  allow all to fry until the garlic is browned then pour across
                  your large sambar pan
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry until garlic is browned</figcaption>
                <img
                  src="/images/sambar/650x366/ingredients-fried.webp"
                  alt="ingredients fried"
                  title="ingredients fried to add to sambar"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add to the sambar</figcaption>
                <img
                  src="/images/sambar/650x366/fried-ingredients-added-to-sambar.webp"
                  alt="fried ingredients added to sambar"
                  title="fried ingredients added to sambar"
                />
              </div>
              <div class="spacer"></div>

              <p>
                See simples Sambar I told you you could do this dish and not
                stress! Wipe down the hob grab your favorite Indian bread &
                enjoy the rewards for you efforts :-)
              </p>

              <div class="card_image">
                <figcaption>the cooked sambar</figcaption>
                <img
                  src="/images/sambar/650x366/sambar-cooked.webp"
                  alt="sambar cooked"
                  title="cooked sambar in a large pan"
                />
              </div>
              <div class="spacer"></div>

              <h2>Serving suggestion</h2>

              <p>
                <strong>Sambar South Indian Lentils and vegetables</strong>
                served with a freshly toasted Naan
              </p>

              <div class="card_image_round">
                <figcaption>
                  Sambar South Indian Lentils and vegetables
                </figcaption>
                <img
                  src="/images/sambar/650x366/sambar-with-naan-on-the-side.webp"
                  alt="sambar with naan on the side"
                  title="sambar - south Indian lentils & vegetables with naan on the side"
                />
                <figcaption>...with naan on the side</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                You can keep this for about 3 days depending on your fridge
                temperature & the freshness of your vegetables. After it starts
                to split out (The veg get a bit mushy and water releases) you
                can then stick blend it to a smooth soup / dhal dish. Use for
                one more day or freeze for another day.
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
                    href="https://www.nuttyskitchen.co.uk/masala-veg-with-fresh-fenugreek.html"
                    >masala veg with fresh fenugreek
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/dhal-with-fried-spices.html"
                    class="underline"
                    >dhal with fried spices
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