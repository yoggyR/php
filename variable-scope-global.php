<?php
    $x = 5;
    $y = 10;
    $z = 2;
    
    function myTest() {
        global $x, $y;
        $y = $x + $y;
    }
    
    myTest();
    echo $x; echo "<br>"; // output 5
    echo $y; echo "<br>";// outputs 15. karena fungsi myTest() di panggil dan ada proses penjumalahan
    echo $z; // output 2
?>