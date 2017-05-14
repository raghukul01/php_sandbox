<?php
  session_start();//this will set the cookie on server;
 ?>
<html>
  <head>
    <title>Sessions
    </title>
  <body>
      <?php
      $_SESSION['name']="raman"; ?>
      <?php
      $name=$_SESSION['name'];
      echo $name;
       ?>
  </body>

</html>
