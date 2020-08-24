<!DOCTYPE html>
    <html>
	<!--this is the categories page it includes to subpages, to acces to detailed products of woman and man
	-->
            <head>

	        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	        <link rel="stylesheet" type="text/css" href="styles/styles.css" />
	    
	        <title><?php echo $title; //value title included on the page printed using echo function//?></title>
			
			</head>

			<body>

			<div id="wrapper">
		       <div id="banner">
		       </div>
			  
 <nav id="navigation">
			       <ul id="nav">
				   <li><a href="index.php">home</a></li>
				   <li><a href="categories.php">categories</a></li>
					<li><a href="servicepolicies.php">service policies</a></li>
					<li><a href="events.php">Events</a></li>
                    <li><a href="#">About us</a></li>
				   <li><a href="contact.php">contact us</a></li>
                               </ul>
			  </nav>

			  
			  <div id="image4">
			  <li><a href="woman.php">woman</a></li>

				</div>
			
			<div id="image5">
			<li><a href="man.php">man</a></li>
				</div>
</body>
<?php

		
   include 'footer.php'; 
