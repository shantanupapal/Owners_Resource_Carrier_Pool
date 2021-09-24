<?php
session_start();
$conn = mysqli_connect("localhost","root","","wt");
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $user= $_POST['username'];
  $pwd= $_POST['password'];
  $query = "SELECT * FROM registration WHERE username='$user' && password='$pwd'";
  $data = mysqli_query($conn , $query);
  $total=mysqli_num_rows($data);

  if($total==1)
  {
    $_SESSION['user_name']=$user;
    header('location:start1.php');
  }
  else{
   echo "<script>
    alert('Sorry, Wrong username or password. Please try again');
    window.location.href='start.php';
    </script>";
  }
}

 ?>
