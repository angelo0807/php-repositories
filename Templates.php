
			 <?php //class of header//
					require 'classHeader.php'
				?>  
				
			 <?php
				$header = new Header();
				$header -> orgheader(); 
//link of header to templates.php//
			 ?>
			
	    <body>


		  <div id="wrapper">
		       <div id="banner">
				   <!--Image comes here-->
		       </div>
			  
			  <nav id="navigation">
			       <ul id="nav">
						<li><a href="index.php">home</a></li>
						<li><a href="categories.php">categories</a></li>
						<li><a href="servicepolicies.php">service policies</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="aboutus.php">About us</a></li>
						<li><a href="contact.php">contact us</a></li>
                    </ul>
			  </nav>
			   
			    <div id="texti1">
					<div id="image">
						
					</div>
				<p>Welcome to Fashionwave<p>
				</div>

				<?php // class of image cards//
					require 'classCards.php'
					// link class cards.php using require to templates
				?>
				<?php

				$card = new Card();//method alwyas has to have () and begin on capital letter//
				$card -> create_card('./images2/burberry-1.jpg', 'New Burberry Collection');
				$card -> create_card('./images2/gucci.jpg', 'New Gucci Collection');
				$card -> create_card('./images2/selena.jpg', 'New Nike Collection');
				
				
				
			
				?>

				

		 <?php echo $content; ?>

		 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>  
			  
			  

<!--
			<footer>
			     <p>All rights reserved</p>
			</footer>	
                  </div>
                </body>
            </html>		-->