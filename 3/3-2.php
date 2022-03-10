<html> 
    <head>
        <title>20621620</title>
    </head>
    <body> 
<?php
        $num = 0;
        while($num < 9){
            echo "abc ";
            $num++;
        }
        
        $num2 = 0;
        ?><br><?php
        do{
           echo"xyz ";
           $num2++;
        }while($num2 < 9)
        ?><br><?php
        for($j = 1; $j <= 9; $j++){
            echo "$j ";
        }
        ?><br><?php
        $items = array(1 => "Item A", 2 => "Item B", 3 => "Item C", 4 => "Item D", 5 => "Item E", 6=> "Item F");
        $count = 1;
        foreach ($items as $value) {
           echo "$count. $value <br>";
           $count++;
        }
?>
    </body> </html>