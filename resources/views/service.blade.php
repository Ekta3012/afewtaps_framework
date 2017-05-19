<!DOCTYPE html>
<html>
<head>
	<title>Service App</title>
	<link rel="shortcut icon" href="http://www.afewtaps.com/images/Logo2.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/5cd91b09e0.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/stylesheet.css') }}">
    <script src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row" style="padding: 3%;">
			<div class="col-sm-6">
				<img src="images/tablet.png" class="img-responsive" style="display: inline; height: 450px;">
				<img src="images/phone.png" class="img-responsive" style="display: inline; height: 450px; margin-left:-109px; margin-bottom: -50px; ">
			</div>
			<div class="col-sm-6">
				<h1>afewtaps - Service App</h1>
				<h4>Take Orders. Receive orders.</h4>
				<h4 style="padding-bottom: 1%;">POS Entry. Speed of Service.</h4>
				<p style="color: #a5a3a3; letter-spacing: 1px;">Take customer orders online, with one-tap POS entry.</p>
				<p style="color: #a5a3a3; letter-spacing: 1px;">This ensures no time is lost during service.</p>
				<hr style="margin-top: 4%; margin-bottom: 4%; height: 4px; background-color:#EBEEF0; ">
				<h4 style="color: #a5a3a3;">Service App use.</h4>
				<div class="row">
					<div class="col-sm-6">
						<img src="images/ipad.png" class="img-responsive" style="height: 70px;">
						<h4 >Receiving Customer Orders</h4>
						<h4>Accept. Serve. Mark.</h4>
					</div>
					<div class="col-sm-6">
						<img src="images/iphone.png" class="img-responsive" style="height: 70px; display: inline;">
						<img src="images/iphone.png" class="img-responsive" style="height: 70px; display: inline;">
						<h4>Taking Customer Orders</h4>
						<h4>Type. Enter. Order placed.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- div class="why row">
			<h4>Why we use Tablets and Smartphones?</h4>
			<p style="text-align: center;">
				<img src="images/ipad.png" class="img-responsive" style="margin: auto; display: inline; height: 70px;">
				<img src="images/iphone.png" class="img-responsive" style="margin: auto; display: inline; height: 70px;">
				<h3 style="text-align: center;">In order to keep things organised, <span style="font-family: 'Myriad Pro';"><b>tablets</b></span> are offered to receive all</h3>
				<h3 style="text-align: center;">incoming customer orders, while  <span style="font-family: 'Myriad Pro';"><b>smartphones</b></span> are distributed to take</h3>
				<h3 style="text-align: center;">customer orders.</h3>
			</p>			
		</div> -->
		<div class="receiving row">
			<h2>Receiving Customer Orders</h2>
			<h4>Each customer order, when placed, appears on a tablet. Accept the order to enter it instantly to the POS, while also giving</h4><h4> customers confirmation on their order.</h4>
		</div>
		<div class="taking row">
			<div class="row">
				<div class="col-sm-8">
					<h2>Taking Customer Orders</h2>
				</div>
				<div class="col-sm-4">
					<div class="form-group has-feedback has-feedback-left">										
						<i class="form-control-feedback glyphicon glyphicon-search"></i><input type="text" placeholder="search" class="form-control" style="border:0px; background-color: transparent; border-bottom: 1px solid #a7a3a3; border-radius: 0px; box-shadow: none;">
						
					</div>					
				</div>
			</div>
			<h4>Just type and enter to take customer orders. Its lightning fast and connected to your POS.</h4>
			<h4>Take orders <b>irrespective</b> of the number of items or customers.</h4>
			<p style="font-size: 20px; color: #9FABB7; text-align: right; padding-top: 6%;">Request for a demo at <b>info@afewtaps.com</b></p>
		</div>
		<div class="benefits">
			<h2 style="padding-bottom: 3%;">Benefits of serving with a service app</h2>
			<div class="ordering row">
				<div class="col-sm-3"></div>
				<div class="col-sm-1 increase_sales">
					<img src="images/revenue_increase.png" class="img-responsive" style="height: 50px;">
				</div>
				<div class="col-sm-1 brand_img">
					<img src="images/brand_img.png" class="img-responsive" style="height: 50px;">
				</div>
				<div class="col-sm-1 customer_data">
					<img src="images/customer_data.png" class="img-responsive" style="height: 50px;">
				</div>
				<div class="col-sm-1 floor_operation">
					<img src="images/floor_operations.png" class="img-responsive" style="height: 50px;">
				</div>
				<div class="col-sm-1 good_reviews">
					<img src="images/review.png" class="img-responsive" style="height: 50px;">
				</div>
				<div class="col-sm-1 timely">
					<img src="images/timely_service.png" class="img-responsive" style="height: 50px;">
				</div>
				<div class="col-sm-3"></div>			
			</div>
			<div class="container order_elements">
				<div class="first_child animated fadeInDown">
					<b><h3>Increase in Sales</h3></b>			
					With sWith smartphone ordering, restaurants may reduce their staff strength and still serve better. With Smartphone Order taking, there is speed of service and a potential to generate increased revenue.
				</div>
				<div class="second_child animated fadeInDown">
					<b><h3>Sophisticated Brand Images</h3></b>			
					Our system removes human errors and brings speed and smoothness to restaurant operations.
				</div>
				<div class="three_child animated fadeInDown">
					<b><h3>Customer Data</h3></b>			
					Having customer data like what they prefer and at what time, how much they spend, restaurants they 
					visit etc. can help you understand people and bring back customers, for repeat sales, while attracting
					new ones at the same time.
				</div>
				<div class="fourth_child animated fadeInDown">
					<b><h3>Floor Operations</h3></b>
					The system increases Quality and Speed of service. <br>
					Decrease your order placement to order delivery to bill payment time and make room for more customers.
				</div>			
				<div class="fifth_child animated fadeInDown">
					<b><h3>Good Reviews on platforms like Zomatos</h3></b>
					Repeat orders with a tap. Quite handy for drinks.
				</div>
				<div class="six_child animated fadeInDown">
					<b><h3>Timely Service</h3></b>
					The staff doesn’t have to go back to a fixed POS and lose time ordering from there.<br>					 
					They’re more available to customers, which results in better service and improved table-turns.
				</div>
			</div>
		<div style="color: #0080FF; padding: 2% 1%; vertical-align: middle;">
			<p style=" display: inline;">Some of our <b>concepts</b> during service </p><span><i id="plus" class="fa fa-plus-circle" aria-hidden="true" style="color: #0080FF; font-size: 30px;"></i></span>
		</div>
		<div class="built-in">
			<div>
				<i id="cross" class="fa fa-times" aria-hidden="true" style="color: #fff; background-color: #000; padding: 1%; margin: auto; border-radius: 25px; font-size: 15px;"></i>
			</div>
			<h3 style="font-family: 'Myriad Pro';">
				Built-in Service Concepts
			</h3>
			<p>
				The Service app comes built-in with some real-time concepts to help the staff with better and efficient service.<br>Concepts that help food service outlets work better.
			</p>
			<div class="container built_in_row row">
				<div class="col-sm-2 li1"  style="border-bottom: 1px solid #000;">
					Escalation Limit
				</div>
				<div class="col-sm-2 li2">
					Order Status
				</div>
				<div class="col-sm-2 li3">
					New Orders
				</div>
				<div class="col-sm-2 li4">
					Serving Time
				</div>
				<div class="col-sm-2 li5">
					Threshold Limit
				</div>
				<div class="col-sm-2 li6">
					Last Order Notification
				</div>
			</div>	
			<div class="built-in_content container">
			<div class="row li1_content">
				<div class="col-sm-6">
					<p>
						Well, in case service employees forget to accept a customer order within 4 minutes of customer order placement, and it goes down the list untouched, the system brings it back to the top and alerts the service employees to accept.
					</p>
					<p>
						For each order exceeding escalation limit, the staff is alerted with the following techniques
					</p>
					<ul style="list-style: disc;">
						<li>Customer Order arrives at the top of the list of new orders</li>
						<li>Order Status Highlights</li>
						<li>Acceptance icon Highlights</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<img src="images/tablet.png" class="img-responsive" style="margin:0 auto; height: 300px;">
				</div>
			</div>
			<div class="li2_content row">
				<div class="col-sm-6">
					<p>
						Each customer order comes encrypted with an Order Status, to get real time information on the order placed. Order Status includes:
					</p>
					<ul style="list-style: disc;">
						<li>Waiting for the acceptance... (New Orders waiting to be accepted by sservice employees)</li>
						<li>In Preperation (Customer order accepted and in preperation)</li>
						<li>In Priority (Customer order exceeds Threshold Limit or Customer reminds the staff)</li>
						<li>Completed/cancelled (Customer order delivered and marked appropriately)</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<img src="images/orderstatus.jpg" class="img-responsive" style="height: 200px; margin: 0 auto;">
				</div>
				
			</div>
			<div class="li3_content row">
				<div class="col-sm-6">
					<p>
						For each new order, service employees are alerted<br>with the following techniques
					</p>
					<ul style="list-style: disc;">
						<li>Device Vibration</li>
						<li>Order Card appearance with notification</li>
					</ul>
					<p>
						Please Note:
					</p>
					<ul style="list-style: disc;">
						<li>Each service employee has to explicitly accept all new orders,<br>in order to keep transparency.</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<img src="images/new_orders.png" class="img-responsive" style="height: 200px; margin: 0 auto;">
				</div>
			</div>
			<div class="li4_content">
				
			</div>
			<div class="li5_content">
				
			</div>
			<div class="li6_content">
				
			</div>
		</div>		
		</div>	
		</div>	
		
		<div class="row footer">
			<div class="col-sm-6" style="text-align: left;">
				<h4><b>ABOUT US</b></h4>
				<p>A startup, aiming to create</p>
				<p>disruption in the food service technology space.</p>
				<p>We pledge to make food service <b>world class...</b></p>
			</div>
			<div class="col-sm-6" style="text-align: right;">
				<ul style="list-style: none;">
			        <li><a href="{!! url('/career'); !!}" style="text-decoration: none; color: #fff;">Career</a></li>
			        <li><a href="{!! url('/faq'); !!}" style="text-decoration: none; color: #fff;">FAQ</li>
			        <li><a href="{!! url('/blog'); !!}" style="text-decoration: none; color: #fff;">Blog</a></li>
			        <li><a href="{!! url('/feedback'); !!}" style="text-decoration: none; color: #fff;">Feedback</a></li>
			        <li>Privacy</li>
			        <li>Terms</li>
			      </ul>
				<p style="font-size: 13px;">Copyright © 2017 Think Different Technologies (P) Ltd</p>
			</div>
		</div>		
	</div>
</body>
</html>