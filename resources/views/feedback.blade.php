<!DOCTYPE html>
<html>
<head>
	<title>Feedback - afewtaps</title>
	<link rel="shortcut icon" href="http://www.afewtaps.com/images/Logo2.png" type="image/png">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/5cd91b09e0.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/stylesheet.css') }}">
   
</head>
<body>
	<div class="container-fluid Feedback">
		<div class="layer_white">
			<img src="images/chat.png" class="img-responsive" style="margin: auto; display: inline; padding-right: 1%; height: 50px;">
			<h1 style="display: inline; vertical-align: middle;">Feedback</h1>
			<p style="font-size: 19px; padding: 1% 0%;">
				We value your feedback, both positive and negative.<br>
				Share your experience with afewtaps.
			</p>
			<div id="feedback_form" class="container">
				<form>
					<div class="feedback_input_box">
						<input type="text" name="name" placeholder="Name" class="form-control">
					</div>
					<div class="feedback_input_box">
						<input type="text" name="email_id" placeholder="Email ID" class="form-control">
					</div>
					<div class="feedback_input_box">
						<input type="text" name="feedback" placeholder="Feedback" class="form-control">
					</div>
					<div class="feedback_input_box_submit">
						<input type="submit" name="submit" style="background-color: #8eac7a; color: #fff; font-weight: bolder;     margin: auto;  font-size: 17px; border-radius: 5px; text-transform: uppercase; padding: 2% 8%; border:none;">
					</div>	
				</form>
			</div>
		</div>
		<div class="row footer" style="margin-left: 0; margin-right: 0;">
			<div class="col-sm-6" style="text-align: left;">
				<h4>ABOUT US</h4>
				<p>A startup, aiming to create</p>
				<p>disruption in the food service technology space.</p>
				<p>We pledge to make food service <b>world class...</b></p>
			</div>
			<div class="col-sm-6" style="text-align: right;">
				<ul style="list-style: none;">
					<li><a href="career.html" style="text-decoration: none; color: #fff;">Career</a></li>
					<li>FAQ</li>
					<li><a href="blog.html" style="text-decoration: none; color: #fff;">Blog</a></li>
					<li><a href="feedback.html" style="text-decoration: none; color: #fff;">Feedback</a></li>
					<li>Privacy</li>
					<li>Terms</li>
				</ul>
				<p>Copyright © 2017 Think Different Technologies (P) Ltd</p>
			</div>
		</div>	
	</div>
</body>
</html>