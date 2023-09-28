<?php

require_once("db-conn.php");

$query = $pdo->prepare(
    'SELECT DISTINCT `pathogen_classification` FROM `pathogen_classifications` ORDER BY 1;'
);

$query->execute();

$pathogen_classifications = $query->fetchAll();

$intClasses = [];

for ($i = 1; $i <= count($pathogen_classifications); $i++) {
    $intClasses[$pathogen_classifications[$i - 1]["pathogen_classification"]] = $i;
}

$classifications = [];

for ($i = 0; $i < count($pathogen_classifications); $i++) {
    $classifications[] = $pathogen_classifications[$i]["pathogen_classification"];
}
