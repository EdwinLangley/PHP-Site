<?php 

define('TITLE', 'Services | ShieldSoft');


include 'header.php';
?>

<div id="menu-items">
	<h1>Our Provided Services</h1>
	<p>We offer a range of set development plans for bespoke software design</p>

	<p><em>Click on each plan to learn more</em></p>

	<hr>

	<ul>
		<?php 
			foreach ($serviceItems as $service => $item) { ?>
				<li><a href="plan.php?item=<?php echo $service; ?>"><?php echo $item['title'] . ' '; ?></a><?php echo $item['price']; ?></li>

			
			<?php 	
			}
		 		?>
	</ul>

</div>
	

<?php
include 'footer.php';

 ?>