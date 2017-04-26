<?php
/*
Template Name: Order
*/
?>
<?php get_template_part( 'header-inner' ); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<div class="column row">
<a href="index.html" class="button secondary expanded">Back</a>
<h2>Tell Us How to Contact You</h2>
</div>

<form action="thanks.html" data-abide novalidate>

<div class="row">
	<div class="small-12 medium-6 columns">
		<label>First Name
		<input type="text" required><span class="form-error">
		This field is required.
	</span></label>
	</div>
	<div class="small-12 medium-6 columns">
		<label>Last Name
		<input type="text" required>
		<span class="form-error">
		This field is required.
		</span>
		</label>
	</div>
</div>

<div class="row">
	<div class="small-12 medium-6 columns">
		<label>Company
		<input type="text"></label>
	</div>
	<div class="small-12 medium-6 columns">
		<label>Address
		<input type="text"></label>
	</div>
</div>

<div class="row">
	<div class="small-12 medium-4 columns">
		<label>City
		<input type="text"></label>
	</div>
	<div class="small-12 medium-4 columns">
		<label>State
			<select>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
					<option value="AS">American Samoa</option>
					<option value="GU">Guam</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="PR">Puerto Rico</option>
					<option value="UM">United States Minor Outlying Islands</option>
					<option value="VI">Virgin Islands</option>
				</select>
	</div>
	<div class="small-12 medium-4 columns">
		<label>Zipcode
		<input type="text"></label>
	</div>
</div>

<div class="row">
	<div class="small-12 medium-4 columns">
		<label class="input_email">Email Address
		<input type="email" required-pattern="email" required>
		<span class="form-error">
		This field is required and must be properly formatted.
		</span>
		</label>
	</div>
	<div class="small-12 medium-4 columns">
		<label>Phone Number
		<input type="tel" required>
		<span class="form-error">
		This field is required.
		</span>
		</label>
	</div>
	<div class="small-12 medium-4 columns">
	<label>Desired In-Hand Date
		<input type="date">
	</label>
	</div>
</div>



<div id="sections">
	<div class="column row">
		<h2>Your Contact Information</h2>
	</div>
	<div class="section">



		<div class="row align-center">
			<div class="small-12 medium-10 columns">
				<label for="designName">Design Name:</label>
				<input name="designName[]" id="designName" value="" type="text" />
				<label for="exampleFileUpload" class="success button">Upload File</label>
			<input type="file" id="exampleFileUpload" class="show-for-sr">
			<p class="help-text">Valid file formats include: psd, jpg, jpeg, tiff, png, gif, bmp, ai, eps, pdf.</p>
			</div>
		</div>

		<div class="blanks-container">
			<div class="row small-up-2 medium-up-3">
				<div class="column flex-container">
					<div class="card">
						<img src="img/Bella_+_Canvas_3413_Model_Shot_Med.jpg" alt="Bella + Canvas 3413">
						<div class="card-section">
							<h4>Bella + Canvas 3413</h4>
							<p>Unisex Triblend Short Sleeve Tee</p>
						</div>
						<div class="card-divider">
							<button href="#" class="button expanded">Select</button>
						</div>
					</div>
				</div>



				<div class="column flex-container">
					<div class="card">
						<img src="img/Gildan_5000_Model_Shot_Med.jpg" alt="Gildan 5000">
						<div class="card-section">
							<h4>Gildan 5000</h4>
							<p>Heavy Cotton Tee</p>
						</div>
						<div class="card-divider">
							<button href="#" class="button expanded">Select</button>
						</div>
					</div>
				</div>

				<div class="column flex-container">
					<div class="card">
						<img src="img/Next_Level_6010_Model_Shot_Med.jpg" alt="Next Level 6010">
						<div class="card-section">
							<h4>Next Level 6010</h4>
							<p>Tri-Blend Crew</p>
						</div>
						<div class="card-divider">
							<button href="#" class="button expanded">Select</button>
						</div>
					</div>
				</div>

				<div class="column flex-container">
					<div class="card">
						<img src="img/Bella_+_Canvas_3001_Model_Shot_Med.jpg" alt="Bella + Canvas 3001">
						<div class="card-section">
							<h4>Bella + Canvas 3001</h4>
							<p>Unisex Short Sleeve Jersey Tee</p>
						</div>
						<div class="card-divider">
							<button href="#" class="button expanded">Select</button>
						</div>
					</div>
				</div>

				<div class="column flex-container">
					<div class="card">
						<img src="img/Bella_+_Canvas_8413_Model_Shot_Med.jpg" alt="Bella + Canvas 8413">
						<div class="card-section">
							<h4>Bella + Canvas 8413</h4>
							<p>Women's Triblend Short Sleeve Tee</p>
						</div>
						<div class="card-divider">
							<button href="#" class="button expanded">Select</button>
						</div>
					</div>
				</div>

				<div class="column flex-container">
					<div class="card">
						<img src="img/Gildan_2000_Model_Shot_Med.jpg" alt="Gildan 2000">
						<div class="card-section">
							<h4>Gildan 2000</h4>
							<p>Ultra 100% Cotton Tee</p>
						</div>
						<div class="card-divider">
							<button href="#" class="button expanded">Select</button>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row align-center">
			<div class="small-12 medium-7 columns">
			<label for="Blank Selection"><input type="text">Blank Garment Selection</label>
			</div>
		</div>

		<div class="row align-center">
			<div class="small-12 medium-10 columns">
				<label for="Print Location">Print Location</label>
				<select>
					<option> -- choose an option -- </option>
					<option>Front</option>
					<option>Left chest</option>
					<option>Pocket</option>
					<option>Front top</option>
					<option>Front bottom</option>
					<option>Right side</option>
					<option>Right sleeve</option>
					<option>Left side</option>
					<option>Left sleeve</option>
					<option>Back</option>
					<option>Back top</option>
					<option>Back bottom</option>
				</select>
			</div>
		</div>


		<div class="row align-center">
			<div class="small-12 medium-10 columns">
					<p><strong>Finishing Options</strong></p>
					<ul class="finishing">
						<li><input type="checkbox" id="folding"><label for="folding">Folding</label></li>
						<li><input type="checkbox" id="folding"><label for="folding">Polybags</label></li>
						<li><input type="checkbox" id="folding"><label for="folding">Hangtags</label></li>
						<li><input type="checkbox" id="folding"><label for="folding">Neck Labels</label></li>
					</ul>
			</div>
		</div>

		<div class="row align-center">
			<div class="button-group">
				<a href="#" class='button addsection'>Add Design</a>
				<a href="#" class='alert button remove'>Remove Design</a>
			</div>
		</div>

		<hr>

	</div>
