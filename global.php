<html>
  <head>
    <title>global
    </title>
  <body>
    <?php
    $bar="outside";//global variable
      function foo() {
        $bar="ïnstide";//local variable
        return $bar;
      }
      foo();
      echo $bar."</br>";//this will output "outside"
     ?>
     <?php
      function foo2()
      {
        global $bar;//this will pull the variable bar inside
        $bar="inside";//this change is made to global variable
      }
      foo2();
      echo $bar."</br>";
   ?></br>
   <?php
      function paint($color="red"){//this is a default value to the parameter, used when no value is passed to the function
        echo "the color of the room is {$color}"."</br>";
      }
      paint();
      echo var_dump($bar);//this function returns the type of variable and its value

    ?>
  </br>
  <pre>
      <?php//this function helps us to check error
        print_r(get_defined_vars());//get_defined_vars gives all defined variables and their value, in array format
       ?>
  </pre>
  </body>

</html>
