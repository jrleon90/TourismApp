<header>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
  <style>

  html {
		height: 100%;
		overflow: hidden;
	}

	body {
		height:100%;
		overflow: auto;
		-webkit-overflow-scrolling: touch;
	}

	html{
		height:100%;
		background: url(https://www.escapadarural.com/blog/wp-content/uploads/2015/04/4844354186_bcfcb14b32_o.jpg); no-repeat center bottom fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	.cspio body{
		background: transparent;
	}

	.cspio body, .cspio body p{
        font-family: Helvetica, Arial, sans-serif;
		font-weight: 400;
		font-style: ;
        font-size: 20px;
        line-height: 1.50em;
        color:#ffffff;
    }

	::-webkit-input-placeholder {
		font-family:Helvetica, Arial, sans-serif;
		font-weight: 400;
		font-style: ;
	}

	::-moz-placeholder {
		font-family:Helvetica, Arial, sans-serif;
		font-weight: 400;
		font-style: ;
	}

	:-ms-input-placeholder {
		font-family:Helvetica, Arial, sans-serif;
		font-weight: 400;
		font-style: ;
	}

	:-moz-placeholder {
		font-family:Helvetica, Arial, sans-serif;
		font-weight: 400;
		font-style: ;
	}

    .cspio h1, .cspio h2, .cspio h3, .cspio h4, .cspio h5, .cspio h6{
        font-family: 'Lobster';
        color:#ffffff;
    }

	#cspio-headline{
		font-family: 'Lobster';
		font-weight: 400;
		font-style: ;
				font-size: 48px;
		color:#ffffff;
		line-height: 1.00em;
	}

    #cspio-content {
		display: none;
		max-width: 600px;
		background-color: #000000;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		-moz-background-clip: padding;
		-webkit-background-clip: padding-box;
		background-clip: padding-box;
		background-color:transparent;
    margin: 0px auto 0px auto;
	}

	#cspio-subscribe-btn{
	    background:transparent;
	    border: 1px solid #fff !important;
	    color: #fff;
      border-radius: 6px;
      font-size: 18px;
      font-family: 'Bitter';
	}

	#cspio-subscribe-btn:hover{
	    background: rgba(255,255,255,0.2);
	    color: #fff;
	}
  #cspio-body{
    text-align: center;
    margin-right: 60px;
  }

  #cspio-description{
    color: #ffffff;
    margin-bottom: 10px;
  }
  #cspio-privacy{
    color: #ffffff;
    font-size: 14px;
  }
  #message, #message-error{
    color: #ffffff;
    font-family: 'Bitter';
  }

  </style>
</header>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Modernizr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<!-- Google Analytics Code Goes Here-->
</head>
<body>
<div id="cspio-page">
  <div id="cspio-content">

<iframe width="560" height="315" src="https://www.youtube.com/embed/V_YlZ1JdcVk" frameborder="0" allowfullscreen></iframe>
<div id="cspio-body">

    <h1 id="cspio-headline">Coming Soon App</h1>

    <div id="cspio-description">Get ready! Something really cool is coming!</div>

    <form id="cspio-form" action="insert.php" method="post">
      <div id="cspio-field-wrapper">
        <div class="row">
          <div class="col-md-12 seperate"><div class="input-group"><input id="cspio-email" name="EMAIL" class="form-control input-lg form-el" type="email" placeholder="Email"/>
        <span class="input-group-btn"><button id="cspio-subscribe-btn" type="submit" class="btn btn-lg btn-primary form-el noglow">Notify Me</button></span></div></div>
        <span id="message">Email Saved!</span>
        <span id="message-error">Email Invalid</span>

        </div>
      </div>
    </form>
    <script src="insert.js"></script>

    <span id="cspio-privacy">We promise to never spam you.</span>

  <!--	<div id="cspio-socialprofiles">
      <a href="" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
      <a href="" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
      <a href="mailto:" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
    </div>-->
  </div>
  </div>
  </div><!-- end of #cspio-content -->
</div>


<script>
   $("#message").hide();
   $("#message-error").hide();

  // Animate Delay
  setTimeout(function(){ jQuery("#cspio-content").show().addClass('animated fadeIn'); }, 250);

  // Reseize
  function resize(){
      $('head').append("<style id='form-style' type='text/css'></style>");
      $('#form-style').html('.cspio .input-group-btn, .cspio .input-group{display:block;width:100%;}.cspio #cspio-subscribe-btn{margin-left:0;width:100%;display:block;}.cspio .input-group .form-control:first-child, .cspio .input-group-addon:first-child, .cspio .input-group-btn:first-child>.btn, .cspio .input-group-btn:first-child>.dropdown-toggle, .cspio .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {border-bottom-right-radius: 4px;border-top-right-radius: 4px;}.cspio .input-group .form-control:last-child, .cspio .input-group-addon:last-child, .cspio .input-group-btn:last-child>.btn, .cspio .input-group-btn:last-child>.dropdown-toggle, .cspio .input-group-btn:first-child>.btn:not(:first-child) {border-bottom-left-radius: 4px;border-top-left-radius: 4px;}');
  }

  $('#cspio-content').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
    function(){
      var width = $('#cspio-field-wrapper').width();
      if(width < 480 && width != 0){
        resize();
      }
    }
  );
</script>

</body>
</html>

<!-- This page was generated by ComingSoonPage.com | Learn more: http://www.comingsoonpage.com -->
