<!--Home Page
   index.php-->
   <?php 
session_start();
if(isset($_SESSION['login']))
		//echo $_SESSION['login'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PORTAL FOR ELECTORAL CANDIDATES</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div class="container">
    <marquee class="mq">Welcome to Electoral Candidate Web Portal.<a href="#l1">Click here to check important dates related to student council elections.</a><a href="#l2">Click here to know more about the web portal</a></marquee>
  <?php include('nav.php'); ?>
    
    </div>
    <section class="about" id="l2">
        <h1>About the web portal</h1>
        <p> This is Magadh Mahila College's official web portal for electoral candidates of student council.Our Web Portal for Electoral Candidates provides a centralized platform where nominated electoral candidates can disseminate information about themselves, their policies, and their campaign platforms. This allows voters to make informed decisions based on the candidates' backgrounds and stances on various issues.<br>
    <br>

</p>

    </section>
    <section class="notice" id="l1">
    <h2>Important Dates</h2>   
    <ul class="date">
          
            <li>Electoral Candidate Registration-10/05/2024</li>
            <li>Interview-12/05/2024</li>
            <li>Campaigning-15/05/2024-20/05/2024</li>
            <li>Election-21/05/2024</li>
        </ul>
    </section>
    <footer>
        <p class="text-footer">Web Portal for Electoral Candidate</p>
    </footer>
</body>
</html>