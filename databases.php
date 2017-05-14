<?php
    //1)create a data base connection
    $connection=mysql_connect("localhost","root","");

    if(!$connection) {//this is to check if connection is established
      die("Database connection failed: ".mysql_error());

    }
    //2)database selection
      $db_select=mysql_select_db("widget_corp",$connection);
      if(!$db_select) {//this is to check if selection of the database succeeded
        die("database selection failed: ".mysql_error());
      }
 ?>
<html>
  <head>
    <title>raman
    </title>
  <body>
    Basic
    <?php
      //3)database query
      $query="SELECT * FROM subjects ORDER BY position ASC";
      $result=mysql_query($query,$connection);
      if(!$result) {//this is to check if query is made correctly
        die("database selection failed: ".mysql_error());
      }
      //4)use returned query
      while($row=mysql_fetch_array($result)){//this is to print the table
        echo $row["menu_name"]." ".$row["position"]."</br>";

      }
     ?>

  </body>
</html>
<?php
//5)close connection
mysql_close($connection);
 ?>
