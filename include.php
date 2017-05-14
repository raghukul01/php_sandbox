
  <head>
    <title>header
    </title>
  <body>
    <?php
      include("included_func.php");//this include the file included_func.php
      //include function is out of php ie if phph is not run this command will be run
      require_once("included_func.php")//this will prevent from error if we include the file second time
      //require is same as include but require also give error message if it is unable to load the file
     ?>
     <?php
     hello("Everyone"); ?>
  </body>

</html>
