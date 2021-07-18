<?php

$db_host = "sql207.epizy.com";
$db_user = "epiz_29166547";
$db_password = "qJEJ6Q48rU";
$db_name = "epiz_29166547_bsc";


//Create Connection

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

//Checking connection
 
if($conn->connect_error){
    die("Connection Failed");
}
// } else{
//     echo "VERY GOOD CONNECTION.";
// }

?>