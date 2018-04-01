<html>

<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    function show(a){
        var e = document.getElementById("mainSegment");
        e.innerHTML = "<object type='text/html' data="+a+" width=1360 height=500>";
    }

    </script>

    <style type="text/css">
    /*body {
    background: url(images/bg-img.jpg);
    background-size: cover;
    background-position: center; 
    background-color:rgba(255, 255, 255, 0.5);
    }
    body,html {
    width: 100%;
    height: 100%;
 /*   font-family: "Lato";
    color: white;*/
}
    </style>

</head>

<body style="background-color: #F8F8F8">
    <nav class="navbar navbar-default">
	<div class="container">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
    		<a href="main.php" class="navbar-brand">The Designers Of The Galaxy</a>
    	</div>
    	<div class="collapse navbar-collapse" id="mynavbar">
	    	<ul class="nav navbar-nav">
	    		<li onclick="show(('menu.php'))"><a href="#">Catalog</a></li>
	    		<li><a href="#">Order</a></li>
	    		<li><a href="#">Bill</a></li>
          <li onclick="show(('about-us.html'))"><a href="#">About Us</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right">
          <li> <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="padding-top: 15%;"></span></a></li>
	    		<li  onclick="show(('login.php'))"><a href="#">Log in</a></li> 
	    		<li  onclick="show(('login.php'))"><a href="#">Sign up </a></li>
	    	</ul>
    	</div>
</div>
    </nav>      
    

    <div id="mainSegment" style="width:100%; height:100%;">
    	<div class="container "  style="padding: 5% 5%">
    	 <div class="jumbotron">
        <img src="images/logo.png" alt="Yahan ek logo hua karta tha" style="float: right;">
        <h1 style="font-size: 30pt; font-weight: 800;">The Designers Of The Galaxy</h1>
        <p>T-shirt Le lo T-shirt.. <br> 500 ka ek 1000 ke 2..<br> T-shirt le lo T-shirt <br> Sign up now to get 10% Cashback</p>
        <p><a class="btn btn-primary btn-lg" role="button" onclick="show(('menu.php'))">Buy Now</a></p>
      </div>
    </div>
  </div>
</body>

</html>