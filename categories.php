<?php 
					require 'classHeader.php'// link of clasheader to categories.php//
				?>

			 <?php
				$header = new Header();
				$header -> orgheader(); 

			 ?>

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

			  <?php //link class card to categories//
					require 'classCard2.php'
				?>

				<?php

				$card2 = new Card2();
				$card2 -> create_card2('./images2/versace6.jpg', 'Exclusive MAN Collection');
				$card2 -> create_card2('./images2/versace3.jpg', 'Exclusive WOMAN Collection');
				//only to variable links to put woman a nd man collection//
				?>
				 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<!-- bootsrap links -->
</body>  
			  
</body>
<?php

	?>	
<?php  // link of classfooter to categorues page//
require 'classFooter.php'
?>

<?php
  $footer = new Footer();
  $footer -> orgfooter(); 

?>
