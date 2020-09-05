<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PreperationZone</title>
<link href="css/terms.css"  rel = "stylesheet" type = "text/css"/>
</head>
<body id="bodyid" onload="setheight()" style="margin:0px; ">
	<div class="header">WE THE CHANGE MISSION</div><br />



<?php
function spamcheck($field)
  {
  $field=filter_var($field, FILTER_SANITIZE_EMAIL); // Sanitize e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) // Validate e-mail address
    {    return 	TRUE;    }
  else    {    return FALSE;    }
  }
?>
<?php 
session_start();
$email=   spamcheck($_POST['email']);
//$mailcheck = spamcheck($_POST["from"]);
    if ($email==FALSE)
      {
      echo "Invalid email";
      }
    else
      {
			$username =  $_POST['username'];
			$email=  $_POST['email'];
			$phone =  $_POST['phone'];
			$message =  $_POST['message'];
			$place =  $_POST['place'];
			$subject='WTC - MESSAGE';
			$message .= "\n  \n phone =".$phone."\n Name =".$username."\n Place =".$place ;
			if($username&&$phone&&$message&&$email)
			{
				mail("wethechangeteam@gmail.com", $subject, $message, "From: $email\n");
				//mail("sabertoothmaurice@gmail.com", "working", "peace2", "From: wethechangeform@xyz.com\n");
				echo "Thanks for your Input. We will get back to you shortly";
				//echo $email;
			
			}
			else
				{				
					die("please enter all the fields");
				}
      }
?>
	<br /><br /><a href="main.php" class="back">back</a>
</body>
</html>