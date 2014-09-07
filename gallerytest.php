<?php

/* 
 * @site    QTPPhotography
 * @page    Nature Page
 * @author  @Jtran07 & @PaperSpeaker
 * @date    Sepetember 6th, 2014
 * @version Version 1.0.1
 */

?>

<html>
    <head>
        <title>Nature Page</title>
    </head>
    
    <body>
        <?php echo '<p> Nature scenery taken by QTPPhotography </p>'; ?>
        <style type="text/css">
/*
gallery aka the top large image all this stuff determines size
*/
#gallery {
	width: 500px;
	height: 334px;
	overflow: hidden;
	padding: 0;
	border: 1px solid black;
}

#thumbs {
	margin: 0;
	padding: 0;
}
/*
determines spacing between each thumb
*/
#thumbs li {
	float: left;
	list-style:none;
	padding-right: 31px;
}

#thumbs img {
	border: 1px solid black;
}


</style>
</head>

<body>
    
<!-- this is the large pic at the top each image has an id change the pic names to test-->  
<ul id="gallery">
  <li id="pic1"><img src="rust0.jpg" width="500" height="334" alt="bug 1" /></li>
  <li id="pic2"><img src="rust3.jpg" width="500" height="334" alt="bug 2" /></li>
  <li id="pic3"><img src="rust4.jpg" width="500" height="334" alt="bug 3" /></li>
  <li id="pic4"><img src="rustin.jpg" width="500" height="334" alt="bug 4" /></li>
</ul>
<!-- the smaller thumbnails and they have a link in them that refers to the ids which changes the larger pic --> 
<ul id="thumbs">
<li><a href="#pic1"><img src="rust0.jpg" width="100" height="67" alt="bug1" /></a></li>
<li><a href="#pic2"><img src="rust3.jpg" width="100" height="67" alt="bug2" /></a></li>
<li><a href="#pic3"><img src="rust4.jpg" width="100" height="67" alt="bug3" /></a></li>
<li><a href="#pic4"><img src="rustin.jpg" width="100" height="67" alt="bug4" /></a></li>
</ul>
    </body>
</html>
