<?php include 'head.php'; publicPage('order.php'); ?>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = "SPGC Book Order" ;
  $message = "Name: ".$_REQUEST['name'].
  	     "\nAddress: ".$_REQUEST['address1'].
	     "\nCity, State, Zip Code: ".$_REQUEST['address2'].
	     "\nE-mail: ".$_REQUEST['email'].
	     "\nTel: ".$_REQUEST['tel'];
  mail("mholm815@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<div id='order' class='slide'>
    <form method='post' action='order.php'>
      Name: <input type='text' name='name'><br />
      Address: <input type='text' name='address1'><br />
      City, State, Zip Code: <input type='text' name='address2'><br />
      E-mail: <input type='text' name='email'>
      Tel. <input type='text' name='tel'><br />
      <input type='submit' value='Submit'>
    </form>
  </div>";
  }
?>

<?php include 'footer.php'; ?>