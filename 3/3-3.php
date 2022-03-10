<html> 
    <head>
        <title>20621620</title>
    </head>
    <body> 

<?php
        echo "<table border = 4>";
        for($i = 1; $i <= 7; $i++){
            echo "<tr>";
            for($j = 1; $j <= 7; $j++)
            {
                echo "<td>";
                if($j <= 7){
                    $num = $i*$j;
                    echo "<tr><td> $num </td></tr>";
                } else {
                    $num2 = $i*$j;
                    echo "<tr><td> $num2 </td></tr>";
                }
            }
            
        }
?>
    </body> </html>