<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="We're super excited that you want to contact nutty and let her know what you think, feedback, comments, requests and suggestions welcome, tell us what you think" />

  <title>Contact Nutty | Nutty's Kitchen</title>

  <!-- Load CSS first -->
  <link rel="stylesheet" href="/styles/styles.css">

  <!-- Load fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Load logos -->
  <link rel="preload" href="/images/logo-left.svg" as="image">
  <link rel="preload" href="/images/logo-right.svg" as="image">
  <link rel="preload" href="/images/nuttys-kitchen-logo.svg" as="image">

  <!--set the image that shows in the browser tabs -->
  <link rel="icon" href="/images/icons/favicon.svg" />

  <!-- Critical CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .back-to-top {
      position: sticky;
      top: 87.5vh;
      text-align: right;
      z-index: 100;
    }
  </style>
</head>

<body>
  <?php require __DIR__. '/../views/partials/nav-main.view.php';?>

  <header class="title">

    <?php require __DIR__ . '/../views/partials/title-banner.view.php'; ?>

    <p class="fb-form head-p">
      We're super excited that you want to get in touch with us! Please
      provide your feedback in the form below
    </p>
  </header>

  <section class="justify">
    <form class="fb-form" name="feedback_form" id="feedback_form" method="post">
      <div class="wrap">
        <label class="form-label" for="feedback_comments">Comments:</label>
        <textarea class="form-control" required rows="10" name="comments" id="feedback_comments"
          placeholder="We welcome any feedback, comments, requests or suggestions & only ask for your email address so that we can respond to you directly, it will not be used for marketing purposes or passed on to any third party"></textarea>
      </div>

      <div class="row">
        <div class="wrap">
          <label class="form-label" for="feedback_name">Your Name:</label>
          <input type="text" required name="name" class="form-control" id="feedback_name" />
        </div>

        <div class="wrap row">
          <label class="form-label" for="feedback_email">Email:</label>
          <input type="email" name="email" required class="form-control" id="feedback_email" />
        </div>
      </div>

      <button type="submit" class="btn btn-success btn-lg">Post</button>
    </form>
  </section>

  <?php require __DIR__ . '/../views/partials/footer.php'; ?>

  <script src="./src/app.js"></script>
  <script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?f=vani7lyv&n=n1.ratufa.io"></script>
</body>

</html>