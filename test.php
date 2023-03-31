<?php

//use a while loop to implement a multiplication table of 5
echo("Use a while loop to implement a multiplication table of 5");
//Code starts
$num = 1;

while ($num <= 12) {
    echo "<br>";
    echo " 5". "*" ."$num" ."=".($num*5);
    $num++;
}

echo"<br>";
//use the do while loop to achieve the same answer
echo("Us the do while loop to achieve the same answer");
//Code starts
$num = 1; 
        do { $result =$num* 5;
        echo "5* $num = $reult <br>";
        $num++; 
    } 
        while ( $num <= 12 ); 

    echo"<br>";
    
//use the for loop to find the first 100 even numbers
echo("Finding the first 100 even numbers using for loop");
for ( $even = 2; $even <= 100; $even += 2 ) 

        {
            echo"<br>";
     echo $even . " "; 
    }

?>
