<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shoppee</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
										
							<li><a href="index.html">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
						<li><a href="disposerhome.php">HOME</a></li>

					<li><a href="expireditem.php">DISPOSED ITEMS</a></li>

					<li><a href="buyeditem.php">BUYED ITEMS</a></li>
						
						</ul>
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Items</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
				
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Details</strong> </span></h4>
						
<table border="1" style="width:100%;text-align:center">
							<tr style="background-color:#fd4004;color:white">
<th></th>
<th>Id</th>
<th>Item category</th>
<th>Item name</th>
<th>description</th>
<th> amount</th>
<th>usage</th>

<th>sdate</th>
<th>edate</th>
<th>status</th>
<th>buyed amt</th>
</tr>
 <?php
            include('DatabaseCon.php');
            $db=new DatabaseCon();
            $s="select * from additem inner join wallet ON additem.id=wallet.itemid"; 
            $rs=$db->selectData($s);
            while($row=mysql_fetch_array($rs)){
?>
 <tr>
 <td><img src="<?php echo $row['image'];?>" width="100" height="100"/></td>
  <td><?php echo $row['id'];?></td>
 <td><?php echo $row['itemCategory'];?></td>
 <td><?php echo $row['itemName'];?></td>
  <td><?php echo $row['Description'];?></td>
   <td><?php echo $row['amount'];?></td>
   <td><?php echo $row['usages'];?></td>
 <td><?php echo $row['sDate'];?></td>
  <td><?php echo $row['EDate'];?></td>
    <td><?php echo $row['status'];?></td>
	    <td><?php echo $row['amt'];?></td>


   


 </tr>
 <?php }?>
 </table>							
			<br/><br/><br/><br/>		</div>				
				</div>
			</section>			
			
           <section> <!-- Start copyright  -->
            <div class="footer-bottom">
                <center>
                    <span class="credit">All Rights Reserved.</span>
                    <span class="far fa-copyright"></span>
                    <span>2020</span>
                    <span class="credit"><a href="#">eaoll.in</a></span>
                    <span class="credit">&nbsp; | &nbsp; Design By : <a href="https://www.linkedin.com/company/eaoll-web-services-ltd">Eaoll Web Services</a></span>
                </center>
            </div>
            <!-- End copyright  -->
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>

</html>

