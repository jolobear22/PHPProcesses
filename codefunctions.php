<?php
function printDiamond($row) {
    for($i=1; $i <= $row; $i++){
        for($k=$row; $k > $i; $k--){
            echo "&nbsp;&nbsp;";
        }

        echo "*";

        for($j = 1; $j < 2 * ($i - 1); $j++){
            echo "&nbsp;&nbsp;";
        }

        if($i == 1){
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }

        echo "<br>";
    }

    for($i = $row - 1; $i >= 1; $i--){
        for($k=$row; $k > $i; $k--){
            echo "&nbsp;&nbsp;";
        }

        echo "*";

        for($j = 1; $j < 2 * ($i - 1); $j++){
            echo "&nbsp;&nbsp;";
        }

        if($i == 1){
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }

        echo "<br>";
    }

    for($i=2; $i <= $row; $i++){
        for($k=$row; $k > $i; $k--){
            echo "&nbsp;&nbsp;";
        }

        echo "*";

        for($j = 1; $j < 2 * ($i - 1); $j++){
            echo "&nbsp;&nbsp;";
        }

        if($i == 1){
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }

        echo "<br>";
    }

    for($i = $row - 1; $i >= 1; $i--){
        for($k=$row; $k > $i; $k--){
            echo "&nbsp;&nbsp;";
        }

        echo "*";

        for($j = 1; $j < 2 * ($i - 1); $j++){
            echo "&nbsp;&nbsp;";
        }

        if($i == 1){
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }

        echo "<br>";
    }

}

function printvpattern($n){
    $ctr=$n;
    for ($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < 2 * $n - 1; $j++) { 
            if ($j == $i || $j == 2 * $n - $i - 2) { 
                if($j%2==0){
                    echo "*"; 
                } else {
                    echo $ctr;
                } 
            } else { 
                echo "&nbsp;"; 
            } 
        } echo "<br>"; 
        $ctr--;
    }

    for ($i = 1; $i < $n; $i++) { 
        for ($j = 0; $j < 2 * $n - 1; $j++) { 
            if ($j == $n - $i - 1 || $j == $n + $i - 1) { 
                if($j%2==0){
                    echo "*"; 
                } else {
                    echo $ctr+2;
                } 
            } else { 
                echo "&nbsp;"; 
            } 
        } 
        echo "<br>"; 
        $ctr++;
    }
}

function printPattern($n) { // Top half 
    for ($i = 1; $i <= $n; $i++) { 
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++) { 
            echo "<td> &nbsp;".$i * $j . "&nbsp; </td>"; 
        } 
    } 
    // Bottom half 
    for ($i = $n - 1; $i >= 1; $i--) { 
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++) { 
            echo "<td>&nbsp; ". $i * $j . "&nbsp; </td>"; 
        } 
    } 
} 

function printPows($rows,$cols){
    $ratio=2;
    for($i=1;$i<=$rows;$i++){
        $ft=$i*($i+1);
        echo "<tr>";
        echo "<td>&nbsp;".$i."&nbsp;</td>";
        for($k=1;$k<=$cols;$k++){
            $seq=$ft*$ratio**($k-1);
            echo "<td>&nbsp;".$seq."&nbsp;</td>";
        } 
        $ratio++;
        echo "</tr>";
    }
}

function randomGenChars($rows,$cols){
    $characters = array_merge(range('a', 'k'), range('A', 'K')); 
    $char_to_value = array_merge( 
        array_combine(
            range('a', 'k'), range(0, 10)), 
            array_combine(range('A', 'K'), range(0, 10)) 
        ); 
    for ($i = 0; $i < $rows; $i++) { 
        echo "<tr>"; for ($j = 0; $j < $cols; $j++) { 
            $randomChar = $characters[array_rand($characters)]; 
            $value = $char_to_value[$randomChar]; 
            $class = ($value % 2 == 0) ? 'highlight' : ''; 
            echo "<td class='$class'>$randomChar</td>"; 
        } 
        echo "</tr>"; 
    }
}


