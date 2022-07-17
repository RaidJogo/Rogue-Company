<?php
include('db.php');
session_start();

if (!isset($_SESSION['Username'])) {
  header("location: logintoraid.php");
}else{

  $filename = $_SESSION['filename'];
  $id = $_SESSION['ID'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="css/cssbts.css">

<script src="css/fontawesome.js" crossorigin="anonymous"></script>
<link href="css/googleapis.css" rel="stylesheet" />
        <link href="css/googleapis2.css" rel="stylesheet" />
<link href="css/styles2.css" rel="stylesheet" />


  <link rel="icon" type="text/css" href="Favicon/Rogue.png">
</head>
<body style="background-image:url('dk1.jpg'); background-attachment: fixed;"> 
<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
  <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
              <form class="sidebar-brand" class="form-inline my-2 my-lg-0" style="text-align: left;">
      <img src="<?php echo "upload/$filename"; ?>" style="width: 70px; height:70px; border-radius: 100px;" alt="Unable to load image">
    </form>
                <li class="sidebar-brand"><a href="profile.php">Profile</a></li>
                <li class="sidebar-nav-item"><a href="content.php">Content</a></li>
                <li class="sidebar-nav-item"><a href="chatbox.php">Chatbox</a></li>
                <li class="sidebar-nav-item"><a href="about.php">About</a></li>
                <li class="sidebar-nav-item"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
<br><br>

<div class="container" style="margin-top:45px;">
   <div class="card" style="padding: 30px; background-color: grey; border-radius: 10px">
  <h4 style="padding: 5px;">Profile</h4>
  <table class="table" style="border: 2px solid lightcoral;">
    <?php
    $count = 0;
    $query = "SELECT * FROM register WHERE ID = '$id'";
    $result = mysqli_query($conn, $query);
    if($result){
      while($arr = mysqli_fetch_assoc($result)){
       $surname = $arr['Surname'];
       $firstname = $arr['Firstname'];
       $middlename = $arr['middlename'];
       $dob = $arr['DOB'];
       $telephone = $arr['Telephone'];
        $username = $arr['Username'];
        $email = $arr['Email'];

        echo"
        <tr><td><b>
Surname</b></td> <td>$surname</td></tr>
      <tr><td><b>
Firstname</b></td><td>$firstname</td></tr>
      <tr><td><b>
Middlename</b></td><td>$middlename</td></tr>
      <tr><td><b>
Dob</b></td> <td>$dob</td></tr>
      <tr><td><b>
Telephone</b></td><td>$telephone</td></tr>
      <tr><td><b>
Username</b></td><td>$username</td></tr>
      <tr><td><b>
Email address</b></td> <td>$email</td></tr>
</table><br>
<button class='btn btn-danger'><a href='deleteprofile.php?id=$id' style='color: black; text-decoration: none'>Delete</a></button><br>
        ";
      }
    }
    ?>
  
</div>
</div>
<br><br>

<script src="css/jquery32.js" crossorigin="anonymous"></script>
<script src="css/pooper.js" crossorigin="anonymous"></script>
<script src="css/bts.js" crossorigin="anonymous"></script>

<script src="js/jsdeliver.js"></script>
<script src="js/scripts2.js"></script>
<script src="js/startboot.js"></script>


<?php
}
?>
</body>
</html>
<?php
include('footer.php');

?>
