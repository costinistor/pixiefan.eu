<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sendemail Script</title>
<style type="text/css">
body,td,th {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
	color: #FFF;
}
a {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	color: #FFF;
}
a:link {
	text-decoration: none;
	color: #f1e089;
}
a:visited {
	text-decoration: none;
	color: #f1e089;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
</style>
</head>
<body bgcolor="#4a514a">

<!-- Reminder: Add the link for the 'next page' (at the bottom) -->
<!-- Reminder: Change 'YourEmail' to Your real email -->

<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];
$attn = $_POST['attn'];

if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ;
$subject = $attn;

$notes = stripcslashes($notes);

$message = " $todayis [EST] \n
Subject: $attn \n
Message: $notes \n
From: $visitor ($visitormail)\n
";

$from = "From: $visitormail\r\n";


mail("nistor_costi@yahoo.com", $subject, $message, $from);

?>

<p align="center">
Date: <?php echo $todayis ?>
<br />
Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> )
<br />

Subject: <?php echo $attn ?>
<br />
Message:<br />
<?php $notesout = str_replace("\r", "<br/>", $notes);
echo $notesout; ?>
<br />
<?php echo $ip ?>

<br /><br />
<a href="contact.html"> Back to Page </a>
</p>

</body>
</html>