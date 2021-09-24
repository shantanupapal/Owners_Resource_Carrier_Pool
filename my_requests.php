<?php
session_start();
$userprofile=$_SESSION['user_name'];
if($userprofile == true)
{

}
else {
header('location:start.php');
}
?>
<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="all.css">
</head>
<body style="overflow-x:hidden;">
<header class="stickyheader">
    <div class="primary-header">
      <div class="place-right">
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

<div style="background-color:grey;
  height: auto;
  opacity:1; padding:5px 5px 5px 5px; margin:10px 10px 10px 10px;">
  <a href="start1.php"><button class="btn btn-success">Back</button></a><br><br>
  <table class="table">
  <thead>
  <tr>
    <th>Requested To</th>
    <th>Date</th>
    <th>Pickup From</th>
    <th>Dropped To</th>
  </tr>
</thead>

<tbody>
<?php
$conn = mysqli_connect("localhost","root","","wt");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM requests where request_by = '$userprofile'";
$search_result = mysqli_query($conn,$query);
$total = mysqli_num_rows($search_result);
if($total == 0){
header('location:sorry_requests_page.php');
}
while($rows=mysqli_fetch_assoc($search_result))
      {
  ?>

  <tr>
    <td style="padding:5px 5px 5px 5px"><?php echo $rows['request_to'] ;?></td>
    <td style="padding:5px 5px 5px 5px"><?php echo $rows['date_on'] ;?></td>
    <td style="padding:5px 5px 5px 5px"><?php echo $rows['p_code'] ;?></td>
    <td style="padding:5px 5px 5px 5px"><?php echo $rows['d_code'] ;?></td>

  </tr>
     <?php
           }
?>
</tbody>
</table>
</div>
