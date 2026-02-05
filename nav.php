<?php 
   //session_start();
	
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}?>
<link rel="stylesheet" href="navi.css" class="href">
<nav class="navbar">
    <!--<div class="logo"><img src="m1.png"  ></div>!-->
    <ul>
            
            <li><a href="index.php">HOME</a></li>
            
            <div class="dropdown">
                <li><a href=#home>POSTS</a>
                    <div class="dropdown_items">
                        <div class="item"><a href="gs.php">General Seceretary</a></div>
                        <div class="item"><a href="treasurer.php">Treasurer</a></div>
                        <div class="item"><a href="sports.php">Sports Seceretary</a></div>
                        <div class="item"><a href="cult.php">Cultural Secretary</a></div>
                        <div class="item"><a href="env.php">Environmental and Sanitation Secretary</a></div>
                        <div class="item"><a href="cr.php">Common Room Secretary</a></div>
                        <div class="item"><a href="snc&it.php">Science and IT Secretary</a></div>
            
                    </div>
                </li>
            </div>
            
            <?php if(!$loggedin){?>
            <li><a href="regi.php">REGISTER</a></li>
            <li><a href="c_signin.html">SIGN IN</a></li>
            <?php } ?>
            <?php if($loggedin){?>
                <li ><a href="logout.php">LOGOUT</a></li>
                <li><a href="c_profile.php">PROFILE</a></li>
                <?php } ?>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            
        </ul> 
    </nav>