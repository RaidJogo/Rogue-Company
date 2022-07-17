<?php
session_start();
include('db.php');
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $encpass = md5($password);

  if (empty($username) or empty($password)) {
    $msg = "Fill in necessary details";
  }else if(!preg_match("/^[a-zA-Z-' ]*$/", $username)){
    $msg = "Invaid username";
  }else{

    $query = "SELECT * FROM register WHERE Username='$username' and Password='$encpass'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      while ($arr = mysqli_fetch_assoc($result)) {
        $id = $arr['ID'];
        $email = $arr['Email'];
        $filename = $arr['filename'];
        $username_db = $arr['Username'];
        $password_db = $arr['Password'];

        $_SESSION['Username'] = $username;
        $_SESSION['Email'] = $email;
        $_SESSION['filename'] = $filename;
        $_SESSION['ID'] = $id;

        if (($username == $username_db) and ($encpass == $password_db)) {
          header("location: dashboard.php");
        }else{
          $msg = "Invalid login details 2";
        }

      }
    }else{
      $msg = "Invalid login details";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/cssbts.css">
  <link rel="icon" type="text/css" href="Favicon/Rogue.png">
</head>
<body style="background-image: url('dk1.jpg');">





<div class="container col-4" style="margin-top: 150px;">
  <div class="card" style="padding: 20px; background-color: darkgray; border-radius: 10px">
    <form method="post" action="logintoraid.php">
    <center><img style="border-radius:120%; width:150px; height:150px" src="Rogue/logo.jpg"><h3>Rogue</h3></center>
    <input type="text" name="username" class="form-control mt-3" placeholder="Username">
    <input type="password" name="password" id="myInput" class="form-control mt-3" placeholder="Password">
    <input type="checkbox" onclick="myFunction()">Show Password<br>
    <div>
      <p style="text-align: left; color: red;">
        <?php echo @$msg; ?>
      </p>
    </div>
    <input type="submit" name="submit" class="btn btn-secondary mt-3" value="Login"><br><br>
    
    <h5>Don't have an account?</h5>
      <a href="registerintoraid.php" style="text-decoration:none; color: black;">Sign up</a>
    
    </form>
  </div>
</div>

<script type="text/javascript" src="bts.js"></script>
<script type="text/javascript" src="Jquery.js"></script>
<script type="text/javascript" src="pooper.js"></script>
<script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>