<?php 
/*
 *  We start by including the setup file wich then sets up some
 *  constants that point to certain folders. We might set up some other
 *  vars/constants that will ease our coding. 
 *  
 *  And for ease of coding we add the Hepler class (is extended by other
 *  classes), to group some commonly used tasks in logical order. (as you
 *  can see it allready uses the INCLUDES_FOLDER constant that is defined
 *  in setup.php).
*/
include_once './includes/blocks/Index.class.php';
Index::setBlocks(array('Map', 'Topper', 'Header', 'Menu', 'Sidebar', 'Content', 'Footer'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Starter</title>
<meta name="generator" content="Bluefish 2.2.4" />
<meta name="author" content="Boro_131" />
<meta name="date" content="2013-12-05T17:58:02+0100" />
<meta name="copyright" content=""/>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
<meta http-equiv="content-style-type" content="text/css"/>
<meta http-equiv="expires" content="0"/>

<style>
@import url(http://fonts.googleapis.com/css?family=Arvo);
@import url(http://fonts.googleapis.com/css?family=Arvo:700);
@import url(http://fonts.googleapis.com/css?family=Chango);
@import url(http://fonts.googleapis.com/css?family=Rokkitt:700);
@import url(http://fonts.googleapis.com/css?family=Alegreya+SC:700italic);
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:700);
@import url(http://fonts.googleapis.com/css?family=Crete+Round:400italic,400);
@import url(http://fonts.googleapis.com/css?family=Stoke);
@import url(http://fonts.googleapis.com/css?family=Varela+Round);
</style>

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>

<script src="./includes/refresh_page.js"></script>
	<?php
		Index::includeCSS("layout.css");
		Index::includeCSS();
		Index::includeJS();
	?>
    </head>
    <body>
        <div id="topper">
            <?php Index::includeHTML("Topper"); ?>
        </div>
        <div id="wrapper">
                <div id="header">
                    <?php Index::includeHTML("Header"); ?>
                </div>
                <div id="menu">
                    <?php Index::includeHTML("Menu"); ?>
                    <div class="clearer">&nbsp;</div>
                </div>
                <div id="main">
            	
                	<!--div id="sidebar_right" class="sidebar">
                    	<?php Index::includeHTML("Sidebar"); ?>
                	</div-->
                	<div id="content">
                    	<?php Index::includeHTML("Content"); ?>
                	</div>
                
                <div class="clearer">&nbsp;</div>
            	
            	<div id="map" class="centered">
                	<?php Index::includeHTML("Map"); ?>
            	</div>
            	<div id="footer" class="centered">
                	<?php Index::includeHTML("Footer"); ?>
            	</div>
            	</div>
        </div>
    </body>
</html>