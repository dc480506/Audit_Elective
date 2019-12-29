<!-- Reference link : "https://developers.google.com/identity/sign-in/web/sign-in"-->
 
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
		<link rel="stylesheet" href="css/index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css?version=51">
		<div class = "row">
			<div class ="col-md-2">
				<br>
				<img src="img/Somaiya.png" alt="Somaiya" width="250" height="100"/>
			</div>
			<div class ="col-md-7 offset-md-0">	
				<h2 align="right" style='color: white; font-family:"Arial, Helvetica, sans-serif"; font-size: 50px'>K.J. Somaiya College of Engineering</h2>
				<h4 align="center" style='font-family:"Arial, Helvetica, sans-serif"; font-size: 30px'><font color="white">(Autonomous College affiliated to University of Mumbai)</font></h4>
			</div>	
			<div class ="col-md-3">
				<br>
				<a href="https://www.facebook.com/SomaiyaTrust/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/SomaiyaTrust" class="fa fa-twitter"></a>
				<a href="https://www.youtube.com/SomaiyaVidyavihar" class="fa fa-youtube"></a>
				<a href="https://www.instagram.com/somaiyatrust/" class="fa fa-instagram"></a>
			</div>
		</div>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="google-signin-client_id" content="444425785443-5mh44gn88jrf46t217t7i4m62r4ui1ro.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript">
	function onSignIn(googleUser) 
	{
		  var profile = googleUser.getBasicProfile();
		  name = profile.getName();
		  pic=profile.getImageUrl();
		  eid=profile.getEmail();
		  var email=profile.getEmail();
		  if(email.includes("somaiya.edu")) //domain constraint
		  {
		  var theForm, newInput1, newInput2, newInput3;
		  theForm = document.createElement('form');
		  theForm.action = 'verify.php';	//enter the page url you want to redirect the index page to after sign in
		  theForm.method = 'post';
		  newInput1 = document.createElement('input');
		  newInput1.type = 'hidden';
		  newInput1.name = 'user';
		  newInput1.value = name;
		  newInput2 = document.createElement('input');
		  newInput2.type = 'hidden';
		  newInput2.name = 'pic';
		  newInput2.value = pic;
		  newInput3 = document.createElement('input');
		  newInput3.type = 'hidden';
		  newInput3.name = 'eid';
		  newInput3.value = eid;
		  theForm.appendChild(newInput1);
		  theForm.appendChild(newInput2);
		  theForm.appendChild(newInput3);
		  document.getElementById('hidden_form_container').appendChild(theForm);
		  theForm.submit();
		  }
		  else
		  {
		 	window.location.href="http://localhost/phpsandbox/index.php";
			alert("Please login using Somaiya Mail ID");
		  }
	}
  	function signOut() 
  	{
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () 
    {
      alert('User signed out.');
    });
  	}
		</script>
	</head>
	<body>
	<div id="particles-js">
	<canvas class="particles-js-canvas-el"  style="width: 100%; height: 100%;"></canvas>
		<script type="text/javascript" src="particles.js"></script>
		<script type="text/javascript" src="app.js"></script>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  	<a class="navbar-brand" href="index.php" style='font-size: 28px'>Audit Course</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  <div class="navbar-collapse collapse show" id="navbarColor01" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style='font-size: 20px'>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style='font-size: 20px'>About</a>
      </li>
    </ul>
  </div>
</nav>
		<div class="slide hi-slide">
		  <div class="hi-prev "></div>
			<div class="hi-next "></div>
			<ul>
				<li>
				<img src="img/Python.jpeg" alt="Img 1" /></li>
				<li><img src="img/Java.jpg" alt="Img 2" /></li>
				<li><img src="img/Robotics.jpg" alt="Img 3" /></li>
				<li><img src="img/Machine Learning.jpg" alt="Img 4" /></li>
				<li><img src="img/Tableau.jpg" alt="Img 5" /></li>
				<li><img src="img/Flutter.png" alt="Img 6" /></li>
				<li><img src="img/Devops.png" alt="Img 7" /></li>
                <li><img src="img/'No SQL.png'" alt="Img 8" /></li>
			</ul>
		</div>
		
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="jquery.hislide.js" ></script>
		<script>
			$('.slide').hiSlide();
		</script>
		<br><br>
		<div class = "row">
			<div class ="col-md-6 col-md-offset-3">
    		<p style='color: white; font-size: 22px; font-family: "Comic Sans MS", cursive, sans-serif'>Audit Course will help the student enrich his/her knowledge while not getting evaluated for it. The sole purpose of such course is to help increase the knowledge threshold while not requiring or burdening them with any sort of evaluation.</p>
    		</div>
    	</div>
