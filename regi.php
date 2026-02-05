<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="signup .css">
</head>
<body>
<section style="display:flex; flex-direction:column;">
  <?php require 'nav.php'?>
  <div class="box">
    <form id="entryForm" enctype="multipart/form-data">
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
          <option value="Science and IT Secretary">Science and IT Secretary</option>
          <option value="Sports Secretary">Sports Secretary</option>
          <option value="Common Room Secretary">Common Room Secretary</option>
          <option value="Treasurer">Treasurer</option>
</select>
        <i></i>
      </div>
     <!-- <div class="inputBox">
        <input type="text" name="Cid" required>
        <span>Enter your Candidate id</span>
        <i></i>
      </div>-->
      <div class="inputBox">
        <select name="Dept" aria-placeholder="select your Department" required>
          <option value="B.A(English)">B.A(English)</option>
          <option value="B.A(History)">B.A(History)</option>
          <option value="B.A(Sociology)">B.A(Sociology)</option>
          <option value="B.A(political science)">B.A(Political Science)</option>
          <option value="B.A(Pyschology)">B.A(Pyschology)</option>
          <option value="B.A(economics)">B.A(economics)</option>
          <option value="B.A(hindi)">B.A(hindi)</option>
          <option value="B.A(urdu)">B.A(urdu)</option>
          <option value="B.A(philosophy)">B.A(philosophy)</option>
          <option value="B.A(sanskrit)">B.A(sanskrit)</option>
          <option value="B.A(music)">B.A(music)</option>
          <option value="B.Sc(Botany)">B.Sc(Botany)</option>
          <option value="B.Sc(Chemistry)">B.Sc(Chemistry)</option>
          <option value="B.Sc(Physics)">B.Sc(Physics)</option>
          <option value="B.Sc(Zoology)">B.Sc(Zoology)</option>
          <option value="B.Sc(Statistics)">B.Sc(Statistics)</option>
          <option value="B.Sc(Mathematics)">B.Sc(Mathematics)</option>
          <option value="BCA">BCA</option>
          <option value="BBA(English)">BBA(English)</option>
          <option value="BSW">BSW</option>
          <option value="B.Com">B.Com</option>
          </select>
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
        <input type="textarea" name="AboutInfo"  rows="50" cols="50"
        required>
        <span>Tell us about yourself</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="textarea" name="Agenda"  rows="50" cols="50" required>
        <span>Describe Your Agenda</span>
        <i></i>
      </div>
     <div class="inputBox">
      <label for="Photo">Select Photo:</label>
    <input type="file" id="Photo" name="Photo" accept="image/*" required>
    <br>
    
</div>
        
      <input type="submit" value="Register">
      <div class="links">
      <a href="c_signin.html">Already Registerd? Sign in</a></div>
</div>

    </form>

    <script>
        document.getElementById("entryForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            
            var formData = new FormData(this);

            // AJAX request to validate the entry
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "registration.php", true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Check response from server
                    var response = xhr.responseText;
                    if (response === "success") {
                        // If validation is successful, submit the form
                        document.getElementById("entryForm").submit();
                        
                       
                    } else {
                        // If validation fails, display error message
                        alert(response);
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
