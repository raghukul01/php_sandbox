<html>
  <head>
    <title>loops
    </title>
  <body>
    <?php
      $count=0;
      while($count<=10){//same as in C
        echo $count.", ";
        $count++;
      }
     ?>
   </br>
   <?php
      $i;//un initialized variable
      for($i=10;$i>=0;$i--)//this is also same in C
      echo $i.", ";
    ?>
  </br>
    <?php
      //foreach loop runs on array
      //it works until elements are left in array
      $ages = array(4,8,15,16,23,42);
      foreach($ages as $age){
        echo $age.", ";
      }
     ?>
   </br>
   <?php
      //using each key=> value ParentIterator
      foreach($ages as $position=>$age){//prints value with its index
        echo $position.":".$age."</br>";
      }
    ?>
  </br>
  <?php
      $price = array("BrandNewComputer"=>63000,"Ram"=>"8gb","Memory"=>"1tb");
      foreach($price as $key => $value){//associate arrays can also be printed with their index name and value
        if(is_int($value)){
          echo $key.": $".$value."</br>";//apply $ sign in front of price
        }
        else echo $key.": ".$value."</br>";
      }
   ?>
 </br>
 <?php
      for($count=0;$count<=10;$count++){
        if($count==5)continue;//continue and break are same as in C
        if($count==9)break;
        echo $count.", ";
      }
  ?>
  </body>

</html>
