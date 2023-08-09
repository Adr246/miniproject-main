<?php

 $dbhost='localhost';
 $dbuser='root';
 $dbpass='';
 $dbname='phone_db';

 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 if(!$conn)
 {
    die("Connection Failed".$conn->connect_error());
 }
 

 $qry="CREATE TABLE phone_data(id int AUTO_INCREMENT PRIMARY KEY,phone varchar(20),cbrief varchar(120),serviceinfo varchar(3),complaint varchar(100),purchase date)";

 $result=mysqli_query($conn,$qry);

 if(!$result)
 {
    echo("Error Detected".mysqli_error($conn));
 
 }

 else

 {
    echo("Query Affected!");
 }

?>