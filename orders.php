<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Form - Shipping order form</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <!-- <form id="myform"> -->
  <form action="insert.php" method="post">
  <header>Package Order Form</header>
  <div class="area">
    <div class="row">
      <div class="col2">
        <input type="text" name="CustFirstName">
        <label for="CustFirstName">First Name</label>
      </div>
      <div class="col2">
        <input type="text" name="CustLastName">
        <label for="CustLastName">Last Name</label>
      </div>
      <div class="row">
        <input type="text" name="CustAddress" id="CustAddress">
        <label for="Custaddress">Address</label>
      </div>
      <div class="row">
        <input type="text" name="CustCity" id="CustCity">
        <label for="CustCity">City</label>
      </div>
    </div>
    <div class="row">
      <input type="text" name="CustProv" id="CustProv">
      <label for="CustProv">Province</label>
    </div>
    <div class="row">
      <input type="text" name="CustPostal" id="CustPostal">
      <label for="CustPostal">Postal Code</label>
    </div>
    <div class="row">
      <input type="text" name="CustCountry" id="CustCountry">
      <label for="CustCountry">Country</label>
    </div>
    <div class="row">
      <input type="text" name="CustHomePhone" id="CustHomePhone">
      <label for="CustHomePhone">Home Phone</label>
    </div>
    <div class="row">
      <input type="text" name="CustBusPhone" id="CustBusPhone">
      <label for="CustBusPhone">Business Phone</label>
    </div>
    <div class="row">
      <input type="text" name="CustEmail" id="CustEmail">
      <label for="CustEmail">Customer Email</label>
    </div>
  </div>
<p>Number of Travelers</p>
  <select name="$TravelerCount">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10 or more</option>
  </select>

<p>Trip Type</p>
  <select name="$TripTypeId">
    <option value="L">Leisure</option>
    <option value="B">Business</option>
    <option value="G">Group</option>
  </select>



  <!-- <div class="area">
    <div class="ckeckarea">
      <input type="checkbox" name="checkbox1" id="checkbox1" onclick="autofilling(this.form)">
      <label for="checkbox1">Check this box if order info and sending info are the same.</label>
    </div>
    <div class="row">
      <div class="col2">
        <input type="text" name="newfirstname">
        <label for="newfistname">First Name</label>
      </div>
      <div class="col2">
        <input type="text" name="newlastname">
        <label for="newlastname">Last Name</label>
      </div>
    </div>
    <div class="row">
      <input type="text" name="newaddress" id="newaddress">
      <label for="newaddress">Sending Address</label>
    </div>
  </div> -->

  <div class="row">
    <input type="submit" value="Insert" class="btn" name='button1'>
    <input type="submit" value="cancel" class="btn">
<!--
    <form action="" method="POST">
        <button name="click" class="click">Click me!</button>
    </form>
-->
  </div>
</form>

<?php
/*
if(isset($_POST['btn']))
{

    echo "Time the button was clicked: " . $BookingDate . "<br>";
}
*/

?>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
