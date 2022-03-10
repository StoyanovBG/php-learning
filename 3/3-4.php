<html> 
    <head>
        <title>20621620</title>
    </head>
    <body> 
        <FORM name="form" method="post" action="#" >
    Въведете число:  
    <input type="number" name="a"/> <br/>
    <input type="submit" name="submit" value="Провери!" />
</FORM>

<?php
        if (isset($_POST['submit']))
{    
   function prime($a)
   {
       if ($a == 1)  return 0;
   for ($i = 2; $i <= $a/2; $i++)
   {
      if ($a % $i == 0) return 0;
   }
   //echo "Числото $a е просто";
   return 1;
   }
   
   $a = $_POST['a'];
   $check = prime($a);
    if ($check == 1)
         echo "Числото $a е просто";
    else
         echo "Числото $a не е просто";
}
?>
</tr></table>
    </body> </html>