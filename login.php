<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<?php 
if(!isset($_COOKIE['direct'])){
	if(!isset($_REQUEST['sub']))
	{
?>
<!--    <form action="" name="f1">
    Username: <input type="text" name="tus"> <br> <br>
    Password: <input type="text" name="tpa"> <br> <br>

    <input type="checkbox" name="keep" value="keep me">KEEP ME LOGGED IN <br> <br>
    <input type="submit" name="sub" value="LOGIN">
    <input type="submit" name="sub" value="SIGNUP">
    <input type="reset" name="res" value="CANCEL">
    
    </form>  -->

<div class="container" align="center">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">Log in/Sign up</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">Username</label>
			      <div class="controls">
			        <input type="text" id="username" name="tus" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Password</label>
			      <div class="controls">
			        <input type="password" id="password" name="tpa" placeholder="" class="input-xlarge">
			      </div>
			      <div class="control-group"> 
						
						<div class="controls"> 
							<input type = "checkbox" name="checkbox" id="checkbox" value = "keep" class="control-label">
							<label class="control-label" for="checkbox">Keep me logged in</label>	
						</div>
			      </div> 
			    </div>
			
			    <br> <br>
	
			        <button class="btn btn-success btn-lg" name="sub" value="login">Log  in</button> <br> <br>
			        <button class="btn btn-success btn-lg"  name="sub" value="sign up">Sign up</button>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
<?php
}
	else{
		$us = $_REQUEST['tus'];
		$pa = $_REQUEST['tpa'];
		$sub = $_REQUEST['sub'];

		if($sub=="login"){
			$link = new mysqli("localhost", "root", "", "dotg");
			$res = $link->query("select * from login where uname = '$us' and pass='$pa'");

			if($res->num_rows > 0){
				if(isset($_REQUEST['keep'])){
					setcookie("direct", "allow", time()+24*30);
					setcookie("user", $us, time()+24*30);
				}
				echo "<br> Authorised User";
				session_start();
				$_SESSION['user'] = $us;
			} else{
				header("location:login.php");
			}
		} else if($sub == "sign up"){
			$link = new mysqli("localhost","root","","dotg");
			$link -> query("insert into login vlaues ('$us', '$pa')");
			$link -> close();
			header("location:login.php");
		}
	}
}
	else{
		session_start();
		$_SESSION['user'] = $_COOKIE['user'];
		header("location:order.php");
	}
?>
</body>
</html>