<html> 
    <head>
        <title>20621620</title>
    </head>
    <body>
        <table border="7">  
        <thead>  
          <tr>  
            <th>Доставчик</th>  
            <th>Булстат</th> 
            <th>Адрес</th> 
            <th>Телефон</th> 
            <th>Година на регистрация</th> 
            <th>Лице за контакти</th> 
        </tr>  
        </thead>  
<?php
include '../dbFiles/config.php';
        $view_query="select * from companyinfo";
        $run=mysqli_query($dbConn,$view_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $firm=$row[1];  
            $bul=$row[2];
            $town=$row[3]; 
            $tel=$row[4];
            $year=$row[5]; 
            $contact=$row[6]; 
  
        ?>  
  
        <tr>
            <td><?php echo $firm;  ?></td>  
            <td><?php echo $bul;  ?></td>  
            <td><?php echo $town;  ?></td>  
            <td><?php echo $tel;  ?></td>  
            <td><?php echo $year;  ?></td>  
            <td><?php echo $contact;  ?></td>  
        </tr>  
  
        <?php }?>
        <tr><th><a href="./delete-1.php">Изтриване</a></th></tr>
        </table>
    </body></html>