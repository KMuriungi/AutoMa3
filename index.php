<?php
//include('./iosec.php'); //Include module
error_reporting(E_ALL & ~E_NOTICE); //Avoid Error notices

session_start();
include("simple-php-captcha.php");

$securitycode = $_SESSION['captcha']['code'];
simple_php_captcha();
//Generate Captcha and use variable in next session

		$_SESSION['captcha'] = simple_php_captcha();
?>

<!DOCTYPE html>
<html  dir="ltr" lang="en" xml:lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Transport Booking System</title>
  <link rel="icon" href="admin/img/tsa/favicon-tsa.ico">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />

<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<link rel="stylesheet" type="text/css" href="theme/combo74f9?rollup/3.13.0/yui-moodlesimple-min.css" />
<script type="text/javascript" src="theme/combo94e0?rollup/3.13.0/yui-moodlesimple-min.js"></script>
<script type="text/javascript" src="theme/comboffd9?rollup/1437668614/mcore-min.js"></script>
<script type="text/javascript" src="theme/jquery.php/core/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="theme/jquery.php/theme_lambda/dropdown_2_3_2.js"></script>
<script type="text/javascript" src="theme/jquery.php/theme_lambda/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="theme/jquery.php/theme_lambda/camera.min.1.11.js"></script>
<script type="text/javascript" src="theme/jquery.php/theme_lambda/jquery.bxslider.js"></script>
<!--Validate  -->
<script type="text/javascript" src="scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="scripts/validation.min.js"></script>
<script type="text/javascript" src="scripts/ingiza.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--Pwd Strength  -->
<script type="text/javascript" src="scripts/strength.js"></script>

<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<!--<link rel="stylesheet" type="text/css" href="scripts/pwd.css" /> -->
<script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script>
<link rel="stylesheet" type="text/css" href="theme/styles.php/lambda/1444287898/styles.css" />
<script type="text/javascript" src="lib/javascript.php/1437668614/lib/javascript.php"></script>
<script type="text/javascript" src="../pluginfile.php/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <noscript>
			<link rel="stylesheet" type="text/css" href="theme/lambda/style/nojs.html" />
	</noscript>
    <!-- Google web fonts -->
    <style type="text/css">
	@font-face {
	font-family:'FontAwesome';
	src: url('theme/lambda/fonts/fontawesome-webfont.eot');
	src: url('theme/lambda/fonts/fontawesome-webfontd41d.eot?#iefix') format('embedded-opentype'), url('theme/lambda/fonts/fontawesome-webfont.woff') format('woff'), url('theme/lambda/fonts/fontawesome-webfont.ttf') format('truetype'), url('theme/lambda/fonts/fontawesome-webfont.svg#fontawesomeregular') format('svg');
	font-weight:normal;
	font-style:normal;
	}
</style>

<style type="text/css">
	@font-face {
	font-family:'open_sansregular';
	src:url('theme/lambda/fonts/OpenSans-Regular-webfont.eot');
	src:url('theme/lambda/fonts/OpenSans-Regular-webfontd41d.eot?#iefix') format('embedded-opentype'),url('theme/lambda/fonts/OpenSans-Regular-webfont.woff') format('woff'),url('theme/lambda/fonts/OpenSans-Regular-webfont.ttf') format('truetype'),url('theme/lambda/fonts/OpenSans-Regular-webfont.svg#open_sansregular') format('svg');
	font-weight:normal;
	font-style:normal;
	}
	@font-face {
	font-family:'open_sansbold';
	src:url('theme/lambda/fonts/OpenSans-Bold-webfont.eot');
	src:url('theme/lambda/fonts/OpenSans-Bold-webfontd41d.eot?#iefix') format('embedded-opentype'),url('theme/lambda/fonts/OpenSans-Bold-webfont.woff') format('woff'),url('theme/lambda/fonts/OpenSans-Bold-webfont.ttf') format('truetype'),url('theme/lambda/fonts/OpenSans-Bold-webfont.svg#open_sansbold') format('svg');
	font-weight:normal;
	font-style:normal;
	}
	.alert-danger {
		border: 1px solid #f27b81 !important;
	}
	.alert-success {
		border: 1px solid #9fc76f !important;
	}
	.alert-warning {
		border: 1px solid #f5c056 !important;
	}
	.linkyss a{
		fomt-size: 1.15em;
		color: #ff2c34;
	}
	.linkyss a:hover{
		fomt-size: 1.15em;
		color: #1c1c1c;
	}
</style>
<script language="javascript">

