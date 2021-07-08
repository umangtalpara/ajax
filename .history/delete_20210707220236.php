<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$id = $mydata['sid'];


if(!empty($id)) {
    if($id=17  ){
            echo "info not deleted";
        }
    else{
     $sql = "DELETE FROM info WHERE id = {$id}";
        
            echo "info delete Successfully";
        }else{
            echo "info not deleted";
        }
    };
}else{
    echo "unable to delete info";
}

?>