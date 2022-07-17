<?php
include('db.php');
 session_start();

 if (!isset($_SESSION['Username'])) {
  header("location: logintoraid.php");
}else{

  $filename = $_SESSION['filename'];


include('header.php');


?>





<?php
}
?>
</body>
</html>
