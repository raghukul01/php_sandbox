<html>
  <head>
    <title>First Page
    </title>
  <body>
    <?php
    $url_page="php/created/page/url.php";
    $param1="this is a string";
    $param2='"bad"/<>charactess$';
    $linktext="<click> $ you see it";
     ?>
     <?php
    $url="http://localhost/";
    $url.=rawurlencode($url_page);//raw encoding is used for url before ? mark
    $url.="?param1=".urlencode($param1);//urlencode is used for parameters after ?
    $url.="&param2=".urlencode($param2);
      ?>
      <a href="<?php echo htmlspecialchars($url);?>"><!--this converts all the url so that no html tag is active in it-->
        <?php echo htmlspecialchars($linktext); ?>
      </a>
  </body>

</html>
