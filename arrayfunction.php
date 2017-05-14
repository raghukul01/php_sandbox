<html>
  <head>
    <title>arraysFunction
    </title>
  <body>
    <?php
      $array1=array(4,8,15,13,23,42);
      echo count($array1)."</br>";//prints number of element in array
      echo max($array1)." ".min($array1)."</br>";//min and max in array
      sort($array1);
      print_r($array1);
      echo "</br>";
      rsort($array1);//reverse sort=>decreasing order
      print_r($array1);
      echo "</br>";
    ?>
    <?php
      echo $string1=implode(",",$array1);//prints sting with a , .ie 42,23,15,13,8,4
      echo "</br>";
      print_r(explode(",",$string1));//removes , and print array in suitable format
      echo "</br>";
      echo "</br>";echo in_array(4,$array1);
      //it checks for a value in the array, if found it return 1 else it returns nothing

     ?>
   </br>
  </body>

</html>
