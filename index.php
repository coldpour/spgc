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
     if ($_SESSION['LoggedIn']) {
         include 'members.php';
     } elseif (!empty($_POST['password'])) {
         require ("passhash.php");

         $file = fopen("testfile", "r") or exit("can't open file");
         $storedPassHash = fgets($file);
         fclose($file);

         if (PassHash::check_password($storedPassHash, $_POST['password']) {  
             $_SESSION['LoggedIn'] = 1;
         } else {  
             $_SESSION['LoginFailed'] = 1;
         }
         echo "<meta http-equiv='refresh' content='1;index.php' />"
     } else {
         include 'public.php';
     }
  ?>
</div>
</body>
</html>

