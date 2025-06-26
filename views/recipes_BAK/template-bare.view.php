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
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus,
          quis.
        </p>

        <!-- Final paragraph before 2 col layout -->
        <p>
          Click the <strong>Method</strong> tab below to see a step-by-step
          guide on how to make <strong>RecipeNameHere</strong> along with some
          pictures as a guide.
        </p>
      </header>

      <!-- ######## Two column layout colapses into one on small screens -->
      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the final paragraphs -->
        <!--  - img on left, ingredients/method tabs on right  -->
        <figure class="about-img">
          <img
            src="/images/sausagepepperpie/sausageandpepperpie03.jpg"
            alt="sausage and pepper pie"
            title=""
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
              <h2>serves ?</h2>
              <ul>
                <li>list item</li>
                <li>list item</li>
                <li>list item</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <!-- The method tab  does not have the class `active` by default, thus it is hidden from view. When the user clicks
            the "Method" tab the `active` class is applied here and
            removed from the "Ingredients" tab, which is then hidden
            from view
             -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                Description about the method here please!!! Poutine etsy tote
                bag, cred fingerstache leggings cornhole everyday carry blog
                gastropub. Brunch biodiesel sartorial mlkshk swag, mixtape
                hashtag marfa readymade direct trade man braid cold-pressed roof
                party. Small batch adaptogen coloring book heirloom. Letterpress
                food truck hammock literally hell of wolf beard adaptogen
                everyday carry. Dreamcatcher pitchfork yuccie, banh mi salvia
                venmo photo booth quinoa chicharrones.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <!-- If you need to break the list to insert an image
                   or paragraph, make sure to close the list:
                  
                   This list numbering starts at "1"

                  <ol>
                    <li>list content here</li>
                    <li>list content here</li>
                  </ol>

                  <p>inserted paragraph or image here</p>

                  Then restart the method list with a `start` parameter
                  to tell the list what the first number should be:

                  This list numbering starts at "3":

                  <ol start="3">
                    <li>More list content here</li>
                    <li>More list content here</li>
                  </ol>
                
                -->

              <ol>
                <li>do this</li>
                <li>do that</li>
              </ol>

              <!-- 
                   Image with spacers before and after, you can copy and
                   paste this and change the details to point to a new
                   image.

                   NOTE: The `alt` & `title` parameters are REALLY
                   important for Google and disabled folks! The text in
                   the `alt` parameter should be exactly the same as the 
                   descriptive filename but without the dashes!
                   Use the title to push the key words of the page.
                   e.g. "sausage pasta" in this instance!
              -->
              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>brown sausages</figcaption>
                <img
                  src="/images/sausagepasta/650x366/sausage-browning-in-pan-02.jpg"
                  alt=""
                  title=""
                />
              </figure>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't mess with the closing tags or anything below here!!! -->
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
