<!doctype html>
<html lang="en">
<head>
	<![made by Grant Schorgl]-->
    <meta charset="utf-8">
    <title>HTML5 Template</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<style>
body{
	background-color: blue;
	color: white;
	}
	</style>
<body>
<?php
	echo "<p>Grant Schorgl</p>";
	echo "<p>You were refered by: ". $_SERVER["HTTP_REFERER"]."</p>";
	echo "<p>You are broswing using: ". $_SERVER["HTTP_USER_AGENT"]."</p>";
	echo "<p>Your IP address is: ". $_SERVER["REMOTE_ADDR"]."</p>";
	?>
</body>
</html>
