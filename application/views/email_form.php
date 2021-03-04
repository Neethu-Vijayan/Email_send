<!DOCTYPE html>
<html>
<head>
	<title>EmailForm</title>
</head>
<body>
	<?php form_open("/Main/email_form");?>
	<?php $this->session->flashdata('email_send')?>
	<input type="email" name="email" required="">
	<input type="submit" name="Send Email">
	<?php form_close();?>
</body>
</html>