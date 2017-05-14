<html>
  <head>
    <title>functions
    </title>
  <body>
    <?php
    bye();//this function is defined at bottom
      //function name are case insensitive
      function gcd($a,$b){//same as in C
        if($b==0)return $a;
        else
        return gcd($b,fmod($a,$b));
      }
      function hello($str){//string argument
        echo "Hello {$str}";
            }
    ?>
    <?php
      echo gcd(15,9)."</br>";
      hello("raman");
      function bye() {//we an declare function anywhere
        echo "</br>"."Bye";
      }
      bye();
     ?></br>
     <?php
      //getting two value from a function
      function addition($a,$b){
        $sum=$a+$b;
        $diff=$a-$b;
        $arr=array($sum,$diff);
        return $arr;//returning array in place of integer
      }
      $arr2=addition(6,2);
      echo $arr2[0].", ".$arr2[1];
      ?>
  </body>

</html>
