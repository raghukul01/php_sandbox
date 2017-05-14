<html>
  <head>
    <title>First Page
    </title>
  <body>
    <a href="SecondPage.php?name=raman&id=1">Second</a><!--& is used to seperate two variables in the URL-->
    <?php
      //methods to make webpage dynamic
      //URL=>GET
      //Forms=>POST
      //Cookies=>COOKIES
      $linktext="<click> & you'll see";//this kind of text cannot be directly included in html
                      //so we need to do some php encodig to it
     ?></br>
     <a href="SecondPage.php?name=<?php echo urlencode("raman &bond&");?>&id=42">encoding</a>

     <!--if the string contains & sign then we use urlencoding with php to pass the correct string-->
     <!-- space is encoded as +-->
     <a href="SecondPage.php?name=raman&id=4"><?php echo htmlspecialchars($linktext); ?></a>
     <!-- html will skip <click> but using php we can output it as required-->
     <!--we can escape over html code using htmlspecialchars to prevent -->
  </body>

</html>
