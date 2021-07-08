<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($id)) {
    if{

    }else{

    }
    
}else{
    echo "unable to delete info";
}


?>