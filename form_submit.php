<?php

if (!empty($_POST['form-e'])) {

	$firstname = $_POST['cname'];
	$telephone = $_POST['cphone'];
	$email = $_POST['cemail'];
	$message = $_POST['cmessage'];

	$mail_content = "<table>
		<tr>
			<td>Full name:</td>
			<td>$firstname</td>
		</tr>
		<tr>
			<td>Phone number:</td>
			<td>$telephone</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>$email</td>
		</tr>
		<tr>
			<td>Message:</td>
			<td>$message</td>
		</tr>
	</table>";

	$subject = "Contact Request";
    $to='info@test.com';
 	$from='info@test.com';
	$header  = "From: Professional Movers <$from>\r\n"; 
    $header .= "Content-type: text/html\r\n";

	mail($to, $subject, $mail_content, $header);
	header("Location: thankyou.php");
    
}


?>