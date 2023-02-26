<?php 
   
$text = "AAAAA22222aaa";

echo "<center>";

echo "Text: $text <br />";
$number = 0;

for ($i = 0; isset($text[$i]); $i++) {


    if ($text[$i] >= "0" && $text[$i] <= "9") {

        $number += ($text[$i]);
  
  }



}

echo "Total Number Sum in String is:  = $number";

echo "</center>";



?>