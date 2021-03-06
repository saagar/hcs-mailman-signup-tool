<?
	ob_start();		
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="scripts.js"></script>
		<title>Super Fast HCS Mailing List Page</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	</head>
	<body>
		<!-- navigation bar -->
		<div class="navbar navbar-inverse">
		  <div class="navbar-inner" style="-moz-border-radius:0px;-webkit-border-radius:0px;border-radius:0px">
			<div class="container">
		      <!-- .btn-navbar is used as the toggle for collapsed navbar content
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a> -->
			  <a class="brand" href="#">Welcome to the Harvard Computer Society</a>
			  <div class="nav-collapse collapse">
				<ul class="nav">
				  <!--<li class="active"><a href="#">Home</a></li>-->
				</ul>
			  </div><!--/.nav-collapse -->
			</div>
		  </div>
		</div>
		
		<!-- index header -->
		<div class="page-header">
			<div class="row-fluid">
				<div class="span2"></div>
				<div class="span8">
					<h1> Harvard Computer Society </h1>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span8">
					<h2> <small>Where hackers are made. </small> </h2>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="row-fluid">

				<div class="span2">
				</div>
				<div class="span9">
				<!--Body content-->
					<div class="hero-unit">
						<h1>Sign up for HCS!</h1>
						<!-- Button to trigger modal -->
						<div class="row" style="height:10px">
						</div>
						<div class="row">
							<div class="span2">
								<a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal" style="width:180px;height:75px"><h2>Join Today!</h2></a>
							</div>
							<div class="span2">
								
							</div>
							<div class="span8">
								<ul>
									<li> <b>Maintain servers which provide super useful services to students across campus. </b></li>
									<li> <b>Examples include mailing lists, web hosting, database management, and email.</b> </li>
									<li> <b>Become an uber hacker with our HCS Bootcamps.</b></li>
									<li> <b>Learn to use GIT, Linux, Python, and lots more!</b></li>
									<li> <b>Hack on projects to help the Harvard community.</b></li>
									<li> <b>Eat dinner with all-star professors and network with the hottest tech companies.</b></li>
									<li> <b>Pizza. LOTS and LOTS of Pizza.</b></li>
									
									
								</ul>
							</div>
						</div>
					</div>

					<!-- Modal -->
					<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Join our mailing lists!</h3>
					  </div>
					  <div class="modal-body">
						<div id="submit_container">
							<div class="row-fluid">
									<div id="noneSelectedError"></div>
									<div id="badEmailError"></div>
							</div>
							<div class="row-fluid">
								<div class="span2">
								</div>
								<div class="span3">
									Full Name: 
								</div>
								<div class="span3">
									<input name="fullname" type="text" id="fullname"/>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span2">
								</div>
								<div class="span3">
									Email Address:
								</div>
								<div class="span3">
									<input name="email" type="text" id="email"/>
								</div>
							</div>
							<div class="row-fluid" style="height:3px">
								
							</div>
							<div class="row-fluid">
								<div class="span2">
									
								</div>
								<div class="span3">
									<b>Pick lists to join!</b>
								</div>
								<div class="span6">
									<div class="btn-group" data-toggle="buttons-checkbox">
										<button type="button" class="btn mlist">
											<span class="icons" style="display:none"><i class="icon-search icon-ok"></i></span>
											<span class="listname">Announce</span>
										</button>
										<button type="button" class="btn mlist">
											<span class="icons" style="display:none"><i class="icon-search icon-ok"></i></span>
											<span class="listname">Discuss</span>
										</button>
										<button type="button" class="btn mlist">
											<span class="icons" style="display:none"><i class="icon-search icon-ok"></i></span>
											<span class="listname">Projects</span>
										</button>
									</div>
								</div>
								<div class="span3">
									
								</div>
							</div>
							
						</div>
					  </div>
					  <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true" id="close">Close</button>
						<button class="btn btn-primary" id="submit" >Win!</button>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>

<? ob_flush(); ?>