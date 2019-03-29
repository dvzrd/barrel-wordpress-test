<?php 
/**
 * Main header block
 * @author BarrelNY
 */ 

<<<<<<< HEAD
$brand__logo = get_field( 'brand_logo', 'options' ); // Array returned by Advanced Custom Fields
$brand__logo_alt = esc_attr($brand__logo['alt']); // Grab, from the array, the 'alt'
$brand__logo_url = esc_url($brand__logo['url']); // Grab the full size version 

$sponsor__logo = get_field( 'sponsor_logo', 'options' ); // Array returned by Advanced Custom Fields
$sponsor__logo_alt = esc_attr($sponsor__logo['alt']); // Grab, from the array, the 'alt'
$sponsor__logo_url = esc_url($sponsor__logo['url']); // Grab the full size version ?>


<header class="header">
	<div class="container">
		<?php if ( is_front_page() ) : ?>
			<div class="header__logo">
				<span alt="<?php echo $brand__logo_alt; ?>" style="background-image:url('<?php echo $brand__logo_url; ?>');"></span>
			</div>
		<?php else : ?>
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<div class="header__logo">
					<span alt="<?php echo $brand__logo_alt; ?>" style="background-image:url('<?php echo $brand__logo_url; ?>');"></span>
				</div>
			</a>
		<?php endif; ?>

		<?php if ( $sponsor__logo ) : ?>
			<div class="header__sponsor">
				<span alt="<?php echo $sponsor__logo_alt; ?>" style="background-image:url('<?php echo $sponsor__logo_url; ?>');"></span>
			</div>
		<?php else : ?>
			<div class="header__sponsor header__sponsor--missing">
				<span>Logo</span>
			</div>
		<?php endif; ?>

=======
  <div>
    <?php if ( is_front_page() ) : ?>
      <h1>
        <?php bloginfo( 'name' ); ?>
      </h1>
      <h2><?php bloginfo( 'description' ); ?></h2>
    <?php else : ?>
      <p>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </p>
      <p><?php bloginfo( 'description' ); ?></p>
    <?php endif; ?>
  </div>

  <?php
    wp_nav_menu( array(
      'container' => 'nav'
    ) );
  ?>

  <?php the_module('social-icons'); ?>

  <?php get_search_form(); ?>
>>>>>>> 672a24b3a402b2774cba41d5fd45c3923f999404

		<?php if( have_rows('social_media_links', 'options') ): ?>
			<div class="header__social">
				<ul>
					<?php while( have_rows('social_media_links', 'options') ): the_row(); ?>
						<li>
							<a href="<?php echo the_sub_field('url'); ?>" alt="<?php echo get_bloginfo('name') . ' on ' . get_sub_field('label'); ?>" target="_blank">
								<?php _e(get_social_icon(get_sub_field('type'))); ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>
</header>
