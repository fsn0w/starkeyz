<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-background text-white antialiased text-sm lg:text-base lg:leading-6' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col overflow-x-hidden">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="absolute w-full z-10">

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<div class="text-lg uppercase">
								<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo( 'name' ); ?>
								</a>
							</div>

							<p class="text-sm font-light text-white">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M1.97162 0H12.6185V3.85567H1.97162V0Z" fill="white"/>
<path d="M1.97162 13.1881H12.6185V17.0438H1.97162V13.1881Z" fill="white"/>
<path d="M-2.67029e-05 6.57214H12.6185V10.4278H-2.67029e-05V6.57214Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="12.6186" height="17" fill="white" transform="matrix(-1 0 0 1 12.6185 0)"/>
</clipPath>
</defs>
</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-purple-400 shadow-inner rounded-2xl mt-4 p-4 lg:shadow-none lg:mt-0 lg:p-0 lg:bg-transparent xl:bg-transparent lg:block font-zrnic',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'text-lg lg:text-base lg:mx-2 border-transparent border hover:border hover:border-white hover:rounded-md px-2 py-1',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
