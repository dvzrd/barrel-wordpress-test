<?php
  $hero__bg_image = featured_image_or_fallback($page);
  $hero__context = get_field('index__context');
  $hero__headline = get_field('index__headline');
  $hero__product_image = get_field('index__product');
?>

<header class="hero hero--product" style="background: linear-gradient(0deg, rgba(30,30,30,0.95) 0%, rgba(30,30,30,0.05) 100%), url('<?php echo $hero__bg_image; ?>'); background-repeat: no-repeat; background-size: cover;">
  <figure class="container hero__container">
    <figcaption class="caption hero__caption">
      <h1 class="headline hero__caption--headline"><?php echo $hero__headline; ?></h1>
      <p class="context hero__caption--context"><?php echo $hero__context; ?></p>
    </figcaption>
    <div class="hero__product">
      <img class="hero__product--image" src="<?php echo $hero__product_image; ?>" />
    </div>
  </figure>
</header>
