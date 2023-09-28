<?php

require_once("db-conn.php");
require_once("pathogen-classifications.php");


$species = $_POST['species'];
$aka = $_POST['aka'];

$classification = $_POST['classification'];
$intClass = $intClasses[$classification];

$mortality = $_POST['mortality'];
$deathsPerYear = filter_var($_POST['deathsPerYear'], FILTER_SANITIZE_NUMBER_INT);
$year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
$goodToKnow = $_POST['goodToKnow'];
$imageLink = $_POST['imageLink'];

if (
    filter_var($deathsPerYear, FILTER_VALIDATE_INT) &&
    filter_var($year, FILTER_VALIDATE_INT)
) {

    // Prepare statement

    $query = $pdo->prepare(
        'INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) 
        VALUES (:newPathogenClassification, :newSpecies, :newAka, :newMortalityRate, :newDeathsPerYear, :newYear, :newGoodToKnow, :newImageLink);'
    );

    $query->bindParam(':newPathogenClassification', $intClass);
    $query->bindParam(':newSpecies', $species);
    $query->bindParam(':newAka', $aka);
    $query->bindParam(':newMortalityRate', $mortality);
    $query->bindParam(':newDeathsPerYear', $deathsPerYear);
    $query->bindParam(':newYear', $year);
    $query->bindParam(':newGoodToKnow', $goodToKnow);
    $query->bindParam(':newImageLink', $imageLink);

    // Execute the query

    $query->execute();

    // Redirect to homepage

    header('Location: index.php');
} else {
    echo 'There was an issue with you input';
}
