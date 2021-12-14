
<head>
<title>Customised Page Example</title>
<link rel="stylesheet" href="normal.css">
<style>
    /* normal.css */
    body {
	background: #666;
	color: #fff;
} 
div#sidebar {
	background: #444;
	float: right;
}
/* print.css */
body {
	background: #fff;
	color: #000;
	font-size: larger;
}
div#sidebar {
	display: none;
}
/* contrast.css */
body {
	background: #fff; 
	color: #000; 
	font-size: larger;
}
div#sidebar {
	background: #000;
	float: right;
}
</style>
</head>
<body>
<p>Choose a theme for this site:</p>
<ul>
    <li><a href="themeset.php?choice=normal">Normal</a>
    <li><a href="themeset.php?choice=contrast">Contrast</a>
    <li><a href="themeset.php?choice=print">Print</a>
</ul>
<div id="sidebar">
    <p>This is sidebar content that will be seen in the normal and high-contrast themes, and hidden in the print theme.</p>
    </div>
</body>



<!--suppose this is the themes.php file-->
<?php setCookie("css", $_GET[''choice'']);
header("Location: themes.php"); ?>
<!--this the choose-css.php file-->
<?php setCookie("css", $_GET["choice"], time() + 5184000);
header("Location: choose-css.php"); ?>
<!--for choosing  the right css--->
<?php $css = $_COOKIE["css"];
	if (!$css) { $css = "normal"; } ?>
<link rel="stylesheet" href="<?php echo $css; ?>.css">