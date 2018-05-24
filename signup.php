<?php 
	session_start();
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <link rel="shortcut icon" href="img/computer.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Save Your Trips</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="css/menu.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
            <nav class="navbar navbar-default">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">My Timeline</a></li>
                        </ul>
                       <?php

                                        if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
                                            echo '<a href="signup.php"><i class="fa fa-user-plus"></i>Đăng kí</a>';
                                            echo '<a href="signin.php"><i class="fa fa-sign-in"></i>Đăng nhập</a>';
                                        }else{
                                             echo '<i style="color: #fff; font-size: 15px;">Hi,'.$_SESSION["name"].'</i>';
                                             echo ' ';
                                             echo '<a href="logout.php"><i class="fa fa-sign-in"></i>Đăng xuất</a>';
                                        }
                                       
                                    ?>     
                 </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
            </nav>
 <hr>
 <div class="container">
	<div class="signup-container">
		<h3 style="text-align: center;padding-bottom: 10px;">Đăng ký tài khoản</h3>
			<form class="form" id="signup" data-toggle="validator" action="signup.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control"  placeholder="Họ và Tên" name="fullname" required>	
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span>
						</span>
						<input type="text" class="form-control"  placeholder="Email" name="email" required>	
					</div>
				</div>
				<div class="form-group" id="email-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control"  placeholder="Username" name="username" required > 
						<span class="glyphicon glyphicon-remove form-control-feedback hidden" id="email-error">
						</span>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required >
					</div>
				</div>
				<input class="btn btn-large btn-success" type="submit" value="Đăng ký" name="register"/>
			</form>
		</div>
	</div>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if( isset( $_POST["register"]) ) {
	    $_username = $_POST['username'];
	    $_password = $_POST['password'];
	    $_fname = $_POST['fullname'];
	    $_email = $_POST['email'];
		echo '<script language="javascript">';
	      echo 'alert("Đăng ký thành công")';
	      echo '</script>';
	    }
	}
?>
<?php
	require 'sqldb.php';
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		$name = $_username;
		$pass = $_password;
		$fname = $_fname;
		$email = $_email;
		$sql = "INSERT INTO user(username, password, email, fullname) VALUES('".$name."','".$pass."','".$email."','".$fname."')";
		$result = mysqli_query($conn,$sql); 
	}
?>
                <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
                <script src="assets/js/vendor/bootstrap.min.js"></script>
                <script src="assets/js/plugins.js"></script>
                <script src="assets/js/modernizr.js"></script>
                <script src="assets/js/main.js"></script>
                <script type="text/javascript">
                  $('.message a').click(function(){
                   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                });
                </script>
            </body>
        </html>