<?php include 'head.php'; publicPage('order.php'); ?>

<div id='order' class='slide'>

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
	     "\nPhone: ".$_REQUEST['phone'];
  mail("mholm815@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "
    <form id='orderform' class='center' method='post' action='order.php'>
      <div class='order'>
        Name: <input class='order' type='text' name='name'>
      </div>
      <div class='order'>
        Address: <input class='order' type='text' name='address1'>
      </div>
      <div class='order'>
        City, State, Zip: <input class='order' type='text' name='address2'>
      </div>
      <div class='order'>
        E-mail: <input class='order' type='text' name='email'>
      </div>
      <div class='order'>
        Phone: <input class='order' type='text' name='phone'>
      </div>
      <div class='order'>
        <input class='order' type='submit' value='Submit'>
      </div>
    </form>";
  }
?>

</div>

<?php include 'footer.php'; ?>