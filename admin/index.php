
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Transy | Admin Login</title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="img/tsa/favicon-tsa.ico">
  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>               <!-- bootstrap -->
  <link rel='stylesheet' href='assets/css/vendor.css'>                      <!-- plugin -->
  <link rel='stylesheet' href='assets/css/theme_black_red.css' id="theme"> <!-- main style -->
  <link rel='stylesheet' href='assets/css/custom.css'>                      <!-- custom style -->
  <link rel='stylesheet' href='assets/css/demo.css'>                        <!-- demo style -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <!--[if lte IE 9]><!-->
  <script src='assets/js/vendor/html5shiv.min.js'></script>

  <!-- Prologin -->

   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

         <!-- Styles -->
        <link href="asset/styles/login_layout.css" rel="stylesheet" type="text/css">
        <link href="asset/styles/responsive.css" rel="stylesheet" type="text/css">
       <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="asset/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

        <!-- SCRIPTS -->
        <script type="text/javascript">
        var global_base_url = "index.html";
        </script>
        <script src="asset/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  <!--Prologin --->
   <!--Validate --->
  <script type="text/javascript" src="asset/scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="asset/scripts/validation.min.js"></script>
<script type="text/javascript" src="asset/scripts/login.js"></script>
 <!--Validate --->
  <!--<![endif]-->
</head>

<!-- to edit the animation, please read documentation <animation> section -->

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88346264-1', 'auto');
  ga('send', 'pageview');

</script>
  <!-- site loader -->
  <div class="site-loader">
    <span></span>
    <p>Smart Transy</p> <!-- site loader text -->
  </div>
  <!-- site loader -->

  <!-- demo -->
  <!-- /demo -->

  <!-- site bg -->
  <div class="site-bg">
    <div class="site-bg__img"></div>
    <div class="site-bg__video"></div>
    <div class="site-bg__overlay"></div>
    <div class="site-bg__effect"></div>
    <canvas class="site-bg__canvas"></canvas>
  </div>
  <!-- /site bg -->

  <!-- site nav -
  <nav class="site-nav">
    <div class="site-nav__table">
      <div class="site-nav__cell">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <div class="site-nav__inner">
                <!-- menu -
                <ul class="site-nav__menu">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#service">Services</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
                <!-- /menu
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </nav>
  <!-- /site nav -->

  <!-- site wrap -->
  <div class="site-wrap">
    <!-- site header -->
    <header class="site-header">
      <div class="container">
        <!-- site header logo -->
        <div class="site-header__logo">
          <a class="_dark" href="#">
            <!--<img class="_red" src="img/tsa/angaza.png" alt="TSA Logo">-->
          </a>
        </div>
        <!-- site header logo -->

        <!-- site header icon -->
        <ul class="site-header__icon">
          <!-- audio icon -->
          <li class="site-header__icon__audio">
            <a href="#">
              <i class="audio-bar">
                <span class="audio-bar__item"></span>
                <span class="audio-bar__item"></span>
                <span class="audio-bar__item"></span>
                <span class="audio-bar__item"></span>
              </i>
            </a>
          </li>
          <!-- /audio icon -->

          <!-- menu icon -->
          <li class="site-header__icon__nav">
            <a href="#">
              <i class="ion-android-menu"></i>
            </a>
          </li>
          <!-- /menu icon -->
        </ul>
        <!-- /site header icon -->
      </div>
    </header>
    <!-- /site header -->

    <!-- site main -->
    <main class="site-main">
      <!-- home -->

	  <div class="container">
    <div class="row">
    <div class="col-md-12 top-margin">

        <div class="container">
    <div class="row">
    <div class="col-md-5 center-block-e">

<div class="login-page-header">
  Welcome to Smart Transy Admin Panel
</div>

<div class="login-page">

				<form  method="post" accept-charset="utf-8" id="login-form">
				<input type="hidden" name="csrf_test_name" value="30a94e9ed2b16e684c9fbbece5b412ee" style="display:none;" />
				<div id="error">
        <!-- error will be shown here ! -->
        </div>
    			<div class="input-group">
      				<span class="input-group-addon white-form-bg"><span class="glyphicon glyphicon-user"></span></span>
      				<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email">
    			</div>
				<span id="check-e"></span><br />

    			<div class="input-group">
      				<span class="input-group-addon white-form-bg"><span class="glyphicon glyphicon-lock"></span></span>
      				<input type="password" class="form-control" placeholder="Password" name="password" id="password" >
    			</div>
          <p class="decent-margin"><!--<input type="submit" class="btn btn-primary form-control" value="Login" name="btn-login"> -->
		  <button type="submit" class="btn btn-success form-control" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In
			</button>
		  </p>
          <p class="decent-margin"><a href="#">Forgotten Password?</a><br/>
						<span class="linkys" style="color: #ff2c34 !important;"><a href="#">Haven't activated account?</a></span>
					</p>
          <hr>
          <!--<p class="decent-margin"><a href="register.html" class="btn btn-success form-control" >Register an Account</a></p> -->
    			</form>
</div>

</div>
</div>
</div>
    </div>
    </div>
    </div>
      <!-- /home -->

      <!-- about -->
      <!-- /about -->

      <!-- service -->
      <!-- /service -->

      <!-- contact -->

      <!-- /portfolio-->
    </main>
    <!-- /site main -->

    <!-- site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="site-footer__inner">
              <!-- copyright -->
              <p class="site-footer__copyright">
                2017 @ <a href="#" target="_blank">Smart Transy</a> | All rights Reserved.
              </p>
              <!-- /copyright -->
              <!-- social -->
              <!-- /social -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /site footer -->
  </div>
  <!-- /site wrap -->

  <!-- script -->
  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src='assets/js/vendor/bootstrap.min.js'></script>
  <script src='assets/js/vendor/plugin.js'></script>
  <script src='assets/js/variable.js'></script>
  <script src='assets/js/main.js'></script>
  <script src='assets/js/demo.js'></script>
  <!-- /script -->

</body>

</html>
