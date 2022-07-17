<?php
include('db.php');
$id = $_GET['id'];

$query = "DELETE FROM comment where ID = '$id'";
$result = mysqli_query($conn, $query);
if ($result) {
	header("refresh:0; url=chatbox.php");
	echo "<script>alert('Comment Deleted')</script>";
}else{
	header("refresh:0; url=chatbox.php");
	echo "<script>alert('Unable to Delete Comment')</script>";
}


?>