<?php
$pages = array('index','about','services','services-staffing','services-management','services-consulting','contact','clients','seeker');

$p = (isset($_GET['p']) && strpos($_GET['p'],'.') === FALSE) ? $_GET['p'] : "index";

$p = (in_array($p,$pages)) ? $p : "404";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1"> 
    <title>Anagh Technologies</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="assets/styles/css/basics.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/css/icons.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/css/mobile.css">
</head>
<body>
    <div id="unsupported"><div>
        Please update your browser<br><br>
        This eBook requires at least:<br>
        - Internet Explorer 9<br>
        - Firefox 4.0<br>
        - Safari 5.1<br>
        - Chrome 10
    </div></div>
    <div id="contain">
        <header>
            <span class="anaghTitle"><a href="/">Anagh Technologies</a></span>
            <ul>
                <li><a href="#"><span class="icon login"></span> Login</a></li>
                <li><a href="index.php?p=contact"><span class="icon contact"></span> Contact</a></li>
                <li><a href="index.php?p=seeker"><span class="icon jobSeek"></span> Job Seekers</a></li>
            </ul>
            
        </header>
        <div id="content-contain">
            <!-- site content structure should go here -->
		    <nav id="main">
		        <ul class="links">
		          <li><a href="index.php" class="<?php if($p == 'index') print 'current'; ?>"><span class="icon home"></span> Home</a></li>
		          <li><a href="index.php?p=about" class="<?php if($p == 'about') print 'current'; ?>"><span class="icon about"></span> About Us</a></li>
		          <li><a href="index.php?p=services" class="<?php if( strpos($p,'services') !== FALSE) print 'current'; ?>"><span class="icon services"></span> Services</a></li>
		          <li><a href="index.php?p=clients" class="<?php if($p == 'clients') print 'current'; ?>"><span class="icon clients"></span> Our Clients</a></li>     
		        </ul>
		    </nav>


<?php


require_once("./assets/content/{$p}.html");
?>



<!--
            <section>
				<div id="content">
					<div>
						<h2>Content Title</h2>
						<p>Content</p>
						<p>Content</p>
						<p>Content</p>
						<p>Content</p>
					</div>

	                <div>
	                	<h2>Mission</h2>
			            <p>We are a team of creative minds driving innovative solutions to complex business issues. We focus on the winning characteristics by quickly recognizing how work is performed and implementing innovative tools and techniques to chart a course for the future.</p>
			        </div>
					
				</div>

            </section>
-->

            
		    <div class="bottom">
		        <ul class="socialMedia">
		        <li><img src="assets/images/FaceBook.png" alt="" />  Facebook</li>
		        <li><img src="assets/images/Twitter.png" alt="" />  Twitter</li>
		        <li><img src="assets/images/Google+.png" alt="" />  Google+</li>
		        <li><img src="assets/images/LinkedIn.png" alt="" />  LinkedIn</li>
		        <!-- <li><span class="icon facebook"></span> Facebook</li>
		        <li><span class="icon twitter"></span> Twitter</li>
		        <li><span class="icon googlePlus"></span> Google+</li>
		        <li><span class="icon linkedIn"></span> LinkedIn</li> -->
		        </ul>
		    </div>
		    <footer>
<div class="leftfoot">
			    <span style="line-height: 26px;"><img src="logo32px.png" height="16" > &mdash; Anagh Technologies &copy; 2014 Copyright. All rights reserved</span>
</div>
<div class="rightfoot">

	<p>
	Anagh Technologies Inc.
	2 Lakeview Ave, Suite 310,
	Piscataway, NJ 08854
	</p>
	<p>
	Telephone: +1 732-529-5655
	FAX:           +1 732-907-1036
	E-mail: contact@anaghtech.com
	</p>
</div>
		    </footer>
        </div>
    </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="assets/scripts/thirdparty/jquery.jcarousel.js"></script>

<script type="text/javascript" src="assets/scripts/main.1.js"></script>

<script type="text/javascript">
"use strict";
// "use strict" tells javascript to enforce better coding standards.
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions_and_function_scope/Strict_mode

//It should always be used as it throws errors on code that should
//not be used, like the with() commands which has notorious cross browser
//issues 
</script>

</body>
</html>
