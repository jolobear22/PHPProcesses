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
                    <li class="nav-item active"> <a class="nav-link" href="exercise3.php">Multidimensional Array</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="exercise4.php">Stack of Integers</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="exercise5.php">Queue of Integeres</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="exercise6.php">HTTP POST</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="exercise7.php">Bubble Sort</a> </li> 
                </ul>
            </div> 
        </nav> 
        
        <div class="container mt-5"> 
        <h1 class="text-center">Multidimensional Array</h1> 
            <div class="patterns-container align-items-stretch">
                <div class="pattern2 p-4 rounded shadow flex-item"> 

                <h4>Part 2.2</h4>
                    <p>Manipulation of multidimensional array</p>
                    <ul>
                        <li>Create a 4x4 table</li>
                        <li>Generate a random number from 1 - 100</li>
                        <li>The number generated should always be unique</li>
                        <li>Sum up the number per column and row</li>
                    </ul>

                    <h6>Result: </h6>
                    <?php
                        generateMultArr();
                    ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>