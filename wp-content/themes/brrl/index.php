<?php
get_header();
?>

<div class="loop" data-module="loop">
	<div class="container">
		<h2 class="loop__title">Recent Articles</h2>

		<?php
		$recent = new WP_Query( 'offset=1');

		while ( $recent->have_posts() ) {

			$recent->the_post();

			the_module('post');

		}
		wp_reset_postdata(); ?>
	</div>
</div>

<?php
get_footer();