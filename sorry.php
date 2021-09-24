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
<div style="background-color:#ECC190;
  height: auto;
  opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
  <h1><b>Sorry <?php echo $userprofile?> there is no one coming from same route at that time!!!</b></h1>
</div >
<div style="background-color:white;
  height: 100px;">
</div>
<div style="background-color:#ECC190;
  height: auto;
  opacity:1; text-align:center; padding-top:5px; padding-bottom:5px;">
  <h2>Search for other time</h2>
  <a href="start1.php"><button class="btn btn-success btn-lg">Search</button></a>
  </div>
