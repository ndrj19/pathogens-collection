<?php

function createCard(array $pathogen): string
{
    if (gettype($pathogen) !== "array") {
        throw new TypeError("Input not an array");
    }

    $image_link = $pathogen['image_link'];
    $deaths_per_year = number_format($pathogen['deaths_per_year']);
    $aka = $pathogen['aka'];

    $cardHtml = '';

    $cardHtml .= '<div class="card"><div><img src="' . $image_link . '" alt="Image of ' . $aka . '." class="card-image">'
        . '<p> Species: ' . $pathogen['species'] . '</p>'
        . '<p> A.k.a: ' . $aka . '</p>'
        . '<p> Class: ' . $pathogen['pathogen_classification'] . '</p>'
        . '<p> Mortality: ' . $pathogen['mortality_rate'] . '</p>'
        . '<p> Deaths per year : ' . $deaths_per_year . '</p>'
        . '<p> Year: ' . $pathogen['year'] . '</p>'
        . '<p class="gtk"> Good to know: ' . $pathogen['good_to_know'] . '</p>'
        . '</div></div>';
    return $cardHtml;
}