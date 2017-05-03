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
	        <input type="text">
	      </label>
	    </div>

	    <div class="small-12 columns">
	      <label>Last Name
	        <input type="text">
	      </label>
	    </div>

			<div class="small-12 columns">
	      <label>Company Name
	        <input type="text">
	      </label>
	    </div>

			<div class="small-12 columns">
	      <label>Phone Number
	        <input type="tel" placeholder="ex: 555-555-5555">
	      </label>
	    </div>

			<div class="small-12 columns">
				<label>Email address
					<input type="email" placeholder="ex: you@company.com" />
				</label>
			</div>

		</div>

		<div class="small-12 medium-5 columns customer-info">
			<fieldset class="large-6 columns">
		    <legend class="contact-method">How would you like us to contact you?</legend>
		    <input type="radio" name="contact-method-pref" value="Email" id="email" required><label for="email">Email</label>
		    <input type="radio" name="contact-method-pref" value="Phone" id="phone"><label for="phone">Phone</label>
		  </fieldset>
			<hr />
			<label>
			  Notes
			  <textarea rows="8"></textarea>
			</label>

		</div>

		<div class="small-12 medium-5 columns customer-info">
			<fieldset class="fieldset">
		    <legend class="finishing-options">Finishing Options</legend>
		    <div class="checkbox">
					<input id="folding" type="checkbox"><label for="folding">Folding</label>
				</div>
		    <div class="checkbox">
					<input id="neck-labels" type="checkbox"><label for="neck-labels">Neck Labels</label>
				</div>
		    <div class="checkbox">
					<input id="hang-tags" type="checkbox"><label for="hang-tags">Hang Tags</label>
				</div>
				<div class="checkbox">
					<input id="polybags" type="checkbox"><label for="polybags">Polybags</label>
				</div>
		  </fieldset>
			<label for="exampleFileUpload" class="button">Upload File</label>
				<input type="file" id="exampleFileUpload" class="show-for-sr">

		</div>

		<div class="small-12 medium-5 columns customer-info">
		<h3>tacos</h3>
		</div>

		<div class="small-12 medium-11 columns order-info">
			<h2>Garment Types</h2>
			<p>
				This a sampling of some of our most commonly-used garments. We can print on almost anything, so if you are looking for more options, do not hesitate to reach out to us. We'd love to help you find the right garment for your project.
			</p>
			<ul class="accordion" data-accordion>


			  <li class="accordion-item" data-accordion-item>
			    <!-- Accordion tab title -->
			   <a href="#" class="accordion-title"><h6 class="garment-accordion-title">Adult Unisex T-Shirts</h6></a>

					<div class="accordion-content" data-tab-content>
						<div class="row">
						<?php if ( have_rows('blank') );
						while ( have_rows('blank') ): the_row(); ?>


							<div class="small-12 medium-6 columns">
								<div class="card">
								  <div class="card-divider">
								    <h4 class="garment-brand"><?php the_sub_field('brand'); ?></h4>
										<h5 class="garment-id"><?php the_sub_field('product_id'); ?></h5>
										<p class="garment-description"><?php the_sub_field('product_name'); ?></p>
								  </div>
								  <img class="order-product-image" src="<?php the_sub_field('product_image'); ?>">
								  <div class="card-section colors">
										<p>
											Available Colors
										</p>
										<?php

									$images = get_sub_field('color');

									if( $images ): ?>
									      <?php foreach( $images as $image ): ?>
										<span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $image['alt']; ?>"><img class="color-swatch" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></span>
									<?php endforeach; ?>
									<?php endif; ?>
									</div>
								</div>
							</div>
									<?php endwhile; ?>
						</div>


					</div>

				</li>

				<li class="accordion-item" data-accordion-item>
			    <!-- Accordion tab title -->
			   <a href="#" class="accordion-title"><h6 class="garment-accordion-title">Yooph T-Shirts</h6></a>

					<div class="accordion-content" data-tab-content>
						<div class="row" data-equalizer>
						<?php if ( have_rows('blank') );
						while ( have_rows('blank') ): the_row(); ?>

							<div class="small-12 medium-6 columns">

								<div class="card" data-equalizer-watch>
								  <div class="card-divider">
								    <h4 class="garment-brand"><?php the_sub_field('brand'); ?></h4>
										<h5 class="garment-id"><?php the_sub_field('product_id'); ?></h5>
										<p class="garment-description"><?php the_sub_field('product_name'); ?></p>
								  </div>
								  <img src="<?php the_sub_field('product_image'); ?>">
								  <div class="card-section colors">
										<?php

									$images = get_sub_field('color');

									if( $images ): ?>
									      <?php foreach( $images as $image ): ?>
										<img class="color-swatch" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endforeach; ?>
									<?php endif; ?>
									</div>
								</div>
							</div>
									<?php endwhile; ?>
						</div>
					</div>
				</li>
			</ul>

  	</div>
	</form>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
