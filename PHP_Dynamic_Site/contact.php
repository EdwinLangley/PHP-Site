<?php 

define('TITLE', 'Contact | ShieldSoft');

include 'header.php';



 ?>

 <div id="Contact">
 	
 	<hr>

 	<h1>Get in touch with us!</h1>

 	<form method="post" action="" id="contact-form">
 		
 		<label for="name">Your Name</label>
 		<input type="text" name="name" id="name">

  		<label for="mail">Your Email</label>
 		<input type="email" name="mail" id="mail">

  		<label for="message">Your Message</label>
 		<textarea id="message" name="message"></textarea>

 	</form>

 </div>

<?php 
 include 'footer.php'; ?>