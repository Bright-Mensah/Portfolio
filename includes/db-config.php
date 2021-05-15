<?php

#Declare variables
$username = "root";
$password = "Mensah0541687203";
$host = "localhost";
$database_name = "PortfolioContact";


// connect  database

$connection = mysqli_connect($host,$username,$password,$database_name);

// check if the connection was successful

if(!$connection){
    die("<script>alert('Connection wasn't successful')</script>");

    
}


?>