function isNumberKey(evt)
{
var charCode =(evt.which)? evt.which:event.keyCode
if(charCode>31 && (charCode <48 || charCode > 57))
return false;

return true;
}
function isRegKey(evt)
{
var charCode =(evt.which)? evt.which:event.keyCode
if(charCode == 38 || charCode == 94 || charCode == 42 || charCode == 60 || charCode == 62
|| charCode == 63 || charCode == 34 || charCode == 58 || charCode == 59 || charCode == 92 || charCode == 124 || charCode == 39 || charCode == 43 || charCode == 61)
return false;

return true;
}
function isAllowedKey(evt)
{
var charCode =(evt.which)? evt.which:event.keyCode
if(charCode == 38 || charCode == 94 || charCode == 42 || charCode == 60 || charCode == 62
|| charCode == 63 || charCode == 34 || charCode == 58 || charCode == 59 || charCode == 92 ||charCode == 47 || charCode == 124 || charCode == 43 || charCode == 61 )
return false;

return true;
}
</script>
</head>

<body  id="page-site-index" class="format-site course path-site dir-ltr lang-en yui-skin-sam yui3-skin-sam lambda-redpithemes-com pagelayout-frontpage course-1 context-2 two-column has-region-side-pre empty-region-side-pre has-region-side-post empty-region-side-post has-region-footer-left used-region-footer-left has-region-footer-middle used-region-footer-middle has-region-footer-right used-region-footer-right has-region-hidden-dock used-region-hidden-dock layout-option-nonavbar">

<div class="skiplinks"><a class="skip" href="#maincontent">Skip to main content</a></div>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>
<script type="text/javascript">
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84718231-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="wrapper">


    <header id="page-header" class="clearfix">

    <div class="container-fluid">
    <div class="row-fluid">
    <!-- HEADER: LOGO AREA -->

                        

    </div>
    </div>

</header>
<!-- -->
<?php //require_once 'header.php'; ?>
<header role="banner" class="navbar">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="#"><i class="fa fa-home"></i> Home</a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav">
				<li><a href="#" class="dropdown-toggle" title=""><i class="fa fa-user"></i> &nbsp Account</a></li>
				<li><a href="#" class="dropdown-toggle" title=""><i class="fa fa-info"></i> &nbsp About Us</a></li>
				<li><a title="Contact Angaza Elimu" href="#"><i class="fa fa-envelope"></i> &nbsp Contact</a></li>
				</ul>
				<div class="nav-divider-right"></div>
                <ul class="nav pull-right">
                    <li></li>
                </ul>

            </div>
        </div>
    </nav>
</header>

 <!-- -->
<div class="text-center" style="line-height:1em;">
	<img src="theme/lambda/pix/bg/shadow.png" class="slidershadow frontpage-shadow" alt="">
</div> <!-- -->

<div id="page" class="container-fluid">


<div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
		<div role="main"><span id="maincontent"></span>
		<div class="loginbox clearfix twocolumns">
  <div class="loginpanel pull-left">
    <h2>Book Seat</h2>
	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger" role="alert">
            	<i class="fa fa-exclamation-circle"></i> <?php echo $errMSG; ?>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success" role="alert">
              <i class='fa fa-check-square'></i> <?php echo $successMSG; ?>
        </div>
        <?php
	}
	?>
      <div class="subcontent loginsub signin-form">
                <form autocomplete="off" method="post" accept-charset="utf-8" id="mform1" class="mform">
