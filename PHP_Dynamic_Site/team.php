<?php 

define('TITLE', 'Team | ShieldSoft');


include 'header.php';
include 'arrays.php';

?>

<div id="team-members" class="cf">
	
	<h1>Our Team At ShieldSoft</h1>
	<p>This is our team at ShieldSoft</p>

	<hr>

	<?php 

		foreach ($teamMembers as $member) {
			?>

			<div class="member">
				
			<img src="<?php echo $member['img'] ?>.jfif" alt="<?php echo $member['name']; ?>" > 
			<h2><?php echo $member['name']; ?></h2>
			<p><?php echo $member['bio'] ?></p>
			</div>



			<?php
		}
	 ?>

</div>

<hr>


<?php

include 'footer.php';


 ?>