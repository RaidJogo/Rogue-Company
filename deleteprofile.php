<?php
include('db.php');
$id = $_GET['id'];

$query = "DELETE FROM register where ID = '$id'";
$result = mysqli_query($conn, $query);
if ($result) {
	header("refresh:0; url=registerintoraid.php");
	echo "<script>alert('Delete Successful')</script>";
}else{
	header("refresh:0; url=registerintoraid.php");
	echo "<script>alert('Delete Unsuccessful')</script>";
}


?>