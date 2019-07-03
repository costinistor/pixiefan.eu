<?php //if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) ob_start(“ob_gzhandler”); else ob_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php echo $ptitle; ?></title>
<meta name="description" content="<?php echo $pdescription; ?>"/>
<meta name="keywords" content="<?php echo $pkeyword; ?>"/>
<meta name="author" content="Costi Nistor" />
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="canonical" href="<?php echo $pcanonical; ?>">

</head>
<body>
<header>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="http://localhost/pixiefan.eu">
					<img src="images/logo1x.png" alt="Android app developer">
				</a>
			</div>
			<nav>
				<ul class="nav-bar">
					<li><a href="#apps" title="Android apps">Apps</a></li>
					<li><a href="#about" title="Pixiefan app developer">About</a></li>
					<li><a href="#contact" title="Contact app developer">Contact</a></li>	
				</ul>
			</nav>
		</div>
	</div>
	<div class="container hero">
		<h1>Every app is an innovative product</h1>
		<a href="#contact">GET IN TOUCH</a>
	</div>
</header>
<!-- ==================\\\ End Header ///================= -->