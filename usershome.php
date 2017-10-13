<?php
include 'connection.php';
include 'logcheck.php';
$itemid=0;
$userid=$_SESSION["userid"];
if(isset($_POST['grub'])){
  $itemid=$_POST['item_id'];
  mysqli_query($con,"UPDATE tbl_points SET points=points-1 WHERE userid=$userid");
}
?>
<!DOCTYPE html>
<html>
<title>
  CLICK AND BUY</title>
  <head>

  <style>

  body {margin:0;}
  .dropbtn {
    background-color: #4d4d00;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    cursor: pointer;
  }

  .dropdown {
    margin-left:1050px;
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }

  .dropdown-content a {
    color: #8400ff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #7070db;
    position: fixed;
    top: 0;
    width: 100%;
  }
  .footer
  {
    width:100%;
    height:20%;
    background-color:black;
    float:left;
    position:relative;
    text-align:center;
    color:white;
  }

  li {
    float:right;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover:not(.active) {
    background-color: #1a1a00;
  }

  .active {
    background-color: white;
  }
  h1 {
    text-shadow: 2px 2px #FF0000;
  }
  p {
    text-indent: 50px;
  }
  .left {
    position: relative;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
  }
  .right {
    position: absolute;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
  }
  .dropdown
  {
    position: relative;
    display: inline-block;
  }
  .dropdown-content
  {
    z-index:2;
    border-radius: 5px;
    font-size:20px;
    display: none;
    position: absolute;
    background-color: black;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    box-width:10%;
    padding: 12px 24px;
  }
  .dropdown:hover .dropdown-content
  {
    display: block;
  }
  .div1{
    display:inline-block;
    position:fixed;
    width:30%;
  }
  .div2{
    margin-left: 30%;
    display:inline-block;
    width:60%;
    text-align: center;
  }
  </style>
</head>
<body>



  <link rel="style sheet" type="text/css" href="style2.css">
</br></br></br></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="LOGO1.png" style="margin-left:0px"><font style="color:#555555;font-family:Agency FB;margin-right:10px">
  <h2><font color="red"><span style="color:red;font-family:Calibri Light (Headings)"><b><pre><MARQUEE>TODAYS EXICTING OFFERS.. GRAB IT IMMEDIATELY</MARQUEE></PRE></b></span></h1>
    <body bgcolor=" white">
      <ul>
        <h2><li><a href="logout.php">Logout</a></li></h2>
        <h2><li><a href="changepassword.php">Change Password</a></li></h2>
        <h2><li><a href="feedback.php">Feedback</a></li></h2>
        <h2><li><a href="deliveryshow.php">Delivery details</a></li></h2>
        <h2><li><a href="payment.php">Payment</a></li></h2>
        <h2><li><a href="userproduct.php">Products</a></li></h2>
        <h2><li><a href="offersview.php">Offers</a></li></h2>
        <h2><li><a href="myprofile.php">Profile</a></li></h2>
        <h2><li><a href="index.php">Home</a></li></h2>

      </ul>
      <div class="div1" >
        <?php
        $a=$_SESSION['userid'];
        //echo $a;
        //echo $_SESSION['userid'];
        $results=mysqli_query($con,"select * from tbl_registration where login_id=$a");
        while($row=mysqli_fetch_array($results))
        {
          ?>
          <table align="center"  border="1" height="100px">
            <tr><font color="black"<html>
              <tr><td ><font color="black">&nbsp;Photo</font></td>
                <td><img src="<?php echo $row['image']; ?>" width="75px" height="75px" /></td></tr>
                <tr><td><font color="black">&nbsp;Firstname</font></td>
                  <td><input name="first_name" type="text" value="<?php echo $row['first_name']; ?>"/></td></tr>
                  <tr><td><font color="black">&nbsp;Lastname</font></td>
                    <td><input name="last_name" type="text" value="<?php echo $row['last_name']; ?>"/></td></tr>
                    <td><font color="black">&nbsp;Gender</font></td>
                    <td><input name="gender" type="text" value="<?php echo $row['gender']; ?>"/></td></tr>
                    <tr><td><font color="black">&nbsp;Mobile Number</font></td>
                      <td><input name="mobile" type="tel" value="<?php echo $row['mobile']; ?>"/></td></tr>
                      <tr><td>Available points</td>
                        <td>
                          <?php
                          $results1=mysqli_query($con,"select * from tbl_points where userid=$a");
                          while($row1=mysqli_fetch_array($results1))
                          {
                            echo $row1['points'];
                          }

                          ?>

                        </td>
                      </tr>
                    <?php } ?>
                  </table>
                </div>
                <div class="div2" >
                  <?php
                  $results=mysqli_query($con,"select * from tbl_product,tbl_offers where tbl_product.id=tbl_offers.id");
                  while($row=mysqli_fetch_array($results))
                  {
					  echo "<br><br>";
					  date_default_timezone_set('Asia/Dhaka');
					// Then call the date functions
echo $date = date('Y-m-d H:i:s');;;
					  echo date('d-m-Y H:i');
					  $date=$row['enddate'];
					  
					  echo "1: ".date( "Y-m-d H:i:s", strtotime($date));
					  echo "2: ".date("Y-m-d H:i:s");
					  echo "<br><br>";
					  $to_time = date( "Y-m-d H:i:s", strtotime($date));
					  echo $to=strtotime($to_time);
					  echo "<br>";
					  $from_time = date("Y-m-d H:i:s");
					  echo $from =strtotime($from_time);
					  $time=$to-$from;
					  echo "sec".$time;
                    ?>
                    <div class="offer_items" id="offer_items" style="display:inline-block; margin:5px;">
                      <form action="" method="post">
                        <table align="center" border="1" >
                          <tr><font color="black"<html>
                            <tr>
                              <td colspan="2"><img src="<?php echo $row['image']; ?>" width="200px" height="150px" /></td></tr>
                              <tr><td><font color="black">&nbsp;Productname</font></td>
                                <td><?php echo $row['name']; ?></td></tr>
                                <tr><td><font color="black">&nbsp;Actual Price</font></td>
                                  <td><?php echo $row['price']; ?></td>
                                </tr>
                                <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
                                <tr><td><font color="black">&nbsp;Ends in</font></td>
                                  <td><span id="countdowntimer">10 </span>:<span id="countdowntimer2">10 </span> Seconds</td>
                                </tr>
                                <tr><td colspan="2">
                                <input type="submit" name="grub" id="grub" class="grub" value="GRAB" ></td>
                              </td></tr>
                              </font>
                            </tr>
                          </table>
                        </form>
                      </div>
                    <?php } ?>

                    <script type="text/javascript">
                    var timeleft = 121;
                    var downloadTimer = setInterval(function(){
                      timeleft--;
                      document.getElementById("countdowntimer").textContent = Math.floor(timeleft/60);
                      document.getElementById("countdowntimer2").textContent = timeleft%60;
                      if(timeleft <= 0){
                        clearInterval(downloadTimer);
                      }
                    },1000);
                    </script>
                    <script src="jquery-3.2.1.min.js"></script>
                    <!-- <script>
                    $(document).ready(function() {
                      $('.offer_items').each(function(index){
                        $(this).click(function(){
                          $(this).children('.grub').click();
                          $(this).parent().submit();
                          //alert("asd");
                        });
                      });
                    });
                    </script> -->
                  </div>
