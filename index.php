<?php include 'head.php';

     if (loggedIn()) {
         echo "<meta http-equiv='refresh' content='0;directory.php' />";
     } elseif (!empty($_POST['password'])) {
         require 'passhash.php';

         $file = fopen("passfile", "r") or exit("can't open file");
         $storedPassHash = fgets($file);
         fclose($file);

         if (PassHash::check_password($storedPassHash, $_POST['password'])) {  
             $_SESSION['LoggedIn'] = 1;
	     $_SESSION['LoginFailed'] = 0;
         } else {  
             $_SESSION['LoginFailed'] = 1;
	     $_SESSION['LoggedIn'] = 0;
         }
         echo "<meta http-equiv='refresh' content='.5;index.php' />";
     } else {
         include 'login.php';
         include 'banner.php';
         include 'slide.php';
         include 'footer.php';
     }

include 'foot.php';

