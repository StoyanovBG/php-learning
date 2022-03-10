<html>
<head>
    <title>20621620</title>
</head>
<body>
<FORM name="form" method="post" action="#" >
    Здравейте! Моля попълнете следната информация:
    <br>
    Вашето име:
    <input type="text" name="name"/><br><br>
    Възраст:
    <input type="number" name="age"/><br><br>
    <input type="submit" name="submit" value="Изпрати!" />
</FORM>
<?php
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "Здравейте, $name !";
    echo "<br> Вие сте на $age години.";
}
?>
</body>
</html>