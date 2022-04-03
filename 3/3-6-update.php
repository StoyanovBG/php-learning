3-6
<html>
<head>
    <title>20621620
    </title>
</head>
<body>
<FORM name="form" method="post" action="#" >
    Въведете число:
    <input type="text" name="num"/> <br/>
    <input type="submit" name="subm" value="Провери" />
</FORM>
<?php
function sum($n)
{
    $sum = 0;
    while ($n!=0)
    {
        $sum=$sum+$n%10;
        $n=$n/10;
    }
    return $sum;
}
if (isset($_POST['subm'])) {
    $num = $_POST['num'];
    for($i = 0; $i<100; $i++){
        if(sum($i)==$num){
            echo $i."\t";
        }
    }
}
?>
</body>
</html>