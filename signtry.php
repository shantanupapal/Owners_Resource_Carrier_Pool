<!DOCTYPE html>
<html>
<head>
  <style media="screen">
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  .error {color: #FF0000;}

  input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
  }

  /* Add a background color when the inputs get focus */
  input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
  }

  button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
  }

  button:hover {
      opacity:1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    width: 100%;
  }

  /* Add padding to container elements */
  .container {
      padding: 16px;
  }

  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: #474e5d;
      padding-top: 50px;
  }

  /* Modal Content/Box */
  .modal-content {
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      width: 80%; /* Could be more or less, depending on screen size */
  }
  </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body >

  <form class="modal-content" action="signupp2.php" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <p><span class="error">* required field</span></p>
    <hr>

    <div class="row">
      <div class="col-sm-6">
        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="firstname" required>
        <span class="error">*</span>
      </div>
      <div class="col-sm-6">
        <label for="lastname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lastname">
      </div>
    </div>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <span class="error">*</span>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <span class="error">*</span>

<div class="row">
  <div class="col-sm-6">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <span class="error">*</span>
  </div>
  <div class="col-sm-6">
    <label for="phoneno"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" name="phoneno" required>
    <span class="error">*</span>
  </div>
</div>

  <label for="haddress"><b>Home Address details</b></label>
    <input type="text" placeholder="Enter Home Address" name="haddress" >

<div class="row">
  <div class="col-sm-4">
    <label for="hcity"><b>City</b></label>
    <input type="text" placeholder="Enter City Name" name="hcity">
  </div>

  <div class="col-sm-4">
    <label for="hpincode"><b>Pin Code</b></label>
    <input type="text" placeholder="Enter PinCode" name="hpincode" required>
    <span class="error">*</span>
  </div>

  <div class="col-sm-4">
    <label for="hstate"><b>State</b></label>
    <input type="text" placeholder="Enter State" name="hstate">
  </div>
</div>

<label for="waddress"><b>Work Address details</b></label>
<input type="text" placeholder="Enter Work Address" name="waddress">

<div>
<div class="row">
  <div class="col-sm-4">
    <label for="wcity"><b>City</b></label>
    <input type="text" placeholder="Enter City Name" name="wcity">
  </div>

  <div class="col-sm-4">
    <label for="wpincode"><b>Pin Code</b></label>
    <input type="text" placeholder="Enter PinCode" name="wpincode" required>
    <span class="error">*</span>
  </div>

  <div class="col-sm-4">
    <label for="wstate"><b>State</b></label>
    <input type="text" placeholder="Enter State" name="wstate">
  </div>
</div>
</div>


<div class="row">
  <div class="col-sm-6">
    <label for="starttime"><b>Start Time</b></label>
    <input type="time" placeholder="Enter Start time" name="starttime" required>
    <span class="error">* Please enter in 24hrs format</span>
  </div>
  <div class="col-sm-6">
    <label for="endtime"><b>End Time</b></label>
    <input type="time" placeholder="Enter Reaching time" name="endtime" required>
    <span class="error">* Please enter in 24hrs format</span>
  </div>
</div>

    <div class="row" style="margin-top:10px;">
      <div class="col-sm-6">
        <button type="button" onclick="location.href = 'start.html';" class="cancelbtn">Cancel</button>
      </div>
      <div class="col-sm-6">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
</div>
</form>

</body>
</html>
