<title>The Clear Idea</title><?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = "Web Form" ;
  //$message = $_REQUEST['message'] ;
  $name = $_REQUEST['name'] ;
  $phone = $_REQUEST['phone'] ;
  $company = $_REQUEST['company'] ;
  $email = $_REQUEST['email'] ;
  $comments = $_REQUEST['comments'] ;
  
  $message = "Name: $name\n\n Phone: $phone\n\n Company: $company\n\n Email: $email\n\n Comments:\n $comments"; 
 
 
 
  mail( "sales@theclearidea.com", "Subject: $subject", $message, "From: $email" ) ;
  header( 'Location: thankyou.php' ) ;
  //mail( "sales@theclearidea.com", "Subject: Enquiry", "Email body", "From: sales@theclearidea.com" ) ;
  //echo "Thank you for using our mail form";
  //echo $name . "<br />" . $phone . "<br />" . $company . "<br />" . $email . "<br />" . $comments;
  }
else
//if "email" is not filled out, display the form
  {
  header( 'Location: contact.php' ) ;
  
 // echo "error";
  
  }
?>