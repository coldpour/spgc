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
?>
