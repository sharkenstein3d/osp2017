<?php
/*
Template Name: Order2
*/
?>
<?php get_template_part( 'header-order' ); ?>

<h2 class="services">Quote Submission Form</h2>
<p class="section-description-gray">
	Please <strong>complete this form</strong> this form and we will contact you as soon as possible. Should you need assistance, please feel free to <a href="/home/#contact">contact us via email or phone</a> to discuss your order.
</p>

<form>
 
  <div class="row align-spaced">
   
    <div class="small-11 medium-5 columns customer">
      <label class="order-form">First Name
        <input type="text">
      </label>
       <label class="order-form">Last Name
        <input type="text">
      <label class="order-form">Company
        <input type="text">
      </label>
      </label>
      <label class="order-form">Phone Number
        <input type="tel">
      </label>
      <label class="order-form">Email Address
        <input type="email">
      </label>
      <label class="order-form">URL
        <input type="email">
      </label>
    </div>
    
    <div class="small-11 medium-5 columns customer">
      <label class="order-form">Address 1
        <input type="text">
      </label>
      <label class="order-form">Address 2
        <input type="text">
      </label>
      <label class="order-form">City
        <input type="text">
      </label>
      <label class="order-form">State
        <select>
          <option selected disabled>Please select one</option>
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
          <option value="Outside of US">Other / Outside of US</option>
      </select>			
      </label>
      <label class="order-form">Zipcode
        <input type="text">
      </label>
    </div>

    <h2 class="order-sections">Tell Us About Your Order</h2>
               
    <div class="small-11 columns order-info">
     
      <h3 class="design-sections">Design 1</h3>
      <h4 class="design-sections-inner">Blank 1</h4>
       <a class="addsection button secondary">Add blank</a>
       
      <hr>
      
      <div id="sections">      
        <h3 class="design-sections">Prints</h3>
        <h4 class="design-sections-inner">Print 1</h4>

        <div class="row align-spaced">
          <div class="column small-11 medium-5">
            <label class="order-form">Print Location
              <select>
                <option val="selection" selected disabled>Please select one</option>
                <option val="front">Front</option>
                <option val="left-chest">Left chest</option>
                <option val="pocket">Pocket</option>
                <option val="front-top">Front top</option>
                <option val="front-bottom">Front bottom</option>
                <option val="right-side">Right side</option>
                <option val="right-sleeve">Right sleeve</option>
                <option val="left-side">Left side</option>
                <option val="left-sleeve">Left sleeve</option>
                <option val="back">Back</option>
                <option val="back-top">Back top</option>
                <option val="back-bottom">Back bottom</option>
                <option val="tag">Tag</option>
              </select>			
            </label>
          </div>

          <div class="column small-11 medium-5">
            <label class="order-form">Design Name
            <input type="text">
            </label>
            <label for="exampleFileUpload" class="button alert">Upload File</label>
            <input type="file" id="exampleFileUpload" class="show-for-sr">
          </div>

          <div class="column small-11 medium-10">
            <label class="order-form notes">
              Notes:
              <textarea rows="4"></textarea>
            </label>
          </div>
        </div>
      
      
      
        <a class="button secondary">Add print</a>
      </div>
      
      <hr>
      
      <h3 class="design-sections">Finishing Options</h3>
      
        <div class="row align-center">
          <fieldset>
            <input id="checkbox1" type="checkbox"><label for="checkbox1" class="order-form">Folding</label>
            <input id="checkbox2" type="checkbox"><label for="checkbox2" class="order-form">Poly bagging</label>
            <input id="checkbox3" type="checkbox"><label for="checkbox3" class="order-form">Hang tagging</label>
            <input id="checkbox4" type="checkbox"><label for="checkbox4" class="order-form">Size stickers</label>
          </fieldset>
        </div>
      
    </div>
  </div><!--  container-->
  
</form>



<?php get_footer(); ?>