</div>

<div class="column row">
	<div data-abide-error class="alert callout" style="display: none;">
		<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> There are some errors in your form. Please correct them before submitting. Thank you!</p>
	</div>
</div>

	<div class="column row">
		<div class="button-group">
			<input type="submit" class="button success expanded" value="Submit">
		</div>
	</div>

</form>

<div id="faq" class="row">
<div class="small-12 columns">
	<h2>ORDER FAQ</h2>
	<ul class="accordion" data-accordion data-allow-all-closed="true">
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">What's a taco?</a>
			<div class="accordion-content" data-tab-content>
				<p>Celiac retro hell of skateboard post-ironic. Ramps hot chicken messenger bag williamsburg ugh health goth, street art thundercats. Tofu meggings meditation, iPhone mlkshk chartreuse trust fund williamsburg plaid ugh drinking vinegar PBR&B disrupt yuccie taxidermy. Franzen activated charcoal prism, aesthetic pour-over 3 wolf moon venmo tumblr organic tattooed cold-pressed biodiesel tofu art party 90's. Neutra ugh aesthetic letterpress, cray cornhole austin snackwave glossier occupy typewriter pork belly.</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">How do you eat one?</a>
			<div class="accordion-content" data-tab-content>
				<p>Photo booth bicycle rights man bun snackwave, butcher meditation meggings 90's freegan kitsch umami portland plaid fingerstache. Bushwick 8-bit pour-over, yuccie echo park tumblr 3 wolf moon brunch venmo pitchfork pickled YOLO gluten-free banjo.</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">Will you give me a free taco?</a>
			<div class="accordion-content" data-tab-content>
				<p>Vape stumptown gentrify, aesthetic hashtag XOXO farm-to-table single-origin coffee heirloom bushwick affogato hella woke. Lumbersexual austin succulents, hammock keffiyeh chillwave thundercats meh franzen bitters blue bottle lyft letterpress direct trade. Live-edge drinking vinegar street art, 8-bit normcore paleo tumeric. Farm-to-table flannel hoodie occupy YOLO gentrify, pok pok stumptown kinfolk fam whatever lyft. Selfies mixtape wayfarers vaporware lyft, echo park swag venmo retro. Lo-fi four loko listicle, schlitz swag iPhone kinfolk.</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">What if I ask you, like, REALLY nicely??</a>
			<div class="accordion-content" data-tab-content>
				<p>Bushwick 90's celiac, synth umami woke air plant poke cliche. Disrupt live-edge YOLO four loko ramps brunch. Twee truffaut fashion axe try-hard. Direct trade asymmetrical kale chips coloring book before they sold out cold-pressed. Aesthetic master cleanse tumblr venmo ennui iceland taxidermy, coloring book small batch beard salvia neutra direct trade. Hot chicken poutine try-hard, fap meditation affogato wolf truffaut asymmetrical you probably haven't heard of them. Everyday carry vinyl activated charcoal beard banjo.</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">How long will it take you to make like 300 tacos?</a>
			<div class="accordion-content" data-tab-content>
				<p>Jean shorts tilde taxidermy copper mug, drinking vinegar edison bulb jianbing hot chicken VHS paleo tumblr ethical cred gentrify readymade. Skateboard leggings gochujang XOXO trust fund, sriracha craft beer. Tumblr heirloom tumeric, butcher +1 hammock lumbersexual kickstarter man braid subway tile put a bird on it. Hell of plaid put a bird on it, authentic twee art party meh offal intelligentsia. Deep v marfa viral everyday carry ennui master cleanse, vice cronut twee disrupt. Vice PBR&B twee lo-fi viral. Vape mustache copper mug PBR&B mixtape pinterest organic keytar, VHS letterpress kombucha activated charcoal.</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">What if I don't know anything about making tacos?</a>
			<div class="accordion-content" data-tab-content>
				<p>Succulents chambray artisan lomo YOLO fashion axe. Fanny pack organic before they sold out succulents helvetica. Cardigan bitters man bun disrupt live-edge. Enamel pin YOLO raw denim offal, seitan cronut kitsch tote bag scenester authentic brooklyn echo park marfa. Kitsch bushwick humblebrag church-key, gluten-free flannel copper mug biodiesel iPhone poutine art party twee next level. Hexagon pok pok la croix master cleanse blue bottle try-hard. Whatever gochujang selvage, kinfolk normcore synth YOLO occupy readymade +1 kickstarter retro chartreuse tote bag.</p>
			</div>
		</li>
	</ul>
</div>
</div>

<script src="js/duplicateForm.js"></script>
<script>
	$(document).foundation();
</script>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
