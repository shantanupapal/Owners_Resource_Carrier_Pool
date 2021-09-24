<?php
session_start();

$userprofile=$_SESSION['user_name'];
if($userprofile == true)
{

}
else {
header('location:start.php');
}

$recipient = 'papalshantanu7@gmail.com';
$subject = 'Request for drop package';
$email = $_POST['sender_email'];
//echo $email;
$pickup_address = $_POST['hlin1'];
$drop_address = $_POST['wlin1'];
$pickup_pincode = $_POST['hpin'];
$drop_pincode = $_POST['wpin'];
$pickup_city =$_POST['hlin2'];
$drop_city = $_POST['wlin2'];
$emailheader = "From: $email";

$content = "From : $userprofile \nEmail : $email \n\n\nPlease collect the parcel from :-\nAddress: $pickup_address\nPincode: $pickup_pincode\n\n\n
Please collect the parcel from :-\nAddress: $pickup_address\nPincode: $pickup_pincode\n\nTry to drop parcel in time.\n\n NOTE: Rs.20 will be deducted if late than 10min";

$retval = mail($recipient,$subject,$content,$emailheader);


$helper_name = $_POST['helper_name'];
$helper_number = $_POST['helper_number'];
$helper_email = $_POST['helper_email'];

$date = date('Y-m-d H:i:s');


$conn = mysqli_connect("localhost","root","","wt");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO requests (request_by, request_to, date_on, p_code,
  d_code)
VALUES ('$userprofile', '$helper_name', '$date', '$pickup_pincode', '$drop_pincode')";

if ($conn->query($sql) === TRUE) {
  //echo "Inserted";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

 ?>

 <html lang="en-us">

 <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="all.css">
 </head>

 <body style="overflow-x:hidden;">
 <header class="stickyheader">
     <div class="primary-header">
       <div class="place-right">
                     <div class="primary-header-links">
                       <a href="my_requests.php" target="_blank">My Requests</a>
                     </div>
                     <div class="primary-header-links">
                         <a  href="support.php" target="_blank">Support</a>
                     </div>
     </div>
   </div>
 <nav class="navbar navbar-default">
   <div class="container-fluid" style="float:right;">
     <table style="margin-top:8px;">
       <tr>
         <td>
             <label style="margin-right:10px;" for="">Hi <?php echo $_SESSION['user_name'];?></label>
         </td>
           <td>
             <a style="margin-right:5px;" href="logout.php" class="btn btn-primary">Logout</a>
           </td>
       </tr>
     </table>
     </div>
   </nav>
 </header>

 <div style="background-color:#ECC190;
   height: auto;
   opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
   <h1><b>Your request is confirmed.</b></h1>
   <h2><?php echo $helper_name;?> is going to drop your package on time.</h2>
   <h3>We have mailed <?php echo $helper_name;?> both pickup and drop address.</h3>
</div>

<div class="container" style="height:auto;">
  <div class="col-sm-6">
    <div style="background-color:white;
      opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
      <h2>You can contact <?php echo $helper_name;?> on : </h2>
      <h3>Contact Number: <?php echo $helper_number;?></h3>
      <h3>Email: <?php echo $helper_email;?></h3>

    </div>
  </div>
  <div class="col-sm-6">
    <div style="background-color:white;
    border-left: solid 5px;
    border-color: black;
      opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
      <h1><b>Payment Info</b></h1>
      <h3>Subtotal:       ₹200</h3>
      <h3>GST:            ₹36</h3>
      <h2>Grand Total:    ₹236</h2>
    </div>
  </div>

</div>


<div style="background-color:#919191;
  height: auto;
  opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
<h1><b>Request and Delivery Info</b></h1>
<div class="container">
  <div class="col-sm-6">
    <h2>Pickup Address</h2>
    <h3><?php echo $pickup_address;?></h3>
    <h3><?php echo $pickup_city;?></h3>
    <h3><?php echo $pickup_pincode;?></h3>
  </div>
  <div class="col-sm-6">
    <h2>Drop Address</h2>
    <h3><?php echo $drop_address;?></h3>
    <h3><?php echo $drop_city;?></h3>
    <h3><?php echo $drop_pincode;?></h3>
  </div>
</div>
</div>

<div style="background-color:#ECC190;
  height: auto;
  opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
  <h1>Request for another Delivery.....</h1>
  <a href="start1.php"><button class="btn btn-success btn-lg">Request</button></a>
</div>

<div style="background-color:#white;
color:green;
  height: auto;
  opacity:1; text-align:center; padding-top:8px; padding-bottom:8px;">
<div class="col-sm-6">
<h2><b>We're here to help</b></h2>
<h3>Call (800) 999-9999 or</h3>
<h3><a href="start.php">visit us online</a></h3>
<h3>for expert assistance.</h3>
</div>
<div class="col-sm-6">
  <h2><b>Our guarantee</b></h2>
  <h3>Your satisfaction is 100% guaranteed.</h3>
</div>
</div>

</body>
</html>
