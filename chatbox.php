<?php
include('db.php');
session_start();
$id = $_SESSION['ID'];

if (isset($_POST['add'])) {
  $comment = $_POST['comment'];
  $nameofgame = $_POST['nameofgame'];


  $query = "INSERT INTO comment (ID, comment, nameofgame) values ('$id', '$comment', '$nameofgame') ";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<script>alert('Comment sent')</script>";
  }else{
    echo "<script>alert('Comment was unable to send')</script>";
  }
}


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
  <title>Chatbox</title>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1 style="color: lightcoral;">CHATBOX</h1>
                <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                 <div class="comment mt-4 text-justify float-left" style= 'background-color: darkcyan; border-radius: 5px; padding: 20px'>
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" method="post" action="chatbox.php">
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <label for="message" name>Comment box</label>
                        <textarea name="comment" id=""msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Name of Game</label>
                        <input type="text" name="nameofgame" id="fullname" class="form-control">
                    </div>
                   
                    <div class="form-group">
                      <input type="submit"  class="btn btn-primary" name="add" value="Post Comment">
                    </div>
                </form>
                <br>
                <div class="form-group">
  <h4>Your Recent Comment</h4>

    <?php
    $count = 0;
    $query = "SELECT * FROM comment WHERE ID = '$id'";
    $result = mysqli_query($conn, $query);
    if($result){
      while($arr = mysqli_fetch_assoc($result)){
        $count = $count + 1;
        $id = $arr['ID'];
        $comment = $arr['comment'];
        $nameofgame = $arr['nameofgame'];

        echo"

        <div>
          <div style= 'background-color: darkcyan; border-radius: 0px; padding: 20px'>
        
            <h2>$nameofgame</h2>
            <p>$comment</p>
            <button class='btn btn-danger'><a href='deletecomment.php?id=$id' style='color: black; text-decoration: none'>Delete</a></button>
            </div>
        </div>

        ";
      }
    }
    ?>

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