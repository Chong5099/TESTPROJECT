<?php
date_default_timezone_set("Asia/Kuala_Lumpur");

$name_host="localhost";

$name_sql="root";

$pass_sql="";

$name_db="newproject";

$condb= mysqli_connect($name_host,$name_sql,$pass_sql,$name_db);

if(!$condb)
    {
        die("connection to data base failed");

    }
    else
        {
         #connetion to data base sucess   
        }
?>