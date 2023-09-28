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
            . '<p> Classification: Fungi</p>'
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

    public function testCreateCardGivenEmptyArrayReturnString()
    {
        // Arrange
        $input = array();

        $this->expectException(InvalidArgumentException::class);

        // Act
        $result = createCard($input);
    }

    // Success test
    public function testValidFormInputsGivenRightParametersReturnTrue()
    {
        // Arrange
        $deathsPerYear = 100;
        $year = 2022;
        $imageLink = "https://placedog.net/500";

        // Act
        $result = validFormInputs($deathsPerYear, $year, $imageLink);

        // Assert
        $this->assertTrue($result);
    }

    // Failure tests
    public function testValidFormInputsGivenWrongFirstParameterThrowError()
    {
        // Arrange
        $deathsPerYear = 'hundred';
        $year = 2022;
        $imageLink = "https://placedog.net/500";

        $this->expectException(TypeError::class);

        // Act
        $result = validFormInputs($deathsPerYear, $year, $imageLink);
    }

    public function testValidFormInputsGivenWrongSecondParameterThrowError()
    {
        // Arrange
        $deathsPerYear = 100;
        $year = 'thousand';
        $imageLink = "https://placedog.net/500";

        $this->expectException(TypeError::class);

        // Act
        $result = validFormInputs($deathsPerYear, $year, $imageLink);
    }

    public function testValidFormInputsGivenWrongThirdParameterReturnFalse()
    {
        // Arrange
        $deathsPerYear = 100;
        $year = 2022;
        $imageLink = "placedognet/500";

        // Act
        $result = validFormInputs($deathsPerYear, $year, $imageLink);

        // Assert
        $this->assertFalse($result);
    }

    public function testValidFormInputsGivenNegativeDeathsReturnFalse()
    {
        // Arrange
        $deathsPerYear = -100;
        $year = 2022;
        $imageLink = "https://placedog.net/500";

        // Act
        $result = validFormInputs($deathsPerYear, $year, $imageLink);

        // Assert
        $this->assertFalse($result);
    }

    public function testValidFormInputsGivenInvalidYearReturnFalse()
    {
        // Arrange
        $deathsPerYear = 100;
        $year = 999;
        $imageLink = "https://placedog.net/500";

        // Act
        $result = validFormInputs($deathsPerYear, $year, $imageLink);

        // Assert
        $this->assertFalse($result);
    }
}
