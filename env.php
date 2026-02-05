
<?php
    include("dbcon.php");
    $sql = "SELECT Regid, Cname,Photo FROM student WHERE Post='Environmental and Sanitation Secretary';";
    $result = $con->query($sql);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PORTAL FOR ELECTORAL CANDIDATES</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="post.css">
    <style>
        
    </style>
</head>
<body>
    <section class="background">
    <?php include('nav.php');?>
    <div class="title">
        <h1 class="gs">Environmental and Sanitation Secretary</h1>

    </div>
    <section class="candidates">
        <div class="para text-big text-small">
        <p class="sectiontag"> 
            List of candidates 
        </p><br>
        <div class="att">
        <?php
        if ($result->num_rows > 0) {?>
   <?php echo "<ul>";?>

   <?php while($row = $result->fetch_assoc()) {?>
    <?php //echo "<li>";?>
    <div class="container" style='width: 220px; height: 250px; padding-left:16px; padding-top:8px;'>   
    <?php $fil="img/" . $row['Photo'];
echo "<img src=" . $fil . " alt='Candidate Photo' style='width: 200px; height: 220px; border-radius: 15px;'>";
                ?>
   <?php   echo "<li><a href='profile.php?Regid=".$row['Regid']."'>" . $row['Cname'] . "</a></li>";
?></div>
   <?php }?>
     
    <?php echo "</ul>";?>
    
<?php }?><?php mysqli_close($con);?>
</div>
    
    </div>
    
    </section>
    <footer class="info">
        <h3 class="sectiontag" style="color: rgb(28, 28, 46);">Know Your Environmental and Sanitation Secretary</h3>
        <p>Student Representation: The Environmental and Sanitation Secretary serves as the voice of the student body, advocating for their interests, concerns, and needs to the college administration and faculty.
            Organizing Events: They are often responsible for organizing various events and activities within the college, such as cultural festivals, sports events, academic seminars, and social gatherings.
            Facilitating Communication: The Environmental and Sanitation Secretary facilitates communication between students, faculty, and administration by conveying information, concerns, and suggestions between these groups.
            Managing Student Council Affairs: They oversee the functioning of the student council, which may involve conducting meetings, managing budgets, and coordinating the activities of other student representatives.
            Promoting Student Welfare: They work to promote the welfare and well-being of students by addressing issues such as academic support, student services, and campus facilities.
            Fostering Student Engagement: The Environmental and Sanitation Secretary ourages student participation in college activities, clubs, and initiatives to enhance the overall student experience.
            Addressing Grievances: They handle student grievances and complaints, providing support and guidance to students who encounter academic, administrative, or personal issues.
            Collaborating with Other Officers: They collaborate with other student council officers, such as the President, Vice President, and Environmental and Sanitation Secretary, to achieve common goals and objectives.</p>
    </footer>
</section>
</body>
</html>