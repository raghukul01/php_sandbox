<html>
  <head>
    <title>floats
    </title>
  <body>
    <?php
      $var=3.14;
      echo round($var,1),"</br>";//round off to 1 digit
      echo ceil($var),"</br>";//print ceiling. ie. next integer greater than variable
      echo floor($var),"</br>";//print floor. ie. GIF
      //several math functions Are
      echo abs(-15)."</br>".pow(4,3)."</br>".sqrt(100)."</br>".fmod(20,7)."</br>".rand(1,10);
      /*abs=>absolute value
      pow=>Exponent=>4^3;
      fmod=>modulo=>20 mod(7);
      rand=>random number between 1 and 10
      */
     ?>
  </body>

</html>
