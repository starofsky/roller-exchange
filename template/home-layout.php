<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Smart Exchange</title>
  <link rel="shortcut icon" href="<?php echo store_url("favicon.ico");?>">
  <link rel="icon" href="<?php echo store_url("favicon.ico");?>">

  
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("apps.js");?>"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("apps.css");?>">
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("apps.js");?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Smart Exchange</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item">
	        <a class="nav-link" href="#">Exchange</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="#">Account</a>
	      </li>


	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Support
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Vote</a>
	          <a class="dropdown-item" href="#">Con Info</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Add Your Coin</a>
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
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<main ruller="main" class="container">
		<?php print_r($content);?>
	</main>
	<footer>
		<div class="container-fluid"></div>
	</footer>
</body>
</html>