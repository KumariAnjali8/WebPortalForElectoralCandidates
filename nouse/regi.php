
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
<section style="display:flex; flex-direction:column;">
  <?php require 'nav.php'?>
  <div class="box">
    <form action="registration.php" method="POST">
      <h2>Registration</h2>
      <div class="inputBox">
        <input type="text" 	name="Cname" required>
        <span>Name</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="text" name="Regid" required>
        <span>Registration id</span>
        <i></i>
      </div>
      <div class="inputBox">
      <small style="color:aqua; font-size:15px;">Select your Post</small>
        <select class="sel" name="Post" aria-placeholder="select your academic year" required>
          <option value="General Secretary">General Secretary</option>
          <option value="Environmental and Sanitation Secretary">Environmental and Sanitation Secretary</option>
          <option value="Cultural Secretary">Cultural Secretary</option>
          <option value="Sports Secretary">Sports Secretary</option>
          <option value="Common Room Secretary">Common Room Secretary</option>
          <option value="Treasurer">Treasurer</option>
        <i></i>
      </div>
     <!-- <div class="inputBox">
        <input type="text" name="Cid" required>
        <span>Enter your Candidate id</span>
        <i></i>
      </div>-->
      <div class="inputBox">
        <input type="text" name="Dept" required>
        <span>Enter Your Department</span>
        <i></i>
      </div>
      <div class="inputBox">
        
        <span>Enter Your Academic Year</span>
        <i></i>
        <select name="Year" required>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>
      <div class="inputBox">
        <input type="text" name="Mobno" required>
        <span>Mobile no</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="email" name="Email" required>
        <span>Email</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" name="Pass" required>
        <span>Password</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" 	name="Cpass" required>
        <span>Confirm password</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="textarea" name="AboutInfo" required>
        <span>Tell us about yourself</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="textarea" name="Agenda" required>
        <span>Describe Your Agenda</span>
        <i></i>
      </div>
      <input type="submit" value="Register">
      <div class="links">
      <a href="sign_in.html">Already Registered? SignIn</a></div>
    </form>
  </div>
</section>
</body>
</html>