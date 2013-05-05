<?php include 'head.php';

     if (loggedIn()) {
         redirect('directory.php', 0);
     } elseif (loginAttempted()) {
         tryPassword();
     } else {
         include 'login.php';
         include 'banner.php';
         include 'slide.php';
         include 'footer.php';
     }

include 'foot.php';

