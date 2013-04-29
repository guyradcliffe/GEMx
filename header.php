<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/base.css">
	<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/gemx.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/layout.css">
	<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/liquid-slider.css" type="text/css" media="screen" />

	<!-- JS scripts
	================================================= -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/scripts/jquery.easing.1.3.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/scripts/jquery.liquid-slider.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/scripts/jquery.touchSwipe.min.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" style="border:none;">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
<div style="width:100%; background:#e6e7e8; height:38px; border-bottom:2px solid #dbdbdc;"></div>
<div class="container">
	<a href="/">
		<img src="../images/logo-gemx.jpg" alt="Global Education in Medicine Exchange" id="logo" />
	</a>
</div>
<div class="band"><!-- closing div is inside footer.php -->
	<div id="desktopMenu" class="container">
		<div class="one column menu"><a href="#" id="showAboutMenu"><span class="link">About Us</span><span class="arrow-down"></span></a></div>
		<div id="aboutMenu">
			<div class="one column menu"><a href="/about-gemx/"><span class="link">About GEMx</span></a></div>
			<div class="clear"></div>
			<div class="one column menu"><a href="/advisory-committee/"><span class="link">Advisory Committee</span></a></div>
			<div class="clear"></div>
			<div class="one column menu"><a href="/about-pilot/"><span class="link">About the Pilot</span></a></div>
		</div>
		<div class="one column menu"><a href="/resources/"><span class="link">Resources</span></a></div>
		<div class="one column menu"><a href="/news/"><span class="link">News</span></a></div>
		<div class="one column menu"><a href="/contact/"><span class="link">Contact</span></a></div>
	</div><!-- close desktopMenu container -->
	<div id="tabletMenu" class="container">
		<div class="one column menu"><a href="#" id="showAboutMenu"><span class="link">About Us</span><span class="arrow-down"></span></a></div>
		<div id="aboutMenu">
			<div class="one column menu"><a href="/about-gemx/"><span class="link">About GEMx</span></a></div>
			<div class="clear"></div>
			<div class="one column menu"><a href="/advisory-committee/"><span class="link">Advisory Committee</span></a></div>
			<div class="clear"></div>
			<div class="one column menu"><a href="/about-pilot/"><span class="link">About the Pilot</span></a></div>
		</div>
		<div class="one column menu"><a href="/resources/"><span class="link">Resources</span></a></div>
		<div class="one column menu"><a href="/news/"><span class="link">News</span></a></div>
		<div class="one column menu"><a href="/contact/"><span class="link">Contact</span></a></div>
	</div><!-- close tabletMenu container -->
	<div id="mobileMenu" class="container">
		<div class="one column menu"><a href="#" id="showAboutMenu" class="increase"><span class="link">About Us</span><span class="arrow-down"></span></a>
			<div id="aboutMenu">
				<div class="one column menu alpha"><a href="/about-gemx/"><span class="link">About GEMx</span></a></div>
				<div class="one column menu"><a href="/advisory-committee/"><span class="link">Advisory Committee</span></a></div>
				<div class="one column menu omega"><a href="/about-pilot/"><span class="link">About the Pilot</span></a></div>
			</div>
		</div>
		<div class="one column menu"><a href="/resources/"><span class="link">Resources</a></div>
		<div class="one column menu"><a href="/news/"><span class="link">News</a></div>
		<div class="one column menu"><a href="/contact/"><span class="link">Contact</a></div>
	</div><!-- close mobileMenu container -->
	<script type="text/javascript">
		$("div#aboutMenu").hide();
		$("a#showAboutMenu").click(function () {$("div#aboutMenu").toggle("slow");});
	</script>
	 <!--[if IE 7 ]> <![endif]-->
	<div class="container white"><!-- closing div inside footer.php -->
<?php// echo $_SERVER['SERVER_ADDR']."<br />"; ?>
<?php// echo $_SERVER['SERVER_NAME']."<br />"; ?>
<?php// echo $_SERVER['REQUEST_URI']."<br />"; ?>
<?php// echo $_SERVER['PHP_SELF']."<br />"; ?>