<html>
  <head>
    <title>logical statement
    </title>
  <body>
    <?php
      $a=5;
      $b=4;
      if($a==$b){//$a==$b returns a boolean
        echo "a is equal to b";
      }

      else {
        echo "a is not equal to b";
      }
     ?><!--other expression !=, >=, <= and so on -->

     <?php
        if($a>$b){
          echo "a is larger than b";
        }
        elseif($a==$b) {//syntax of else if statement is different than in C
          echo "a is equal to b";
        }
        else echo "a is less than b";
      ?>
    </br>
      <?php
        $c=100;
        $d=20;
        if(($a>$b)&&($c>$d)){//logical expressions are same as in C
          echo "a is larger than b AND";
          echo "c is larger than d";
        }//We can also use AND in place of &&, Similarly OR in place of ||
       ?>
     </br>
       <?php
        if(!isset($a))$a=100;//!isset is equivalent to not set
        else {
          settype($a,"string");
          echo gettype($a);
        }
        ?>
      </br>

      <?php
        $a=3;
        switch($a){//We use a colon in case statement
          case 0: echo "a equals 0";break;
          case 1: echo "a is 1";break;//break command is neccessary else all the conditions will satisfy
          case 2: echo "a is 2";break;
          default: echo "a is 3";break;//position of default statement does not matter 
        }
       ?>

  </body>

</html>
