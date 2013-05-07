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

function publicPage($name) {
    if (loginAttempted()) {
        tryPassword('directory.php', $name);
    } elseif (loggedIn()) {
        include 'logout.php';
    } else {
        showLogin($name);
    }
    showCommonContent();
}

function memberPage() {
    if (!loggedIn()) {
        redirect('index.php', 0);
    } else {
        include 'logout.php';
    }
    showCommonContent();
}

function showCommonContent() {
    include 'banner.php';

    require 'stripe.php';
    Stripe::open();
}

function loggedIn() {
    return !empty($_SESSION['LoggedIn']);
}

function redirect($page, $delay) {
    echo "<meta http-equiv='refresh' content='".$delay.";".$page."' />";
}

function loginAttempted() {
    return !empty($_POST['password']);
}

function tryPassword($successPage, $failPage) {
    require 'passhash.php';

    $file = fopen("passfile", "r") or exit("can't open file");
    $storedPassHash = fgets($file);
    fclose($file);

    if (PassHash::check_password($storedPassHash, $_POST['password'])) {  
       $_SESSION['LoggedIn'] = 1;
       $_SESSION['LoginFailed'] = 0;
       redirect($successPage, 0);
    } else {  
       $_SESSION['LoginFailed'] = 1;
       $_SESSION['LoggedIn'] = 0;
       redirect($failPage, .5);
    }
}

function showLogin($currentPage) {
    echo "<form class='login' action=".$currentPage." method='post'>";
    echo "    <input class='login' type='password' placeholder='password' name='password'>";

    if (isset($_SESSION['LoginFailed'])) {
        echo "<span class='login'>X</span>";
    }

    echo "    <input class='login' type='submit' value='Log In'>";
    echo "</form>";
}

?>

