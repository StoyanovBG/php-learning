<?php
$host= 'localhost'; 
$dbUser= 'root'; 
$dbPass= ''; 
$dbName= 'deliveryinfo'; 
$dbConn=mysqli_connect($host, $dbUser, $dbPass);

if (!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) { 
 die('Няма връзка със сървър');
}
 
if (!mysqli_select_db($dbConn,$dbName)) {
 die('Грешка при селектиране');
 }
 mysqli_query($dbConn,"SET NAMES 'UTF8'");

/*
CREATE TABLE `deliveryinfo`.`companyinfo` ( 
`id` INT(6) NOT NULL AUTO_INCREMENT ,
`companyname` VARCHAR(30) NOT NULL ,
`companynum` INT(10) NOT NULL , 
`companytel` INT(10) NOT NULL ,
`companyyear` INT(5) NOT NULL ,
`companycontact` VARCHAR(30) NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `deliveryinfo`.`towns` ( 
`townid` INT(5) NOT NULL AUTO_INCREMENT ,
`townname` VARCHAR(30) NOT NULL ,
PRIMARY KEY (`townid`)) ENGINE = InnoDB;
*/
 ?>