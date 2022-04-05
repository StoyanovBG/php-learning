<?php
$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error){ 
    die('<br>Грешка: '. $conn->connect_error);
}

$sql = "CREATE DATABASE guest";

if ($conn->query($sql) == TRUE){
    echo '<br>БД guest e създадена<br>';
}
else { 
    echo '<br>Грешка: '. $conn->error;
}

$sql = "CREATE TABLE guest.guestbook (
id INT(4) NOT NULL AUTO_INCREMENT,
name VARCHAR(65) NOT NULL,
email VARCHAR(65) NOT NULL,
comment VARCHAR(65) NOT NULL,
datetime  TIMESTAMP NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
PRIMARY KEY (`id`));";
        
if ($conn->query($sql) == TRUE) 
{ echo '<br>Tаблица guestbook е създадена';}
else 
{ echo '<br>Грешка: '. $conn->error;}
$conn->close();

/*
CREATE TABLE `guestbook` (
`id` int(4) NOT NULL auto_increment,
`name` varchar(65) NOT NULL default '',
`lastname` varchar(65) NOT NULL default '',
`email` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;
*/
