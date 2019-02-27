<?php

include( "includes/server.php" );

?>
<!DOCTYPE html>
<html>
<head>
<title>TechConnect Portal</title>

<link href="https://www.purdue.edu/purdue/images/favicon.ico" rel="shortcut icon" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/script.js"></script>

</head>
<body>

<!-- top nav bar -->
<div class="front-nav">
  <ul class="top-nav nav-bar">

    <div class="container">
      <li class="top-nav brand">
        <i class="fab fa-pied-piper-pp"></i>
      </li>

      <div class="login-container">
          <form method="post" action="index.php">
            <input type="text" placeholder="Email" name="s_email" value="<?php echo $s_email; ?>">
            <input type="password" placeholder="Password" name="s_password">
            <button type="submit" name="s_login">Login</button>
          </form>
      </div>

    </div>

  </ul>
</div>

<div class="landing-page">
    <!-- max width 760px -->
    <div class="container">

      <!-- industry content -->
      <div class="industry-content">
        <h2 class="industry-content">Engage with Purdue Polytechnic<br /> students, faculty, and staff.</h2>
        <p class="industry-content">
          <div class="home-icon">
            <i class="fas fa-briefcase industry-content"></i>
          </div><div class="home-info">
            <strong> Post</strong> jobs or internships to well qualified students.
          </div>
        </p>
        <p class="industry-content">
          <div class="home-icon">
            <i class="fas fa-graduation-cap industry-content"></i>
          </div><div class="home-info">
            <strong> Create</strong> a capstone project.
          </div>
        </p>
        <p class="industry-content">
          <div class="home-icon">
            <i class="fas fa-users industry-content"></i>
          </div><div class="home-info">
            <strong> Connect</strong> with the Polytechnic Institute.
          </div>
        </p>
        <button id="industry-account" style="margin-top:64px; margin-left:80px;"><strong>SIGN UP</strong></button>

      </div>

      <!-- career account login -->
      <div class="cas-login" id="career-login">

          <button id="career-account"><strong>LOGIN WITH YOUR<br />CAREER ACCOUNT</strong></button>

        <script type="text/javascript">
            document.getElementById("career-account").onclick = function () {
                location.href = "login.php";
            };
        </script>
      </div>

      <!-- industry account signup -->
      <div class="industry-signup" id="i-signup" style="display:none;">

        <h2 class="industry-signup">Create your account and engage with the Polytechnic Institute.</h2>

        <form method="post" action="index.php">

          First Name<br>
          <input class="industry-signup" type="text" name="s_firstname" value="<?php echo $s_firstname; ?>"><br>

          Last Name<br>
          <input class="industry-signup" type="text" name="s_lastname" value="<?php echo $s_lastname; ?>"><br>

          Email<br>
          <input class="industry-signup" type="text" name="s_email" value="<?php echo $s_email; ?>"><br>

          Password<br>
          <input class="industry-signup" type="password" name="s_password_1" value="<?php echo $s_password_1; ?>"><br>

          Confirm Password<br>
          <input class="industry-signup" type="password" name="s_password_2" value="<?php echo $s_password_2; ?>"><br>

          <button class="industry-signup" type="submit" name="create_supervisor" class="signupbtn">Create Account</button>

        </form>
      </div>

    </div>
</div>

<div class="footer">
  <div class="container">
    <h3>Footer</h3>
    <p>
      Link
    </p>
  </div>
</div>

</body>
</html>
