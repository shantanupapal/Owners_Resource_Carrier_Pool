<?php
$nameErr=$emailErr = $usernameErr = $passwordErr = $pincodeErr = $phonenoErr="";
$firstname=$email=$lastname = $username=$psw=$phoneno=$haddress = $hcity= $hpincode= $hstate ="";
$waddress = $wcity= $wpincode= $wstate="";

$count=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //  $emailErr = "Invalid email format";
      echo "<script>
       alert('Invalid Email Format');
       window.location.href='signtry.php';
       </script>";
      $count++;
      }



  $firstname = $_POST['firstname'];
  if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
    //$nameErr = "Only letters and white space allowed";
    echo "<script>
     alert('Only letters and white space allowed in name');
     window.location.href='signtry.php';
     </script>";
    $count++;
  }


  $phoneno = $_POST['phoneno'];
if (!preg_match("/^[0-9]*$/",$phoneno)) {
//  $phonenoErr = "Only numbers are required";
  echo "<script>
   alert('Only numbers are required in Contact number field');
   window.location.href='signtry.php';
   </script>";
  $count++;
}


  $hpincode = $_POST['hpincode'];
if (!preg_match("/^[0-9]*$/",$hpincode)) {
//  $hpincodeErr = "Only numbers are required";
  echo "<script>
   alert('Only numbers are required in Pincode field');
   window.location.href='signtry.php';
   </script>";
  $count++;
}



  $wpincode = $_POST['wpincode'];
if (!preg_match("/^[0-9]*$/",$wpincode)) {
  echo "<script>
   alert('Only numbers are required in Pincode field');
   window.location.href='signtry.php';
   </script>";
  $count++;
}

}

if($count==0){

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $password = $_POST["psw"];
  $email= $_POST["email"];
  $phoneno = $_POST["phoneno"];
  $haddress = $_POST["haddress"];
  $hcity = $_POST["hcity"];
  $hpincode = $_POST["hpincode"];
  $hstate = $_POST["hstate"];
  $waddress = $_POST["waddress"];
  $wcity = $_POST["wcity"];
  $wpincode = $_POST["wpincode"];
  $wstate = $_POST["wstate"];
  $starttime = $_POST["starttime"];
  $endtime = $_POST["endtime"];

   $conn = mysqli_connect("localhost","root","","wt");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (firstname, lastname, username, password,
  email, phoneno, haddress, hcity, hpincode, hstate, waddress, wcity, wpincode, wstate, starttime, endtime)
VALUES ('$firstname', '$lastname', '$username', '$password', '$email'
,'$phoneno', '$haddress', '$hcity', '$hpincode', '$hstate', '$waddress',
'$wcity', '$wpincode', '$wstate','$starttime','$endtime')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
   alert('New record created successfully');
   window.location.href='start.php';
   </script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

?>
