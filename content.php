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
    <title>Content</title>
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
        <section id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><video  class="d-block w-100" autoplay style="width: 850px; height:850px;" ><source src="R6seige.mp4" type="video/mp4"></video></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left" style="color: lightcoral;">
                            <h4>Shoreline</h4>
                            <p style="color: darkcyan;">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><video  class="d-block w-100" autoplay style="width: 500px; height:500px;" ><source src="R6seige.mp4" type="video/mp4"></video></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p style="color: darkcyan;">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><video  class="d-block w-100" autoplay style="width: 500px; height:500px;" ><source src="R6seige.mp4" type="video/mp4"></video></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p style="color: darkcyan;">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section id="projects" >
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><video  class="d-block w-100" autoplay style="width: 850px; height:850px;" ><source src="R6seige.mp4" type="video/mp4"></video></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left" style="color: lightcoral;">
                            <h4>Shoreline</h4>
                            <p style="color: darkcyan;">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><video  class="d-block w-100" autoplay style="width: 500px; height:500px;" ><source src="R6seige.mp4" type="video/mp4"></video></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p style="color: darkcyan;">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><video  class="d-block w-100" autoplay style="width: 500px; height:500px;" ><source src="R6seige.mp4" type="video/mp4"></video></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p style="color: darkcyan;">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
include('footer.php');

?>

