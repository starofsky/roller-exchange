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
    <meta name="twitter:image" content="https://i.imgur.com/jETv0Y1.png">
    <meta name="twitter:creator" content="aiodex">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@smartexchange">

    <meta property="og:title" content="Blockchain Assets Trading Platform">
    <meta property="og:image" content="https://i.imgur.com/jETv0Y1.png">
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
	          <a class="dropdown-item" href="<?php echo store_url("coinbase");?>">Con Info</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?php echo store_url("vote/create");?>">Add Your Coin</a>
	        </div>
	      </li>

	      

	    </ul>
	    
	    <ul class="navbar-nav">
	      <li class="nav-item nav-balancer">
	      	Balancer : 0.5 BTC<br>
	      	Balancer : 0.5 ETH
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
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>
	<main ruller="main" class="container-fluid">
		<?php print_r($content);?>
	</main>
	<footer>
		<div class="container-fluid"></div>
	</footer>
</body>
</html>