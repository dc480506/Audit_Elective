
<!DOCTYPE html>
<html>
	<head>
		<title>Student</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
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
	
	function signOut() 
	{
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () 
	    {
	      alert('User signed out.');
	      document.location.href = 'index.php';

	    });
  	}
   function onLoad() 
   {
	      gapi.load('auth2', function() 
	      {
	        gapi.auth2.init();
	        
	      });
    }
		</script>
   <link href="css/student.css" rel="stylesheet"/>
	</head>	
	<body>
		<div id="particles-js">
		<canvas class="particles-js-canvas-el"  style="width: 100%; height: 100%;"></canvas>
			<script type="text/javascript" src="particles.js"></script>
			<script type="text/javascript" src="app.js"></script>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  			<a class="navbar-brand" href="student.php" style='font-size: 28px'>Student</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="navbar-collapse collapse show" id="navbarColor01" style="">
    			<ul class="navbar-nav mr-auto">
     				<li class="nav-item active">
        				<a class="nav-link" href="student.php" style='font-size: 20px'>Home <span class="sr-only">(current)</span></a>
      				</li>
				    <li class="nav-item">
				        <a class="nav-link" href="about.php" style='font-size: 20px'>About</a>
				    </li>
		    	</ul>
		  	</div>
		  	<div class="collapse navbar-collapse" id="navbarColor02">
		      	<button onclick="window.location.href='index.php'"  type="submit" name="logout" class="btn btn-default ml-auto mr-1">Log Out</button>
		  	</div>
		</nav>
		<br>
		<br>
		<section id="main">
		  	<div class = "container">
				<div class="row">
		          	<div class="col-md-3">
				        <div class="list-group">
				            <a href="student.php" class="list-group-item active main-color-bg">
				            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</a>
				            <a href="student.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile<span class="badge"></span></a>
				            <a href="choice.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Fill Option Form <span class="badge"></span></a>
				            <a href="displaystudent.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Display Allocation<span class="badge"></span></a>           		
				    	</div>
					</div>
					<div class="col-md-9">
						<div class="panel panel-default">
					        <div class="panel-heading main-color-bg">
					            <h3 class="panel-title">You are logged in as<b> <?php  print $email;?></b></h3>
					        </div>
					        <div class="panel-body">
					            <div class="col-md-9">
						            <?php if($msg != ''): ?>
					 				<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
									<?php endif; ?>  
					                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Name : <b> <?php  print $fname." ".$mname." ".$lname;?></b></h2>
					                <h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Department :<b> <?php  print $dept;?></h3></b>	  
									<h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Roll Number :<b> <?php  print $rno;?></b></h3>
					         	</div>  
					        </div>
					    </div>
					</div>
		    	</div> 
		 	</div>
		</section>
		<footer id="footer" style="background-color: #24292e">
		      <p>Copyright KJSCE Audit, &copy; 2019</p>
		</footer>	
    </body>
</html>	
<?php
	// require ("database.php");
	//  $msg = "";
	// $msgClass = "";
	// session_start();
	// $email=$_SESSION["email"];
	// mysqli_select_db($conn,"audit_course");
	// $sql="SELECT * FROM student_detail WHERE EMAILID ='{$_SESSION['email']}'";
	// $result = $conn->query($sql);
	// while ($row = $result->fetch_assoc()) 
	// {
	// 	$email= $row['EMAILID'];
	// 	$fname=$row['FNAME'];
	// 	$mname=$row['MNAME'];
	// 	$lname=$row['LNAME'];
	// 	$dept=$row['DEPT'];
	// 	$rno=$row['RNO'];
	// 	$currsem=$row['currsem'];
	// }
	// $_SESSION["rno"]=$rno;
	// $_SESSION["fname"]=$fname;
	// $_SESSION["mname"]=$mname;
	// $_SESSION["lname"]=$lname;
	// $_SESSION["currsem"]=$currsem;	
	// //if($_SESSION['message'] != null)
	// //$msg=$_SESSION['message'];
	// if($_SESSION['message']=='Submitted')
	// {$msg=$_SESSION['message'];
	// $msgClass = 'alert-success';}
	// if($_SESSION['message']=='Form Already Submitted')
	// {$msg=$_SESSION['message'];
	// $msgClass = 'alert-danger';}
	// //$msgClass = $_SESSION['messageclass'];
	// $_SESSION['message'] = null;
?>