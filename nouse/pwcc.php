<?php
session_start();
//header('location:profile.php');
if(isset($_GET['Pass']) && isset($_GET['Cpass'])){
    if($_GET['Pass']!=$_GET['Cpass']){
            $_SESSION['PASS']='NO';
        header('location:error.html');   

            //echo "does not match";
    }
    else{
            $_SESSION['PASS']='YES';
            header('location:profile.php');   
    }
}
else{
    $_SESSION['PASS']='INCOMPLETE';
    //echo "password / confirm password not provided";
}
?>