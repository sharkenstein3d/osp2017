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

<form>
  <div class="customer-info">
    <div class="small-12 medium-6 columns">
      <label>First Name
        <input type="text">
      </label>
      <label>Last Name
        <input type="text">
      </label>
      <label>Email Address
        <input type="email">
      </label>
       <label>Phone Number
        <input type="tel">
      </label>
    </div>
  </div>
</form>



<?php get_footer(); ?>
