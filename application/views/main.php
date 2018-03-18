<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
	<title>Disc Golf</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?= base_url('assets/js/main.js') ?> "></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/header.css') ?>">
</head>
<body>

	<!-- Header navbar ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
		     	</button>
      			<a class="navbar-brand" href="#">WebSiteName</a>
    		</div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a data-toggle="modal" href="#sign_up_modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a data-toggle="modal" href="#login_modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      </ul>
		    </div>
  		</div>
	</nav>
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<!-- Sign-Up Modal ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div id="sign_up_modal" class="modal fade" role="dialog">
    	<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header modal_header_css">
		        	<button type="button" class="close x_button" data-dismiss="modal">&times;</button>
		        	<h3 class="modal-title">Sign Up</h3>
		        </div>
		        <div class="modal-body">
		      		<form action="action_page.php" class="form_reset">
			    		<div class="form-group">
						    <label for="email"><span class="glyphicon glyphicon-envelope glyphicon_style"></span><b>Email</b></label>
						    <input class="form-control" type="email" placeholder="Enter Email" name="email" required>
						</div>

						<div class="form-group">
							<label for="psw"><span class="glyphicon glyphicon-lock glyphicon_style"></span><b>Password</b></label>
							<input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
						</div>
				    	<div class="form-group">
				    		<label for="psw-repeat"><span class="glyphicon glyphicon-lock glyphicon_style"></span><b>Repeat Password</b></label>
				    		<input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" required>
				    	</div>
				    	<label>
					      	<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					    </label>
					    <div class="clearfix">
					      <button type="submit" class="signupbtn">Sign Up</button>
					    </div>
		  			</form>		
		        </div>
		        <div class="modal-footer">
		        	<button type="button" class="btn btn-default cancel_button" data-dismiss="modal">Cancel</button>
		        </div>
		    </div>
  		</div>
	</div>
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<!-- Login Modal ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div id="login_modal" class="modal fade" role="dialog">
	    <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header modal_header_css">
			        <button type="button" class="close x_button" data-dismiss="modal">&times;</button>
			        <h3 class="modal-title">Login</h3>
		        </div>
			    <div class="modal-body">
			      	<form action="action_page.php">
			    		<div class="form-group">
						    <label for="email"><span class="glyphicon glyphicon-envelope glyphicon_style"></span><b>Email</b></label>
						    <input class="form-control" type="email" placeholder="Enter Email" name="email" required>
						</div>

						<div class="form-group">
							<label for="psw"><span class="glyphicon glyphicon-lock glyphicon_style"></span><b>Password</b></label>
							<input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
						</div>

				    	<label>
					      	<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					    </label>
						    

					    <div class="clearfix">
					      <button type="submit" class="signupbtn">Sign Up</button>
					    </div>
		  			</form>		
		        </div>
	        	<div class="modal-footer">
	      			<div class="row">
		      			<div class="col-xs-12 col-sm-6" style="text-align: left">Don't have an account?<span>
					    	<a onclick="close_login_modal()" data-toggle="modal" href="#sign_up_modal">Sign Up</a>
					   		</span>
						</div>
		      			<div class="col-xs-12 col-sm-6">
		      				<button type="button" class="btn btn-default cancel_button" data-dismiss="modal">Cancel</button>
		      			</div>
	      			</div>
	      		</div>
	    	</div>
	    </div>
	</div>
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

</body>
</html>

