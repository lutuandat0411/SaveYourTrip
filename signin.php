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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="css/menu.css">
        <!--For Plugins external css-->
        <!-- <link rel="stylesheet" href="assets/css/plugins.css" /> -->
        <!-- <link rel="stylesheet" href="assets/css/roboto-webfont.css" /> -->
        <!--Theme custom css -->
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
        <!--Theme Responsive css-->
        <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

       
    </head>
    <body>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a  href="index.php">My Timeline</a></li>
                        </ul>


                       
   					 <div  class="w3-display-topright">
                         <?php

                                        if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
                                        	echo "<br> ";
                                            echo '<a style="color:#800080;" href="signup.php"><i class="fa fa-user-plus"></i>Đăng Kí</a>';
                                            echo " ";
                                            echo '<a style="color:#800080;" href="signin.php"><i class="fa fa-sign-in"></i>Đăng nhập</a>';
                                        }else{
                                             echo '<i style="color: #000000; font-size: 15px;">Hi,'.$_SESSION["name"].'</i>';
                                             echo ' ';
                                             echo '<a href="logout.php"><i class="fa fa-sign-in"></i>Đăng xuất</a>';
                                        }
                                       
                                    ?>  
                                    </div>
                                  
                 </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
            </nav>
<?php

	$sErr= "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if( isset( $_POST["login"]) ) {
	    $_user = $_POST['nA'];
	    $_pass = $_POST['nB'];
	    // kiểm tra user
	require 'sqldb.php';
	$sql = "SELECT * from user";
	$result = mysqli_query($conn, $sql);
	if(!$result){
	  die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result) > 0) {

	    while($row = mysqli_fetch_assoc($result)) {
	      $user = $row["username"];
	      $pass = $row["password"];
	      $fname = $row["fullname"];
	      if( $_user == $user && $_pass == $pass ){
	        $_SESSION["login_status"] = "ready";
	        $_SESSION["name"] = $fname;
	        header("Location: index.php");
	    }else{
	        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
	    }    
	      }
	} 
	$sql2 = "SELECT * from admin";
	$result2 = mysqli_query($conn, $sql2);
	if(!$result2){
	  die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result2) > 0) {

	    while($row2 = mysqli_fetch_assoc($result2)) {
	      $name = $row2["username"];
	      $passadmin = $row2["password"];
	     
	      if( $_user == $name && $_pass == $passadmin ){
	      	$_SESSION["admin"] = "ready";
	        $_SESSION["login_status"] = "ready";
	        $_SESSION["name"] = 'Admin';
	         header("Location:index.php");
	    }else{
	        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
	    }    
	      }
	} 
	mysqli_close($conn);
	//end kiem tra
	//end kiem tra
	  }
	}
?>
 <?php
    if( $sErr != ""){
      echo '<script language="javascript">';
      echo 'alert("'.$sErr.'")';
      echo '</script>';
    }   
?>


 <div class="container">
	<div class="signup-container">
		<h3 style="text-align: center;padding-bottom: 10px;">Đăng Nhập</h3>
			<form class="form" id="signup" data-toggle="validator" action="signin.php" method="post">
				<div class="form-group">
					<div class="input-group" style="padding-left: 300px; padding-right: 300px;">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						
						<input  type="text" class="form-control"  placeholder="username" name="nA" required>	
						
					</div>
				</div>

				<div class="form-group" style="padding-left: 300px; padding-right: 300px;">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" placeholder="password" name="nB" required>
					</div>
				</div>
				<div class="w3-center">
				<button class="w3-button w3-ripple w3-purple" type="submit" value="login" name="login">Đăng nhập</button>
			
	      		<p class="message">Not registered? <a href="signup.php">Create an account</a></p>
	      		</div>
			</form>
		</div>
	</div> 
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