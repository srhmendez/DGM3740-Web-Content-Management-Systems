<!-- INCLUDE HEADER -->
<?php $pageTitle="Book A Cruise"; include"_header.php";?>




<section id="cruiseBookingForm">
        <h1 id="booking-h1">Book A Cruise</h1>
        <form id="cruise-form">
                <label for="fullName">Full Name</label><input id="fullName" type="text">
                <label for="address">Address</label><input id="address" type="text">
                <label for="city">City</label><input id="city" type="text">
                <label for="state">State</label>

                <select name="state" id="state">
                        <option selected="selected">Please Select...</option>
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

                <label for="zipCode">Zip Code</label><input id="zipCode" type="number">
                <label for="phoneNumber">Phone Number</label><input id="phoneNumber" type="tel">
                <label for="email">Email</label><input type="email" id="email">
                <label for="cruiseSelection">Cruise Selection</label>
                <select name="cruiseSelection" id="cruiseSelection">
                        <option selected="selected">Please Select...</option>
                        <option value="European Cruise Package">European Cruise Package</option>
                        <option value="Mediterranean Cruise Package">Mediterranean Cruise Package</option>
                        <option value="African Cruise Package">African Cruise Package</option>
                        <option value="Asian Cruise Package">Asian Cruise Package</option>
                        <option value="Carribean Cruise Package">Carribean Cruise Package</option>
                 
                </select>
                <button>Book My Cruise</button>
        </form>
</section>


<!-- INCLUDE FOOTER -->
<?php include"_footer.php";?>