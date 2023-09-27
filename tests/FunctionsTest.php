<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    // Success test

    public function testCreateCardGivenArrayReturnString()
    {
        // Arrange
        $input = array(
            "id" => 15,
            "pathogen_classification" => "Fungi",
            "species" => "Aspergillus fumigatus",
            "aka" => "Aspergillus",
            "mortality_rate" => "25-90% in immunosuppressed",
            "deaths_per_year" => 600,
            "year" => 2017,
            "good_to_know" => "A. fumigatus only reproduces asexually.",
            "image_link" => "https://i.ibb.co/qFcWjSt/Aspergillus.jpg"
        );

        $expected = '<div class="card">'
            . '<div>'
            . '<img src="https://i.ibb.co/qFcWjSt/Aspergillus.jpg" alt="Image of Aspergillus." class="card-image">'
            . '<p> Species: Aspergillus fumigatus</p>'
            . '<p> A.k.a: Aspergillus</p>'
            . '<p> Class: Fungi</p>'
            . '<p> Mortality: 25-90% in immunosuppressed</p>'
            . '<p> Deaths per year : 600</p>'
            . '<p> Year: 2017</p>'
            . '<p class="gtk"> Good to know: A. fumigatus only reproduces asexually.</p>'
            . '</div>'
            . '</div>';

        // Act
        $result = createCard($input);

        // Assert
        $this->assertEquals($expected, $result);
    }

    // Malformed tests

    public function testCreateCardGivenStringThrowError()
    {
        // Arrange
        $input = "I am the wrong input";

        $this->expectException(TypeError::class);

        // Act
        $result = createCard($input);
    }
}
