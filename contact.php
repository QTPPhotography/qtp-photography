<?php

/* 
 * @site    QTPPhotography
 * @page    Contact Page
 * @author  @Jtran07 & @PaperSpeaker
 * @date    Sepetember 6th, 2014
 * @version Version 1.0.1
 */

?>
<!DOCTYPE HTML> 
<html>
    <head>
        <title>QTPPhotography</title> <!-- title of the current page -->
        .error {color: #FF0000;}
    </head>
    
    <body>
        <div id="container"> <!-- open container div -->
            <div id="header"> <!-- open header div -->
                <h1>Welcome to QTPPhotography</h1> <!-- h1 tag -->
            </div> <!-- end header div -->
            <div id="menu"> <!-- menu div -->
                <a href="about.php">About</a>
                <a href="clothing.php">Clothing</a>
                <a href="nature.php">Nature</a>
                <a href="engagement.php">Engagements</a>
                <a href="weddings.php">Weddings</a>
                <a href="contact.php">Contact</a>
            </div> <!-- end menu div -->
            <?php echo '<p> QTPPhotography </p>'; ?>
            
            <div id="footer">Copyright&copy; QTPPhotography</div> <!-- footer -->
        </div> <!-- end container div -->
    </body>
</html>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = "";
$name = $email = $subject = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
   
      if (empty($_POST["subject"])) {
     $subjectErr = "Subject is required";
   } else {
     $subject = test_input($_POST["subject"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }


}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Contact Form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Subject: <input type="text" name="subject">
   <span class="error">* <?php echo $subjectErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $subject;
echo "<br>";
echo $comment;
echo "<br>";
?>

</body>
</html>
