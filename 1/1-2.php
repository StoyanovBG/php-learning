<html><head>
    <title>20621620</title>
</head>
<body>
<FORM name="form" method="post" >
    Въведи число 1: <br />
    <input type="number" name="num1"/> <br/>
    Въведи число 2 <br />
    <input type="number" name="num2"/>
    <input type="submit" name="submit" value="Submit" />
</FORM>
<?php
if (isset($_POST['submit']))
{
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   echo "Първото число е: $num1 второто число е: $num2";
}
?>
</body></html>