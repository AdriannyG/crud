<?php
include('connection.php');

$con = connection();

$ID = $_GET['ID'];

$sql = "DELETE FROM user WHERE ID='$ID'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};
?>