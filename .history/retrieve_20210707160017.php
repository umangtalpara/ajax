<?php
include('dbConnection.php');
$sql= "SELECT * FROM student";
$result = $conn->query($sql);
if($result->num_row>0){
    $data = array();
    while($row = $result->fetch_assoc()){
        $data  =array();
    }
}

?>