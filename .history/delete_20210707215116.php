<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($id)) {
    if($id=1){}
    else{}
    $sql = "DELETE FROM info WHERE id = {$id}";
    if($conn->query($sql) == TRUE){
        echo "info delete Successfully";
    }else{
        echo "info not deleted";
    }
}else{
    echo "unable to delete info";
}

?>