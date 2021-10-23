<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shop.style
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container py-2">
			<div class="row d-none d-lg-flex">
				<div class="col-6 d-flex footer-left  pr-0">

					<div>
						<?php
							the_custom_logo();
							$shop_style_description = get_bloginfo( 'description', 'display' );
							if ( $shop_style_description || is_customize_preview() ) :
								?>
						<?php endif; ?>
					</div>
						<?php wp_nav_menu() ?>		
							
						
				</div>
				<div class="col-6 d-flex align-items-end w-100 s-top pl-0">
							<ul class="d-flex w-100 justify-content-center m-0 ">
									<li class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="15.978" height="16" viewBox="0 0 15.978 16"><a href="mailto:gil.handmade.art@gmail.com">
									<g id="at-sign_1_" data-name="at-sign (1)" transform="translate(0.002 0.001)">
										<path id="Path_36" data-name="Path 36" d="M15.974,7.126a7.113,7.113,0,0,1-.45,2.576,4.269,4.269,0,0,1-1.272,1.834,2.946,2.946,0,0,1-1.906.666,2.372,2.372,0,0,1-1.28-.348,2,2,0,0,1-.8-.914h-.158A3.352,3.352,0,0,1,7.421,12.2a3.6,3.6,0,0,1-2.728-1.042,3.948,3.948,0,0,1-1-2.849,4.4,4.4,0,0,1,1.311-3.33A4.727,4.727,0,0,1,8.428,3.73a11.953,11.953,0,0,1,1.851.161,10.306,10.306,0,0,1,1.668.386l-.225,4.78q0,1.359.743,1.36.625,0,1-.915a6.433,6.433,0,0,0,.372-2.389,5.75,5.75,0,0,0-.654-2.781,4.439,4.439,0,0,0-1.843-1.849,5.659,5.659,0,0,0-2.713-.635A6.942,6.942,0,0,0,5.2,2.664,5.422,5.422,0,0,0,2.957,5a7.7,7.7,0,0,0-.777,3.534,5.609,5.609,0,0,0,1.441,4.141A5.665,5.665,0,0,0,7.8,14.119a12.579,12.579,0,0,0,2.278-.229,15.148,15.148,0,0,0,2.444-.666V15.1a11.754,11.754,0,0,1-4.643.883,8.117,8.117,0,0,1-5.793-1.955A7.1,7.1,0,0,1,.01,8.593,9.1,9.1,0,0,1,1.066,4.209a7.707,7.707,0,0,1,3.026-3.09A8.939,8.939,0,0,1,8.6,0a8.189,8.189,0,0,1,3.841.88,6.233,6.233,0,0,1,2.607,2.5A7.471,7.471,0,0,1,15.974,7.126ZM5.964,8.349q0,2.062,1.681,2.063a1.562,1.562,0,0,0,1.34-.622,3.919,3.919,0,0,0,.557-2.018l.133-2.16A5.341,5.341,0,0,0,8.55,5.5a2.413,2.413,0,0,0-1.9.763A3.014,3.014,0,0,0,5.964,8.349Z" transform="translate(0 0)" fill="#3c3b4b"/>
									</g>
									</svg>
									gil.handmade.art@gmail.com</a>
									</li>
									<li><a href="https://instagram.com/gil__handmade.art?utm_medium=copy_link">
										<svg id="logo-instagram_7_" data-name="logo-instagram (7)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
									<circle id="Ellipse_53" data-name="Ellipse 53" cx="0.96" cy="0.96" r="0.96" transform="translate(11.185 2.932)" fill="#3c3b4b"/>
									<path id="Path_32" data-name="Path 32" d="M8,12a4,4,0,1,1,4-4A4,4,0,0,1,8,12ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z" fill="#3c3b4b"/>
									<path id="Path_33" data-name="Path 33" d="M12,16H4a4.214,4.214,0,0,1-4-4V4A4.214,4.214,0,0,1,4,0h8a4.214,4.214,0,0,1,4,4v8A4.214,4.214,0,0,1,12,16ZM4,2A2.265,2.265,0,0,0,2,4v8a2.231,2.231,0,0,0,2,2h8a2.265,2.265,0,0,0,2-2V4a2.265,2.265,0,0,0-2-2Z" fill="#3c3b4b"/>
									</svg>
									Instagram</a>
									</li>
								</ul>	
				</div>

			</div>
			<div class="row row d-lg-none py-3">
				<div class="col text-center">
						<?php
							the_custom_logo();
							$shop_style_description = get_bloginfo( 'description', 'display' );
							if ( $shop_style_description || is_customize_preview() ) :
								?>
						<?php endif; ?>
						<?php wp_nav_menu() ?>	

				</div>
			</div>

		</div>

		<div class="text-center p-2" style="">
			Copyright 2021 - All right Recived

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

		<!-- Modal -->
		<div class="modal p-0" id="cartModal" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
			<div class="modal-dialog-centered m-auto mx-0 mx-md-auto" role="document">
				<div class="modal-content w-100 h-fit-content bg-primary-color">
						
				<div class="modal-header p-0">
					<div class="row flex-column w-100 pt-4 pt-md-1">
						<div class="col">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><path id="Path_37" data-name="Path 37" d="M14.7,1.3a.967.967,0,0,0-1.4,0L8,6.6,2.7,1.3a.967.967,0,0,0-1.4,0,.967.967,0,0,0,0,1.4L6.6,8,1.3,13.3a.967.967,0,0,0,0,1.4A.908.908,0,0,0,2,15a.908.908,0,0,0,.7-.3L8,9.4l5.3,5.3a.967.967,0,0,0,1.4,0,.967.967,0,0,0,0-1.4L9.4,8l5.3-5.3A.967.967,0,0,0,14.7,1.3Z" transform="translate(-1 -1)" fill="#fff"/></svg>
								</span>
							</button>
						</div>
						<div class="col text-md-center ">
							<h1 class="font-weight-bold my-2 text-white pl-2">Pošalji Upit</h1>
						</div>
					</div>


				</div>
				<div class="modal-body">
					<div class="row px-2 pb-2">
						<div class="col-12 col-md-6 border-sep order-2 order-md-1">
							<form action="" method="post">
								<input class="py-1 pl-2 mb-1 w-100" type="email" id="e-mail" name="e-mail" placeholder="E-mail" required>
								<input class="py-1 pl-2 mb-1 w-100" type="text" id="name" name="user_name" placeholder="Ime i Prezime" required>
								<textarea class="py-1 pl-2 mb-2 w-100" id="napomena" name="napomena" placeholder="Napomena"></textarea>
								<button type="submit" value="submit" name="submit" class="button2 w-100 w-md-auto"><p class="fdb">Pošalji</p></button>
							</form>
						</div>
						<div class="col-12 pb-4 col-md-6 order-1 order-md-2 flex-column d-flex">
							<?php
								foreach($_SESSION["cart"] as $value)
								{?>
								<div class="row pb-1"><?php
									$post->ID=$value;

									$images = acf_photo_gallery('slike_proizvoda', $value);?>
									<div class="col-1">




										<img class="cart-img" src="<?php
											if( count($images) ):
										
												$image = $images[0];
												$id = $image['id']; // The attachment id of the media
												$title = $image['title']; //The title
												$caption= $image['caption']; //The caption
												$full_image_url= $image['full_image_url']; //Full size image url
												$full_image_url = acf_photo_gallery_resize_image($full_image_url, 255, 190); //Resized size to 262px width by 160px height image url
												$thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
												$url= $image['url']; //Goto any link when clicked
												$target= $image['target']; //Open normal or new tab
												$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
												$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
												echo $full_image_url; 
											endif;?>">
									</div>
									<?php
									?>
									<div class="col ml-1">
									<form method="post" class="h-0">
										<button type="submit" value="<?php echo $value ?>" name="product-id-remove" class="no-style w-100 w-md-auto "><i class="text-center border-circle fas fa-times"></i></button>
									</form>

										<p class="text-white ml-1"><?php echo get_the_title( $value );?></p>
										<p class="text-white ml-1"><?php echo get_field( "cijena_komad" );?> kn/kom</p>
									</div>
									
								</div>
								<?php
								}?>
								<span class="w-100 border-sep-bot d-md-none"></span>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

		<div class="modal p-0" id="contactModal" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
			<div class="modal-dialog-centered m-auto mx-0 mx-md-auto" role="document">
				<div class="modal-content w-100 h-fit-content bg-primary-color">
						
				<div class="modal-header p-0">
					<div class="row flex-column w-100 pt-3 pt-md-1">
						<div class="col">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><path id="Path_37" data-name="Path 37" d="M14.7,1.3a.967.967,0,0,0-1.4,0L8,6.6,2.7,1.3a.967.967,0,0,0-1.4,0,.967.967,0,0,0,0,1.4L6.6,8,1.3,13.3a.967.967,0,0,0,0,1.4A.908.908,0,0,0,2,15a.908.908,0,0,0,.7-.3L8,9.4l5.3,5.3a.967.967,0,0,0,1.4,0,.967.967,0,0,0,0-1.4L9.4,8l5.3-5.3A.967.967,0,0,0,14.7,1.3Z" transform="translate(-1 -1)" fill="#fff"/></svg>
								</span>
							</button>
						</div>
						<div class="col text-md-center px-4 ">
							<h1 class="font-weight-bold my-2 text-white">Kontaktiraj Nas</h1>
						</div>
					</div>


				</div>
				<div class="modal-body">
					<div class="row px-2 pb-2">
						<div class="col-12 ">
							<form method="post">
								<input class="py-1 pl-2 mb-1 w-100" type="email" id="e-mail-2" name="e-mail" placeholder="E-mail" required>
								<input class="py-1 pl-2 mb-1 w-100" type="text" id="name-2" name="user_name" placeholder="Ime i Prezime" required>
								<textarea class="py-1 pl-2 mb-2 w-100" id="napomena-2" name="napomena" placeholder="Poruka"></textarea required>
								<button type="submit" value="submit" name="submit" class="button2 w-100 w-md-auto mt-2"><p class="fdb">Pošalji</p></button>
							</form>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
				
<?php 






wp_footer(); ?>


</body>

</html>
