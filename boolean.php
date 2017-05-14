<html>
  <head>
    <title>booleans
    </title>
  <body>
    <?php
      $bool1=true;//string literal
      $bool2=false;
     ?>
     <?php
      echo $bool1.$bool2;//bool1=1,and bool2 prints nothing
      ?>
    </br>
    <?php
      $var1=3;
      $var2="cat";
      $var4=0;
     ?>
     $var1 is set:<?php echo isset($var1); ?></br><!--to check if a variable is assigned or not-->
     $var2 is set:<?php echo isset($var2); ?></br><!--return 1 if assigned-->
     $var3 is set:<?php echo isset($var3); ?></br>
     <?php unset($var1); ?><!--un declares a variable-->
     $var1 is set:<?php echo isset($var1); ?></br>
     $var2 is set:<?php echo isset($var2); ?></br>
     $var3 is set:<?php echo isset($var3); ?></br>
     $var1 is empty:<?php echo empty($var1); ?></br><!--Checks is a varible is empty, in this case it returns 1-->
      $var4 is empty:<?php echo empty($var4); ?></br><!-- 0 value is also considered as empty, in this case output is 1 -->
   </br>
  </body>

</html>
