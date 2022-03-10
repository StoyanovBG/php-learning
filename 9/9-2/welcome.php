<html>
 <head>
 <title>20621620</title>
 </head>
 <body>
<?php 
    if (isset($_COOKIE['user'])){
        echo "Welcome ".$_COOKIE['user']."!<br>";
    }
    else {echo "No existing cookies<br>";}
   
    echo "All cookies: <br>";
    print_r($_COOKIE);
?> 
<a href="last.php">Next page - delete cookie </a>
 </body>
</html>