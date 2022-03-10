<html> 
    <head>
        <title>20621620</title>
    </head>
    <body> 
<?php
        $x = 1;
        echo "<ul>";
        for($i = 1; $i <= 10; $i++){
            echo "<li>X = $x </li><br>";
            echo "<ul>";
            echo "<li>     X ^ 3 = ".pow($x,3)."</li><br>";
            echo "</ul>";
            $x++;
        }
        echo "</ul>";
?>
    </body> </html>