<?php 
session_start();//important
if (!isset($_SESSION['Email'])) {
    header("Location: c_signin.html");
    exit();
}

include('dbcon.php');

$Email = $_SESSION['Email'];

$stmt = $con->prepare("SELECT Cname, Regid, Post, Dept, Year, Mobno, Email, AboutInfo, Agenda, Photo FROM student WHERE Email = ?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();?>
    
<html lang="en">
<head>
    <script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PORTAL FOR ELECTORAL CANDIDATES</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="del.css">
    <link rel="stylesheet" href="profile1.css">
</head>
<body>
<section class="background"> 
    <?php include('nav.php'); ?>
    <section class="title"> 
    <div class="details" id="fetchData">
    
        <div class="name">
            <p >Hello I am  </p>
            <p id="p2"><?php echo htmlspecialchars($row['Cname']) ; ?></p>
    </div>
            <div class="about">
            <p class="text">About</p>
        <p><?php echo nl2br(htmlspecialchars($row['AboutInfo'])); ?></p>
    </div>
        <div class="promise">
            <p class="text">Agenda <?php echo "for ".  htmlspecialchars($row['Post'])?></p>
            <p><?php echo nl2br(htmlspecialchars($row['Agenda'])); ?></p>
    </div>
    </div>
    <div class="photo">
    <?php  echo "<img src='img/" . htmlspecialchars($row['Photo']) . "' alt='Profile Photo'>";
               ?>
            
        </div>

       
   
     
    </section>
    <?php echo "<form action='delete.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete your profile?\");'
            <input type='hidden' name='Email' value='$Email'>
            <button type='submit' class='del'>Delete Profile</button>
          </form>"?>
</section>
<?php } else {
    echo "Profile not found.";
}

$stmt->close();
$con->close();
?>
</body>
</html>


   
