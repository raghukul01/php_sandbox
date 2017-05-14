<html>
  <head>
    <title>arrays
    </title>
  <body>
    <?php
      $array1=array(4,8,15,16,23,42);
      echo $array1[1]."</br>";//index starts with 0
      $array2=array(6,"fox","dog",array("x","y","z"));
      //we can declare an array inside an array
      //we can define any data type in a single array
      echo $array2[3][2]."</br>";//this prints "z"
       $array3=array("FirstName"=>"Raghukul","LastName"=>"raman");
       //it is associative array,we cannot use index to access elements
       echo $array3["LastName"];
       //instead of index we can assign name
       // to a index and use it for referencing
       ?>
       <pre><?php  print_r($array2)?></pre>
       <!--This print_r is used to print whole array in a systematic way.
        We use a pre tag to display it as it is.-->

  </body>

</html>
