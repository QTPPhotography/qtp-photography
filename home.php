<?php

/* 
 * @site    QTPPhotography
 * @page    Home Page
 * @author  @Jtran07 & @PaperSpeaker
 * @date    Sepetember 6th, 2014
 * @version Version 1.0.2
 */

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>QTPPhotography</title> <!-- title of the current page -->
        <!-- Internet Explorer HTML5 enabling code: -->
        
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- JavaScript Includes -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('a[href*=#]').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                && location.hostname == this.hostname) {
                    var $target = $(this.hash);
                    $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) +']');
                if ($target.length) {
                    var targetOffset = $target.offset().top;
                        $('html,body')
                        .animate({scrollTop: targetOffset}, 400);
                return false;
                }
                }
            });
        });
        </script>

    </head>
    
    <body>
        <div id="container"> <!-- open container div -->
            <div id="header"> <!-- open header div -->
                <h1>Welcome</h1> <!-- h1 tag -->
            </div> <!-- end header div -->
            <nav> <!-- menu nav -->
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="clothing.php">Clothing</a></li>
                    <li><a href="nature.php">Nature</a></li>
                    <li><a href="engagement.php">Engagements</a></li>
                    <li><a href="weddings.php">Weddings</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav> <!-- end menu nav -->
            <div id="content"> <!-- open content div -->
                <div id="sidenav"> <!-- open side nav div -->
                    <nav> <!-- menu nav -->
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="clothing.php">Clothing</a></li>
                        <li><a href="nature.php">Nature</a></li>
                        <li><a href="engagement.php">Engagements</a></li>
                        <li><a href="weddings.php">Weddings</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    </nav> <!-- end menu nav -->
                </div> <!-- end side nav div -->
            <!------------------------------------------side facebook link -------->

            <aside class="facebook">
                <a href="http://www.facebook.com">Visit us on Facebook <img src="facebook.png" alt="facebook" /></a>
            </aside>
            <!------------------------------------------side instagram link -------->

            <aside class="instagram">
                <a href="http://www.instagram.com">Visit us on Instagram  <img src="instagram.png" alt="instagram" /></a>
            </aside>
            <?php echo '<p> QTPPhotography </p>'; ?>
            </div> <!-- end content div -->
            <div id="footer">Copyright&copy; QTPPhotography</div> <!-- footer -->
        </div> <!-- end container div -->
    </body>
</html>
