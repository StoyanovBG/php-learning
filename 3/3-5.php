<html><head>
    <title>20621620</title>
</head>
<body>
<FORM name="form" method="post" action="#" >
   Въведете число:
    <input type="text" name="number"/> <br/>
    <input type="submit" name="submit" value="Провери!" />
</FORM>
<?php
if (isset($_POST['submit']))
{
   $number = $_POST['number'];
   
   $digitChar = str_split($number);
	$count = 0;
	foreach($digitChar as $char) {
		if (is_numeric($char) && $char % 2 == 0) {
			$count++;
		}
	}
        echo "Числото $number съдържа $count четни цифри.";
}
?>
</body></html>