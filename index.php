
<html lang="en-us">
	<head>
        <meta charset="utf-8">
        <title>PhiFactor | Monitor Your Health</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
         <link rel="icon" href="img/logo6.png" type="image/gif"> 
        <!-- ============ Google fonts ============ -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
        
        <!-- ============ Bootstrap core CSS ============ -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- ============ Add custom CSS here ============ -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/simpletextrotator.css" rel="stylesheet" type="text/css">
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="css/swipebox.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

   </head>
   
    
    
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 50%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
  
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    height: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
/*
       #subscribe .form-control1 {
border: 5px solid rgba(0, 0, 0, 0.2);
     background: transparent; 
    border-radius: 5px 0px 0px 5px;
    border-right: none;
    box-shadow: none;
    float: left;
    height: 40px;
    outline: medium none;
    padding: 10px 15px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    width: 101%;
    color: #000000;
    margin-top: 1px;
}
*/
       #subscribe {
    overflow: visible;
    padding: 5px 15px 15px;
    width: 100%;
    -webkit-transition: all 1500ms ease 0s;
    -moz-transition: all 1500ms ease 0s;
    -ms-transition: all 1500ms ease 0s;
    -o-transition: all 1500ms ease 0s;
    transition: all 1500ms ease 0s;
}
       #subscribe button.submit1 {
    border: 5px solid rgba(0, 0, 0, 0.2);
    border-radius: 0px 5px 5px 0px;
    color: #0e0e0e;
    font-size: 16px;
    line-height: 18px;
    padding: 11px 16px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    width: 106%;
           z-index: 999999;
}
       .mail{
           display: none;
       }
</style>



<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	background-color: #000000;
    border-radius: 5px;
	width: 136px;
	height: 40px;
	padding: 6px 10px 0px 10px;
    font-size: 15px;
	opacity: 0.8;
}

/* The actual popup */
.popup .popuptext {
    display:none;
    width: 380%;
    background-color: #000;
    color: #fff;
    text-align: center;
	font-size: 14px !important;
    border-radius: 6px;
    padding: 32px ;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -142%; 
    opacity: 0.9;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 9px;
    border-style: solid;
    border-color: #000 transparent transparent transparent;
}



    


/* Popup container - can be anything you want */
.popup1 {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	background-color: #000000;
    border-radius: 5px;
	width: 136px;
	height: 40px;
	padding: 8px 10px 0px 10px;
    font-size: 15px;
	opacity: 0.8;
/*    margin-left:12px ! important;*/
}

/* The actual popup */
.popup1 .popuptext1 {
    display:none;
    width: 430px;
    background-color: #000;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 15px 55px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -110%; 
    opacity: 0.9;
    height:917% ! important
}

/* Popup arrow */
.popup1 .popuptext1::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 9px;
    border-style: solid;
    border-color: #000 transparent transparent transparent;
}


.popup2 {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	background-color: #000000;
    border-radius: 5px;
	width: 136px;
	height: 40px;
	padding: 8px 10px 0px 10px;
    font-size: 15px;
	opacity: 0.8;
    margin-left:12px ! important;
}

/* The actual popup */
.popup2 .popuptext2 {
    display:none;
    width: 430px;
    background-color: #000;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 33px 55px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -110%; 
    opacity: 0.9;
}

/* Popup arrow */
.popup2 .popuptext2::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 9px;
    border-style: solid;
    border-color: #000 transparent transparent transparent;
}


/* The Close Button */
.close_sub { 
    float: right;
    font-size: 18px;
    font-weight: bold;
	margin-right: -28px; 
}

.close_sub:hover,
.close_sub:focus { 
    text-decoration: none;
    cursor: pointer;
}
.btn_sub {
	background-color:#BC272D ! important; 
	width: 100px  !important; 
	height:42px !important; 
	color:white;
}

.btn_sub:hover{
	background-color: #BC272D !important;
	color: #000;
}

    
.btn_sub1 {
	background-color: #BC272D ! important;
    width: 100px !important;
    height: 42px !important;
    color: white;
    border-top-left-radius: 5px ! important;
    border-bottom-left-radius: 5px ! important;
    margin-top: 151%;
    margin-left: -231% ! important;
}