<br><br>
<section id="main">
  <div class = "container">
    <div class="row">
    	<div class="col-md-6 col-xs-12">
    		<h1 style='color: white; font-size: 45px; font-family: "Arial Black", Gadget, sans-serif; text-align: center'>Audit Course</h1>
			<a href="" title="From building websites to analyzing data, the choice is yours"><h3 style='color: white; font-family: "Comic Sans MS", cursive, sans-serif'><b># Choose What To Learn</b></h3></a>
    		<a href = "" title="No matter your experience level, we will start from scratch"><h3 style='color: white; font-family: "Comic Sans MS", cursive, sans-serif'><b># Learn By Doing</b></h3></a>
    		<a href="" title="Your work will be testedas soon as you submit it, so you can always know if you are on the right track"><h3 style='color: white; font-family: "Comic Sans MS", cursive, sans-serif'><b># Get Instant Feedback</b></h3></a>
    		<a href="" title="Apply your learning with real world projects"><h3 style='color: white; font-family: "Comic Sans MS", cursive, sans-serif'><b># Put Your Learning to Practice</b></h3></a>
    		<a href="" title="Each course has specific capacity and will be alloted on First Come First Serve basis"><h3 style='color: white; font-family: "Comic Sans MS", cursive, sans-serif'><b># Alloted on Space Availability Basis</b></h3></a>
    	</div>
    	

        <div class="col-md-6 col-xs-12">
        	<div class="panel panel-default" style="padding: 20px">
	 			<div class="panel-heading main-color-bg">
	 				<h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-down"></span>  Sign In Via Google</h3>
				</div>
        	
        		<form method="post" action="process.php">
				<label for="gsign" align="middle">Google Sign In</label>
				<div class="g-signin2" data-onsuccess="onSignIn" align="middle">
				</div>
			</div>
        	<div class="panel panel-default" style="padding: 20px">
        		<div class="panel-heading main-color-bg">
	 				<h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-down"></span>  Sign Into Account</h3>
				</div>
				<br>
        		<label id="abc" for="email" style='font-size: 18px'><b>Email ID:</b></label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email-ID" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>			  
				<br>		
			    <label id="abc" for="pswrd" style='font-size: 18px'><b>Password:</b></label>
				<input type="password" name="pswrd" id="pswrd" class="form-control" placeholder="Enter Password" value="<?php echo isset($_POST['pswrd']) ? $pswrd : ''; ?>" required>			
				<br><br>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>	
				</form>
			</div>
        </div>
    </div>
  </div>
</section>
 <footer id="footer" style="background-color: #24292e">
 <p style="color:white">Copyright KJSCE &copy; 2019</p>
</footer>	
		<div id="hidden_form_container" style="display:none;"></div>
		
	</body>
</html>

<?php
	// $msg = "";
	// $msgClass = "";
	// session_start();
	// $_SESSION['back']="index.php";

	// if(filter_has_var(INPUT_POST, "submit"))
	// {
	//     $_SESSION["email"]=htmlentities($_POST["email"]);
	// 	$email = htmlspecialchars($_POST["email"]);
	// 	$pswrd = htmlspecialchars($_POST["pswrd"]);
	// 	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
	// 	{
	// 		$msg = 'Please use a valid email';
	// 		$msgClass = 'alert-danger';
	// 	}
	// 	else
	// 	{
	// 		$msg =  'Submitted';
	// 		$msgClass = 'alert-success';
	// 	}
	// }
?> 