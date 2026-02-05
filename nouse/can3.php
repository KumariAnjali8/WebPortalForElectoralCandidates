<?php
include('dbcon.php');
$sql = "SELECT * FROM student where Cid='GS1';";//$cid?
$result = mysqli_query($con, $sql);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election Editable Profile Card</title>
    
    <link rel="stylesheet" href="edt.css">
</head>
<body>
<script>
            $(document).ready(function(){
            $('#updateForm').submit(function(e){
                e.preventDefault();
                var agenda = $('#Agenda').val();
                var aboutinfo = $('#AboutInfo').val();
                
                $.ajax({
                    type: "POST",
                    url: "edit.php",
                    data: { agenda: agenda, aboutinfo: aboutinfo },
                    success: function(response){
                        $('#message').html(response);
                    }
                });
            });
        });
    </script>
    <?php include("nav.php"); ?>
   
    <script>
        let subMenu=document.getElementById("subMenu");
        function toggleMenu()
        {
            subMenu.classList.toggle("open-menu");
        }
    </script>
    <div class="profile-card">
        <div class="profile-image">
            <img src="image.jpeg" alt="Candidate Profile Image">
        </div>
        <div class="profile-info">
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
         ?>   
        <p id="p2"><?php echo $row["Cname"]; ?></p>
            <p><?php echo $row["Cid"]; ?></p>
            <p>"Let's Get Things Done, Together."</p>
            <?php }?>
                <?php }?>
            <div class="editable-fields" id="updateForm">
                <label for="About">Bio:</label>
                <textarea id="AboutInfo"  name="AboutInfo" rows="5" placeholder="Enter your About here..."></textarea>
                <label for="achievements">Agenda:</label>
                <textarea id="Agenda" name="Agenda" rows="5" placeholder="Enter your Agenda here..."></textarea>
                
            </div>
            <div id="message"></div>
            <button id="save-changes"><a href="update.php" class="href">Save Changes</a></button>
        </div>
    </div>
   
</body>
</html>