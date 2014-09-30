sub page of clothing
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="icon" type="image/png" href="images/icon.ico">
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
                <h1>Welcome to<!-- h1 tag -->
                <a href="home.php"> <img src="header.png" alt="qtpphotography" /></a> </h1> 
                <nav> <!-- menu nav -->
                <ul class="menu">
                    <li><a href="about.php">About</a></li>
                    <li><a href="clothing.php">Clothing</a></li>
                    <li><a href="nature.php">Nature</a></li>
                    <li><a href="engagement.php">Engagements</a></li>
                    <li><a href="weddings.php">Weddings</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav> <!-- end menu nav -->
            </div> <!-- end header div -->
            
            <div id="content"> <!-- open content div -->
                <div id="sidenav"> <!-- open side nav div -->
                    <nav> <!-- menu nav -->
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="clothing.php">Clothing</a></li>
                        <ul>
                            <li><a href="avclothing.php">AV Clothing</a></li>
                        </ul>
                        <li><a href="nature.php">Nature</a></li>
                        <ul>
                            <li><a href="fallfever.php">Fall Fever</a></li>
                            <li><a href="winterwonderland.php">Winter Wonderland</a></li>
                        </ul>
                        <li><a href="engagement.php">Engagements</a></li>
                        <ul>
                            <li><a href="vanminnie.php">Van and Minnie Engagement</a></li>
                        </ul>
                        <li><a href="weddings.php">Weddings</a></li>
                        <ul>
                            <li><a href="adrianmia.php">Adrian and Mia Big Day</a></li>
                        </ul>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    </nav> <!-- end menu nav -->
                </div> <!-- end side nav div -->
                
                <!-- this is the large pic at the top each image has an id change the pic names to test-->  
                
                
                

            <p> Welcome to the QTPPhotography website. </p>
            </div> <!-- end content div -->
                        <aside class="facebook">
                <a href="http://www.facebook.com">Visit us on Facebook <img src="images/facebook.png" alt="facebook" /></a>
            </aside>
            <!------------------------------------------side instagram link -------->

            <aside class="instagram">
                <a href="http://www.instagram.com">Visit us on Instagram  <img src="images/instagram.png" alt="instagram" /></a>
            </aside>
            <div id="footer">Copyright&copy; QTPPhotography<span style="float:right;">Designed By Jimmy Tran and Aaron McCready</span></div> <!-- footer -->
            <!------------------------------------------side facebook link -------->


        </div> <!-- end container div -->
    </body>
</html>
