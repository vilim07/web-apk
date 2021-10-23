<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shop.style
 */

?>

<article class="single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container pb-8">
		<div class="row pt-4">
			<div class="col-12 pb-2">
			<a href="<?php echo home_url()?>" class="font-weight-bolder d-flex align-items-center fc"><svg class="mr-fix" xmlns="http://www.w3.org/2000/svg" width="6.914" height="11.828" viewBox="0 0 6.914 11.828"><path id="Path_35" data-name="Path 35" d="M11,3.5,6.5,8,11,12.5" transform="translate(-5.5 -2.2)" fill="none" stroke="#3c3b4b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>  Back</a>
			</div>
			<div class="col-12 col-lg-6">
				<h3 class="d-block d-lg-none"> <?php echo the_title(); ?></h3>
                <h2 class=" d-block d-lg-none font-weight-bold mb-3"><?php echo get_field( "boldano_ime" ); ?></h2>
					<?php

						$images = acf_photo_gallery('slike_proizvoda', $post->ID);?>
						<div class="w-100 myPixHeight gallery-showcase-show align-items-center text-center "><?php
						if( count($images) ):
							//Cool, we got some data so now let's loop over it
							$i=0;
							foreach($images as $image):
								$i+=1;
								$id = $image['id']; // The attachment id of the media
								$title = $image['title']; //The title
								$caption= $image['caption']; //The caption
								$full_image_url= $image['full_image_url']; //Full size image url

								$thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
								$url= $image['url']; //Goto any link when clicked
								$target= $image['target']; //Open normal or new tab
								$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
								$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
						
								?>	
								
									<img class="img-fluid wh-450" src="<?php echo $full_image_url; ?>" alt="">

						<?php endforeach; endif; ?>
							</div>
						<div class="gallery-showcase d-flex pt-2 align-items-center overflow-hidden"><?php
							if( count($images) ):
								//Cool, we got some data so now let's loop over it
								$i=0;
								foreach($images as $image):
									$i+=1;
									$id = $image['id']; // The attachment id of the media
									$title = $image['title']; //The title
									$caption= $image['caption']; //The caption
									$full_image_url= $image['full_image_url']; //Full size image url
									$url= $image['url']; //Goto any link when clicked
									$target= $image['target']; //Open normal or new tab
									$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
									$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
							
									?>	
									
										<img class=" img-fluid h125 w-auto  " src="<?php echo $full_image_url; ?>" alt="">

							<?php endforeach; endif; ?>
						</div>




				
			</div>
			<div class="col-12 col-lg-6 pl-lg-5 pt-5 pt-lg-0">
				<h3 class="d-none d-lg-block"> <?php echo the_title(); ?></h3>
                <h2 class="d-none d-lg-block font-weight-bolder mb-3"><?php echo get_field( "boldano_ime" ); ?></h2>
				<p class=" mb-5 os d-none d-lg-block"><?php echo get_field( "opis_proizvoda" ); ?></p>
				<h3 class="mb-3"><span class="price-text font-weight-semi-bold"> <?php echo get_field( "cijena_komad" ); ?></span>	kuna/komad</h3>
				<p class=" mb-5 os d-lg-none"><?php echo get_field( "opis_proizvoda" ); ?></p>

				
				<form method="post">
					<button type="submit" value="<?php the_ID();?>" name="product-id" class="button w-100 w-md-auto"><p class="fdb">Dodaj u Košaricu</p></button>
  		     	</form>

            </div>
		</div>
	</div>


</article>
<!-- #post-<?php the_ID(); ?> -->
