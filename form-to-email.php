<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

// Email from the new interest
$email_from = $visitor_email;//<== update the email address
$email_subject = "New Lunabotics Interest!";
$email_body = "$name has taken notice of Purdue Lunabotics via our website!\n\n\n".
    "Here is the message:\n\n $message \n\nSent to ".
    
$to = "lunabusinessops@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Email to the user
$email_from = "purduelunabusinessops@gmail.com";//<== update the email address
$email_subject = "Purdue Lunabotics Greetings!";
$email_body = "Hello $name, 

\n\n\n
\t Thank you for your interest in Purdue Lunabotics! Purdue Lunabotics is a Purdue University student organization aimed 
at developing innovative robots for space exploration. We are a new, rapidly growing student organization that currently
 boasts over 30 members. Our members are some of the brightest students at Purdue University and share a strong interest
 in the fields of aerospace and robotics. We seek to provide our team with hands-on experience and applicable skills that
 enable them to lead successful careers in these industries.
 
\n\n
\t This year we competed for the first time in NASA\’s Annual Robotic Mining Competition, where our
robot successfully maneuvered a simulated Martian terrain to collect and transport resources. Out of 46 teams, we 
achieved 2nd place for our ability to execute these tasks while factoring in robot mass,
power consumption, and data usage into our robot\’s design and operation. Our goal is to improve upon
our success by designing and building a new, more advanced robot for the next competition.

\n\n\n
\t To learn more about our team, please visit our Twitter, website, and Facebook:
\n Twitter: https://twitter.com/purduelunabotic 
\n Website: http://www.purdue.edu/lunabotics 
\n Facebook: https://www.facebook.com/purduelunabotics
 \n\n 
 \t We have weekly meetings every Saturday at 11:00 in the Amelia's Cafe in Armstrong Hall. We are excited to meet you!
 
 \n\n
 Sincerely,
\n
The Purdue Lunabotics Leadership Team \n".
    
$to = $visitor_email;//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 