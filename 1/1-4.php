<html><head>
    <title>20621620</title>
</head>
<body>
<FORM name="form" method="post" >
    Please enter your name: <br />
    <input type="text" name="name"/>
    <input type="submit" name="submit" value="Go" />
</FORM>
<?php
if (isset($_POST['submit']))
{
   $name = $_POST['name'];
   echo "Your name is $name";
}
?>
</body></html>