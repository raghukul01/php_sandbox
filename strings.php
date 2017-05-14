<html>
  <head>
    <title>raman
    </title>
  <body>
    <?php
      echo "Hello</br>raman";
      echo "<center><h1>GOOGLE </h1></center>";//using html in php
      $var1="again";
      echo $var1."Again";//adding string variable and literal
     ?>
   </br>
     <?php
      echo "{$var1}hello";//adding variable is possible only in double quotes "in place substitution"
      //if variable is used in double quotes, use curly brackets to distinguish it from string
    ?>

  </body>
</html>
