<html>
  <head>
    <title>stringFuction
    </title>
  <body>
      <?php
        $first="the quick brown fox";
        $second=" jumped over the lazy dog.";

       ?>
      <?php
        $third=$first;/*variable declared in one block can be used in second block
                        and strings can be equated unlike in C*/
        $third .=$second;//updaing a given string,catenation to given string
        echo $third;
        ?>
      </br>
      Lowercase: <?php echo strtolower($third); ?></br><!--Whole string is converted to lower string  -->
      Uppercase: <?php echo strtoupper($third); ?></br><!--whole string is converted to uppercase -->
      Uppercase first-letter: <?php echo ucfirst($third); ?></br><!--first letter is converted to uppercase -->
      Uppercase Word: <?php echo ucwords($first); ?></br><!--Convert each starting letter of aword to upper case \ -->
      Length: <?php echo strlen($third); ?></br>
      Trim: <?php echo $third=$first . trim($second); ?></br><!--trim function gets rid of all the white
                                                                  space at the beginning and at the end of the string.
                                                                In this example it removes space from second string and add it to first-->
      Find: <?php echo strstr($third,"brown"); ?></br><!--search first string in first string-->
      Replace by string: <?php echo str_replace("quick","super-fast",$third); ?><!--this function replaces 1st string by 2nd
                                                                                  string in the third string. it require 3
                                                                                  parameters-->
      </br>
      Repeat: <?php echo str_repeat($first,2); ?></br><!--Repeats it twice-->
      makeSubstring <?php $new_str= substr($first,5,10);echo "$new_str </br>"; ?></br><!--prints from 5 to 10-->
      Find position: <?php $inta= strpos($first,"fox");echo $inta; ?></br><!--returns int corresponding to starting position of the string-->
      Find Character: <?php  $intb=strchr($third,"z"); echo $intb; ?></br><!--returns pointer to string with index where "z" occurs-->

  </body>

</html>
