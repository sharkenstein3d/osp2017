<?php
/*
Template Name: Order
*/
?>
<?php get_template_part( 'header-order' ); ?>

<p class="order-intro">
	Please fill out the following form and we will contact you as soon as possible to start your order. We look forward to hearing from you!
</p>

<form>
  <div id="order-form" class="row align-spaced">
		<div class="small-12 medium-5 columns customer-info">

			<div class="small-12 columns">
	      <label>First Name
	        <input type="text" placeholder="Dumb">
	      </label>
	    </div>

	    <div class="small-12 columns">
	      <label>Last Name
	        <input type="text" placeholder="Ass">
	      </label>
	    </div>

			<div class="small-12 columns">
	      <label>Company Name
	        <input type="text" placeholder="Dumbasses, Inc.">
	      </label>
	    </div>

			<div class="small-12 columns">
	      <label>Phone Number
	        <input type="tel" placeholder="ex: 555-555-5555">
	      </label>
	    </div>

			<div class="small-12 columns">
				<label>Email address
					<input type="email" placeholder="you@dumbass.org" />
				</label>
			</div>

		</div>

		<div class="small-12 medium-5 columns customer-info">
			<label>
			  Notes
			  <textarea placeholder="I want to write 'home' inside of the shape of the state in which I live. I'm pretty sure this is an orginal idea and no one has done this before. I want like 100 shirts? " rows="6"></textarea>
			</label>
		</div>


  </div>
</form>


<script src="js/duplicateForm.js"></script>
<script>
	$(document).foundation();
</script>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
