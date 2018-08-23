<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Smart Exchange</title>
  	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo template_url("browserconfig.xml");?>">
    <meta name="theme-color" content="#ffffff">
    


    <meta name="twitter:url" content="<?php echo store_url();?>">
    <meta name="twitter:title" content="Blockchain Assets Trading Platform">
    <meta name="twitter:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
    <meta name="twitter:image" content="http://coverlayout.com/facebook/covers/cute-puppy-dog/cute-puppy-dog_tn.jpg">
    <meta name="twitter:creator" content="aiodex">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@smartexchange">

    <meta property="og:title" content="Blockchain Assets Trading Platform">
    <meta property="og:image" content="http://coverlayout.com/facebook/covers/cute-puppy-dog/cute-puppy-dog_tn.jpg">
    <meta property="og:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
    <meta property="article:author" content="smartexchange">
    <meta property="og:url" content="<?php echo store_url();?>">
    <meta property="og:type" content="article">
    <meta property="article:publisher" content="https://www.facebook.com/smartexchange">
    <meta property="og:site_name" content="aiodex.com">

  <link rel="shortcut icon" href="<?php echo store_url("favicon.ico");?>">
  <link rel="icon" href="<?php echo store_url("favicon.ico");?>">

  
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("apps.js");?>"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("apps.css");?>">
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("apps.js");?>"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo resource_url("themify/themify-icons.css");?>">
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("flipclock.min.js");?>"></script>
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("bootstrap-notify.js");?>"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo resource_url("flipclock.css");?>">
  <script src='//cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.4/socket.io.min.js'></script>
</head>
<body>
<header>

	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#">Smart Exchange</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo store_url("");?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("exchange");?>">Exchange</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("account");?>">Account</a>
	      </li>


	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Support
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo store_url("vote");?>">Vote</a>
	          <a class="dropdown-item" href="<?php echo store_url("coinbase");?>">Coind Info</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?php echo store_url("vote/create");?>">Add Your Coin</a>
	        </div>
	      </li>

	      

	    </ul>
	    
	    <ul class="navbar-nav">
	      <li class="nav-item" id="connect"><a></a></li>
	      <?php if($is_login){?>
	      <li class="nav-item nav-balancer">
	      	Balancer : <span id="balancerbtc">0.0</span> BTC<br>
	      	Balancer : <span id="balancerbtc">0.0</span> <span id="HeaderPair"></span>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="btn btn-outline-info btn-sm nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Account
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo store_url("account/settings");?>">Settings</a>
	          <a class="dropdown-item" href="<?php echo store_url("account/changepassword");?>">Change Password</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?php echo store_url("account/security");?>">Security</a>
	          <a class="dropdown-item" href="<?php echo store_url("access/logout");?>">Logout</a>
	        </div>
	      </li>
	      <?php }else{?>
	      	<li class="nav-item nav-balancer">
	      		<a class="btn btn-outline-info btn-sm nav-link" href="#">Register</a>
	      </li>
	      <?php } ?>
	    </ul>
	  </div>
	</nav>
</header>
	<main ruller="main" class="container-fluid">
		<?php print_r($content);?>
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col">
					<h5>Information</h5>
					<ul>
						<li><a>API</a></li>
						<li><a>Document</a></li>
					</ul>
				</div>
				<div class="col">
					<h5>Support</h5>
					<ul>
						<li><a>Coin Listing</a></li>
						<li><a>Document</a></li>
					</ul>
				</div>
				<div class="col">
					<h5>Development</h5>
					<ul>
						<li><a>API</a></li>
						<li><a>Document</a></li>
					</ul>
				</div>
				<div class="col">
					<h5>Social</h5>
					<ul class="w-50 float-left">
						<li><a>Facebook</a></li>
						<li><a>Discord</a></li>
					</ul>
					<ul class="w-50 float-right">
						<li><a>Telegram</a></li>
						<li><a>Discord</a></li>
					</ul>
				</div>
				
			</div>
			<div class="text-center" style="margin-top:30px; ">
				Usage of btcrip.co indicates acceptance of the A VIETMEDIA Ltd. Terms & Conditions.<br>
				btcrip.co. is not responsible for losses caused by outages, network volatility, wallet forks/maintenance or market conditions.<br>
				Copyright 2018 A VIETMEDIA Ltd. - All Rights Reserved
			</div>
		</div>
	</footer>
</body>
</html>