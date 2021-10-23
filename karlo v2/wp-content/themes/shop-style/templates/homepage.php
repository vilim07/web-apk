<?php 
/*
Template Name: Home
*/

get_header();?>


<?php include 'hero.php';
/*   $to = 'vrapic@gmail.com';
  $subject = "Vidi kome radi server opet";
  $message = 'idk ovo mozda radi';
wp_mail($to, $subject, $message) */
?>

<section class="product-section pb-5" id="products">
	<div class="container">
		<div class="row bordere flex-nowrap overflow-s justify-content-start mb-1" id="myCategorySelector">
			<button class="btn margin-fixer-bottom margin-fixer-left active pb-1 px-3" onclick="filterSelection('all')"><h5 class="f-16 fit-content">Svi Proizvodi</h5></button>
			<?php
			$categories = get_categories();
			foreach($categories as $category) {echo '<button class="btn  margin-fixer-bottom margin-fixer-left pb-1 px-3 " onclick=\'filterSelection("' . $category->name .'")\'><h5 class="f-16 fit-content">' . $category->name . '</h5></button>';}
			?>
		</div>
	</div>
	<?php include 'card.php' ?>
</section>
<?php include 'textbox_center.php' ?>
<?php get_footer();?>