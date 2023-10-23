<?php
include("conn.php");

class data extends db{
    function __construct()
    {
        echo("working");
    }
}

    function admin_login($email,$pass){
        $q="select * from admin where email='$email' and pass='$pass'";
        $recordset=$this->Connection->query($q);
        $result=$recordset->rowcount();

        

        
    }

?>