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
                    <li class="nav-item"> <a class="nav-link" href="exercise6.php">HTTP POST</a> </li> 
                    <li class="nav-item active"> <a class="nav-link" href="exercise7.php">Bubble Sort</a> </li> 
                </ul>
            </div> 
        </nav> 
        
        <div class="container mt-5"> 
        <h1 class="text-center">Bubble Sort: Correcting the code</h1> 
            <div class="patterns-container align-items-stretch">
                <div class="pattern4 p-4 rounded shadow flex-item"> 

                <h4>Part 2.6</h4>
                    <p>Fix the code function to output the correct result. <b>Explain your answer</b></p>
                    <pre class="code-block">
                        <code class="code-block-align"> 
function bubbleSort($lists) {
    $length = count($lists); 
        for ($parent = 0; $parent < $length; $parent++) { 
            for ($child = 0; $child < $length - $parent - 1; $child++) { 
                if ($lists[$child] > $lists[$child + 1]) { 
                     $temp = $lists[$child + 1]; 
                     $lists[$child] = $lists[$child + 1]; 
                      $lists[$child + 1] = $temp; 
                } 
            } 
        } 
    return $lists; 
} 
                        </code> 
                    </pre>

                    <h6>Corrected Code:</h6>
                    <pre class="code-block">
                        <code class="code-block-align"> 
function bubbleSort($lists) {
    $length = count($lists); 
        for ($parent = 0; $parent < $length; $parent++) { 
            for ($child = 0; $child < $length - $parent - 1; $child++) { 
                if ($lists[$child] > $lists[$child + 1]) { 
                     <span class="highlight">$temp = $lists[$child];</span>
                     $lists[$child] = $lists[$child + 1]; 
                      $lists[$child + 1] = $temp; 
                } 
            } 
        } 
    return $lists; 
} 
                        </code> 
                    </pre>
                    <h6>Explanation</h6>
                    <ul class="explanation">
                        <li>The code <i>$temp = $lists[$child + 1];</i> is incorrect because the intention here is to swap the 
                        adjacent elements if an element is greater than its next element. Therefore, <i>$list[$child]</i> must be stored first 
                        to the temporary variable. </li>
                    </ul>

                    <h6>Sample Sorting using the corrected BubbleSort code:</h6>
                    <p>Lists Before Sorting: 90, 7, 60, 40, 1, 10</p>
                    <?php
                        $lists = array(90,7,60,40,1,10);
                        echo "<p>Lists After Sorting: ";
                        $newList = bubbleSort($lists);
                        for($i=0;$i<count($newList);$i++){
                            echo (int)$newList[$i];
                            echo ", ";
                        }
                        echo " </p>"; 

                    ?>

                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>





