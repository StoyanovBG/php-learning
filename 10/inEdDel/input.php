<html> 
    <head>
        <title>20621620</title>
    </head>
    <body>
        <h2> Създаване на книга </h2>
        <form method="post">
  <label for="title">Заглавие:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="author">Автор:</label><br>
  <input type="text" id="author" name="author"><br>
    <label for="publisher">Издателство:</label><br>
  <input type="text" id="publisher" name="publisher"><br>
    <label for="year">Година на издаване:</label><br>
  <input type="text" id="year" name="year"><br>
   <input type="submit" name="submit" value="Въведи" />
</form>
<?php
include '../dbFiles/config.php';

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher= $_POST['publisher'];
    $year = $_POST['year'];

    if (!empty($title)&&!empty($author)&&!empty($publisher)&&!empty($year)) {
         $sql="INSERT INTO book (title, author, publisher, year) VALUES ('$title', '$author', '$publisher', '$year')";
         $result = mysqli_query($dbConn,$sql);
     if (!$result) {
         die('<br> Грешка');
     }else{
        echo "<br> Добавен запис";
     }
    }
    else {
        echo "<br> без празни полета";
    }
 } 
?>
    </body></html>