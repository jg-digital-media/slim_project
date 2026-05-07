<?php

$page_id = 'browse_page';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/../style.css">

    <title>View Quote | PHP Slim Project by JGDM</title>

</head>
<body>

    <header>

        <div class="website---titles">

            <h1>Daily Quote App</h1>
            <h2><em>A PHP Slim Project <span class="app---version"><a href="https://github.com/jg-digital-media/express_project" target="_blank">v3</a></span> </em></h2>

        </div>

        <nav>

            <a href="/" <?php if ($page_id === 'home_page') echo 'class="active"'; ?>>Home</a>
            <a href="/browse" <?php if ($page_id === 'browse_page') echo 'class="active"'; ?>>Browse</a>
            <a href="/about" <?php if ($page_id === 'about_page') echo 'class="active"'; ?>>About</a>

        </nav>

    </header>

    <main>

        <article class="view--quote_container">

            <h3>View Quote</h3>

            <div class="quote---view">

                <h4>Every expert was once a beginner.</h4>
                <p>Author 2</p>
                <a href="https://www.jonniegrieve.co.uk/quotes/quote-2" target="_blank">Link</a>

            </div>

            <div class="quote---view--more">

                <a href="/browse" target="_blank">View More Quotes</a>

            </div>

        </article>
        
    </main>

    <footer>
        <p>Daily Quote App - A PHP Slim Project by <a href="https://github.com/jg-digital-media" target="_blank">Jonnie Grieve Digital Media</a></p>
    </footer>

    <!-- <a href="https://github.com/jg-digital-media/express_site" target="_blank">Repository</a> -->
</body>
</html>