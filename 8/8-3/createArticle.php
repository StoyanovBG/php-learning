<html>
<head>
    <title>20621620
    </title>
</head>
<body>
<form name="form" method="post"> 
            Title<br>
            <input type=text name="titl"><br>
            Author <br>
            <input type=text name="aut"><br> 
            <P> Description<br/> 
                <input type=text name="description" ><br>
            <input type=submit name="submit" value="Create and show"> <br>
</form> 
<?php
    include 'Article.php';
if (isset($_POST['submit']) and isset($_POST['titl']) and isset($_POST['aut']) and isset($_POST['description']))
{   
     $title = $_POST['titl'];
     $author = $_POST['aut'];
     $description = $_POST['description'];
     
     $art = new Article($title, $author, $description);
     echo $art->show_article();
     
}
?>
</body>
</html>

