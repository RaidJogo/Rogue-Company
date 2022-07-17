<?php
include('db.php');
session_start();
$id = $_SESSION['ID'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comment Database</title>
  <link rel="stylesheet" href="css/cssbts.css">
<link rel="icon" type="text/css" href="Favicon/Rogue.png">
</head>
<body style="background-color: darkgrey;">
<div style="text-align: center; font-weight: bold; margin-top: 5px; font-family: cursive;">
  <h1>COMMENTS OFFLINE</h1>
</div>
<div class="container mt-5">
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
    
            </div>
        </div>

        ";
      }
    }
    ?>
</div>
</body>
</html>
