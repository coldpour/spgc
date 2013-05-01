<?php
require ("passhash.php");

$pass_hash = PassHash::hash($_POST['pword']);
echo $pass_hash;

if (PassHash::check_password($pass_hash, $_POST['pword'])) {
   echo "Access Granted!";
} else {
   echo "Access Denied";
}

?>