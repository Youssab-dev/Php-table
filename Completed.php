<?php
$Id = $_GET['Id'];
$State = $_GET['State'];
include 'connect.php';
if($State == 1){

    $stmt=$conn->prepare("UPDATE tasks SET State=0 WHERE Id='$Id'");
    $stmt->execute();
}else{
    $stmt=$conn->prepare("UPDATE tasks SET State=1 WHERE Id='$Id'");
    $stmt->execute();
}
header("Location:tasks.php");
?>