.btn_sub:hover{
	background-color: #BC272D !important;
	color: #000;
}


.contactBottom{
	margin-bottom: 8%;
}

@media only screen and (max-width: 420px) {
    .popup1 {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	background-color: #000000;
    border-radius: 5px;
	width: 136px;
	height: 40px;
	padding: 8px 10px 0px 10px;
    font-size: 15px;
	opacity:0.8;
  margin-left:-8px ! important
}
.popup2 {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	background-color: #000000;
    border-radius: 5px;
	width: 136px;
	height: 40px;
	padding: 8px 10px 0px 10px;
    font-size: 15px;
	opacity:0.8;
  margin-left:-8px ! important
}
.popup .popuptext {
    display: none;
    width: 247%;
    background-color: #000;
    color: #fff;
    text-align: center;
    font-size: 14px !important;
    border-radius: 6px;
    padding: 32px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -72%; 
}
.popup1 .popuptext1 {
    display: none;
    width: 353px;
    background-color: #000;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 15px 55px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -77%;
    height: 552%;
}
.popup2 .popuptext2 {
    display: none;
    width: 353px;
    background-color: #000;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 15px 55px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -77%;
    height:611%;
}
.subscribeBtn{
	margin-bottom: 13px !important;
    margin-left:-9px ! important
}
.Sub_button{
	width: 50% !important;
	margin-left: 25% !important;
}
    
          #subscribe .form-control {
    border: 3px solid rgba(255,255,255,0.2);
    /* border-right: none; */
    border-radius: 5px 5px 5px 5px;
    box-shadow: none;
    float: left;
    height: 42px;
    outline: medium none;
    padding: 10px 15px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    width: 204%;
    color: #F8F8F8;
    margin-left:-24px;
    margin-top: 7px;
}
      .btn_sub1 {
    background-color: #BC272D ! important;
    width: 100px !important;
    height: 42px !important;
    color: white;
    border-top-left-radius: 5px ! important;
    border-bottom-left-radius: 5px ! important;
    margin-top: 151%;
    margin-left: -130% ! important;
}
    
    
}


  @media only screen and (min-width: 300px) and (max-width: 330px){
	.popup .popuptext {
display: none;
    width: 210%;
    background-color: #000;
    color: #fff;
    text-align: center;
    font-size: 14px !important;
    border-radius: 6px;
    padding: 32px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -36%;
    margin-left: -21px ! important;
}
.popup1 .popuptext1 {
width: 308px;
    background-color: #000;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 15px 55px;
    position: absolute;
    z-index: 1000;
    bottom: 130%;
    left: -59%;
    
     height: 633%;
}
.subscribeBtn{
	margin-bottom: 13px !important;
    margin-left: -31px ! important;
}
.Sub_button{
	width: 50% !important;
	margin-left: 25% !important;
}
    .ContactBtn{
        margin-left:-34% !important;
          
      }
       .logo {
    margin-top: -11px ! important;
}
      section.welcome-section{

    height: 683px ! important;
/*
          position:absolute ! important;
          overflow: scroll ! important;
*/
      }
  
p.copy {
    margin-top: 300px ! important;
}  
  
      .scrollbott{
          height: 44% ! important;
      }
      
      #subscribe .form-control {
    border: 3px solid rgba(255,255,255,0.2);
    /* border-right: none; */
    border-radius: 5px 5px 5px 5px;
    box-shadow: none;
    float: left;
    height: 42px;
    outline: medium none;
    padding: 10px 15px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    width: 204%;
    color: #F8F8F8;
    margin-left: -1px;
    margin-top: 7px;
}
      .btn_sub1 {
    background-color: #BC272D ! important;
    width: 100px !important;
    height: 42px !important;
    color: white;
    border-top-left-radius: 5px ! important;
    border-bottom-left-radius: 5px ! important;
    margin-top: 151%;
    margin-left: -99% ! important;
}
      
} 
    


</style>
    

    
    
<style>
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>    


    
    
    
<body>

    
    

