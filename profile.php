
<?php
include('dbcon.php');
//if(isset($_GET['Cid']) && is_numeric($_GET['Cid'])) {
    $cid = isset($_GET['Regid']) ? $_GET['Regid'] : '';
    //echo $cid;
    // Fetch candidate details using a prepared statement to prevent SQL injection
    $stmt = $con->prepare("SELECT Cname, AboutInfo, Agenda,Photo FROM student WHERE Regid = ?");
    $stmt->bind_param("i", $cid);
    $stmt->execute();
    $result = $stmt->get_result();
    $candidate = $result->fetch_assoc();
    $stmt->close();
//}// else {
    //$candidate = null;
//}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PORTAL FOR ELECTORAL CANDIDATES</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="profile1.css">
</head>
<body>
<section class="background"> 
    <div class="navbar">
        <ul class="nav-list">
            <li><a href=index.php>Home</a></li>
            
            <div class="dropdown">
            <li><a href=#home>Posts</a>
                <div class="dropdown_items">
                    <div class="item"><a href="gs.php">General Seceretary</a></div>
                        <div class="item"><a href="treasurer.php">Treasurer</a></div>
                        <div class="item"><a href="sports.php">Sports Seceretary</a></div>
                        <div class="item"><a href="cult.php">Cultural Secretary</a></div>
                        <div class="item"><a href="env.php">Environmental and Sanitation
                             Secretary</a></div>
                        <div class="item"><a href="cr.php">Common Room Secretary</a></div>
                        <div class="item"><a href="snc&it.php">Science and IT Secretary</a></div>
                </div>
            </li>
        </div>
        
        <li><a href=about.php>About</a></li>
  
        </ul>
    </div>
    <section class="title"> 
    <div class="details" id="fetchData">
    <?php if ($candidate): ?>
        <div class="name">
            <p >Hello I am  </p>
            <p id="p2"><?php echo htmlspecialchars($candidate['Cname']); ?></p>
    </div>
            <div class="about">
            <p class="text">About</p>
        <p><?php echo nl2br(htmlspecialchars($candidate['AboutInfo'])); ?></p>
    </div>
        <div class="promise">
            <p class="text">Agenda</p>
            <p><?php echo nl2br(htmlspecialchars($candidate['Agenda'])); ?></p>
    </div>
    </div>
    <div class="photo">
    <?php echo "<img src=" .($candidate['Photo']). " alt='Candidate Photo' border-radius: 15px;'>";
               ?>
            
        </div>
    <?php else: ?>
        <p>Candidate not found or invalid candidate ID.</p>
    <?php endif; ?>
   
    
    </section>
   
</section>
</body>
</html>

