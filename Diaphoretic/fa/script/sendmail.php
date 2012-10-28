<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		*{
			padding:0px;
			margin: 0px;
		}
		h2{
			color:white;
			font-size: 20px;
			text-align: right;
		}
	</style>
</head>
<body>
<?php
	error_reporting(E_ALL ^ E_NOTICE);

	$admin = 'info@miraclewood.ir';

	$name    = $_POST['firstname'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$text    = $_POST['message'];

	if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($text)>=10 ){
		if( @mail (
				$admin,
				"mydomain.com contact : $subject",
				$text,
				"From:$name <$email" )
		){
			echo '<div><h2>ارسال شد</h2></div>';
		}else{
			echo '<div><h2>خطا در ارسال</h2></div>';
		}
	}else{
		echo '<div><h2>دسترسی غیر مجاز</h2></div>';
	}
?>
</body>
</html>