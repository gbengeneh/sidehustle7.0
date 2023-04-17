<?php
$servername="localhost";
$username="root";
$password ="";
$database="registration";
//create connection
$conn=new mysqli($servername,$username,$password,$database);
//check connection
if($conn ->connect_error){
    die("connection failed:" .$conn->connect_error);
}
else{
    echo "connected Successfuly";
}