function generateMultArr() {
    $rows = 4;
    $cols = 4;
    $numbers = range(1, 100);
    shuffle($numbers);

    // Create a 4x4 table of unique random numbers
    $table = array();
    $counter = 0;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $table[$i][$j] = $numbers[$counter++];
        }
    }

    // Sum up the numbers per column and row
    $rowSums = array_fill(0, $rows, 0);
    $colSums = array_fill(0, $cols, 0);
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $rowSums[$i] += $table[$i][$j];
            $colSums[$j] += $table[$i][$j];
        }
    }

    // Generate the HTML table
    echo '<table id=random-arr>';
    echo '<thead><tr><th></th>';
    for ($i = 0; $i < $cols; $i++) {
        echo '<th>Col ' . ($i + 1) . '</th>';
    }
    echo '<th>Row Sum</th></tr></thead>';
    echo '<tbody>';
    for ($i = 0; $i < $rows; $i++) {
        echo '<tr><th>Row ' . ($i + 1) . '</th>';
        for ($j = 0; $j < $cols; $j++) {
            echo '<td>' . $table[$i][$j] . '</td>';
        }
        echo '<td><b>' . $rowSums[$i] . '</b></td></tr>';
    }
    echo '<tr><th>Col Sum</th>';
    for ($j = 0; $j < $cols; $j++) {
        echo '<td><b>' . $colSums[$j] . '</b></td>';
    }
    echo '<td></td></tr>';
    echo '</tbody></table>';
}


session_start();

function generateStack() {
    if (!isset($_SESSION['stack'])) {
        $_SESSION['stack'] = array();
    }

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'push' && !empty($_POST['value'])) {
            $_SESSION['stack'][] = $_POST['value'];
        }

        if ($_POST['action'] == 'pop' && count($_SESSION['stack']) > 0) {
            $stackSize = count($_SESSION['stack']);
            $newStack = array();
            for ($i = 0; $i < $stackSize - 1; $i++) {
                $newStack[$i] = $_SESSION['stack'][$i];
            }
            $_SESSION['stack'] = $newStack;
        }
    }

    echo "<table id=ArrStack>";
    echo "<thead><tr><th>Stack Values</th><th>Action</th></tr></thead>";
    echo "<tbody>";
    $stack = array_reverse($_SESSION['stack']);
    foreach ($stack as $index => $item) {
        echo "<tr><td>$item</td>";
        if ($index == 0) {
            echo "<td>
                    <form method='post' style='display:inline;'>
                        <button type='submit' name='action' value='pop'>Pop</button>
                    </form>
                  </td>";
        } else {
            echo "<td></td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
}

function generateQueue() {
    if (!isset($_SESSION['queue'])) {
        $_SESSION['queue'] = array();
    }

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'push' && !empty($_POST['value'])) {
            $_SESSION['queue'][] = $_POST['value'];
        }

        if ($_POST['action'] == 'pop' && count($_SESSION['queue']) > 0) {
            $newQueue = array();
            for ($i = 1; $i < count($_SESSION['queue']); $i++) {
                $newQueue[] = $_SESSION['queue'][$i];
            }
            $_SESSION['queue'] = $newQueue;
        }
    }

    $queueCount = count($_SESSION['queue']);

    echo "<table id=ArrStack>";
    echo "<thead><tr><th>Action</th><th colspan='$queueCount'>Queue</th></tr></thead>";
    echo "<tbody>";
    echo "<tr><td>
            <form method='post' style='display:inline;'>
                <button type='submit' name='action' value='pop'>Pop</button>
            </form>
          </td>";
    foreach ($_SESSION['queue'] as $item) {
        echo "<td>$item</td>";
    }
    echo "<td>
            <form method='post' style='display:inline;'>
                <h6>Input an integer to push in the queue: </h6>
                <input type='number' name='value' required>
                <button type='submit' name='action' value='push'>Push</button>
            </form>
          </td></tr>";
    echo "</tbody></table>";
}


function generateGrid($length, $width) { 
    $consonants = array_diff(range('a', 'z'), ['a', 'e', 'i', 'o', 'u']); 
    echo "<table id=random-arr>"; 
    for ($i = 0; $i < $length; $i++) { 
        echo "<tr>"; for ($j = 0; $j < $width; $j++) { 
            $randomConsonant = $consonants[array_rand($consonants)]; 
            echo "<td>" . $randomConsonant . "</td>"; 
        } 
        echo "</tr>"; 
    } 
    echo "</table>"; 
}


function bubbleSort($lists) {
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
    return $lists;
}

?>

