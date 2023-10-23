<?php

include("data_class.php");

$email=$_POST['admin_email'];
$pass=$_POST['admin_password'];

if($email==null || $pass==null){
    $emailmsg="";
    $passmsg="";
    if($email==null){
        $emailmsg="Email Empty";
    }
    if($pass==null){
        $passmsg="Password Empty";
    }
    header("location: index.php?ademailmsg=$emailmsg&adpassmsg=$passmsg");
}
elseif($email!=null && $pass!=null){
    $obj= new data();
    $obj->setconnection();
}