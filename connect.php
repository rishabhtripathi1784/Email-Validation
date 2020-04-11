<?php
$servername="localhost";
$username="root";
$password="";
$dbname="assignment_user";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "conection_ohkk";
}
else
{
    die("Connection failed  because".mysqli_connect_error());
}
?>