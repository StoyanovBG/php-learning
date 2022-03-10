<?php 
        $myfile = fopen("array.txt", "w") or die("Неуспешно отваряне на файл!");
        $txt = "10,35,30,44,55,14,73";
        fwrite($myfile, $txt);
        fclose($myfile);

        
        $content = file_get_contents('array.txt');
        echo "Съдържание на файл data.txt с размер: ". filesize("array.txt")." байта <br>";
        echo $content;
        
        $array = [];
        $array = explode(",", $txt);
        echo "<br>";
        print_r($array);
        echo "<br>";
        
        include 'functions.php';
        
?>