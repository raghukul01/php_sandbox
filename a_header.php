<?php
  //this is how you redirect a page
  header("Location: basic.html");
  //header("HTTP/1.0 404 not found");
  //this is how you return a 404 error
  exit;//this allow not to run the code below
 ?>
<!--output buffer-->
<html>
  <head>
    <title>header
    </title>
  <body>
    <?php
      //this part will not run as there is exit command
      header("Location: basic.html");
     ?>

  </body>

</html>
