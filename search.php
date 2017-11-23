<?php
		require('person.php');
		require('MyClass.php');
	$fullname = $_POST["fullname"];
	$subject = $_POST["subject"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$comments = $_POST["comments"];

	

	if (!$fullname || !$subject || !$email || !$telephone || !$comments) {
		echo "You have not entered all the required details.<br />"
		."Please go back and try again.";
		exit;
	}
	$valid = mail($email,$subject,$comments);

	if($valid)
	{
		echo "Your email was send sucessfully";
	}else
	{
		echo "Something went wrong during the process of sending your email";
	}
	
	
?>
<html>
	<head>
			<title>EmailSender</title>
	</head>
	<body>
		<form name="contactform" method="post" action="">
			<table width="450px">
				<tr>
					 <td valign="top">
					  	<label for="full_name">Full Name *</label>
					 </td>
					 <td valign="top">
					  	<input  type="text" name="fullname" maxlength="50" size="30">
					 </td>
				</tr>
				<tr>
					 <td valign="top"">
					  	<label for="subject">Subject*</label>
					 </td>
					 <td valign="top">
					  	<input  type="text" name="subject" maxlength="50" size="30">
					 </td>
				</tr>
				<tr>
					 <td valign="top">
					  	<label for="email">Email Address *</label>
					 </td>
					 <td valign="top">
					  	<input  type="text" name="email" maxlength="80" size="30">
					 </td>
				</tr>
				<tr>
					 <td valign="top">
					  	<label for="telephone">Telephone Number</label>
					 </td>
					 <td valign="top">
					  	<input  type="text" name="telephone" maxlength="30" size="30">
					 </td>
				</tr>
				<tr>
					 <td valign="top">
					  	<label for="comments">Comments *</label>
					 </td>
					 <td valign="top">
					  	<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
					 </td>
				</tr>
				<tr>
					 <td colspan="2" style="text-align:center">
					  	<input type="submit" value="Submit" name="SendMail">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
					 </td>
				</tr>
			</table>
		</form>
	</body>
</html>