<?php
include('connection.php');

$con = connection();

$ID = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST["email"];

$sql = "INSERT INTO user VALUES('$ID', '$name', '$lastname', '$username', '$password', '$email')";
$query = mysqli_query($con, $sql);

if($query) {

    Header("Location: index.php");
};

?>