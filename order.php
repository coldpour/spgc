<?php include 'head.php'; publicPage('order.php'); ?>

<?php
function displayConfirmation() {
    echo "
        <div id='orderconf'>
            Thank you for your order! We will email you shortly.
        </div>";
}

function sendEmail() {
    $email = $_REQUEST['email'] ;
    $subject = "SPGC Book Order" ;
    $message = "Name: ".$_REQUEST['name'].
    	       "\nAddress: ".$_REQUEST['address1'].
	       "\nCity, State, Zip Code: ".$_REQUEST['address2'].
	       "\nE-mail: ".$_REQUEST['email'].
	       "\nPhone: ".$_REQUEST['phone'].
	       "\nQty: ".$_REQUEST['qty'];
    mail("mholm815@gmail.com", $subject, $message, "From:" . $email);
}

function displayInfo() {
    echo "
        <p id='orderinfo' class='order center'>
            It's done! Saint Paul Garden Club members have researched, written, designed and published a beautiful history book of the club that you'll be proud to own. The 152-page book is illustrated with 143 photographs, most in color.
        </p>";
}


function displayDetails() {
    echo "
        <p id=orderdetails' class='order center'>
            Books are $68 each, including sales tax. To order your book today, please fill out the form below and you will be notified when books arrive. You may pick them up at a garden club member’s home or have them mailed to you for an additional $10 packaging and shipping. Please indicate your preference on the form. We will reply to your email with the final amount owed and details of where to send a check.
        </p>";
}


function displayBook() {
    echo "<img class='center' src='images/rooted_and_growing.png' alt='The book is titled, Rooted and Growing, A History of the Saint Paul Garden Club, 1927-2013' />";
}

function displayForm() {
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
                E-mail: <input class='order' type='email' name='email'>
            </div>
            <div class='order'>
                Phone: <input class='order' type='tel' name='phone'>
            </div>
            <div class='order'>
                Quantity:
                <input id='orderqty' class='order' type='number' min='1' name='qty'>
                <input class='order' type='submit' value='Submit'>
            </div>
        </form>";
}
?>

<div id='order' class='slide'>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
    sendEmail();
    displayConfirmation();
    displayBook();
  }
else
//if "email" is not filled out, display the form
  {
    displayInfo();
    displayBook();
    displayDetails();
    displayForm();
  }
?>

</div>

<?php include 'footer.php'; ?>