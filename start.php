<?php
session_start();
$user_name = '';
if (!empty($_SESSION['user_name']))
{
   $user_name = $_SESSION['user_name'];
}
if($user_name == true)
{
header('location:start1.php');
}
else {

}
?>

<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="all.css">
   <script type="text/javascript">
   function pleaselogin() {
alert("Please Login First");
}
   </script>
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
    <table>
      <tr>
        <td>
          <form id="login" class="navbar-form navbar-right" role="form" method="post" action="loginprocess.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="username" value="" placeholder="Username" required>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                    <label><b>OR</b></label>
          </form>
        </td>
        <td>
          <a style="margin-left:5px;" href="signtry.php"><button class="btn btn-success">SignUp</button></a>
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
      <form method="post" action="start.php">
        <div class="form-group">
          <label for="PickUp">PickUp from:</label>
          <input type="text" class="form-control" id="pickup" placeholder="Enter pincode" name="pickup">
        </div>
        <div class="form-group">
          <label for="Drop">Drop to:</label>
          <input type="text" class="form-control" id="drop" placeholder="Enter pincode" name="drop">
        </div>
        <button type="submit" class="btn btn-default" onclick="pleaselogin()">Search</button>
      </form>
    </div>
</div>
</section>
<footer><!-- AddToAny BEGIN -->
  <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px; data-a2a-url="http://localhost/WT%20Project/start.php" data-a2a-title="Shared Delivery" ">
      <a class="a2a_button_whatsapp"></a>
      <a class="a2a_button_linkedin"></a>
      <a class="a2a_button_twitter"></a>
      <a class="a2a_button_telegram"></a>
      <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
  </div>

  <script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END --></footer>
</body>
</html>
