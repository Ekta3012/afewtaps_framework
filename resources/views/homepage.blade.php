<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="http://www.afewtaps.com/images/Logo2.png" type="image/png">
    <title>afewtaps</title>
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
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".sec3_p1").mouseenter(function(){
                $("#sec3_p1").hide();
                $("#sec3_p1_h").show();
        });
            $(".sec3_p1").mouseleave(function(){
                $("#sec3_p1").show();
                $("#sec3_p1_h").hide();
        });
        })
    </script>
    <style type="text/css">
        p{
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 col-xs-5" style="padding-left: 0px; padding-right: 0px;">
                <img src="{!!asset('images/landing.png')!!}" class="img-responsive landing_img" style="height:700px; width: 520px;">
            </div>
            <div class="col-sm-7 col-xs-7"> 
                <nav class="navbar navbar-default">
                  <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                      </button>
                      <a class="navbar-brand" href="homepage.html"><img src="images/logob.png" class="img-responsive" width="70px" ></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar" style="padding-right: 0px; padding-left: 0px;">
                        <ul class="nav navbar-nav" style="padding-left: 2%;">
                          <li class="dropdown" >
                            <a href="#">Products <i class="fa fa-circle dot" aria-hidden="true" ></i></a>                   
                            <ul class="dropdown-content" style="padding-left: 10px;">
                                <li><img src="images/iphone.png" style="height: 35px; " >Customer App</li>
                                <li ><img src="images/ipad.png" style="height: 35px; " ><img src="images/iphone.png" style="width: 35px; " >Service App</li>
                                <li><img src="images/pos.png" style="height: 35px; " >POS Integration</li>
                                <li><img src="images/web_d.png" style="height: 35px; " >Web Dashboard</li>
                            </ul>
                          </li>
                          <li><a href="#">at the movies!</a></li>
                          <li><a href="#">How it works?</a></li>
                          <li><a href="#">Buisness</a></li>
                          <li><a href="https://www.instagram.com/afewtaps/" style="padding:11px 17px;"><img src="images/insta.png" class="img-responsive" width="30px" height="30px"></a></li>
                          <li><a href="#" style="padding:11px 17px;"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                          <li><a href="{{ url(config('laraadmin.adminRoute')) }}" style="padding:11px 17px;"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
                </nav>              
                <p id="time">
                    <script type="text/javascript">
                        var date = new Date();  
                        var options = {  
                            month: "short",  
                            day: "numeric", hour: "2-digit", minute: "2-digit"  
                        };  
                        document.write(date.toLocaleTimeString("en-us", options));  
                    </script>
                </p>            
                <p class="header_home">afewtaps app </p>
                <h2 style="margin-top: 1%">Hello, welcome to afewtaps.</h2> 
                <ul class="mac">
                    <li style="margin-left: -14px;"><img src="images/ipad.png"  class="img-responsive ipad" ></li>
                    <li ><img src="images/iphone.png" class="img-responsive iphone"></li>
                </ul>   
                <h4 style="clear: left; padding-top: 3%;"><span style="font-family: myriad-pro-condensed, sans-serif;">Take</span> Orders. <span style="font-family: myriad-pro-condensed, sans-serif;">Place</span> Orders.</h4>   
                <hr class="hr_top">                             
                <p class="section"> Order Taking and Customer Ordering services </p>
                 <!--<button class="btn Store"><img src="images/apple.png">&nbsp; &nbsp; App Store</button>
                <button class="btn Store" style="display: inline; margin-top: 0px;"><img src="images/android.png">&nbsp; &nbsp; Play Store</button> -->
                <img src="images/appstore.png" class="img-responsive" style="height: 45px; ">
                <img src="images/downarrow.png" style="float: right; height: 25px; display: inline; margin-top: 6%; padding-right: 2%;">
            </div>
        </div>
        <div class="row">
            <hr style="height: 4px; background-color: #f1e3e3; margin: 0;">
        </div>      
        <div class="sec2">
            <img src="images/bookmark.png" class="img-responsive bookmark">
            <p>
                Every word class city, needs a world class outlet, <br>and every world class outlet, needs to serve with afewtaps.
            </p>
            <hr style="background-color: #000; height: 2px; width: 45%;">
            <p>
                Making restaurant service <b>world class...</b>
            </p>
            <h4 style="padding-top: 23%; font-weight: bolder;">Products <img src="images/downarrow.png" class="img-responsive" width="20px" height="20px" style="display: inline; margin-left: 7px; height: 25px;"></h4>
        </div>
        <div class="row">
            <hr style="height: 4px; background-color: #f1e3e3; margin: 0;">
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12 sec3_1">
                <div id="sec3_p1">
                    <h2 style="padding-top: 43%;"><b>Placing Orders</b></h2>
                    <h2 style="margin: 0; font-weight: bolder;"><b>#smartphoneordering</b></h2>
                </div>
                <div id="sec3_p1_h" style="display: none;">
                    <div class="sec3_layer">
                        <img src="images/mac_silver.png" class="img-responsive" style=" margin:0 auto; height: 36px; margin-bottom: 3%;">
                        <h4 >Place orders at your own convenience.</h4>
                        <h4 style="margin: 0; ">#notforhomedelivery</h4>                    
                        <p style="font-size: 18px; padding-top: 6%;">
                            <a href="{!! url('/smartphone'); !!}" style="text-decoration: none; color: #fff; ">Learn More <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff; padding-left: 1%; font-size: 18px;"></i></a>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 sec3_2">
                <div id="sec3_p2">                  
                    <h2  style="padding-top: 43%; font-weight: bolder;"><b>Taking Orders *</b></h2>
                    <h2 style="margin: 0; "><b>#handheldPOS</b></h2>
                    <h4 style="margin-top: 39%; color: #fff; font-weight: bolder;">
                        <b>* for restaurants</b>
                    </h4>
                </div>
                <div id="sec3_p2_h" style="display: none;">
                    <div class="sec3_layer">
                        <img src="images/android_silver.png" class="img-responsive" style=" margin: 0 auto; height: 36px; margin-bottom: 3%;">
                        <h4 style="line-height: 24px;">Just <b>type and enter</b> to take customer orders.<br>
                        Its lightning fast and connected to your POS.<br>
                        All you need is a good hand at typing.</h4>
                        <p style="font-size: 18px; padding-top: 6%;">
                            <a href="{!! url('/service'); !!}" style="text-decoration: none; color: #fff; ">Learn More <i class="fa fa-angle-right" style="color: #fff; padding-left: 1%; font-size: 18px;" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="background-color: #778899;">
            <div class="col-sm-1 col-xs-2 add">                         
                <p class="vertical-text"><b></span>Add-ons for restaurants</b></p>
                <!-- <span class="glyphicon glyphicon-star star-bottom"> -->
            </div>          
            <div class="col-sm-11 col-xs-10" style=" text-align: center; font-size: 16px; background-color: #fff; padding-left: 0px; padding-right: 0px;">
                <div>
                    <img src="images/calc.png" style="width: 100px; height: 100px; margin-top: 4%;">
                    <h2 style="padding: 3% 7% 7% 7%;">Connecting our services with the Point of Sale software,<p>for one-tap system feeding and ticket generation.</p></h2>
                </div>
                <div style="background-color: #E3E7EA; padding: 2%; ">
                    <img src="images/system.png" style="height: 100px;">
                    <h2 style="padding-left: 5%; padding-right: 5%;">afewtaps - Web Dashboard </h2>
                    <h4>Handling operations. Works on any browser.</h4>
                    <a href="{!! url('/management'); !!}"><img src="images/arrow_right.png" class="img-responsive" style="margin: 1% auto;"></a>
                </div>
            </div>
        </div>  
        <img src="images/star.png" class="img-responsive star_img" style="z-index: 1; position: absolute; margin-top: -35px;"> 
        <div class="row" style="background-color: #778899;">
            <div class="col-sm-1 col-xs-2 add">
                <p class="vertical-text"><b></span> Add-ons for Customers</b></p>
            </div>
            <div class="col-sm-11 col-xs-10 customers" >
                <div>
                    <img src="images/hotcup.png" class="img-responsive" style="margin: 0% auto; display: inline; height: 50px;">
                    <img src="images/cup.png" class="img-responsive" style="margin: 0% auto; display: inline; height: 50px;">
                    <p style="font-size: 18px; padding-top: 2%;">My Personal Menu</p>
                </div>
                <div style="background-color: #EBEEF0;">
                    <img src="images/iphone.png" class="img-responsive" style="margin: 0% auto; height: 50px;">
                    <p style="font-size: 18px; padding-top: 2%;">Sublime Interface</p>
                </div>
                <div>
                    <img src="images/recycle.png" class="img-responsive" style="margin: 0% auto; height: 50px;">
                    <p style="font-size: 18px; padding-top: 2%;">Repeat Orders, quite handy for drinks.</p>
                </div>
            </div>
        </div>
        <div class="row android">
            <h2>An android based app, to speed up your service.</h2>
            <img src="images/iphone.png" class="img-responsive" style="margin:auto; margin-top: 8%; ">
            <h3>#serviceapp</h3>
            <p>Handle floor operations in the most efficient manner .</p>
        </div>
        <div class="google_play">
            <h4>
                Its available on Google Play Store
            </h4>
            <img src="images/google.png" class="img-responsive" style="height: 45px; margin: auto;">
            <!-- <button class="btn" style="border-radius: 10px; padding-left: 2%; padding-right: 2%;"><img src="images/android.png" class="img-responsive" style="display: inline; padding: 1% 2%;">Play Store</button> -->
        </div>
        <div class="row how">
            <h2>How it works?</h2>
            <img src="images/clipboard.png" class="img-responsive" style="margin: auto; height: 100px; margin-top: 3%;"> 
            <p >
                We place beautifully designed cards on the tables in order to mark areas of the restaurant. <br>This way, the customer knows their Table No.
            </p>
            <h3 style="padding-top: 4%;">
                The Future - <b>Table Marking</b>
            </h3>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <div class="row" style="padding-top: 2%;">
                <div class="col-sm-4 col-xs-4">         
                </div>
                <div class="col-sm-4 col-xs-4" style="padding-right: 0px;">
                    <img src="images/date.png" class="img-responsive" style="height: 120px; margin-right: 12%; display: inline;">
                    <img src="images/arrow_right.png" class="img-responsive" style="display: inline;">
                </div>
                <div class="col-sm-2 col-xs-2 rec">
                        <p><b>12</b></p>                
                </div>
                <div class="col-sm-2 col-xs-2">         
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #000; color: #fff; padding: 7%; text-align: center; font-size: 20px;">
            “What we propose to restaurants, is having a mix of both worlds (Manual & <br>Smartphone ordering) for the customer.”
        </div>
        <div class="movies">
            <img src="images/round_logo.png" class="img-responsive" style="width: 65px; border-radius: 100%; margin: auto; border: 2px solid #e2e2e2;
    background-color: #e2e2e2;">
            <h4>Other industries where afewtaps would be a natural fit:</h4>
            <h2>at the movies!</h2>
            <img src="images/movies.png" class="img-responsive" style="height: 200px; margin: auto;">
            <h4 style="padding-top: 2%;">Place orders at the comforts of your seat, while watching movies.</h4>
            <p ><i class="fa fa-star" style="font-size: 20px;" aria-hidden="true"></i></p>
            <h4>Have multiple POS counters, to handle more customers during interval.</h4>
            <div class="container" style="padding: 2%; border:1px solid #000; width: 70%; border-radius: 5px; margin-top: 2%; font-size: 20px;">
                <b>Email us</b> your interest and we’ll propose how our product can work best for you.
            </div>
        </div>
        <div class="buisness row">
            <div class="layer">
                <img src="images/bp.png" class="img-responsive" style="margin: auto; height: 70px">
                <h1 style="text-align: center; ">afewtaps - Business</h1>
                <p style="text-align: center;  font-size: 17px;"><b>
                    Make your floor operations digital and experience a whole new culture.</b>
                </p>
                <div style="text-align: center; font-size: 18px; background:rgba(255,255,255,0.2); margin: 7% 0%; padding: 3% 0%; font-family: 'Myriad Pro';">
                    <span class="sqr">
                        3
                    </span>
                    <span style="padding-left: 1%;">
                        We are offering three months free services, for a better understanding.
                    </span>
                </div>
                <h4 style="text-align: center; font-weight: bolder; padding-top: 5%;">
                    Add your details and we’ll get back.
                </h4>
                <i class="fa fa-plus" aria-hidden="true" style="font-size: 20px; text-align: center; color: #fff; margin-left: 50%;" id="expand"></i>
            </div>          
        </div>
        <div id="form">
            <form style="padding-top: 8%; padding-bottom:8%; background-color: #EBEEF0; border-radius: 15px;">
                <div>
                    <i id="cross" class="fa fa-times" aria-hidden="true" style="color: #fff; background-color: #000; padding: 1%; margin: auto; border-radius: 25px; font-size: 15px; margin-left: 50%;"></i>
                </div>
                <div class="input_box">
                    <input type="text" name="restaurants_name" placeholder="Restaurant Name" class="form-control">
                </div>
                <div class="input_box">
                    <input type="text" name="restaurants_address" placeholder="Restaurant Address" class="form-control">
                </div>
                <div class="input_box">
                    <input type="text" name="contact_name" placeholder="Contact Name" class="form-control">
                </div>
                <div class="input_box">
                    <input type="text" name="contact_num" placeholder="Contact Number" class="form-control">
                </div>
                <div class="input_box">
                    <textarea class="form-control" rows="3" cols="8" style="background-color: #fff;"></textarea>
                </div>  
                <div class="input_box" style="padding-left: 8%;">
                    <input type="submit" name="submit" style="background-color: #000; color: #fff; font-weight: bolder;    padding: 8% 27%;  margin: auto;  font-size: 17px; border-radius: 5px; text-transform: uppercase;">
                </div>  
            </form>
        </div>
        <div class="insta row">
            <img src="images/insta.png" class="img-responsive" style="margin: auto; width: 40px;">
            <div class="row" style="padding-bottom: 5%; padding-top: 2%;">
                <div class="col-sm-4"></div>
                <div class="col-sm-1">
                    <img src="images/logo.png" class="img-responsive" style="width: 50px; border-radius: 25px; border:1px solid #000;">
                </div>
                <div class="col-sm-1">
                    <h3>
                            afewtaps
                        </h3>
                </div>
                <div class="col-sm-2">
                    <a href="https://www.instagram.com/afewtaps/"><img src="images/follow.png" class="img-responsive" style="height: 46px; vertical-align: middle; padding-left: 2%;">
                </div>
                <div class="col-sm-4"></div>
            </div>
                <?php
                    // use this instagram access token generator http://instagram.pixelunion.net/
                    $access_token="2294090364.1677ed0.77254c412f0343b1a7b9b763358720be";
                    $photo_count=6;
                         
                    $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
                    $json_link.="access_token={$access_token}&count={$photo_count}";
                    $json = file_get_contents($json_link);
                    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

                    foreach ($obj['data'] as $post) {
                         
                        $pic_text=$post['caption']['text'];
                        $pic_link=$post['link'];
                        $pic_like_count=$post['likes']['count'];
                        $pic_comment_count=$post['comments']['count'];
                        $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
                        $pic_created_time=date("F j, Y", $post['caption']['created_time']);
                        $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
                         
                        echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
                            echo "<a href='{$pic_link}' target='_blank'>";
                                echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
                            echo "</a>";
                            echo "<p>";
                                echo "<p>";
                                    echo "<div style='color:#888;'>";
                                        echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                                    echo "</div>";
                                echo "</p>";
                                echo "<p>{$pic_text}</p>";
                            echo "</p>";
                        echo "</div>";
                    }
                    ?>
                   
        </div>
        <div class="homepage_footer row">
            <div class="layer">
                <img src="images/fb.png" class="img-responsive" style="margin: auto; height: 70px;">            
                <h1 style="text-align: center; color: #fff; padding-top: 17%;">
                    A Delhi based startup @work.
                </h1>
                <p style="text-align: center; color: #fff; "><b>
                    Copyright &copy; 2017 Think Different Technologies (P) Ltd</b>
                </p>
                <div style="color: #fff; padding-top:17%; font-family: 'Myriad Pro';">
                    <div class="col-sm-6">
                        <img src="images/email.png" class="img-responsive" style="width: 50px; display: inline; padding-right: 1%;" >info@afewtaps.com
                    </div>
                    <div class="col-sm-6">
                        <ul id="footer_list">
                            <li><a href="{!! url('/career'); !!}" style="text-decoration: none; color: #fff;">Career</a></li>
                            <li><a href="{!! url('/faq'); !!}" style="text-decoration: none; color: #fff;">FAQ</a></li>
                            <li><a href="{!! url('/blog'); !!}" style="text-decoration: none; color: #fff;">Blog</a></li>
                            <li><a href="{!! url('/feedback'); !!}" style="text-decoration: none; color: #fff;">Feedback</a></li>
                            <li>Privacy</li>
                            <li>Terms</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>