
<?php 
        $myfile = fopen("data.txt", "w") or die("Неуспешно отваряне на файл!");
        $txt = "Дnисциплина Web приложения се изучава през втория семестър на втори курс. \nТази дисциплина се изучава от студенти, които са специалност СИТ.\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        
         $myfile = fopen("data.txt", "a") or die("Неуспешно отваряне на файл!");
        $txt = "Студентите редовно си пишат домашните.\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        
        $content = file_get_contents('data.txt');
        echo "Съдържание на файл data.txt с размер: ". filesize("data.txt")." байта <br>";
        echo $content;
        
?>