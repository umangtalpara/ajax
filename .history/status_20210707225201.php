<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];
$status = $mydata['status'];


if(!empty($id)) {
    if($status = true){
        $sql = "update info set status = false where  id = {$id}";
        if($conn->query($sql) == TRUE){
            echo "info udate Successfully";
        }else{
            echo "info not updated";
        }
    }else{
        $sql = "update info set status = true where  id = {$id}";
        if($conn->query($sql) == TRUE){
            echo "info udate Successfully";
        }else{
            echo "info not updated";
        }
    }
    
}else{
    echo "unable to delete info";
}


?>