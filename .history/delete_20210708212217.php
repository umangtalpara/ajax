<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$sid = $mydata['sid'];


if(!empty($sid)) {
    $sql = "DELETE FROM info WHERE id = {$sid}";
           if($conn->query($sql) == TRUE){
                echo "info delete Successfully";
            }else{
                echo "info not deleted";
           }
}else{
    echo "unable to delete info";
}



if(!empty($id)) {
    if($id== 17 ){
            echo "info not Successfully";
        }
    else{
     $sql = "DELETE FROM info WHERE id = {$id}";
        if($conn->query($sql) == TRUE){
            echo "info delete Successfully";
        }else{
            echo "info not deleted";
        }
    };
}else{
    echo "unable to delete info";
}
?>