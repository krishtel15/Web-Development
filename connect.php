<?php
$servername="localhost";
$username="root";
$password="";
$database="crud_operations";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connection was not successful". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

?>