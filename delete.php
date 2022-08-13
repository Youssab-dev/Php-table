<?php
$Id = $_GET['Id'];
include 'connect.php';
$stmt=$conn->prepare("DELETE FROM tasks WHERE Id='$Id'");
$stmt->execute();
header("Location:tasks.php")
?>