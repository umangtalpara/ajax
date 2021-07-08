<?php
include('dbConnection.php');
$sql= "SELECT * FROM student";
$result = $conn->query($sql);
if($result->num_row)

?>