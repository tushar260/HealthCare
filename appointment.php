<?php
$yourEmail = 'tushar02614902014@msi-ggsip.com';
if(isset($_POST['submitted'])) { 
    if($_POST['fname'] === '') { 
            $hasError = true;
    } else {
            $fname = $_POST['fname'];
    }

	if($_POST['lname'] === '') { 
            $hasError = true;
    } else {
            $lname = $_POST['lname'];
    }

    if($_POST['email'] === '')  { 
            $hasError = true;
    } else if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST['email'])) {
            $hasError = true;
    } else {
            $email = $_POST['email'];
			}

	if($_POST['selection'] === '') { 
            $hasError = true;
    } else {
            $selection = $_POST['selection'];
    }

	if($_POST['work'] === '') { 
            $hasError = true;
    } else {
            $work = $_POST['work'];
    }
	
    if(!isset($hasError)) {

            $emailTo = $yourEmail;
            $subject = "Message From Your Website";
            $body = "Name: $fname $lname \n\nEmail: $email";
            $headers = 'From : my site <'.$emailTo.'>' . "\r\n" . 'answer to : ' . $email;

            mail($emailTo, $subject, $body, $headers);
			
			$subject = "HealthCare.com Team";
			$body = "Dear user,\n\nThank you for requesting an appointment at www.HealthCare.com. We have received your request to book appointment for $selection department at $work and you will get an SMS as soon as your appointment gets confirmed.\n\nBest regards\nwww.HealthCare.com\nTel: +91-9958250076";
			mail($email, $subject, $body);
			
            $emailSent = true;
			
			$servername="localhost";
			$username="root";
			$dbname="healthdb";
			try {
				$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username);
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$SQL="INSERT INTO `healthtable` (`FName`,`LName`,`Email`,`Department`,`Time_Slot`) VALUES('$fname','$lname','$email','$selection','$work')";
				$conn->exec($SQL);
				}
			catch(PDOException $e)
				{
				//echo $SQL."<br>".$e->getMessage();
				}
			$conn=null;
    }   
}
?>
<html>
    <head>
        <title>HEALTHCARE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<style>
		.image{ position:absolute;
		left:60%;
		opacity:0.7;
		}
		</style>

		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		
		<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
    </head>
    <body>
     <div class="bg-primary"><h1 class="col-lg-offset-5">HealthCare</h1></div>
	   <br></br>
       <!-- NAVIGATION BAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">HEALTHCARE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.html">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.html">ABOUT US</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li class="active"><a href="appointment.html">MAKE AN APPOINTMENT</a></li>
        <li><a href="donate.html">DONATE MEDICINE</a></li>
        
      <ul class="nav navbar-nav navbar-left">
         
        <li><a href="contactus.html">CONTACT US</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="bg-primary"><h1 class="col-lg-offset-4">MAKE AN APPOINTMENT</h1></div>
<br></br>

<div class="image">
<img src="images/healthcare.jpg" class="img-responsive"  width="95%" height="70%">
</div>

<!-- forms  -->
	 <form class="form-horizontal" method=post action="appointment.php">
	 <div class="form-group">
    <label class="control-label col-sm-2" for="fname">First Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="fname" placeholder="Enter first name" required>
    </div>
  </div>
  
	<div class="form-group">
    <label class="control-label col-sm-2" for="lname">Last Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="lname" placeholder="Enter last name" required>
    </div>
  </div>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="age">Age:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="age" placeholder="Enter age" required>
    </div>
  </div>
  
	<div class="form-group">
					<label for="Gender" class="control-label col-sm-2">Gender:</label>

					<label class="control-label col-sm-1">
						<input type="radio" name="gender" id="m" value="male" checked>Male
					</label>
					<label class="control-label col-sm-1">
						<input type="radio" name="gender" id="f" value="female">Female
					</label>
	</div>
				
	 <div class="form-group">
      <label for="selection" class="control-label col-sm-2">Select department:</label>
      <select class="form-label" name="selection">
        <option>Cardiology</option>
        <option>Dermatology</option>
        <option>Gynecology</option>
        <option>Plastic Surgery</option>
		<option>Urology</option>
		
      </select>
	  <br></br>
	  
	  <div class="form-group">
					<label for="timeslot" class="control-label col-sm-2">Time slot:</label>
					<div class="col-sm-5">
					<label class="control-label">
						<input type="radio" name="work" id="time1" value="09:30-10:00" checked>09:30-10:00
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time2" value="10:00-10:30">10:00-10:30
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time3" value="10:30-11:00">10:30-11:00
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time4" value="11:00-11:30">11:00-11:30
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time5" value="11:30-12:00">11:30-12:00
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time6" value="12:00-12:30">12:00-12:30
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time7" value="12:30-13:00">12:30-13:00
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time8" value="13:00-13:30">13:00-13:30
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time9" value="14:30-15:00">14:30-15:00
					</label>
					<label class="control-label">
						<input type="radio" name="work" id="time10" value="15:00-15:30">15:00-15:30
					</label>
					</div>
				</div>
 
 
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact no.:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="contact" placeholder="Enter contact number" required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name=submitted class="btn btn-default">Submit</button>
	  <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </form>
  <script src="js/bootstrap.js"></script>
  <div class="copy-right">
		<div class="container">
			<ul>
				<li><a target=_new href="https://www.facebook.com/groups/1644758912264671/about/"></a></li>
				<li><a target=_new href="https://plus.google.com/communities/101359307994708157958" class="gg"></a></li>
				<li><a target=_new href="https://twitter.com/HealthCareGov" class="twt"></a></li>
			</ul>
			<div class="clearfix"> </div>
			<p>© 2018 HealthCare</p>	
		</div>
	</div>
  </body>
  </html>
  