<!-- **** Loading **** -->
    <div class="globload">
        <div id="logo-loading" class="spinner animated fadeIn">

            <!-- LOGO -->
            <img src="img/logo6.png" alt="" height="150" width="150" />
    

            <div class="ball-anim">

                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            
            </div>
    		<!-- <h6>LOADING</h6> -->

    	</div>
    </div>
    <!-- **** Loading **** -->
    

   
	            <div id="wrapper-firefly" class="wrapper">
                <div class="outer animated"></div>

                <!-- START MAIN -->
		        <div class="main">

                <!-- MAP -->
                <div id="map" class="animated-quick invisible index-999"></div>

                <!-- START WELCOME SECTION -->
                <section class="welcome-section" id="coming-soon">
                <div class="tlt animated ">Welcome to PhiFactor</div>

                <!-- START WELCOME BLOCK -->
                <div id="welcome" class="welcomeblock">
                <div class="container">
                <div class="col-lg-12 col-md-12 col-xs-12">
                
                <!-- LOGO -->
                <div class="logo" style="">
                <img src="img/logo6.png" id="brand-logo" class="animated img-responsive opacity-0" alt="" height="150" width="150" /><br><br>
                <img src="img/logo7.png" id="brand-logo1" class="animated img-responsive opacity-0" alt=""  /><br><br>
                </div>
                
                <div class="col-md-offset-3 col-md-6 animated opacity-0" id="text-construction">
                <h2>We are an intelligent digital observation platform for healthcare.</h2>
                
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content"> 
                <iframe class="mfp-iframe" id="#nav" width="50%" height="50%" src="https://www.youtube.com/embed/Hmof9P5EQUs" frameborder="0" allowfullscreen></iframe>
                </div>
                </div>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="img/playvideo_button.png" data-toggle="tooltip" data-placement="bottom" data-title="play video" data-trigger="hover">
                </span>
                                
							
                <div id="subscribe"  class="subscribe_button Sub_button">
                <div class="form-group">
                <div class="controls" style="z-index:99999;">
				
                <span>
				<div class="popup2 subscribeBtn" onmouseover="myFunction2(), myFunctionHide1()"> <img src="img/subsc_icon1.png" data-toggle="tooltip" data-placement="bottom" data-trigger="hover">
				
				
				<span class="popuptext2" id="myPopup1">
				<form action="index.php"  method="POST">
				<img src="img/cross1.png" class="close_sub" onclick="myFunctionHide2()"> 
				<span style="font-size:25px;font-weight:bold;color:white;">Subscribe</span><br/><br/>
				<span style="color:white; font-size: 13px !important;">By providing your email you agree to receive the latest update about our products and in return you can use our upcoming passive health screening service for one year with no costs to you.</span><br/><br/>  
                <div class="input-group">
                <input type="text" class="form-control1" id="s-mail-sub" required name="s_email" placeholder="Email">
                    <span id="s-mail-field" style="display:none;position:absolute;z-index:10000"><img src="img/popup_field.png"/></span>
                <span class="input-group-btn">
                    <span id="s-mail-loader"class="fa fa-spinner fa-spin" style="display:none;"></span>
                <button class="btn btn_sub" type="button" onclick="sendSubscriberMail()">Subscribe</button>
                </span>
                </div>
				</form>
				</span>
				
                </div>
				
                
                <div class="popup1 ContactBtn" onmouseover="myFunction1(), myFunctionHide2()">
                <img src="img/contact_icon1.png" data-toggle="tooltip" dataplacement="bottom"  data-trigger="hover">
				
                
                <span class="popuptext1" id="myPopup1">
				<form action="index.php"  method="POST">
				<img src="img/cross1.png" class="close_sub" onclick="myFunctionHide1()"> 
				<span style="font-size:25px;font-weight:bold;color:white;">Contact</span><br/><br/>
				<span style="color:white; font-size: 13px !important;">If you are interested in a partnership or investment, please provide your email address and let us know how we can help.</span><br/><br/>  
                <div class="input-group contactBottom">
                <input type="text" class="form-control" id="c-mail-sub" required name="c_email" placeholder="Email">
                <span id="c-mail-field" style="display:none;position:absolute;z-index:10000"><img src="img/popup_field.png"/></span>
                <textarea class="form-control" id="c-mail-comment"  placeholder="Comments"  style="height:54%;resize:none;"> </textarea>
                    <span id="c-comment-field" style="display:none;position:absolute;z-index:10000;"><img src="img/popup_field.png"/></span>
                <span class="input-group-btn">
                    <span id="c-mail-loader"class="fa fa-spinner fa-spin" style="display:none;"></span>
                <button class="btn btn_sub1" type="button" onclick="sendContactMail()">Contact</button>
                </span>
                </div>
				</form>
				</span>
				
                </div>
				
                    
                </span> 									
                </div>
                </div>

               <div id="result"></div>
                </div>
                </div>
                </div>
                </div>
                </div>

                </section>

            
            <div class="scrollbott animated slideInUp">
            <p class="copy" style="text-transform: capitalize;">Copyright © 2016 PhiFactor technologies. All rights reserved.</p>
            </div>

            <!-- START COUNTDOWN SECTION -->
            <section class="countdown-section" style="display:none;" id="anchor">
                <div class="container"> 
                    <div class="row">

                        <div class="col-md-12" data-scroll-reveal="enter after 0.3s">
                            <h3 class="title"><i class="fa fa-clock-o"></i> Remaining time</h3>
                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12">

                            <!-- START COUNTDOWN -->
                            <div id="countdown_dashboard">
                                
                                <!-- DAYS -->
                                <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                    <div class="dash days_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Days</span>
                                    </div>
                                </div>
                                
                                <!-- HOURS -->
                                <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                    <div class="dash hours_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Hours</span>
                                    </div>
                                </div>
                                
                                <!-- MINUTES -->
                                <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                    <div class="dash minutes_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Minutes</span>
                                    </div>
                                </div>
                                
                                <!-- SECONDS -->
                                <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                    <div class="dash seconds_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Seconds</span>
                                    </div>
                                </div>
    
                            </div>
                            <!-- END COUNTDOWN -->

                        </div>
                        
                    </div>
                </div>
            
            </section>
            <!-- END COUNTDOWN SECTION -->



                <div id="close-map">
                    <a id="close-map-top" class="fa-close-map">
                        <i class="fa fa-compress"></i>
                    </a>
                </div>

            </div>
            </div>
