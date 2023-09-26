<?php
require_once("db-conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pathogens Collection</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&family=PT+Sans+Narrow&family=Castoro&display=swap">

    <meta name="description" content="Pathogens collection">
    <meta name="author" content="Me">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- <script defer src="js/index.js"></script> -->
</head>

<body>
    <nav>
        <div id="top-nav">
            <h1>My Favorite Pathogens</h1>
        </div>
    </nav>
    <section id="background">
        <div id="pathogens-box">
            <?php
            foreach ($pathogens as $pathogen) {
                $image_link = $pathogen['image_link'];
                $deaths_per_year = number_format($pathogen['deaths_per_year']);
                $aka = $pathogen['aka'];

                echo '<div class="card"><div>
                <img src="' . $image_link . '" alt="Image of ' . $aka . '." class="card-image">';
                echo '<p> Species: ' . $pathogen['species'] . '</p>';
                echo '<p> AKA: ' . $aka . '</p>';
                echo '<p> Class: ' . $pathogen['pathogen_classification'] . '</p>';
                echo '<p> Mortality: ' . $pathogen['mortality_rate'] . '</p>';
                echo '<p> Deaths per year : ' . $deaths_per_year . '</p>';
                echo '<p> Year: ' . $pathogen['year'] . '</p>';
                echo '<p class="gtk"> Good to know: ' . $pathogen['good_to_know'] . '</p>';
                echo '</div></div>';
            }
            ?>
        </div>
    </section>
</body>