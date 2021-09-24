<?php
session_start();
$username = $_SESSION['user_name'];

$conn = mysqli_connect("localhost","root","","wt");
$pickupcode = $_POST['pickup'];
$dropcode = $_POST['drop'];
$time = $_POST['time'];

$starttime = strtotime($time) - 60*60;
$starttime = date('H:i', $starttime);

$endtime = strtotime($time) + 60*60;
$endtime = date('H:i', $endtime);

 ?>

 <!doctype html>
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
 <section style="background-image: url(search.jpg);
   height: 675px;
   background-repeat: no-repeat;
   background-size:cover;
   opacity:1;">
   <h1 style="position:relative;left:200px;top:30px;color:black;font-family:"Comic Sans MS";"><b>Please select one for your help</b></h1>
<div class="container" style="position:relative;left:10px;top:50px;">
  <div class="col-sm-6">
    <form class="" action="ask_help.php" method="post">
      <table class="table" style="background-color:black; color:white;">
      <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Start Time</th>
        <th>Reaching Time</th>
      </tr>
    </thead>

    <tbody>
    <?php
    $query = "SELECT * FROM registration where username <> '$username' && hpincode = '$pickupcode' && wpincode = '$dropcode' &&  endtime >= '$starttime' && endtime <='$time'";
    $search_result = mysqli_query($conn,$query);
    $total = mysqli_num_rows($search_result);
  if($total == 0){
    header('location:sorry.php');
  }
    while($rows=mysqli_fetch_assoc($search_result))
          {
      ?>
      <tr>
        <td style="padding:5px 5px 5px 5px"><input type="checkbox" onclick="getRow(this)"></td>
        <td style="padding:5px 5px 5px 5px"><?php echo $rows['username'] ;?></td>
        <td style="padding:5px 5px 5px 5px"><?php echo $rows['phoneno'] ;?></td>
        <td style="padding:5px 5px 5px 5px"><?php echo $rows['starttime'] ;?></td>
        <td style="padding:5px 5px 5px 5px"><?php echo $rows['endtime'] ;?></td>
        <td style="padding:5px 5px 5px 5px"><?php echo $rows['email'] ;?></td>
      </tr>
         <?php
               }
    ?>
    </tbody>
    </table>

    <div>
      <input type="hidden" id="name1" name="name" value="one">
    </div>
    <div>
          <input type="hidden" id="number1" name="number" value="two">
    </div>
    <div>
          <input type="hidden" id="email1" name="email" value="three">
    </div>
    <button type="submit" name="search" class="btn btn-default">Ask for help</button>
  </form>
  </div>
</div>
</section>

<script>
function getRow(n) {
  var row = n.parentNode.parentNode;
 var cols = row.getElementsByTagName("td");

 var name = cols[1].childNodes[0].nodeValue;
 var contact_number = cols[2].childNodes[0].nodeValue;
 var email = cols[5].childNodes[0].nodeValue;

change(name,contact_number,email);
}

function change(name,contact_number,email){
  $("#name1").attr('value',name);
  $("#number1").attr('value',contact_number);
  $("#email1").attr('value',email);
  var x=document.getElementById("#name1").value;
  var y=document.getElementById("#number1").value;
  var z=document.getElementById("#email1").value
}

</script>

</body>
</html>
