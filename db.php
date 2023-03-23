<?php
$connect=mysqli_connect("localhost", "root","","sidehustledb");

if($connect){
    echo "connected";
}
else{
    echo "not connected";
}
?>