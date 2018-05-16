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
  <div class="year">
    <div class="inner">
      <span>2016</span>
    </div>
  </div>
  
  <ul class="days">
    <li class="day">
      <div class="events">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
        <div class="date">18 October (Monday)</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <p>Lorem dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
        <div class="date">18 October (Monday)</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <div class="day__img">
          <img src="http://placehold.it/400x300" alt="" />
          <p class="caption">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
        <div class="date">18 October (Monday)</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
        <div class="date">18 October (Monday)</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
        <div class="date">18 October (Monday)</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <div class="day__img">
          <img src="http://placehold.it/400x300" alt="" />
          <p class="caption">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
        <div class="date">18 October (Monday)</div>
      </div>
    </li>
  </ul>
  
  <div class="year year--end">
    <div class="inner">
      <span>2017</span>
    </div>
  </div>
</div>
</body>
</html>
