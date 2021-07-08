<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($id) {
    $sql = "DELETE FROM info WHERE id = {$id}";
    if($conn->query($sql) == TRUE){
        echo "info add Successfully";
    }else{
        echo "info not added";
    }
}else{
    echo "Fill info fields";
}

?>