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
            <label style="margin-right:10px;" for="">Welcome <?php echo $_SESSION['user_name']?></label>
        </td>

          <td>
            <a style="margin-right:5px;" href="logout.php" class="btn btn-primary">Logout</a>
          </td>
      </tr>
    </table>
    </div>
  </nav>
</header>
<section style="background-image: url(main1.jpg);
  height: 675px;
  background-repeat: no-repeat;
  background-size:cover;
  position: relative;">
  <h1 style="position:relative;left:250px;top:30px;color:white;font-family:"Comic Sans MS";">Ask for help to deliver your package to your destination in town</h1>
  <div class="container" style="position:relative;left:15px;top:180px;">
    <div class="col-sm-4" style="background-color:white; padding:30px; border-radius:15px;">
      <form action="search.php" method="post">
        <div class="form-group">
          <label for="PickUp">PickUp from:</label>
          <input type="text" class="form-control" id="pickup" placeholder="Enter pincode" name="pickup">
        </div>
        <div class="form-group">
          <label for="Drop">Drop to:</label>
          <input type="text" class="form-control" id="drop" placeholder="Enter pincode" name="drop">
        </div>
        <div class="form-group">
          <label for="time">When:</label>
          <input type="time" class="form-control" id="drop" placeholder="Enter time " name="time">
        </div>
        <button type="submit" name="search" class="btn btn-default">Search</button>
      </form>
    </div>
</div>
</section>


</body>
</html>
