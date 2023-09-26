<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template</title>

    <meta name="description" content="Pathogens collection">
    <meta name="author" content="Me">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- <script defer src="js/index.js"></script> -->
</head>

</html>

<?php

require_once("db-conn.php");

echo '<h1>Pathogens</h1>';
echo '<ul>';
foreach ($pathogens as $pathogen) {
    echo '<li>' . $pathogen['species'] . ' - ' . $pathogen['aka'] . '</li>';
}
echo '</ul>';

?>