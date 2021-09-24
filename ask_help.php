<?php
session_start();
$userprofile=$_SESSION['user_name'];
if($userprofile == true)
{

}
else {
header('location:start.php');
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //echo "IN";
  $helper_name= $_POST['name'];
  $helper_number= $_POST['number'];
  $helper_email=$_POST['email'];
  }
?>

 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="all.css">
 <style>
 /* Center the loader */
 #loader {
   position: absolute;
   left: 50%;
   top: 50%;
   z-index: 1;
   width: 150px;
   height: 150px;
   margin: -75px 0 0 -75px;
   border: 16px solid #f3f3f3;
   border-radius: 50%;
   border-top: 16px solid #3498db;
   width: 120px;
   height: 120px;
   -webkit-animation: spin 2s linear infinite;
   animation: spin 2s linear infinite;
 }

 @-webkit-keyframes spin {
   0% { -webkit-transform: rotate(0deg); }
   100% { -webkit-transform: rotate(360deg); }
 }

 @keyframes spin {
   0% { transform: rotate(0deg); }
   100% { transform: rotate(360deg); }
 }

 /* Add animation to "page content" */
 .animate-bottom {
   position: relative;
   -webkit-animation-name: animatebottom;
   -webkit-animation-duration: 1s;
   animation-name: animatebottom;
   animation-duration: 1s
 }

 @-webkit-keyframes animatebottom {
   from { bottom:-100px; opacity:0 }
   to { bottom:0px; opacity:1 }
 }

 @keyframes animatebottom {
   from{ bottom:-100px; opacity:0 }
   to{ bottom:0; opacity:1 }
 }

 #myDiv {
  display: none;
  text-align: center;
}


 .address{
      width: auto;
       float: left;
       background-color: grey;
       margin-top: 80px;
       margin-left: 150px;
       border: solid 1px;
       border-color: grey;
       padding:25px 25px;

 }

 </style>
 </head>
 <body onload="myFunction()" style="margin:0;">
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
               <label style="margin-right:10px;" for="">Hi <?php echo $_SESSION['user_name']?></label>
           </td>

             <td>
               <a style="margin-right:5px;" href="logout.php" class="btn btn-primary">Logout</a>
             </td>
         </tr>
       </table>
       </div>
     </nav>
   </header>

 <div id="loader"></div>

 <div style="display:none; background-image: url(help.jpg);
   height: auto;
   background-repeat: no-repeat;
   background-size:cover;
   position: relative;
   padding-top: 5px; padding-bottom: 5px;" id="myDiv" class="animate-bottom">
   <h1><b>Tada!</b></h1>
   <h2><?php echo $helper_name ?> is ready to help</h2>
   <h2>Please confirm address details.....</h2>


<?php
$conn = mysqli_connect("localhost","root","","wt");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 $query = "SELECT * FROM registration WHERE username='{$_SESSION["user_name"]}'";
   $data = mysqli_query($conn , $query);

   $total = mysqli_num_rows($data);

       while( $row = mysqli_fetch_array($data) ) {

           ?>
           <div>
           <form action="confirm_process.php" method="post">
             <div class="container">
               <div class="row">
                 <div class="col-sm-6">
                  <div class="address" style=" background-color:#373737 ;padding:30px; border-radius:15px;">
                    <h2 style="color:white;">PickUp Address : </h2><br>
                    <div class="form-group">
                      <h4 style="color:white;">Address: </h4>
                    <input type="text" name="hlin1" value="<?php echo( htmlspecialchars( $row['haddress'] ) ); ?>" /><br><br>
                  </div>
                  <div class="form-group">
                    <label for="hlin2" style="color:white;">City :</label><br>
                    <input type="text" name="hlin2" value="<?php echo( htmlspecialchars( $row['hcity'] ) ); ?>" / readonly><br><br>
                  </div>
                  <div class="form-group">
                    <label for="hpin" style="color:white;">Pincode</label><br>
                    <input type="text" name="hpin" value="<?php echo( htmlspecialchars( $row['hpincode'] ) ); ?>" / readonly><br><br>
                  </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="address" style="background-color:#373737; padding:30px; border-radius:15px;">
                    <h2 style="color:white;">Drop Address : </h2><br>
                    <div class="form-group">
                    <h4 style="color:white;">Address: </h4>
                    <input type="text" name="wlin1" value="<?php echo( htmlspecialchars( $row['waddress'] ) ); ?>" /><br><br>
                  </div>
                    <div class="form-group">
                    <label for="wlin2" style="color:white;">City :</label><br>
                    <input type="text" name="wlin2" value="<?php echo( htmlspecialchars( $row['wcity'] ) ); ?>" / readonly><br><br>
                  </div>
                    <div class="form-group">
                    <label for="wpin" style="color:white;">Pincode</label><br>
                    <input type="text" name="wpin" value="<?php echo( htmlspecialchars( $row['wpincode'] ) ); ?>" / readonly><br><br>
                  </div>
                  </div>
                </div>
                  <input type="hidden" name="sender_email" value="<?php echo( htmlspecialchars( $row['email'] ) ); ?>">
                </div>
                  <button type="submit" class="btn btn-success btn-lg">Confirm</button>
                </div>
                <input type="hidden" name="helper_name" value="<?php echo $helper_name ;?>">
                <input type="hidden" name="helper_number" value="<?php echo $helper_number ;?>">
                <input type="hidden" name="helper_email" value="<?php echo $helper_email ;?>">
             </form>
         </div>
           <?php
       }
   ?>

</div>

 <script>
 var myVar;

 function myFunction() {
     myVar = setTimeout(showPage, 1500);
 }

 function showPage() {
   document.getElementById("loader").style.display = "none";
   document.getElementById("myDiv").style.display = "block";
 }
 </script>

</body>
 </html>
