<?php
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
        echo "<br>";
    }

    myTest(); // first call 1, x = 0, x+1
    myTest(); // second call 2, x = 1, x+1
    myTest(); // third call 3, x = 2, x+1
?> 