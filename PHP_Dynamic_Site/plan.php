<?php 

	define('TITLE', 'Services | SheildSoft');

	include 'header.php';

	function strip_bad_chars($input){
		$output = preg_replace("/[^a-zA-Z0-9_-]/","", $input);
	}

	if (isset($_GET['item'])) {

		$service = $_GET['item'];

		$plan = $serviceItems[$service];
	}

 ?>

 	<hr>

 	<div id="dish">
 		<h1><?php echo $plan['title']; ?><span class="price"><sup>£</sup><?php echo $plan['price']; ?></span></h1>
 		<p><?php echo $plan['desc'] ?></p>

 		<hr>

 	</div>


 	<?php  
 	include 'footer.php';
 	?>