<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<?php
 
?>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="header-logo">
				<a href="/logotype">
					<div class="header-logo_img">
						<?php  $logo_img = '';
if( $custom_logo_id = get_theme_mod('custom_logo') ){
	$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
		'class'    => 'custom-logo',
		'itemprop' => 'logo',
	) );
}

echo $logo_img; ?>
					</div>
					<div class="header-logo_text">
							<span><?php bloginfo('name'); ?></span>
							<span><?php bloginfo('description'); ?></span>
						
					</div>
				</a>
				
			   
			</div>
			<nav>
				<?php
					wp_nav_menu( array(
						'container'       => 'ul',
						'theme_location'  => 'menu-1',
						'menu_id'         => '',
						'menu_class'	  => 'nav',	
						'depth'           => 1,
					) );
				?>
				<button>I am Button</button>
			</nav>
			<div class="exit"><img src="https://img.icons8.com/ios-glyphs/50/000000/delete-sign.png"/></div>
			<div class="open"><svg viewBox="0 0 100 80" width="40" height="40">
				<rect width="100" height="20" fill="#109CF1"></rect>
				<rect y="30" width="100" height="20" fill="#109CF1"></rect>
				<rect y="60" width="100" height="20" fill="#109CF1"></rect>
			  </svg></div>
		</div>
	</header>
	<main>