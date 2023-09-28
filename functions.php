<?php

function createCard(array $pathogen): string
{
    if (gettype($pathogen) !== "array") {
        throw new TypeError("Input not an array");
    }

    if ($pathogen === []) {
        throw new InvalidArgumentException("Input array cannot be empty");
    }

    $image_link = $pathogen['image_link'];
    $deaths_per_year = number_format($pathogen['deaths_per_year']);
    $aka = $pathogen['aka'];

    $cardHtml = '';

    $cardHtml .= '<div class="card"><div><img src="' . $image_link . '" alt="Image of ' . $aka . '." class="card-image">'
        . '<p> Species: ' . $pathogen['species'] . '</p>'
        . '<p> A.k.a: ' . $aka . '</p>'
        . '<p> Classification: ' . $pathogen['pathogen_classification'] . '</p>'
        . '<p> Mortality: ' . $pathogen['mortality_rate'] . '</p>'
        . '<p> Deaths per year : ' . $deaths_per_year . '</p>'
        . '<p> Year: ' . $pathogen['year'] . '</p>'
        . '<p class="gtk"> Good to know: ' . $pathogen['good_to_know'] . '</p>'
        . '</div></div>';
    return $cardHtml;
}

function validFormInputs(int $deathsPerYear, int $year, string $imageLink): bool
{
    $optionsDPR = [
        'options' => array('min_range' => 0)
    ];
    $optionsY = [
        'options' => array('min_range' => 1000)
    ];
    return
        filter_var($deathsPerYear, FILTER_VALIDATE_INT, $optionsDPR) &&
        filter_var($year, FILTER_VALIDATE_INT, $optionsY) &&
        filter_var($imageLink, FILTER_VALIDATE_URL);
}
