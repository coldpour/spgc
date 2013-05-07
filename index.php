<?php include 'head.php';

if (loggedIn()) {
    redirect('directory.php', 0);
} elseif (loginAttempted()) {
    tryPassword();
} else {
    showLogin('index.php');
    include 'banner.php';
    include 'slide.php';
    include 'footer.php';
}

