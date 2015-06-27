<?php

$name = "Norvos";

?><!DOCTYPE HTML>
	<!--
	Miniport by HTML5 UP'%'
%	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?=$name; ?> – TextSecure Desktop Client</title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#textsecure">About <?=$name; ?></a></li>
					<li><a href="#download">Download</a></li>
					<li><a href="#help">Help</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="image fit"><img src="logo.png" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>This is <strong><?=$name; ?></strong>.</h1>
							</header>
							<p>The popular, fully encrypted messenger for <strong>secure communication</strong> on all of your devices.</p>
							<a href="#download" class="button big scrolly"><span class="icon fa-download"></span>  Download</a>
						</div>
					</div>
				</article>
			</div>

		<!-- TextSecure -->
			<div class="wrapper style2">
				<article id="textsecure">
					<header>
						<h1>What is <?=$name; ?>?</h1>
						<p><?=$name; ?> is a desktop messenger for secure communication. It allows you to exchange messages with others in a way that no one else can read them. In addition, you can also communicate with people who use the apps <i>TextSecure</i> and <i>Signal</i> on their mobile devices.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-comments-o"></span>
									<h3>Secure Communication</h3>
									<p>In contrast to most other instant messengers, <?=$name; ?> uses strong encryption to prevent anybody from snooping on your messages. The underlying system by TextSecure has been audited by an independent german research team (you can read their <a href="https://eprint.iacr.org/2014/904">results here</a>) and proven secure and ready to be used for secret communication. All your messages are encrypted before they leave your computer, without you having to do anything at all.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>Multimedia Chat</h3>
									<p>Use <?=$name; ?> to send pictures, sounds and videos to others. All media is, like all messages, encrypted before they are sent. Rest assured that noone will see what you show to your friends.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-thumbs-o-up"></span>
									<h3>Easy to use</h3>
									<p>Secure communication with PGP over e-mail was a good beginning, but it is old and a pain to setup. Now, with <?=$name; ?>, you have a system that just works. No more configurating, and no longer using a system that has never been designed to carry encrypted messages. <?=$name; ?> works transparently, delivers your messages instantly and does everything automatically for you.</p>
								</section>
							</div>
						</div>
					</div>

				</article>
			</div>

<!-- Download -->
			<div class="wrapper style3">
				<article id="download">
					<header>
						<h2>Download</h2>
						<p class="hiddenOnMobile"><?=$name; ?> is and will always be free software.</p>
					</header>
                    <div>Currently <?=$name; ?> is undergoing development and is not ready for download.<br>It will be available for Windows, Linux, MacOS and any other system that runs Java.<br>If you want to be notified when it's ready to use, send me an e-mail and I'll take care of it.</div>
					<!-- <div>
						<span class="hiddenOnMobile">
							<a href="download/windows" class="2u button">Windows</a>
							<a href="download/mac" class="2u button">Mac</a><br class="clear">
							<a href="download/linux" class="2u button">Linux</a>
						 	<a href="download/jar" class="2u button">Others</a>
							<p>Open the installer and follow the instructions.<br>
							Please visit the <a href="#help" class="scrolly">'Help'-section</a> for more information.</p>
						</span>
						<h3 class="hiddenOnMobile">Mobile Devices</h3>
						<div>
							<p class="hiddenOnDesktop">You seem to be using a mobile device.<br>As <?=$name; ?> is only available for desktop systems,<br>get the app instead:</p>
							<p class="hiddenOnMobile"><?=$name; ?> is only available for desktop systems.<br>For mobile devices, use the apps:</p>
							<p>


                            <a href="https://play.google.com/store/apps/details?id=org.thoughtcrime.securesms"><img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" height="40px" /></a>


                            <a href="https://itunes.apple.com/us/app/signal-private-messenger/id874139669?mt=8&uo=4" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/en_us//images/web/linkmaker/badge_appstore-lrg.png) no-repeat;width:135px;height:40px;@media only screen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/en_us//images/web/linkmaker/badge_appstore-lrg.svg);}"></a>

							</p>
						</div>

<p class="hiddenOnMobile" style="font-size:0.8em"><?=$name; ?> is licensed as AGPLv3. You can get the <a href="download/source">source code here</a>.</p>
					</div> -->
				</article>
			</div>



		<!-- Help -->
			<div class="wrapper style3">
				<article id="help">
					<header>
						<h2>Help</h2>
						<p>This section will help you use <?=$name; ?> easily.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<article class="box style2">
									<h3>Installation</h3>
									<p>Download the setup file by clicking on the big "Download"-button above. Then double-click the file you downloaded. An installer will open and guide you through the installation. After you have finished the installation, you can start <?=$name; ?> from your program list.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">	
									<h3>Add a contact</h3>
									<p>You need to add someone to your contactlist to be able to send them messages. To do this, click on the Plus-sign located at the top of the window. Insert your contact's telephone number in the box and enter the name you want to save your contact as.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<h3>Send a message</h3>
									<p>Open your contact list by clicking on the grey silhouette. You will see a list of all contacts you have saved. Click on the person you want to send a message. You can then enter your message into the textbox appearing at the bottom. Send it by pressing the Enter-key on your keyboard.</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Tempus dolore</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
									<h3><a href="#">Feugiat aliquam</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
									<h3><a href="#">Sed amet ornare</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p>Your question has not been answered?</p>
						<a href="#contact" class="button big scrolly">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>About the developer</h2>
						<p><?=$name; ?> is being developed by <a href="https://connorlanigan.com" style="color:white">Connor&nbsp;Lanigan</a>.</p>
                        <p><br>If you have questions or suggestions,<br>contact me at <a href="mailto:norvos@connorlanigan.com" style="color:white">norvos@connorlanigan.com</a>.</p>
					</header>
					<!-- <div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Get in touch:</h3>
								<ul class="social">
									<li><a href="mailto:" class="icon fa-envelope" style=" background-color: #3C5A98;" ><span class="label">Mail</span></a></li>
									<li><a href="https://github.com/connorlanigan" class="icon fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span class="label">Soundcloud</span></a></li>
								</ul>
								<hr />
							</div>
						</div>
					</div> -->
					<footer>
						<ul id="copyright">
							<li>&copy; Connor Lanigan. All rights reserved.</li>
							<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							<li><a href="https://connorlanigan.com/impressum/">Impressum</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>