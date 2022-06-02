<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "pesm2706@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $phone = $_POST['tel']; //getting customer Phome number
 $subject = $_POST['subject']; //getting subject line from client
 $email=$_POST['email'];
 
 //Email body I will receive
 $message = "Clint Name: " . $name . "\n"
 . "Email:" . $email ."\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Client Message: " . "\n" . $_POST['message'];
 
 
 
 
 
 //PHP mailer function
 
  $result = mail($mailto, $subject, $message); // This email sent to My address
  
 
  //Checking if Mails sent successfully
 
  if ($result) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>