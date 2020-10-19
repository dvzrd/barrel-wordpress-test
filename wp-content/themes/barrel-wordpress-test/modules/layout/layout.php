<div class="layout" data-module="layout">
  <?php
    the_module('hero');
  ?>

  <?php
    $recent = new WP_Query(array(
      'numberposts' => '1',
      'category_name' => 'featured'
    ));

    while ( $recent->have_posts() ) {

      $recent->the_post();

      the_module('post', array(
        'pattern' => 'post--featured'
      ));

    }
    wp_reset_postdata();
  ?>

  <div class="container">
    <h2 class="layout__title"><?php _e('Recent Articles', 'barrel-wordpress-test'); ?></h2>

    <?php
    $recent = new WP_Query( 'offset=1' );
      while ( $recent->have_posts() ) {

        $recent->the_post();

        the_module('post', array(
          'pattern' => 'post--loop'
        ));
      }
    wp_reset_postdata(); ?>
  </div>
</div>
