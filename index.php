<?php
  include 'header.php'
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Save Your Trip</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <li class="active"><a class="navbar-brand" href="index.php">My Timeline</a></li>
    </div>
    <div class="social-contact">
        <?php

            if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
                 echo '<a href="signup.php"><i class="fa fa-user-plus"></i>Ðăng kí</a>';
                 echo '<a href="signin.php"><i class="fa fa-sign-in"></i>Ðăng nhập</a>';
            }else{
                 echo '<i style="color: #fff; font-size: 15px;">Hi,'.$_SESSION["name"].'</i>';
                 echo ' ';
                 echo '<a href="logout.php"><i class="fa fa-sign-in"></i>Ðăng xuất</a>';
            }                         
          ?>     
       </div>
  </div>
</nav>
      <hr>
  <div class="timeline">
    <div class='year'>
      <div class='inner'>
        <span> TimeLine </span>
      </div>
     </div>
      <ul class='days' >
   <?php
        require 'sqldb.php';
        // echo "Connected successfully";
        $sql = " SELECT * FROM imageline ";
        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn, $sql);
        if (!$result) {
        die("Can't query data. Error occure.".mysqli_error($conn));
        }
        if (mysqli_num_rows($result) > 0) {
        
                while($row = mysqli_fetch_assoc($result)) {
                  echo " <li class='day'>
                          <div class='events'>
                            <p>".$row["Description"]."</p>
                            <div class='date'>".$row["Date"]."</div>
                          </div>
                         </li>
                         <li class='day'>
                          <div class='events'>
                            <p></p>
                          </div>
                         </li>
                         <li class='day'>
                           <div class='events'>
                            <div class='day__img'>
                              <div class='col-md-12'>
                                  <img class='img-responsive' src='".$row["img"]."' alt=''>
                                <div class='col-md-3'>
                                  <a > <img class='thumbnail img-responsive' src='".$row["img1"]."' alt=''> </a>
                                  <img class='thumbnail img-responsive' src='".$row["img2"]."' alt=''>
                                  <img class='thumbnail img-responsive' src='".$row["img3"]."' alt=''>
                                  <img class='thumbnail img-responsive' src='".$row["img4"]."' alt=''>
                                  <img class='thumbnail img-responsive' src='".$row["img5"]."' alt=''>
                                </div>
                              <p class='caption'>".$row["Place"]."</p>
                            </div>
                            <div class='date'>".$row["Date"]."</div>
                            </div>
                         </li>
                        ";
                  }         
          } else {
              echo "0 results";
          }
               mysqli_close($conn);
    ?>
    </ul>
  </div>
</body>
</html>
