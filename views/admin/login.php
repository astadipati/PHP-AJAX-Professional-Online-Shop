<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Special Member Login Page</title>
	<style type="text/css" media="screen">
		body {
		  background: #3176B1;
		  background: -webkit-linear-gradient(left, #3176B1 , #33ccff);
		  background: -o-linear-gradient(right, #3176B1, #33ccff);
		  background: -moz-linear-gradient(right, #3176B1, #33ccff);
		  background: linear-gradient(to right, #3176B1 , #33ccff);
		  font-family: 'Open Sans', sans-serif;
		}
		.box {
			display: block !important;
			margin: 150px auto;
			background-color: white;
			width: 400px;
			padding: 20px;
			border-radius: 5px 5px 0px 0px;
  			box-shadow: 0 0 6px rgba(35, 173, 278, 1);
  			height: 200px;
		}
		.box > .header {
  			border-bottom: 1px solid rgba(179, 179, 179,0.4);
  			margin-bottom: 10px;
		}
		.box > .body {

		}
		form label {
			font-size: 13.5px;
			display: block;
			margin: 5px 0px;
		}
		form input {
			border: 1px solid transparent;
			border-bottom: 2px solid transparent;
			transition: 0.2s;
		}
		form input:focus {
			border-bottom: 2px solid #3AC0FF;
		}
		form button {
			margin-top: 10px;
			background-color: #3AC0FF;
			color: white;
			border-radius: 2px;
			padding: 5px 10px;
			border: 1px solid transparent;
			cursor: pointer;
		}
		.loader {
		  border: 5px solid #f3f3f3;
		  -webkit-animation: spin 1s linear infinite;
		  animation: spin 1s linear infinite;
		  border-top: 5px solid #555;
		  border-radius: 50%;
		  width: 25px;
		  height: 25px;
		  display: inline-block;
		  margin-top: 90px;
		}
		.login.text {
			color: white;
			font-family: Lato,sans-serif;
			font-size: 14px;
			text-align: center;
			margin-top: 10px;
			font-weight: bold;
		}

		@-webkit-keyframes spin {
		  0% { 
		    -webkit-transform: rotate(0deg);
		    -ms-transform: rotate(0deg);
		    transform: rotate(0deg);
		  }

		  100% {
		    -webkit-transform: rotate(360deg);
		    -ms-transform: rotate(360deg);
		    transform: rotate(360deg);
		  }
		}

		@keyframes spin {
		  0% { 
		    -webkit-transform: rotate(0deg);
		    -ms-transform: rotate(0deg);
		    transform: rotate(0deg);
		  }

		  100% {
		    -webkit-transform: rotate(360deg);
		    -ms-transform: rotate(360deg);
		    transform: rotate(360deg);
		  }
		}
		.dimmer {
		  display: none;
		  border-radius: 5px 5px 0px 0px;
		  margin: -20px;
		  position: absolute;
		  width: 440px;
		  height: 100%;
		  text-align: center !important;
		  vertical-align: middle;
		  background-color: rgba(0, 0, 0, 0.85);
		  opacity: 1;
		  line-height: 1;
		  -webkit-animation-fill-mode: both;
		  animation-fill-mode: both;
		  -webkit-animation-duration: 0.5s;
		  animation-duration: 0.5s;
		  -webkit-transition: background-color 0.5s linear;
		  transition: background-color 0.5s linear;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		  will-change: opacity;
		  z-index: 10;
  		  height: 240px;
		}
		.active.dimmer {
			display: block;
		}
		.dimmer > .content {
		  width: 100%;
		  height: 100%;
		  display: table;
		  -webkit-user-select: text;
		  -moz-user-select: text;
		  -ms-user-select: text;
		  user-select: text;
		  z-index: 15;
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="dimmer">
			<div class="content">
				<div class="loader"></div>
				<div class="login text">Loading.</div>
			</div>
		</div>
		<div class="header">
			Login
		</div>
		<div class="body">
			<form class="d login form" action="<?php echo $my.'admin/login/' ?>" method="post">
				<div>
					<label>Username / Email</label>
					<input placeholder="Your login identity" type="text" name="identity">
				</div>
				<div>
					<label>Password</label>
					<input placeholder="Your Password" type="text" name="password">
				</div>
				<button role="button" type="submit" class="login">Login</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" placeholder=""></script>
	<script src="<?php echo js; ?>bundle.js"></script>
</body>
</html>