<div id="error">
        <!-- error will be shown here ! -->
        </div>
	<fieldset class="clearfix"  id="id_searchbyusername">
		<div class="fcontainer clearfix">

		<div id="fitem_id_username" class="fitem fitem_ftext "><div class="fitemtitle"><label for="id_username">Passenger's Name: </label>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="First Name & Surname" name="user_name" id="user_name" value="<?php echo $user_name; ?>" onkeypress="return isAllowedKey(event,this)"/></div></div>
		</div>
		</fieldset>
	<fieldset class="clearfix"  id="id_searchbyusername">
		<div class="fcontainer clearfix">

		<div id="fitem_id_username" class="fitem fitem_ftext "><div class="fitemtitle"><label for="id_username">Phone Number: </label></div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="e.g 25472******" name="phone_number" id="txtChar" onkeypress="return isNumberKey(event,this)" value="<?php echo $user_phonenumber; ?>"/>
		</div>
		</div>
		</div>
		</fieldset>
		<div class="fcontainer clearfix">

		<div id="fitem_id_username" class="fitem fitem_ftext "><div class="fitemtitle"><label for="id_username">National ID Number: </label>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="National ID Number" name="user_name" id="user_name" value="<?php echo $user_name; ?>" onkeypress="return isAllowedKey(event,this)"/></div></div>
		</div>
		<fieldset class="clearfix"  id="id_searchbyusername">
		<!-- -->
		<div class="fcontainer clearfix">

		<div id="fitem_id_username" class="fitem fitem_ftext "><div class="fitemtitle"><label for="id_username">Vehicle Number: </label>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Vehicle Number" name="user_name" id="user_name" value="<?php echo $user_name; ?>" onkeypress="return isAllowedKey(event,this)"/></div></div>
		</div>
		<div class="fcontainer clearfix">

		<div id="fitem_id_username" class="fitem fitem_ftext "><div class="fitemtitle"><label for="id_username">Passenger's Seat Number: </label>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="e.g #8" name="user_name" id="user_name" value="<?php echo $user_name; ?>" onkeypress="return isAllowedKey(event,this)"/></div></div>
		</div>
		<div class="fcontainer clearfix">

		
		</div>
		<div class="fcontainer clearfix">

		<div id="fitem_id_username" class="fitem fitem_ftext ">
		<div class="fitemtitle"><label for="id_username"><i class="fa fa-hand-o-right fa-2x"> </i> &nbsp &nbsp </label>
		</div><div class="form-group">
		<input type="checkbox"  value="Terms & Conditions" name="terms">
		<span class="linkyss"> <a href="#" target="_blank">Agree to Terms & Conditions of using our Site</a></span>
		</div>
		</div>
		</div>
		</fieldset>
		<div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Reserve Seat
			</button>
        </div>
</form>
      </div>

     </div>
    <div class="signuppanel">
      <h2>Dear User, read carefully below</h2>
      <div class="subcontent">
<div class="text_to_html"><div style="background:#8dc63f none repeat scroll 0% 0%;text-align:none;padding:10px; border-radius: 10px;">
<div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Instructions</h3>
      </div>
      <div class="panel-body">
 To book your seat :
 <ul class="list-style-2 colored">
  <li>Make the full payment of your journey</li>
  <li>Enter all the details in the form fields</li>
  <li>Generate your receipt from below</li>
</ul>
<div class="alert alert-warning"><p style="font-size: 1.05em;">Refresh page if no captcha code appears in the first instance </p></div>
<div class="login-header">
            <div class="profileblock">
			<div class="navbar-form pull-right">
		<a class="btn btn_bl" href="#">Generate Receipt</a>
		</div>

	</div>
	</div>
      </div>
	  </div>
	  	 <div class="alert alert-danger"><strong>Note:</strong> Kindly ensure you have enabled Javascript in your browser, as the site requires it to function properly.</div>
<br />
</div></div>      </div>
    </div>
</div>
</div>        </section>
    </div>

    <a href="#top" class="back-to-top"><i class="fa fa-chevron-circle-up fa-3x"></i><p></p></a>

</div>
   <!-- -->
   <footer id="page-footer" class="container-fluid">

	<div class="footerlinks">
    	<div class="row-fluid">
    		<p class="helplink"></p>
    		<div class="footnote"><p>&copy; Smart Transy 2017 <a href="#">V-1.0.0</a> | <a href="#">Privacy Policy </a>
			 | <a href="#">Terms & Conditions </a> | <a href="#">Sitemap </a>
			</p>
			</div>
			</div>



   	</div>


	</footer>

	<?php //require_once '../footer.php'; ?>
	<!-- -->
	
	
    <script type="text/javascript" src="theme/javascript.php/lambda/1444287898/javascript.php"></script>


<!--[if lte IE 9]>
<script src="http://lambda.redpithemes.com/theme/lambda/javascript/ie/matchMedia.js"></script>
<![endif]-->


<script>
jQuery(document).ready(function ($) {
$('.navbar .dropdown').hover(function() {
	$(this).addClass('extra-nav-class').find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
	var na = $(this)
	na.find('.dropdown-menu').first().stop(true, true).delay(100).slideUp('fast', function(){ na.removeClass('extra-nav-class') })
});

});

jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

	jQuery(function(){
		jQuery('#camera_wrap').camera({
			fx: 'random',
			height: 'auto',
			loader: 'pie',
			thumbnails: false,
			pagination: false,
			autoAdvance: true,
			hover: false,
			navigationHover: true,
			opacityOnGrid: false
		});
	});

	jQuery(document).ready(function(){
  		jQuery('.slider1').bxSlider({
			pager: false,
			nextSelector: '#slider-next',
			prevSelector: '#slider-prev',
			nextText: '>',
			prevText: '<',
			slideWidth: 240,
    		minSlides: 1,
    		maxSlides: 6,
			moveSlides: 1,
    		slideMargin: 10
  		});
	});

</script>

</body>
</html>
