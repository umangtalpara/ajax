<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($id)) {
    $sql = UPDATE table_name
    SET status = 
        CASE WHEN id = {$id} THEN "Y"ELSE "N"
        END
    if($conn->query($sql) == TRUE){
        echo "info udate Successfully";
    }else{
        echo "info not updated";
    }
}else{
    echo "unable to delete info";
}


?>