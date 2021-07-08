<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($id)) {
    $sql = UPDATE tutorials_tbl 
    -> SET tutorial_title = 'Learning JAVA' -> WHERE tutorial_id = 3;
    if($conn->query($sql) == TRUE){
        echo "info delete Successfully";
    }else{
        echo "info not deleted";
    }
}else{
    echo "unable to delete info";
}


?>