<html>
  <head>
    <title>pointers
    </title>
  <body>
    <?php
      $ages=array(4,8,15,16,23,42);

  ?>
  <?php
      echo "1: ".current($ages)."</br>";
      next($ages);//next bump it to point to next value
      echo "2: ".current($ages)."</br>";
      reset($ages);//sets the pointer to initial value
      echo "1: ".current($ages)."</br>";
  ?><!--current returns the value to which a variable is pointing-->
  <?php
      while($age=current($ages)){//assingment operator
        echo $age.", ";//loop will run until assingment is correct
        next($ages);//loop stops when no value is left
      }
   ?>
  </body>

</html>
