<?php
include('db.php');
session_start();

 if (!isset($_SESSION['Username'])) {
  header("location: logintoraid.php");
}else{

  $filename = $_SESSION['filename'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Rogue</title>
	<link rel="stylesheet" href="css/cssbts.css">

<script src="css/fontawesome.js" crossorigin="anonymous"></script>
<link href="css/googleapis.css" rel="stylesheet" />
        <link href="css/googleapis2.css" rel="stylesheet" />
<link href="css/styles2.css" rel="stylesheet" />


  <link rel="icon" type="text/css" href="Favicon/Rogue.png">
</head>
<body style="background-image:url('dk2.jpg'); background-attachment: fixed;">	
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
<br>
        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Rogue/logo.jpg" alt="First slide" style="width: 700px; height: 700px">
      <div class="carousel-caption d-none d-md-block">
      <h5>Rogue</h5>
      <p>League Of Gamers</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="2452442.jpg" alt="Second slide" style="width: 700px; height: 700px">
      <div class="carousel-caption d-none d-md-block">
      <h5>We bring you the lastest action packed video games,</h5>
      <p>Adventure, Horror, Sci-fi, Racing, and many more.</p>
  </div>
    </div>

    <div class="carousel-item">
      <video  class="d-block w-100" alt="Third slide" autoplay style="width: 700px; height:700px;" controls ><source src="Rogue/vid.mp4" type="video/mp4"></video>
      <div class="carousel-caption d-none d-md-block">
      <h5>With different gaming consoles within your reach,</h5>
      <p>you have a world of games waiting for you </p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div>
<center>
	
<div style="margin: 90px; background-color: grey ; padding: 50px; text-align:left; background-attachment: fixed; border-radius: 20px;">	
	<p style="text-align:justify; line-height: 2rem; color: black;">
		Case Western Reserve is the university of choice for high-achieving scholars like you—bright and curious achievers from around the world who know CWRU is their springboard to lifetime success.

Our alumni come from more than 130 countries throughout the world and stay connected to campus through our Center for International Affairs. We count 16 Nobel Prize winners among our ranks, including 2017’s recipient in economic sciences, Richard H. Thaler.

I hope you agree CWRU is a smart choice for inquisitive students like you who are looking to make a lasting mark on the world. I look forward to reviewing your application. Regular Decision and Early Decision II applications are due Jan. 15.

Case Western Reserve is the university of choice for high-achieving scholars like you—bright and curious achievers from around the world who know CWRU is their springboard to lifetime success.

Our alumni come from more than 130 countries throughout the world and stay connected to campus through our Center for International Affairs. We count 16 Nobel Prize winners among our ranks, including 2017’s recipient in economic sciences, Richard H. Thaler.

I hope you agree CWRU is a smart choice for inquisitive students like you who are looking to make a lasting mark on the world. I look forward to reviewing your application. Regular Decision and Early Decision II applications are due Jan. 15.

Case Western Reserve is the university of choice for high-achieving scholars like you—bright and curious achievers from around the world who know CWRU is their springboard to lifetime success.

Our alumni come from more than 130 countries throughout the world and stay connected to campus through our Center for International Affairs. We count 16 Nobel Prize winners among our ranks, including 2017’s recipient in economic sciences, Richard H. Thaler.

I hope you agree CWRU is a smart choice for inquisitive students like you who are looking to make a lasting mark on the world. I look forward to reviewing your application. Regular Decision and Early Decision II applications are due Jan. 15.
Case Western Reserve is the university of choice for high-achieving scholars like you—bright and curious achievers from around the world who know CWRU is their springboard to lifetime success.

Our alumni come from more than 130 countries throughout the world and stay connected to campus through our Center for International Affairs. We count 16 Nobel Prize winners among our ranks, including 2017’s recipient in economic sciences, Richard H. Thaler.

I hope you agree CWRU is a smart choice for inquisitive students like you who are looking to make a lasting mark on the world. I look forward to reviewing your application. Regular Decision and Early Decision II applications are due Jan. 15.
	</p>
</div>
<div style="margin-top: -150px;">
	<img src="Rogue/logo.jpg" width="200px" height="200px" style="border-radius:100px;">
</div>
</center>
</div>
<br>

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
include('footer.php')

?>