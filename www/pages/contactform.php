<?php $to = "info@paramountmedicalresearch.com"; 
$subject = "Contact Us - " . $_REQUEST['name'];
$email = $_REQUEST['email'] ; $message = "First Name: " .$_REQUEST['fname']."\n Last Name: ".$_REQUEST['lname']."\n Email: " .$_REQUEST['email']."\n Address 1: " .$_REQUEST['address1']."\n Address 2: " .$_REQUEST['address2']."\n City: " .$_REQUEST['city']."\n State: " .$_REQUEST['state']."\n Zip: " .$_REQUEST['zip']."\n Day Phone: ".$_REQUEST['dphone']."\n Evening Phone: " .$_REQUEST['ephone']."\n Best Time to Call: " .$_REQUEST['ttcall']."\n Gender: " .$_REQUEST['gender']."\n Date of Birth: " .$_REQUEST['dob']."\n Study of Interest: " .$_REQUEST['study']."\n Preferred Method of Contact: " .$_REQUEST['contact']."\n How did you hear of us?: ".$_REQUEST['hear']."\n \n"."Message: \n".$_REQUEST['message'] ;
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers) ;
if($sent) {print "Your mail was sent successfully."; } else {print "We encountered an error sending your mail; please try again."; }
echo "\n \n";
print "You will be redirected back to the \"Contact\" page in a moment, or ";
echo "<a href=http://www.paramountmedicalresearch.com/contact.html>click here to go back.</a>";
echo "<meta http-equiv='Refresh' content='0; URL=contactredir.php?date=".$date."'>"; ?>