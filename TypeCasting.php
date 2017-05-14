<html>
  <head>
    <title>Type Casting
    </title>
  <body>
    <?php
      $var1="2 brown foxes";
      $var2 =$var1+ 3;//this will lead to type casting of
                      //the string to int. value of the string is 2
      echo $var1;

     ?></br>
     <?php
     echo gettype($var1) ?><!--it returns the type of the variable-->
   </br>
   <?php
   echo gettype($var2);echo "</br>";
    settype($var2,"string" );//type conversion to string
    echo gettype($var2);echo "</br>";
    $var3=(int)$var1;//other way of type conversion
    echo gettype($var3);

      ?>
      <?php
        echo is_array($var1)."</br>";//these functions return booolean for true or false
        echo is_bool($var1)."</br>";
        echo is_float($var1)."</br>";//return true is variable is of that type
        echo is_int($var1)."</br>";
        echo is_null($var1)."</br>";
        echo is_numeric($var1)."</br>";
        echo is_string($var1)."</br>";

       ?>

  </body>

</html>
