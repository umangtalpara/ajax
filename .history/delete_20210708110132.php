<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$sid = $mydata['sid'];


if(!empty($sid)) {
    if(id == 20){
        echo "info not deleted";
    }else{
        $sql = "DELETE FROM info WHERE id = {$sid}";
            if($conn->query($sql) == TRUE){
                echo "info delete Successfully";
            }else{
                echo "info not deleted";
            }
    }
}else{
    echo "unable to delete info";
}

?>