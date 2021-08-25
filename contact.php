<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'flasala@hotmail.com.ar';
$subject = 'Mensaje de un visitante de Pulsión Vocacional'.$field_name;

$body_message = 'From: '.$name."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'Message: '.$message;

$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Gracias por tu correo. Me contactaré pronto.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Ocurrió un error. Contactate conmigo enviándome un WhatsApp al 11-62246282.');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>