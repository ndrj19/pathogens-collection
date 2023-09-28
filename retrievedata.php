<?php

require_once("db-conn.php");

// Prepare statement

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

// Execute the query

$query->execute();

$pathogens = $query->fetchAll();
