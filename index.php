<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HelloWorld Application</title>
<link rel="stylesheet" href="http://www.danialledube.com/helloWorld/registration.css" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://www.danialledube.com/helloWorld/registration.js"></script>
</head>

<body>
<h3>HelloWorld User Registration</h3>
<span class="required">*</span> are Required Fields
<form action="registration.php" method="post" name="registration" id="registration">
  <p>
    <label for="firstName"><span class="required">*</span>First Name:</label>
    <input type="text" name="firstName" id="firstName">
    <span name="firstNameError" id="firstNameError" class="hidden error"><span class="required">Required</span> - Please enter your first name. </span>
  </p>
  <p>
    <label for="lastName"><span class="required">*</span>Last Name:</label>
    <input type="text" name="lastName" id="lastName">
    <span name="lastNameError" id="lastNameError" class="hidden error"><span class="required">Required</span> - Please enter your last name.</span>
  </p>
  <p>
    <label for="address"><span class="required">*</span>Address:</label>
    <input type="text" name="address" id="address">
  <span name="address" id="addressError" class="hidden error"><span class="required">Required</span> - Please provide your street address</span>
  </p>
  <p>
    <label for="address2">Address(Addn'l):</label>
    <input type="text" name="address2" id="address2">
  </p>
  <p>
    <label for="city"><span class="required">*</span>City:</label>
    <input type="text" name="city" id="city">
  <span name="cityError" id="cityError" class="hidden error"><span class="required">Required</span> - Please provide the name of the city where you reside.</span>
  </p>
  <p>
    <label for="state"><span class="required">*</span>State:</label>
    <select name="state" id="state">
      	<option selected="selected" value="">Please Select ...</option>
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
    <span name="stateError" id="stateError" class="hidden error"><span class="required">Required</span> - Please select a state </span>
  </p>
  <p>
    <label for="zip"><span class="required">*</span>Zip Code:</label>
    <input type="text" name="zip" id="zip">
    <span name="zipError" id="zipError" class="hidden error"><span class="required">Required</span> - Please provide your zip code as ##### or #####-####</span>
  </p>
  <p>
    <label for="country"><span class="required">*</span>Country:</label>
    <input name="country" type="text" id="country" value="US">
    <span name="countryError" id="countryError" class="hidden error"><span class="required">Required</span> - Please enter your country. </span>
  </p>
  <input name="submit" type="submit" id="submit" form="registration">
</form>
</body>
</html>
