<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<link rel="shortcut icon" href="http://www.afewtaps.com/images/Logo2.png" type="image/png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/5cd91b09e0.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/stylesheet.css') }}">
    
	<style type="text/css">
		p{
			margin: 0;
			font-size: 16px;
		}
	</style>
</head>
<body style="letter-spacing: 1px;">
	<div class="container-fluid">
		<div id="management" style="text-align: center; padding:2%;">
			<h1 style="font-size: 39px;">Management Dashboard</h1>
			<h4>View. Control. Edit. Supervise.</h4>
			<p style="font-size: 14px;">A dashboard to handle and control on-going operations.</p>
			<img src="images/pc.png" class="img-responsive" style="height: 200px; margin:3%  auto;">
			<p>View real-time operations, orders, history, payments settlements and cancelled orders.</p>
			<p>Modify menu items, pricing, descriptions, staff employed, taxes.</p>
			<p>Set Restaurant Threshold Limit</p>
			<p>Enter discounts/offers for customers</p>
			<p>Business Analytics</p>
			<p>Floor Performance (Staff Analytics)</p>		
		</div>	
		<div class="row footer">
			<div class="col-sm-6" style="text-align: left; ">
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