<?php
        $array5 = [];
        for($k=0; $k < count($array); $k++){
            if($array[$k] % 5 == 0){
                array_push($array5, $array[$k]);
            }
        }
        
        function noNULLvalues($var){
            return ($var != NULL && $var != "");
        }
        
        $filter = array_filter($array5, "noNULLvalues");
        echo "<br>Кратни на 5 числа: "; 
        print_r($filter);
        
       echo "<br> Произведение = ". array_product($array5); 
       echo "<br><br>'отпечатва елементите на масива, които са по-големи от своите съседи'<br><br>";
       
       for($j=0; $j < sizeof($array5); $j++){
           if($array5[$j] > $array5[$j + 1] && $array5[$j] > $array5[$j - 1]){
               echo "<br>$array5[$j]";
           }
       }
?>