<?php
include 'codefunctions.php';
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arvin Jonathan Retuya</title>

        <link rel="stylesheet" href="styles.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="index.php">Home</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> </button> 
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav"> 
                    <li class="nav-item"> <a class="nav-link" href="exercise1.php">Looping Patterns</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="exercise2.php">Random Characters Generation</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="exercise3.php">Multidimensional Array</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="exercise4.php">Stack of Integers</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="exercise5.php">Queue of Integeres</a> </li> 
                    <li class="nav-item active"> <a class="nav-link" href="exercise6.php">HTTP POST</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="exercise7.php">Bubble Sort</a> </li> 
                </ul>
            </div> 
        </nav> 
        
        <div class="container mt-5"> 
        <h1 class="text-center">HTTP POST:  Generate a Random Consonants Grid</h1> 
            <div class="patterns-container align-items-stretch">
                <div class="pattern3 p-4 rounded shadow flex-item"> 

                <h4>Part 2.5</h4>
                    <p>Using a PHP POST method, ask the user to input 2 numbers</p>
                    <ul>
                        <li>Create a Grid using 2 inputs as the length and width.</li>
                        <li>Insert random CONSONANT letters into the grid</li>
                        <li>Display the grid in table</li>
                    </ul>

                    <h6>Input a length and width of the grid:</h6>
                    <form method="post"> 
                        <label for="length">Length:</label> 
                        <input type="number" id="length" name="length" min="1" required> 
                        <label for="width">Width:</label> 
                        <input type="number" id="width" name="width" min="1" required> 
                        <input type="submit" name="submit" value="Generate">
                    </form>

                    <?php 
                    
                    if(isset($_POST['submit'])) { 
                        $length = (int)$_POST["length"]; 
                        $width = (int)$_POST["width"]; 
                        generateGrid($length, $width); 
                    } 
                    ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>





