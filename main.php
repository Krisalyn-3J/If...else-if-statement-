<?php
$t = time ("T");
echo "<p> The time of the server is".
$t;
echo ", and will give the following statement:
    </p";
    
    if ($t < 10) {
        echo "Have a good day!";
    } else if ( $t < "20") {
        echo "Have a good noon!";
    } else {
        echo "Have a goodnight!";
    }
    
