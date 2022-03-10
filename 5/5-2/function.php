<?php
       if (isset($_POST['submit']))
{    
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            
    if($a==$b && $b==$c){
                echo "Триъгълникът е равностранен<br>";
            } else if($a==$b || $a==$c || $b==$c){
                echo "Триъгълникът е равнобедрен<br>";
            } else {
                echo "Триъгълникът е разностранен<br>";
            }
            $p = ($a+$b+$c)/2;
            $s = sqrt($p*($p-$a)*($p-$b)*($p-$c));
            
            include './check.php';
}

?>

