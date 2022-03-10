<html>
<head>
    <title>20621620
    </title>
</head>
<body>
<form name="form" method="post" action="#"> 
            First name<br>
            <input type=text name="first_name"><br>
            Last name <br>
            <input type=text name="last_name"><br> 
            Email <br>
            <input type=email name="email"><br> 
            <input type=submit name="submit" value="Create and show"> <br>
</form> 
<?php
        include 'Person.php';
if (isset($_POST['submit']) and isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['email']))
{   
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     
     $per = new Person($first_name, $last_name, $email);
     echo $per->show_person();
        
}
        ?>
