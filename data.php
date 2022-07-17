<?php
include('db.php');
if (isset($_POST['submitbtn'])) {
$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$telephone = $_POST['contact'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$filename =$_FILES['filetoupload']['name'];
$tmp_name = $_FILES['filetoupload']['tmp_name'];

$path = "upload/$filename";

$paslen1 = strlen($password1);
$encpass = md5($password1);
$encpass1 = md5($password2);
$paslen2 = strlen($password2);

if(empty($surname) or empty($firstname) or empty($middlename) or empty($dob) or empty($email) or empty($telephone) or empty($username) or empty($password1) or empty($password2)){
  $req = "Fill in all fields";
}else if ($paslen1 < 5) {
  $req = "Password too short";
}else if ($paslen2 < 5) {
  $req = "Password is not the same";
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $req = "Invalid Email Format";
}else{

$upload = move_uploaded_file($tmp_name, $path);

if ($upload) {
$query = "INSERT INTO register (Surname ,Firstname, middlename  ,DOB, Email, Telephone ,Username , Password , Passwordagain ) VALUES ('$surname' , '$firstname' , '$middlename' , '$dob' , '$email' , '$telephone' , '$username', '$encpass' , '$encpass1')";
$output = mysqli_query($conn, $query);
if ($output){
  echo "<script>alert('Registration completed')</script>";
}else{
  echo "<script>alert('Registration incomplete')</script>";
}
}else{
  $req = "Unable to upload picture";
}


}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database</title>
	<link rel="stylesheet" href="css/cssbts.css">
<link rel="icon" type="text/css" href="Favicon/Rogue.png">
</head>
<body style="background-color: darkgrey;">
<div style="text-align: center; font-weight: bold; margin-top: 5px; font-family: cursive;">
	<h1>REGISTERED USERS</h1>
</div>

<div class="container mt-5">
	<table class="table table-striped table-bordered table-hover table-responsive" style="color: white; background-color: darkcyan;">
		<tr>
			<th>
				S/N
			</th>
			<th>
				Surname
			</th>
			<th>
				First name
			</th>
			<th>
				Username
			</th>
			<th>
				Email Address
			</th>
			<th>
				Picture
			</th>
			<th>
				Action
			</th>
			<th>
				Date and time
			</th>
		</tr>

		<?php

		$count = 0;
		$query = "SELECT * FROM register";
		$result = mysqli_query($conn, $query);

		if ($result) {
			while ($arr = mysqli_fetch_assoc($result)) {
				$id = $arr['ID'];
				$count = $count + 1;
				$surname = $arr['Surname'];
				$firstname = $arr['Firstname'];
				$username = $arr['Username'];
				$email = $arr['Email'];
				$filename = $arr['filename'];
				$date = $arr['dateandtime'];

				echo "<tr>
				<td>$count</td>
				<td>$surname</td>
				<td>$firstname</td>
				<td>$username</td>
				<td>$email</td>
				<td><img style='width: 80px; height: 80px; border-radius: 100%;' src='upload/$filename' alt='unable to load image'></td>
				<td>
				<a class='btn btn-danger btn-sm' href='deleteuser.php?id=$id'>Delete</a>
				<a class='btn btn-success btn-sm mt-3' href='updateuser.php'>Update</a>

				</td>
				<td>$date</td>
				</tr>";

				
			}
		}
      
      ?>
		
	</table>
</div>
</body>
</html>