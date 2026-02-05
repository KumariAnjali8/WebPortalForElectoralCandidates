
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
    
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <script>
        // Fetch data using AJAX
        $(document).ready(function(){
            $.ajax({
                url: "fetch_data.php",
                type: "POST",
                success: function(data){
                    $("#fetchData").html(data);
                }
            });
        });
        </script>
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
        <div class="photo">
            <img src="img/candidate.png">
        </div>
        <div class="details" id="fetchData"></div>
    
    </section>
   
</section>
</body>
</html>