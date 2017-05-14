<html>
  <head>
    <title>Reading Cookies
    </title>
  <body>
    <?php
      $var1=$_COOKIE['test'];
      echo $var1;//this will print the value of the cookie
       setcookie('test',"av@ntipur@m",time()-(60*60*24*7);//this will delete the cookie as time is negative
      if(isset($_COOKIE['test'])){//this will check if cookie is set or not
        $var1=$_COOKIE['test'];
      }
     ?>

    </form>
  </body>

</html>
