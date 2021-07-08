<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($name) && !empty($number)){
    $sql = "INSERT INTO info(name,number) VALUES
    ('$name','$number')";
    if($conn->query($sql) == TRUE){
        echo "info add Successfully";
    }else{
        echo "info not added";
    }
}else{
    echo "Fill info fields";
}

?>