<?php
/*
Template Name: Order2
*/
?>
<?php get_template_part( 'header-order' ); ?>

<h2 class="services">Quote Submission Form</h2>
<p class="section-description-gray">
	Please complete this form and we will contact you as soon as possible. Note that, for now, this form is a quote generator and not actually an order form. Should you need assistance, please feel free to <a href="/home/#contact">contact us via email or phone</a> to discuss your order.
</p>

	<?php if (function_exists('iphorm')) echo iphorm(1); ?>



<?php get_footer(); ?>

<!-- <img src="http://www.osp.dev/wp-content/uploads/2017/04/Next_Level_6010_Model_Shot_Med.jpg" />
<p class="garment-desc">Next Level - Triblend Crew - 6010</p> -->
