<?php
include('db.php');
session_start();

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
$query = "INSERT INTO register (Surname ,Firstname, middlename  ,DOB, Email, Telephone ,Username , Password , Passwordagain , filename ) VALUES ('$surname' , '$firstname' , '$middlename' , '$dob' , '$email' , '$telephone' , '$username', '$encpass' , '$encpass1' , '$filename')";
$output = mysqli_query($conn, $query);
if ($output){
   header("location: logintoraid.php");
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
  <title>Sign Up </title>
  <link rel="stylesheet" type="text/css" href="css/cssbts.css">
  <link rel="icon" type="text/css" href="Favicon/Rogue.png">
</head>
<body style="background-image: url('dk1.jpg') ;">



<div class="container col-4" style="margin-top: 150px;">
  <div class="card" style="padding: 20px; background-color: grey; border-radius: 10px">
    <form action="registerintoraid.php" method="post" enctype="multipart/form-data">
    <center><img style="border-radius:120%; width:150px; height:150px" src="Rogue/logo.jpg"><h3>Rogue</h3></center>
    <p><h5 style="color: white;">Insert picture</h5></p>
    <input type="file" name="filetoupload" class="form-control mt-3">
    <input type="text" name="surname" class="form-control mt-3" placeholder="Enter Surname">
    <input type="text" name="firstname" class="form-control mt-3" placeholder="Enter Firstname">
    <input type="text" name="middlename" class="form-control mt-3" placeholder="Enter middlename">
    <input type="date" name="dob" class="form-control mt-3" placeholder="Enter Date of birth">
    <input type="alphanumeric" name="email" class="form-control mt-3" placeholder="Enter email">
    <input type="text" name="contact" class="form-control mt-3" placeholder="Enter Telephone">
    <input type="text" name="username" class="form-control mt-3" placeholder="Enter Username">
    <input type="password" name="password1" id="myInput1" class="form-control mt-3" placeholder="Enter Password">
    <input type="password" name="password2" id="myInput2" class="form-control mt-3" placeholder="Enter Password again">
    <input type="checkbox" onclick="myFunction()">Show Password<br>
    <input type="submit" name="submitbtn" class="btn btn-secondary mt-3" value="Register"><br><br>
    <h5>Already have an existing account?</h5>
      <a href="logintoraid.php" style="text-decoration:none; color: black;">Login</a>
    <div>
      <p>
        <?php echo "<span style= 'color: red;'>" . @$req . "</span>"; ?>
      </p>
    </div>
    </form>
  </div>
</div>



<script type="text/javascript" src="bts.js"></script>
<script type="text/javascript" src="Jquery.js"></script>
<script type="text/javascript" src="pooper.js"></script>
<script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>