<?php

    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='';
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass);

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error);
    }

    $qry="create database phone_db";

    $res=mysqli_query($conn,$qry);

    if(!$res)
    {
        echo("Query Failed");
    }

    else
    {
        echo("Query Affected!");
    }
















?>