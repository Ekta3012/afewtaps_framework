
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/Logo2.png" type="image/png" />
<!-- all the meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end of all the meta tags -->

<title>afewtaps</title>
<base href="http://www.afewtaps.com/" />
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
<div style="background-color:#161616;padding-top:10px;padding-bottom:10px;">
<img src="images/logon.png" class="img-responsive center-block">
</div>

<div class="container" style="padding-top:40px;padding-bottom:40px;text-align:justify;color:gray;">
<img src="images/left_circle.png" class="img-responsive center-block" style="cursor:pointer;" onclick="history.back(-1)" />
<p style="padding-top:40px;font-size:40px;border-bottom:2px solid black;padding-bottom:20px;color:#161616;"><strong>Frequently Asked Questions (FAQs)</strong></p>

 <ol >
 @foreach ($faq as $faqs)
    <li><span style="font-weight: bold; color: #000; font-size: 18px;">This is user {{ $faqs->questions }}</span>
        <p>
          {{ $faqs->answers }}
        </p>
    </li>
@endforeach
</ol>
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
        <li><a href="{!! url('/career'); !!}" style="text-decoration: none; color: #fff;">Career</a></li>
        <li><a href="{!! url('/faq'); !!}" style="text-decoration: none; color: #fff;">FAQ</a></li>
        <li><a href="{!! url('/blog'); !!}" style="text-decoration: none; color: #fff;">Blog</a></li>
        <li><a href="{!! url('/feedback'); !!}" style="text-decoration: none; color: #fff;">Feedback</a></li>
        <li>Privacy</li>
        <li>Terms</li>
      </ul>
      <p>Copyright © 2017 Think Different Technologies (P) Ltd</p>
    </div>
  </div>  
	
	<!-- all scripts -->
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
	
	 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
   
	 <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>  
	 <script  type="text/javascript" src="assets/js/main.js"></script>  
	<script  type="text/javascript" src="assets/js/Carousel.js"></script>
     <script type="text/javascript" src="assets/js/cust.js"></script>  

	<!-- end of scripts -->
    </body>

</html>
