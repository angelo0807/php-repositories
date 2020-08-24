
<!DOCTYPE html>
    <html>
            <head>

	        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	        <link rel="stylesheet" type="text/css" href="styles/styles.css" />
			<title><?php echo $title; ?></title>
			</head>

			<body>


		  <div id="wrapper">
		       <div id="banner">
		       </div>
 <nav id="navigation">
			       <ul id="nav">
				   <li><a href="index.php">home</a></li>
				   <li><a href="categories.php">categories</a></li>
                 <li><a href="#">service policies</a></li>
                <li><a href="events.php">events</a></li>
              <li><a href="#">About us</a></li>
				   <li><a href="contact.php">contact us</a></li>
                               </ul>
			  </nav>
<!--google map embed map

-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.93649330416!2d144.96666061448013!3d-37.81495647975213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b63bed19bb%3A0x8a83d7a5161f4cf7!2sGucci!5e0!3m2!1sen!2sau!4v1596570769104!5m2!1sen!2sau" width="1080" height="450" frameborder="0" style="border:0;" allowfullscreen="cover" aria-hidden="false" tabindex="0"></iframe>" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6"></div>


<div id="form">

        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }
          }
          
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }
            
          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "Invalid URL";
            }    
          }

          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }

          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        <h2>Contact us</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: <input type="text" name="name">
          <span class="error">* <?php echo $nameErr;?></span>
          <br><br>
          E-mail: <input type="text" name="email">
          <span class="error">* <?php echo $emailErr;?></span>
          <br><br>
          Website: <input type="text" name="website">
          <span class="error"><?php echo $websiteErr;?></span>
          <br><br>
          Comment: <textarea name="comment" rows="5" cols="40"></textarea>
          <br><br>
          Gender:
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="other">Other
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>


        <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;

        ?>

</div>

</body>
</html>
                    
   <?php
   include 'footer.php';
   ?>


