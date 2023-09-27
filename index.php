<?php
require_once("db-conn.php");
require_once("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pathogens Collection</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&family=PT+Sans+Narrow&family=Castoro&display=swap">

    <meta name="description" content="Pathogens collection">
    <meta name="author" content="Me">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <script>
        function openNav() {
            document.getElementById("bottom-panel").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("bottom-panel").style.width = "0";
        }
    </script>

</head>

<body>
    <nav>
        <div id="top-nav">
            <h1>My Favorite Pathogens</h1>
            <button id="add-items" class="add-items" onclick="openNav()">Add to collection</button>
            <div id="bottom-panel" class="bottom-panel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <form action="processform.php" method="POST" id="input-form">
                    <div class="form-item">
                        <label for="species">Species: </label>
                        <input type="text" name="species" required>
                    </div>

                    <div class="form-item">
                        <label for="aka">A.k.a: </label>
                        <input type="text" name="aka" required>
                    </div>

                    <div class="form-item">
                        <label for="classification">Classification: </label>
                        <input type="text" name="species" required>
                    </div>

                    <div class="form-item">
                        <label for="mortality">Mortality: </label>
                        <input type="text" name="mortality" required>
                    </div>

                    <div class="form-item">
                        <label for="deaths-per-year">Deaths per year: </label>
                        <input type="number" name="deaths-per-year" required>
                    </div>

                    <div class="form-item">
                        <label for="year">Year: </label>
                        <input type="number" name="year" required>
                    </div>

                    <div class="form-item">
                        <label for="good-to-know">Good to know: </label>
                        <input type="text" name="good-to-know" required>
                    </div>

                    <div class="form-item">
                        <label for="image-link">Image link: </label>
                        <input type="text" name="image-link" required>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <section id="background">
        <div id="pathogens-box">
            <?php
            foreach ($pathogens as $pathogen) {
                echo createCard($pathogen);
            }
            ?>
        </div>
    </section>
</body>