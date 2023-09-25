<?php

// 1. Connect to DB and save in variable

$host = 'db';
$db = 'iostaff';
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
    // type hint
    echo '<p>There was an error connecting to the db.</p>';
    exit();
}

// 2. Prepare statement

$query = $pdo->prepare(
    'SELECT `p`.`id`, `p`.`NAME`, `l`.`NAME` AS location, `c`.`NAME` AS colour
        FROM `people` `p`
        LEFT JOIN `locations` `l` ON `l`.`id` = `p`.`location`
        LEFT JOIN `colours` `c` ON `c`.`id` = `p`.`fav_colour`
;'
);

// 3. Execute the query

$query->execute();

$staffers = $query->fetchAll();

echo '<h1>Staff members</h1>';
echo '<ul>';
foreach ($staffers as $staffer) {
    echo '<li>' . $staffer['NAME'] . ' - ' . $staffer['location'] . ' - ' . $staffer['colour'] . '</li>';
}
echo '</ul>';
