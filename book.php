<?php $ptitle= 'Cabot Cruises: Booking'; include '_top.php'; ?>

        <div id=bookSection>
          <h1>Book a Cruise</h1>
      
          <form method="get" action="confirm.html">
            <fieldset>
                <label class="label">Full Name* <input type="text" name="name" required></label>
                <label class="label">Address<input type="text" name="address" placeholder="123 1st st."></label>
                <label class="label">City <input type="text" name="City" placeholder="Lehi"></label>
                <label class="label">State
                  <select name="stateSelect">
                    <option value="">Please Select</option>
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
                  </select>
                </label>
                <label class="label">Zipcode <input type="text" name="Zipcode" placeholder="84043"></label>
                <label class="label">Phone Number <input type="text" name="phone" placeholder="1235551234"></label>
                <label class="label">Email Address* <input type="text" name="email" placeholder="something@gmail.com" required></label>
                <label class="label">Cruise Selection
                  <select name="cruiseSelect">
                    <option value="">Please Select</option>
                    <option value="Nor">Fjord, Norway</option>
                    <option value="AU">Sydney, Australia</option>
                    <option value="CA">Catalina Island</option>
                    <option value="CH">Hong Kong, China</option>
                  </select>
                </label>
            </fieldset>
        
            <input type="submit" value = "Book My Cruise" class="submitBtn">
        
           </form>
      </div><!-- end of book section -->

      <?php include '_bot.php'; ?>