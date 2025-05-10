<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Error | Nutty's Kitchen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


    <!-- Critical CSS -->
    <style>
        body html,
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            /* Ensure the body takes up the full viewport height */
            display: flex;
            flex-direction: column;
            /* Stack content vertically */
        }

        main {
            flex: 1;
            /* Allow main to take up the remaining space */
            display: flex;
            /* Make main a flex container */
            flex-direction: column;
            /* Put everything in the center of the screen */
            place-content: center;
            place-items: center;
        }
    </style>
</head>

<body>

    <main>
        <h1>Oops!</h1>
        <h2>404</h2>
        <p>Sorry, page not found :-(</p>
        <a href="/">Go Back to Home Page</a>
    </main>

    <?php require __DIR__ . '/../views/partials/footer.php'; ?>
</body>

</html>