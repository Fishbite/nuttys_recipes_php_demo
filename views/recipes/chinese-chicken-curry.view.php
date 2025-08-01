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
          Now if you know Nutty's kitchen, I am always banging on about make
          your own paste's ect ect....Well here I break my own hard set rules.
          Why you scream! Well if you can buy a paste that really works to make
          a fast & easy <strong>Chinese Chicken Curry</strong> then do it! We
          have made numerous attempts to create this paste at home & tbh the
          faff & disappointment did not pay off. Dinner's ready in 30 minutes.
          We have for many years used
          <em
            >"Keejays Goldfish brand
            <strong>Chinese Chicken Curry</strong> paste"</em
          >
        </p>

        <p>
          You can buy this in most decent Indian or Chinese shops & also
          Amazon&trade; stocks it. The pot will serve 8 individual curries & it
          costs just over £3 from our local independant, so if your after a
          <em>Home Away</em> that's really easy, and I believe a 6 year old
          could easily make this! So, here it is:-
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Chinese Chicken Curry</strong> along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chinese-chicken-curry/650x366/chinese-chicken-curry-and-rice-01.webp"
            alt="chinese chicken curry and rice"
            title="chinese chicken curry and rice - just like the takeaway does it!"
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
                <li>100g Keejays Goldfish brand Chinese Chicken Curry paste</li>
                <li>300ml boiling water</li>
                <li>2 Tbls vegetable oil</li>
                <li>1 medium onion roughly chopped</li>
                <li>1 tsp hot chilli powder (optional)</li>
                <li>350g diced chicken thighs</li>
                <li>150g small white mushrooms halved</li>
                <li>50g frozen peas</li>
              </ul>

              <div class="spacer"></div>

              <p>
                If you wish to make this for 4 double everything above, 6 &
                treble, 8 & well simples quadruple :-)
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
                So! This is <strong>Chinese Chicken Curry</strong> just like the
                takeaway does it. And no, they don't make their own curry pastes
                either, I know, I've checked!
              </p>
              <p>
                Gather everything together and get it prep'd as this cooks at
                speed. Once you've done that you can put your rice or chips on
                to cook. By the time they're done, so will be your curry ::-)
              </p>

              <!-- Method List Goes Below Here!!! -->
              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for chinese chicken curry"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Boil the kettle measure out 300ml & add the 100g paste</li>
                <li>Stir to combine slightly</li>
                <li>
                  Heat a heavy based wok to <strong>Very Hot</strong> & add oil
                </li>
                <li>
                  Once hot add onions & stir fry like mad person so onions just
                  soften and not brown
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>onions softened</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/onions-softened.webp"
                  alt="onions softened"
                  title="onions softened for chinese chicken curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>Add in your mushrooms & stir fry like mad person</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add mushrooms</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/mushrooms-cooking-with-onions.webp"
                  alt="mushrooms cooking with onions"
                  title="mushrooms cooking with onions for chinese chicken curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>Add chilli powder if using, add chicken & stir fry</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add chicken</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/chicken-added-to-wok.webp"
                  alt="chicken added to wok"
                  title="chicken added to wok for chinese chicken curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Add your sauce mix & stir through</li>
                <li>If it looks a little to thick add a little more water*</li>
              </ol>

              <div class="spacer"></div>

              <p>*Just note: more water, less taste!</p>
              <div class="card_image">
                <figcaption>add curry sauce</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/curry-sauce-added.webp"
                  alt="curry sauce added"
                  title="curry sauce added to wok for chinese chicken curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  Sprinkle over your peas & set a timer for 10mins or until
                  cooked
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add peas</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/chicken-and-mushroom-curry-peas-added-02.webp"
                  alt="chicken and mushroom curry pease added"
                  title="peas added to wok for chinese chicken curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  Cover & simmer gently while your rice or chips finish cooking!
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chinese chicken curry paste</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/curry-paste.webp"
                  alt="curry paste"
                  title="Keejays Goldfish brand Chinese Chicken Curry paste"
                />
                <figcaption>...as used at the takeaway</figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>chinese chicken curry & rice</figcaption>
                <img
                  src="/images/chinese-chicken-curry/650x366/chinese-chicken-curry-and-rice-01.webp"
                  alt="chinese chicken curry and rice"
                  title="chinese chicken curry and rice, jugust like the takeaway does it"
                />
                <figcaption>...just like the takeaway does it!</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                We didn't have to add the mushrooms to our
                <strong>Chinese Chicken Curry</strong>, but we just love it like
                that over at <em><strong>Nuttys Kitchen!</strong></em> We hope
                you enjoy it too, it's a fab favourite when we want a real treat
                with minimal effort ;¬) Enjoy!
              </p>

              <p>
                If you fancy chips! Do chips! With of course &mdash; salt &
                vinegar, I tend to use bone in chicken legs for
                <strong>Chinese Chicken Curry</strong> & chips ;-) Same process
                just increase the cooking time to 30 to 40 minutes & check they
                are cooked through
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
                    href="https://www.nuttyskitchen.co.uk/spring-onion-chicken.html"
                    >spring onion chicken
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/mushroom-chow-mein.html"
                    class="underline"
                    >mushroom chow mein
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