<?php

// 1. Connect to DB and save in variable

$host = 'db';
$db = 'pathogens_collection';
$user = 'root';
$password = 'password';

$dsn = "mysql:host=$host;dbname=$db;";
// dsn = data source name

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $exception) {
    echo '<p>There was an error connecting to the db.</p>';
    exit();
}

// 2. Prepare statement

$query = $pdo->prepare(
    'SELECT `p`.`id`,
    `c`.`pathogen_classification`,
    `p`.`species`,
    `p`.`aka`,
    `p`.`mortality_rate`,
    `p`.`deaths_per_year`,
    `p`.`year`,
    `p`.`good_to_know`,
    `p`.`image_link`
    FROM `pathogens` `p`
    LEFT JOIN `pathogen_classifications` `c` ON `c`.`id` = `p`.`pathogen_classification`
    ORDER BY 3
    ;'
);

// 3. Execute the query

$query->execute();

$pathogens = $query->fetchAll();
