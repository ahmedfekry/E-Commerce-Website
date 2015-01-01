<?php

	session_start();
	if(!isset($_SESSION['customerId']) ) {
		 header ("Location: index.php"); 
		 exit();
	}
	$id = $_SESSION['customerId'];
?>
<!DOCTYPE html>
<html>
<link href="HomeCustomer.css" rel="stylesheet" type="text/css">
<title>Home</title>
  <body>
    <div class="footer">
    <ul id="nav">

           <li id="login"><a href="logout.php">Logout</a></li>
         </ul>
  </div>
	<div class="slidebar">
		<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="9px">
		<img src="e-commerce.jpg" width="100%" height="250px"></marquee>
	</div>
  <!--the main-->
  <div class="main">
        <div class="nav1">
        <ul>
            <li><a href=<?php echo "customerInfo.php?id=$id";?>><b>Personal information<b/></a></li>
              <li><a href="homepage.php"><b>Products List <b/></a></li>
            <li><a href="shoppingCart.php"><b>shopping Cart<b/></a></li>
			<li><a href="checkout.php"><b>checkout<b/></a></li>
          </ul>

</div>
  <!--the end of the main-->
	<br>
  <div class="footer">
	   <p>&copy 2014 SAAAM. All Rights Reserved.</p>
  </div>
  
  
  </body>
</html>