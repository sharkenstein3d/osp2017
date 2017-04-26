<?php
/*
Template Name: Template Home
*/
?>

<?php get_header(); ?>
<?php $printing_desc = get_field('screen_printing_description'); ?>
<?php $printing_photo = get_field('screen_printing_photo'); ?>
<?php $finishing_desc = get_field('finishing_description'); ?>
<?php $finishing_photo = get_field('finishing_photo'); ?>
<?php $graphic_design_desc = get_field('graphic_design_description'); ?>
<?php $graphic_design_photo = get_field('graphic_design_photo'); ?>
<?php $embroidery_desc = get_field('embroidery_description'); ?>
<?php $embroidery_photo = get_field('embroidery_photo'); ?>

<h2 id="services" class="header-text-extra-space">Services We Provide</h2>
<p class="section-description-gray">
  Chiggity check yourself before you wreck yourself, because shotgun bullets are bad for your health.
</p>
<div class="row">
  <div class="services-content-section">
    <div class="services-content-section-img">
      <img src="<?php echo $printing_photo; ?>" alt="" />

    </div>
    <div class="services-content-section-block">
      <h3 class="services-desc-header">Custom Screen Printing</h3>
      <p class="services-desc"><?php echo $printing_desc; ?></p>
    </div>
    <div class="services-content-section-block small-order-2 medium-order-1">
      <h3 class="services-desc-header">Retail-Ready Finishing</h3>
      <p class="services-desc"><?php echo $finishing_desc; ?></p>
    </div>
    <div class="services-content-section-img small-order-1 medium-order-2">
      <img src="<?php echo $finishing_photo; ?>" alt="" />
    </div>
  </div>

  <div class="services-content-section">
    <div class="services-content-section-img">
      <img src="<?php echo $graphic_design_photo; ?>" alt="" />
    </div>
    <div class="services-content-section-block">
      <h3 class="services-desc-header">Professional Graphic Design</h3>
      <p class="services-desc"><?php echo $graphic_design_desc; ?></p>
    </div>
    <div class="services-content-section-block small-order-2 medium-order-1">
      <h3 class="services-desc-header">Custom Embroidery</h3>
      <p class="services-desc"><?php echo $embroidery_desc; ?></p>
    </div>
    <div class="services-content-section-img small-order-1 medium-order-2">
      <img src="<?php echo $embroidery_photo; ?>" alt="" />
    </div>
  </div>
</div>

<div class="simple-subscription-form">
  <div class="subscribe">
    <form>
      <h4>Subscribe to Our Mailing List</h4>
      <h5>You know you want to!</h5>
      <div class="input-group" data-equalizer>
        <span class="input-group-label">
          <i class="fa fa-envelope"></i>
        </span>
        <input class="input-group-field" type="email" placeholder="Email" required data-equalizer-watch>
        <button class="button" data-equalizer-watch>Sign up</button>
      </div>
    </form>
  </div>
</div>


<div id="portfolio-container">
  <h2 class="header-text-extra-space">Portfolio</h2>
  <p class="section-description-white">
   Photos of other peoples' shit on which we printed shit using ink and shit. We're pretty proud of this shit right here, y'all.
  </p>
  <div class="row">


    <section class="portfolio">
  <?php

$images = get_field('portfolio');

if( $images ): ?>
      <?php foreach( $images as $image ): ?>
  <div><a data-fancybox="gallery" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" /></a></div>
<?php endforeach; ?>
<?php endif; ?>

    </section class="portfolio">
  </div>
</div>

  <div class="testimonial-container">
    <h2 class="header-text-extra-space-white">Customer Testimonials</h2>
    <div class="row">
      <div class="orbit testimonial-slider-container" role="region" aria-label="testimonial-slider" data-orbit>
        <ul class="orbit-container">
          <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-chevron-right" aria-hidden="true"></i></button>

          <!-- content slide 1 -->

          <?php if ( have_rows('testimonial') );

            while ( have_rows('testimonial') ): the_row(); ?>

              <li class="orbit-slide">
                <div class="testimonial-slide row">
                  <div class="small-12 large-9 column">
                    <div class="row align-middle testimonial-slide-content">
                      <div class="small-12 medium-4 column hide-for-small-only profile-pic">
                        <img src="<?php the_sub_field('customer_image'); ?>">
                      </div>
                      <div class="small-12 medium-8 column testimonial-slide-text">
                        <p class="testimonial-slide-quotation"><?php the_sub_field('customer_testimonial') ?></p>
                        <div class="testimonial-slide-author-container">
                          <div class="small-profile-pic show-for-small-only">
                            <img src="<?php the_sub_field('customer_image'); ?>">
                          </div>
                          <p class="testimonial-slide-author-info"><?php the_sub_field('customer') ?><br><i class="subheader"><?php the_sub_field('customer_organization') ?></i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

            <?php endwhile; ?>

        </ul>
      </div>
    </div>

  </div>
<!-- slider close -->

<?php get_template_part( 'contact' ); ?>
<?php get_footer(); ?>
