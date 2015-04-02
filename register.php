<!DOCTYPE html>
<html>
<head>
	<title>Gaming Website</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_/css/styles.css">
	<link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
</head>
<body id="body">

<!-- TOP NAVIGATION START -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<a class="navbar-brand" href="#">Gaming Website</a>

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Forum</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Follow Us!<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Instagram</a></li>
				</ul>

				</li>
				<li><a href="#contact" data-toggle="modal">Contact</a></li>

			</ul>

		</div>
	</div>
</div>
<!-- TOP NAVIGATION END -->

<!-- MAIN CONTENT START --><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-lg-2">
			This div is size 2
		</div>
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div id="pnlBdy" class="panel-body">
					<div id="pgHdr" class="page-header">
					<h1>Registration Form</h1>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="username" class="col-lg-2 control-label">Username:</label>
								<div class="col-lg-10">
									<input type="text" name="txtUsername" class="form-control" id="username" placeholder="Username">
								</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="password" class="col-lg-2 control-label">Password:</label>
								<div class="col-lg-10">
									<input type="password" name="txtPassword" class="form-control" id="password" placeholder="Password">
								</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="repeatpassword" class="col-lg-2 control-label">Repeat Password:</label>
								<div class="col-lg-10">
									<input type="password" name="txtRepassword" class="form-control" id="repeatpassword" placeholder="Repeat Password">
								</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="email" class="col-lg-2 control-label">Email:</label>
								<div class="col-lg-10">
									<input type="email" name="txtEmail" class="form-control" id="email" placeholder="sexyme@example.com">
								</div>
						</div>
					</div>
					<div class="panel-footer panel-default" id="registerBtns">
						<input type="reset" value="Reset Fields" class="btn btn-danger">
						<input type="submit" value="Register" class="btn btn-success">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-2">
			This div is size 2
		</div>
	</div>
</div>
<!-- MAIN CONTENT END -->

<!-- FOOTER NAVIGATION START -->
<div class="navbar navbar-default navbar-fixed-bottom">
	<div class="container ">
		<p class="navbar-text pull-left">Develop by Neil Resnera</p>
			<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe on Youtube</a>
	</div>
</div>
<!-- FOOTER NAVIGATION END-->

<!-- CONTACT MODAL START -->
<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal">
				<div class="modal-header">
					<p>Contact us</p>
				</div>
					<div class="modal-body">
				
					<div class="form-group">
						<label for="contact-name" class="col-lg-2 control-label">Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" placeholder="Full name">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-lg-2 control-label">Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="10">
							</textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-lg-2 control-label">Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="email" placeholder="sexyme@example.com">
						</div>
					</div>


					</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">Cancel
				</a>
				<a href="#" class="btn btn-primary" data-dismiss="modal">Submit
				</a>
			</div>
		</div>
	</div>
</div>
<!-- CONTACT MODAL END -->

<!-- VIEW IMAGE MODAL START -->
<div class="modal fade in" id="view" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal">
				<div class="modal-header" >
				<div id="btnClose">
					<a  href="#" class="btn btn-default" data-dismiss="modal">X
				</a></div>
					<h1 id="jruLogo">DOTA2</h1>
				</div>
					<div class="modal-body">
				
					<img id="featureImg"  src="images/jru-logo.png" width="100%" >


					</div>
		</div>
	</div>
</div>
<!-- VIEW IMAGE MODAL END -->
<!-- INCLUDES -->
<script src="_/jquery.js"></script>
<script src="_/js/bootstrap.js"></script>
</body>
</html>