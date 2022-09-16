<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Quotes Mode</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php
include_once("Functions.php");
?>
<div class="main">
<div class="page-out">
<div class="page">
<div class="header">

<div class="header-top">
<h1> Quotes Mode </h1>
<!-- <ul>
  <li><a href="index.html"><span>Home</span></a></li>
  <li><a href="#"><span>Projects</span></a></li>
  <li><a href="#"><span>About</span></a></li>
  <li><a href="#"><span>Links</span></a></li>
  <li><a href="#"><span>Contact</span></a></li>
</ul> -->
<?php
	  Include_Menu_Links(5);
   
	  ?>
    
</div>
<div class="header-img"><img src="images/qm3.jpg" alt="" height="225" width="899"></div>
</div>
<div class="content">
<div class="left-out">
<div class="left-in">
<div class="left-panel">
<!-- <h1 class="title">Welcome To <span>Our Site</span></h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
id purus nisi, in rutrum nunc. Donec non orci eros, ut sollicitudin
risus. Vivamus at lacinia enim. Nam tincidunt nisl eget erat
sollicitudin vitae accumsan felis eleifend. Phasellus eu ante non magna
egestas tincidunt ut varius lorem. Nunc ornare feugiat ligula, ut
tincidunt enim porta nec. Curabitur interdum, ante non vehicula semper,
quam arcu condimentum velit, at elementum justo nisi eget urna. Fusce
vulputate malesuada euismod. Morbi condimentum tincidunt molestie. In
vulputate neque et augue posuere fringilla. Nunc nec tempus nibh. <br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>In fringilla turpis in enim pretium et gravida sem vestibulum.
Nullam nibh metus, posuere in tincidunt sed, tempor ut leo. Nulla lacus
metus, mollis eget pulvinar sed, accumsan ut ante. Integer eleifend
nisi sed mauris sagittis iaculis. In justo neque, aliquam in consequat
aliquet, sodales vitae magna. Aenean dictum quam pharetra leo interdum
convallis. Pellentesque mi ligula, mollis sit amet posuere ac, pulvinar
a urna. Nulla quis ligula tortor. Morbi congue, orci a fermentum
blandit, nisl risus commodo nunc, ac tempor nunc nunc nec magna. Cras
semper suscipit mi, tristique suscipit metus malesuada sed. Suspendisse
sit amet nulla nibh. Pellentesque vitae sodales dolor.&nbsp;<br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p> -->
<?php
	   $page_id=isset($_REQUEST["page_id"])?$_REQUEST["page_id"]:1;
	   Show_Content($page_id);
     ?>
</div>
</div>
</div>
<div class="right-out">
<div class="right-in">
<div class="right-panel">
<div class="right-block">
<h2>Categories</h2>
<!-- <ul>
  <li><a href="#">List item (1)</a></li>
  <li><a href="#">List item (2)</a></li>
  <li><a href="#">List item (3)</a></li>
  <li><a href="#">List item (4)</a></li>
  <li><a href="#">List item (5)</a></li>
  <li><a href="#">List item (6)</a></li>
  <li><a href="#">List item (7)</a></li>
  <li><a href="#">List item (8)</a></li>
</ul> -->
<?php
	  Include_Menu_Links(4);
	  ?>
</div>
</div>
</div>
</div>
<!--Designed by--><a href="http://www.htmltemplates.net">
<img src="images/design-img.gif" class="copyright" alt="www.htmltemplates.net"></a>
<div class="sections">
<div class="section1">
<h3>Motivational Quotes</h3>
<p>&nbsp;</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
consectetur augue eu neque. Mauris augue.<br>
</p>
<p>&nbsp;</p>
<p><a href="index.php?page_id=6" class="more">read more</a></p>
</div>
<div class="section2">
<h3>Love Quotes</h3>
<p>&nbsp;</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
consectetur augue eu neque. Mauris augue.<br>
</p>
<p>&nbsp;</p>
<p><a href="index.php?page_id=5" class="more">read more</a></p>
</div>
<div class="section3">
<h3>Attitude Quotes</h3>
<p>&nbsp;</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
consectetur augue eu neque. Mauris augue.<br>
</p>
<p>&nbsp;</p>
<p><a href="index.php?page_id=10" class="more">read more</a></p>
</div>
<div class="section4">
<h3>Friendship Quotes</h3>
<p>&nbsp;</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
consectetur augue eu neque. Mauris augue.<br>
</p>
<p>&nbsp;</p>
<p><a href="index.php?page_id=11" class="more">read more</a></p>
</div>
</div>
</div>
<div class="footer">
<div class="footer-left">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Get In Touch</strong></p>
<p>&nbsp;</p>
<p>If you have any query regrading Site, Advertisement and any other, contact at Iamramavtar03@gmail.com</p>
</div>
<div class="footer-right">
<!-- <ul>
  <li><a href="index.html">Home</a>/</li>
  <li><a href="#">Projects</a>/</li>
  <li><a href="#">About</a>/</li>
  <li><a href="#">Links</a>/</li>
  <li><a href="#">Contact</a></li>
</ul> -->
<?php
	  Include_Menu_Links(3);
	  ?>
<p>&copy; Copyright 2022 Powered by <a class="footer-link" target="_blank" href="http://www.quotesmode.com/">Quotes Mode</a>
</p>
</div>
</div>
</div>
</div>
</div>


</body></html>