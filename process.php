<html>
  <head>
    <title>form proccessing
    </title>
  <body>
      <?php
        $username=$_POST['username'];//post is the super global vaiable containing all data in form of an Array
        $password=$_POST['password'];
        //post does not require encoding
        echo "{$username}: {$password}";
       ?>
  </body>

</html>
