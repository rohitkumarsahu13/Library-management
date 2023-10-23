<?php

$value=true;
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("Error connecting to db due to".mysqli_connect_error());
    $value=false;

}
// echo("Succcess connecting")

$email=$_POST['adlogin_email'];
$password=$_POST['adlogin_pass'];

$sql=" insert into admin (email,password)values('$email','$password')";
echo ($sql);





?>