<?php
if(isset($_POST["s_email"]) || isset($_POST["c_email"])) {
}else{
    ?>
    <script>
        var delay = 16000; //1 second

        setTimeout(function () {

            openNav();

        }, delay);


        function sendSubscriberMail() {
            var mail = $("#s-mail-sub").val();
            if(mail != ""){
                $("#s-mail-loader").show();
                $.ajax({
                    url: 'sendMail.php',
                    type: 'POST',
                    data: {s_email:mail},
                    success: function(data) {
                        $("#s-mail-loader").hide();
                        $('#result').empty();
                        $('#result').append(data).html();
                        $("#s-mail-sub").val("");

                    },
                    error: function(e) {
                        console.log(e.message);
                    }
                });
            }else{
                var pos = $("#s-mail-sub").position();
                var top = parseInt(parseInt(pos.top)+40);
                var left = parseInt(pos.left);
                $("#s-mail-field").css("top",top);
                $("#s-mail-field").css("left",left);
                $("#s-mail-field").show();
                $("#s-mail-field").delay(2000).fadeOut("slow");

            }


        }
        function sendContactMail() {
            var mail = $("#c-mail-sub").val();
            var comment = $("#c-mail-comment").val().trim();
            if(mail != ""  &&  comment != "") {
                $("#c-mail-loader").show();
                $.ajax({
                    url: 'sendMail.php',
                    type: 'POST',
                    data: {c_email: mail, comment: comment},
                    success: function (data) {
                        $("#c-mail-loader").hide();
                        $('#result').empty();
                        $('#result').append(data).html();
                        $("#c-mail-sub").val("");
                        $("#c-mail-comment").val("");

                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
            }else{
                if(mail ==""){
                    var pos = $("#c-mail-sub").position();
                    var top = parseInt(parseInt(pos.top)+40);
                    var left = parseInt(pos.left);
                    $("#c-mail-field").css("top",top);
                    $("#c-mail-field").css("left",left);
                    $("#c-mail-field").show();
                    $("#c-mail-field").delay(2000).fadeOut("slow");
                }
                if(mail !="" && comment == ""){
                    var pos = $("#c-mail-comment").position();
                    var top = parseInt(parseInt(pos.top)+40);
                    var left = parseInt(pos.left);
                    $("#c-comment-field").css("top",top);
                    $("#c-comment-field").css("left",left);
                    $("#c-comment-field").show();
                    $("#c-comment-field").delay(2000).fadeOut("slow");
                }

            }

        }
    </script>
    <?php
}
?>

	<!-- *** *** Libraries jQuery and Bootstrap - Be careful to don't remove *** *** -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- *** Countdown *** -->
    <script type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>

    <!-- *** JavaScript library that detects HTML5 and CSS3 features in the user’s browser *** -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- *** Swipebox is the jQuery "lightbox" plugin for desktop, mobile and tablet *** -->
    <script type="text/javascript" src="js/jquery.swipebox.js"></script>

    <!-- *** A lightweight script to animate scrolling to anchor links *** -->
    <script type="text/javascript" src="js/smooth-scroll.js"></script>

    <!-- *** Create and maintain how elements fade in, triggered when they enter the viewport *** -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/scrollReveal.js"></script>

    <!-- *** Dynamically-resized, slideshow-capable background image to any page or element *** -->
    <script type="text/javascript" src="js/jquery.backstretch.js"></script>

    <!-- *** Simple rotating text *** -->
    <script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>

    <!-- *** Google Maps API *** -->
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

    <!-- *** Plugins of contact and newsletter *** -->
    <script type="text/javascript" src="js/contact_me.js"></script>
    <script type="text/javascript" src="js/notifyMe.js"></script>

    <!-- *** Responsive lightbox & dialog script *** -->
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>

    <!-- *** Plugins for CSS3 text animations *** -->
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>

    <!-- *** Firefly effect *** -->
    <script type="text/javascript" src="js/jquery.firefly-0.3.js"></script>

    <!-- *** File used to start some plugins *** -->
    <script type="text/javascript" src="js/sailor.js"></script>
    
    <script>
    ;( function( $ ) {

        'use strict';

        $( '.swipebox' ).swipebox( {
            loopAtEnd: true // true will return to the first image after the last image is reached
        } );

    } )( jQuery );
	</script>

<script>
    $(window).load(function() {
        $.firefly({
            color: '#F1E7C0',
            minPixel: 1,
            maxPixel: 2,
            total : 220,
            on: '#wrapper-firefly'
        });
    });
 </script>

         
    <script>
              $(document).ready(function() {
                  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                     disableOn: 700,
                      type: 'iframe',
                     mainClass: 'mfp-fade',
                   removalDelay: 160,
                 preloader: false,

             fixedContentPos: false
           });
         });
      </script>

    <script type="text/javascript">
    (function($) {

        'use strict';

        // The starting defaults.
            var config = {
            after: '0.2s',
            over: '1.66s',
        };

        window.scrollReveal = new scrollReveal({ reset: true, move: '50px' });
    
    })();
    
    </script>

    <script>
            $.backstretch(
            [
                "img/banner_image2.jpg",
                "img/banner_imag4.jpg", 
                "img/banner_imag3_1.jpg"
                
            ],
        
            {
                duration    :   4500,
                fade        :   1500
               
            }
        );

        // This second backstretch must contain your blurred picture
        $(".outer").backstretch();
        

    </script>
    
    <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-60503361-1', 'auto');
            ga('send', 'pageview');

        </script>


<script>
//subscribe_popup
function myFunction2() {
	$(".popuptext2").show();
}
function myFunctionHide2() {
	$(".popuptext2").hide();
}


//contact_popup
function myFunction1() {
	$(".popuptext1").show();
}
function myFunctionHide1() {
	$(".popuptext1").hide();
}
</script>

<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
    document.getElementById("#nav").src = "https://www.youtube.com/embed/Hmof9P5EQUs?autoplay=1";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
    document.getElementById("#nav").src = "";
}
    
</script>


</body>
</html>


