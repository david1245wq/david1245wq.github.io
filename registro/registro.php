<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="Rapid Files">
    <meta name="robots" content="all,index,follow,snippet,archive,odp">
    <meta name="og:title" content="Registrar Nueva Cuenta | Rapid Files ">

    <title>Registrar Nueva Cuenta | Rapid Files </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="components/fancybox/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/green.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="shortcut icon" href="">
	
	
	<!DOCTYPE html>
<html>
  <head>
    <title>The title of the document</title>
    <style>
      .multicolortext {
        background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, orange, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
      }
    </style>
  </head>
</html>
	

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
        <script src="js/theme/html5shiv.js"></script>
        <script src="js/theme/respond.min.js"></script>
    <![endif]-->
	
	

</head>
<body class="page-register">
<header class="no-padding-bottom header-alt">
</header>


<div class="animate-dropdown">
  <div id="breadcrumb-alt" class="mar5">
    <div class="container">
        <div class="breadcrumb-nav-holder minimal">
            <ul>
              <li class="breadcrumb-item current"><a href="../index">Login</a></li>
            </ul>
        </div>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="outer-bottom-xs">
    <div class="container">

      <div class="col-md-12 col-sm-12 col-xs-12 no-margin">

          

            <div class="row-form-group">
                <form method="post" action="enviar.php">
                    <h2 class="border h1"><i class="fa fa-user fw-r10"></i>Personal Details</h2>
                    <div class="row field-row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="label-required">Full Name</label>
                            <input name="fullname"  type="text" class="le-input" placeholder="Full Name" pattern=".{3,64}" required>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>Phone</label>
                            <input name="phone"  type="text" class="le-input" placeholder="Phone Number" pattern="[0-9+-]{7,15}">
                        </div>
                    </div>
                    <div class="row field-row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Address</label>
                            <input name="address"  type="text" class="le-input" placeholder="Street Address" pattern=".{5,128}">
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>ZIP Code</label>
                            <input name="zip_code"  type="text" class="le-input" placeholder="ZIP Code" pattern=".{1,16}">
                        </div>
                    </div>

                    <h2 class="border h1"><i class="fa fa-lock fw-r10"></i>Account Details</h2>

                    <div class="row field-row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="label-required">Email</label>
                            <input name="email"  type="email" class="le-input" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="label-required">Username</label>
                            <input name="username"  type="text" class="le-input" placeholder="Username" pattern="[a-zA-Z0-9-_.]{3,32}" required>
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="label-required">Password</label>
                            <input name="password" type="password" class="le-input" placeholder="Password" pattern=".{3,32}" required>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="label-required">Confirm Password</label>
                            <input name="re_password" type="password" class="le-input" placeholder="Confirm Password" pattern=".{3,32}" required>
                        </div>
                    </div>

                    <div class="field-row clearfix">
                      <label class="content-color">
                        <input type="checkbox" name="remember_me" value="1" class="le-checbox auto-width inline" required>&ensp;&ensp;By proceeding you agree to <a href="../terminos/terminos" target="_blank">Terms of Service</a> and <a href="../terminos/privacidad" target="_blank">Privacy Policy</a>
                      </label>
                    </div>

					

                  <div class="place-order-button">
                      <input type="hidden" name="submit_register" value="1">
                      <button type="submit" class="le-button big"><i class="fa fa-check fw-r10"></i>Complete Registration</button>
                  </div>

                </form>
            </div>

      </div>

  	</div>
  </div>
</div>






<script>
  var jsoftData = {};
  
      jsoftData.userID = 0;
 

  jsoftData.page = {'a': 'register','a_url': 'http://www.esquematicos.com/index.php?a=register','b': '{$PAGE.b}','b_url': 'http://www.esquematicos.com/index.php?a=register'};
  jsoftData.system = {'siteurl': 'http://www.esquematicos.com',
                      'baseurl': 'http://www.esquematicos.com',
                      'templateurl': 'http://www.esquematicos.com/templates/default-downloads/html/en',
                      'userapi': 'http://www.esquematicos.com/userapi/index.php',
                      'currency': 'USD',
                      'currency_prefix': '',
                      'currency_suffix': 'USD',
                      'currency_decimals': parseInt('2')};
</script>

<script src="components/jquery/dist/jquery.min.js"></script>
<script src="components/fancybox/jquery.fancybox.min.js"></script>
<script src="js/theme/bootstrap.min.js"></script>
<script src="js/theme/bootstrap-hover-dropdown.min.js"></script>
<script src="js/theme/owl.carousel.min.js"></script>
<script src="js/theme/css_browser_selector.min.js"></script>
<script src="js/theme/echo.min.js"></script>
<script src="js/theme/jquery.easing-1.3.min.js"></script>
<script src="js/theme/bootstrap-slider.min.js"></script>
<script src="js/theme/jquery.raty.min.js"></script>
<script src="js/theme/jquery.prettyPhoto.min.js"></script>
<script src="js/theme/jquery.customSelect.min.js"></script>
<script src="js/theme/wow.min.js"></script>
<script src="js/theme/scripts.js"></script>
<script src="js/theme/buttons.js"></script>
<script src="js/jsoft-functions.js"></script>
<script src="js/jsoft-scripts.js"></script>
<script src="js/jsoft-custom.js"></script>

<script>
  $(document).ready(function () {
      
      if($('.menu-links-stack').length) {
      	if($('.menu-links-stack').find('a[href="http://www.esquematicos.com/index.php?a=register"]').length) {
          $('.menu-links-stack').find('a[href="http://www.esquematicos.com/index.php?a=register"]').parents('li').first().not('.active').addClass('active');
      	} else {
      		$('.menu-links-stack').find('a[href="http://www.esquematicos.com/index.php?a=register"]').parents('li').first().not('.active').addClass('active');
      	}
      }

     if($('.star').length > 0) {
        $('.star').raty('set',{'path': 'http://www.esquematicos.com/templates/default-downloads/html/en/','scoreName':'rating_points'});
        $('.star.readonly').raty('readOnly', 1);
     }
  });
</script>
	

<!DOCTYPE html>
<html>
  <head>
    <title>The title of the document</title>
    <style>
      .multicolortext {
        background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, orange, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
      }
    </style>
  </head>
</html>


</body>
</html>
