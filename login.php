<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		font-family: rolest;
	}
	body{
		background-image: url(images/background1.jpg);
		background-size: cover;
		 animation-name: bgchange;
	    animation-duration: 10s;
	    animation-iteration-count: infinite;
	}
	@keyframes bgchange{
		0%{background-image: url(images/background.jpg);}
        25%{background-image: url(images/background1.jpg);}
        50%{background-image: url(images/background2.jpg);}
        75%{background-image: url(images/background3.jpg);}
        100%{background-image: url(images/background4.jpg);}
	}
	.holder{
		width: 60%;
		height: 500px;
		background-size: cover;
		background-color: ghostwhite;
	    margin: auto;
	    margin-top: 50px;
	    border-radius: 25px;
	    background-image: url(images/background.jpg);
	 }
	 .holder .side{
        width: 50%;
        height: 100%;
        background-color: ghostwhite;
        float: right;
        border-radius: 0px 25px 25px 0px;
	 }
	 .holder form{
	 	text-align: center;
	 }
	 .holder form input{
	 	width: 230px;
	 	height: 30px;
	 	padding-top: 30px;
	 	border: 0;
	 	border-bottom: 1px solid black;
	 	background: transparent;
	 }
	 .holder form button{
	 	width: 100px;
	 	height: 30px;
	 	margin-top: 30px;
	 	border-radius: 60px;
	 	border: 0;
	 	background-color: rgb(311, 103, 15);
	 }
</style>
</head>
<body>
<div class="holder">
<div class="side"><br><br>
	<h1 align="center"><img src="images/logo.png" width="100" height="100"></h1>
		<form method="POST" action="login.php">
		<input type="text" name="user_name" placeholder="use_name"><br>
		<input type="password" name="password" placeholder="password"><br>
		<button name="login" >login</button>
		<br><br>
		<p>don't have an account <a style="color:orangered;" href="#">click here</a> to sign up</p>
	</form>
</div>	
</div>
<?php

?>
</body>
</html>