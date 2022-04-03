<html> 
    <head>
        <title>20621620</title>
    </head>
    <body>
        <h2> Добавяне на град </h2>
        <form method="post">
  <label for="title">Град: </label><br>
  <input type="text" id="town" name="town"><br>
   <input type="submit" name="submit" value="Въведи" /><br>
</form>
        <table border="7">  
        <thead>  
          <tr>  
            <th>Номер</th>  
            <th>Град</th>  
        </tr>  
        </thead>  
<?php
include '../dbFiles/config.php';

if (isset($_POST['submit'])) {

    $town = $_POST['town'];

    if (!empty($town)) {
         $sql="INSERT INTO towns (townname) VALUES ('$town')";
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
        $view_towns_query="select * from towns";
        $run=mysqli_query($dbConn,$view_towns_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $townid=$row[0];  
            $townname=$row[1];    
  
        ?>  
  
        <tr>
            <td><?php echo $townid;  ?></td>  
            <td><?php echo $townname;  ?></td>  
        </tr>  
  
        <?php }?>
        </table>
    </body></html>