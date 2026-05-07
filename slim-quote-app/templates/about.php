<?php

$page_id = 'about_page';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>View Quote | PHP Slim Project by JGDM</title>

</head>
<body>

    <header>

        <div class="website---titles">

            <h1>Daily Quote App</h1>
            <h2><em>A PHP Slim Project <span class="app---version"><a href="https://github.com/jg-digital-media/express_project" target="_blank">v5</a></span> </em></h2>

        </div>

        <nav>

            <a href="index.php" <?php if ($page_id === 'home_page') echo 'class="active"'; ?>>Home</a>
            <a href="browse.php" <?php if ($page_id === 'browse_page') echo 'class="active"'; ?>>Browse</a>
            <a href="about.php" <?php if ($page_id === 'about_page') echo 'class="active"'; ?>>About</a>

        </nav>

    </header>

    <main>

        <article class="about---daily--quoteapp_container">

            <h3>About the Daily Quote App</h3>

             <p>This is a simple application that loads a daily motivational or historical quote from a JSON source.  It's written in the Slim Framework with PHP.  It links with a matching project written in Express.js with Node in JavaScript. </p>

            <p>Daily Quote App is a working desktop application that handles input, state, and data persistence.</p>
                
             <!-- <p>The dark colourings of the scrapes are the leavings of natural rubber, a type of non-conductive <a href="https://github.com/jg-digital-media/express_project" class="daily---quote--link" target="_blank">sole used by researchers experimenting with electricity</a>. The molecules must have been partly de-phased by the anyon beam.</p> 
             
            <a href="https://github.com/jg-digital-media/express_project" class="daily---quote--link" target="_blank">set-up</a>
            
            -->

        </article>
        
    </main>

    <footer>
        <p>Daily Quote App - A PHP Slim Project by <a href="https://github.com/jg-digital-media" target="_blank">Jonnie Grieve Digital Media</a></p>
    </footer>

    <!-- <a href="https://github.com/jg-digital-media/express_site" target="_blank">Repository</a> -->
</body>
</html>