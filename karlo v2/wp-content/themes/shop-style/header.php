<!doctype html>
<html <?php language_attributes(); 


?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2018c0cf23.js" crossorigin="anonymous"></script>
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
</script>
<?php wp_body_open(); ?>
<div id="page" class="site  overflow-h">
	
	<header id="masthead" class="site-header container p-0">
	<?php 



?>
		<nav class="navbar navbar-expand-lg justify-content-start p-0 d-none d-lg-flex">
			<div class="col-4 first-child-mr-3">
				<?php wp_nav_menu() ?>
			</div>

			<div class="navbar-brand col mx-auto text-center site-branding">
				<?php
					the_custom_logo();
					$shop_style_description = get_bloginfo( 'description', 'display' );
					if ( $shop_style_description || is_customize_preview() ) :
						?>
				<?php endif; ?>
			</div>
			<ul class="navbar-nav col-4  justify-content-end">
				<li class="nav-item mr-3">	
					<a type="button" data-toggle="modal" data-target="#cartModal" class="nav-link d-flex align-items-center">

						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16">
						<g id="bag-20_1_" data-name="bag-20 (1)" transform="translate(-1)">
							<path id="Path_38" data-name="Path 38" d="M14,5H12V4A4,4,0,0,0,4,4V5H2A.945.945,0,0,0,1,6v9a.945.945,0,0,0,1,1H14a.945.945,0,0,0,1-1V6A.945.945,0,0,0,14,5ZM6,4a2,2,0,0,1,4,0V5H6Zm7,10H3V7H13Z" fill="#3c3b4b"/>
						</g>
						</svg>

						<h5 class="m-0 ml-1">Košarica (<?php echo count($_SESSION['cart']) ?>) </h5>
					</a>
				</li>
				<li class="nav-item">
					<a type="button" data-toggle="modal" data-target="#contactModal" class="nav-link d-flex align-items-center">

						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
						<g id="mail_2_" data-name="mail (2)" transform="translate(0 -1)">
							<path id="Path_39" data-name="Path 39" d="M15,1H1A1,1,0,0,0,0,2V14a1,1,0,0,0,1,1H15a1,1,0,0,0,1-1V2A1,1,0,0,0,15,1ZM14,13H2V6.723L7.5,9.868a1,1,0,0,0,.992,0L14,6.723Zm0-8.58L8,7.849,2,4.42V3H14Z" fill="#3c3b4b"/>
						</g>
						</svg>

						<h5 class="m-0 ml-1">Kontakt</h5>
					</a>
				</li>
				
			</ul>


		</nav>
<!-- 		//////////////// //////////////////////////-->
		<nav class="navbar  d-flex d-lg-none ">

			<!-- Navbar brand -->
			<?php
					the_custom_logo();
					$shop_style_description = get_bloginfo( 'description', 'display' );
					if ( $shop_style_description || is_customize_preview() ) :
						?>
				<?php endif; ?>

			<!-- Collapse button -->
			<div class="d-flex">
				<a type="button" data-toggle="modal" data-target="#cartModal" class="nav-link d-flex">

				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16">
				<g id="bag-20_1_" data-name="bag-20 (1)" transform="translate(-1)">
					<path id="Path_38" data-name="Path 38" d="M14,5H12V4A4,4,0,0,0,4,4V5H2A.945.945,0,0,0,1,6v9a.945.945,0,0,0,1,1H14a.945.945,0,0,0,1-1V6A.945.945,0,0,0,14,5ZM6,4a2,2,0,0,1,4,0V5H6Zm7,10H3V7H13Z" fill="#3c3b4b"/>
				</g>
				</svg>
					<span class="cart-m">
						<p class="fdb"><?php echo count($_SESSION['cart']) ?></p>
					</span>	
				</a>

				<button class="navbar-toggler toggler-example" type="button" onclick="openMenu()"
				aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16"><g id="menu_8_" data-name="menu (8)" transform="translate(0 -4)">    <path id="Path_41" data-name="Path 41" d="M23,13H1a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2Z" fill="#3c3b4b"/><path id="Path_42" data-name="Path 42" d="M23,6H12a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2Z" fill="#3c3b4b"/><path id="Path_43" data-name="Path 43" d="M12,20H1a1,1,0,0,1,0-2H12a1,1,0,0,1,0,2Z" fill="#3c3b4b"/></g></svg>
				</span></button>
			</div>




		</nav>


	</header><!-- #masthead -->
<!-- Collapsible content -->
<div class="mobile-menu py-2 flex-column" id="navbarSupportedContent1">
	<div class="container">
		<!-- Links -->
	<h3 class="fdb mb-4">Menu</h3>
	<?php wp_nav_menu() ?>

	<a type="button" data-toggle="modal" data-target="#contactModal" class="font-weight-light nav-link d-flex fit-content align-self-start align-items-center mt-4 p-0">

		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" class="pixel-fixer">
		<g id="mail_2_" data-name="mail (2)" transform="translate(0 -1)">
			<path id="Path_39" data-name="Path 39" d="M15,1H1A1,1,0,0,0,0,2V14a1,1,0,0,0,1,1H15a1,1,0,0,0,1-1V2A1,1,0,0,0,15,1ZM14,13H2V6.723L7.5,9.868a1,1,0,0,0,.992,0L14,6.723Zm0-8.58L8,7.849,2,4.42V3H14Z" fill="#3c3b4b"/>
		</g>
		</svg>

		<h5 class="m-0 ml-1 f-26">Kontakt</h5>
	</a>
	<!-- Links -->
	</div>


</div>
<!-- Collapsible content -->

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>