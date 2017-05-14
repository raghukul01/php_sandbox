<html>
  <head>
    <title>Forms
    </title>
  <body><?php $var1=$_COOKIE['test'] ?>
    <form action="process.php" method="post"><!--a simple html form-->
      Username: <input type="text" name="username" value="" /></br>
      Password: <input type="password" name="password" value="<?php echo $var1;?>" /></br>
    <input type="submit" name="submit" value="submit" />
    </form>
  </body>
</html>
