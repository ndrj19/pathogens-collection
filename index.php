<?php
require_once("db-conn.php");
require_once("functions.php");
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
                echo createCard($pathogen);
            }
            ?>
        </div>
    </section>
</body>