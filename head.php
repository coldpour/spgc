<?php session_start(); ?>
<html>
<head>
<title>SPGC</title>
<link rel="stylesheet" href="screen.css" media="screen" />
<link rel="stylesheet" href="handheld.css" media="handheld" />
</head>

<body>
<div class="container center">

<?php 
function loggedIn() {
    return !empty($_SESSION['LoggedIn']);
}

function redirect($page, $delay) {
    echo "<meta http-equiv='refresh' content='".$delay.";".$page."' />";
}

function loginAttempted() {
    return !empty($_POST['password']);
}

function tryPassword() {
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
    redirect('index.php', .5);
}
?>
