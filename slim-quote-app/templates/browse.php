<?php

$page_id = 'browse_page';
$basepath = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?= $basepath ?>./style.css">

    <title>Quotes List | A PHP Slim Project by JGDM</title>

</head>
<body>

    <header>

        <div class="website---titles">

            <h1>Daily Quote App</h1>
            <h2><em>A PHP Slim Project <span class="app---version"><a href="https://github.com/jg-digital-media/express_project" target="_blank">v4</a></span> </em></h2>

        </div>

        <nav>

            <a href="<?= $basepath ?>/" <?php if ($page_id === 'home_page') echo 'class="active"'; ?>>Home</a>
            <a href="<?= $basepath ?>/browse" <?php if ($page_id === 'browse_page') echo 'class="active"'; ?>>Browse</a>
            <a href="<?= $basepath ?>/about" <?php if ($page_id === 'about_page') echo 'class="active"'; ?>>About</a>

        </nav>

    </header>

    <?php

    // get and retriece quotes list data
    $quotesListPath = __DIR__ . '/../public/data/quotes.json';
    $quotesList = [];
    if (is_readable($quotesListPath)) {
        $quotesJson = json_decode((string) file_get_contents($quotesListPath), true);
        if (is_array($quotesJson)) {
            $quotesList = $quotesJson;
        }
    }
    ?>

    <main>

        <article class="quote---list--container">

            <h3>Quotes List</h3>

            <?php foreach ($quotes as $q): ?>

                <div class="quote---list--item">
                
                    <h4>
                        <?php echo $q['quote']; ?>
                    </h4>
                    
                    <a href="/browse/<?php echo $q['id']; ?>" class="quote---view--more">View More</a>
                
                </div>

            <?php endforeach; ?>

        </article>
        
    </main>

    <footer>
        <p>Daily Quote App - A PHP Slim Project by <a href="https://github.com/jg-digital-media" target="_blank">Jonnie Grieve Digital Media</a></p>
    </footer>

    <!-- <a href="https://github.com/jg-digital-media/express_site" target="_blank">Repository</a> -->
</body>
</html>