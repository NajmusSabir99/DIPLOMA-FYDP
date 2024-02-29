<?php
session_start();
$_user_id = $_SESSION['id']??0;
if($_user_id){
    header('Location: words.php');
    die();
}
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Vocabulery</title>
</head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<body>
<div class="container">
	<div class="row mt-5">
		<div class="col-lg-6 offset-lg-3">
			<div class="card text-center">
			  <div class="card-header border border-info">
			    <h4 class="text-info">MY VUCABULARY</h4>
			    <span class="text-light bg-info badge badge-light">A</span>
			    <span class="text-light bg-info badge badge-light">ক</span>
			    <span class="text-light bg-info badge badge-light">ㅀ</span>
			  </div>
			  <div class="card-body border border-info">
			   <form id="form01" method="post" action="tasks.php">
			   	<h3 class="text-info">Login</h3>
			   	<fieldset>
			   		<label for="email" class="text-info">Email</label>
			   		<input class="form-control border border-info" type="text" id="email" placeholder="Enter Your Email" name="email">
			   		<label for="password" class="text-info">Password</label>
			   		<input class="form-control border border-info" type="text" id="password" placeholder="Enter Your Password" name="password">
			   		<p class="text-info mt-2">
                            <?php
                            $status = $_GET['status']??0;
                            if($status){
                                echo getStatusMessage($status);
                            }
                            ?>
                    </p>
			   		<input class="btn btn-info mt-2" type="submit" value="Submit">
			   		<input type="hidden" name="action" id="action" value="login">
			   	</fieldset>
			  </div>
			   <div class="card-footer border border-info">
			  	 <a href="#" id="login" class="text-info">Login</a> <span class="text-info">|</span> <a href="#" id="register" class="text-info">Register Account</a>
			  	</div>
			  </form>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>