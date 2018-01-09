<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HEALTHCARE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	
		
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
	<style>
			img { 
				width:100%;
				height:auto;
			opacity:0.3;
	          }
			  
			.form-horizontal{ 
			position:absolute;
			top:75%;
			left:20%;
			right:5%;
		
			}
			.table{
			left:50%;}
	 </style>
	
	
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
        <li><a href="appointment.html">MAKE AN APPOINTMENT</a></li>
        <li class="active"><a href="donate.html">DONATE MEDICINE</a></li>
        
      <ul class="nav navbar-nav navbar-left">
         
        <li><a href="contactus.html">CONTACT US</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="bg-primary"><h1 class="col-lg-offset-5">DONATE    MEDICINE</h1></div>
<div class="table">
					<div class="offic-time">
						<div class="time-top">
							<h4>    Make an Individual Product Donation</h4>
						</div>
						<div class="time-bottom">
							<h5>Individuals with surplus medical products may donate to any of Heathcare’s distribution centers. Commonly donated products include but are not limited to: </h5>
							<h5><ul>
							<li>Consumable Medical Supplies (non-expired)</li>
							<li>Durable Medical Equipment (new or gently used)</li>
							<li>Biomedical Devices (fully functional)</li>
							</ul>
							</h5>
							<h5><p>If you would like to make an individual donation or you want to request further information, please fill out the form at the bottom of the page with all information relevant to your donation.</p></h5>
						</div>
</div>

	<div id="image">
	<img src="images/medicine.jpg" class="img-responsive"></img>
	</div>
<br><br><br><br><br><br>
<!-- forms  -->
	 <form class="form-horizontal" action="/action_page.php">
	 <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="name" placeholder="Enter name" required>
    </div>
  </div>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="address" placeholder="Enter complete address" required>
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="pin">PIN:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="pin" placeholder="Enter area pincode" required>
    </div>
  </div>
 
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact no. :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="contact" placeholder="Enter contact number" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="medicine">Name of the medicine:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="medicine" placeholder="Enter name of the medicine" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="expiry">Expiry date:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="expiry" placeholder="Enter expiry date of medicine" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="medpurpose">Medicine purpose:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="medpurpose" placeholder="Purpose of medicine" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="mg">Mg of medicine:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="mg" placeholder="Mg of medicine" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="euipment">Medical Equipment:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="equipment" placeholder="Enter Medical Equipment" required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
			
<script src="js/bootstrap.js"></script>
<div class="copy-right">
		<div class="container">
			<p>© 2018 HealthCare</p>	
		</div>
</div>
</body>
</html>