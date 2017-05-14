<html>
  <head>
    <title>Second Page
    </title>
  <body>
    <?php
          //$_GET=> super global variable, it is the array of url of previous page
      echo "<pre>";
      print_r($_GET);//it brings all the string from previous pase and stores it as an associated array
      echo "</pre>";
      $id=$_GET['id'];
      $name=urldecode($_GET['name']);//urldecode is not actually required
      echo "<strong>".$id."</br>".$name."</strong>";
     ?></br>
     <?php
      $string="raghukul raman";
      echo urlencode($string);
      echo "</br>";
      echo rawurldecode($string);
      ?>
  </body>

</html>
