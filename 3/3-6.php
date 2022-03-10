<html> 
    <head>
        <title>20621620</title>
    </head>
    <body> 
        <FORM name="form" method="post" action="#" >
    сумата от цифрите равна на X (зададено от потребителя) <br/>
    Въведете число:  
    <input type="number" name="a"/> <br/>
    <input type="submit" name="submit" value="GO" />
</FORM>

<?php
        if (isset($_POST['submit']))
{
   $a = $_POST['a'];
    
   $sum = 0;
    while ($a != 0)
    {
        $sum = $sum + $a % 10;
        $a = $a/10;
    }
    echo "Сумата на цифрите на числото $a е равна на $sum <br>";
}
?><?php
        $sum2 = 0;
        $start = 1;
        $end = 100;
        for ($i = $start; $i <= $end; $i++) {
            $sum2+=$i;
        }
        echo "<br> Sum from 1 to 100 is $sum2";
?>
</tr></table>
    </body> </html>