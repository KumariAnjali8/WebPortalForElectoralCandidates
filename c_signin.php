
<?php
session_start();
$loggedin=false;
include('dbcon.php');
//header('location:index.php'); 
$Email=$_POST['Email'];
$Pass=$_POST['Pass'];
//echo $Pass;
$qry="SELECT * from student where Email = '$Email';";
$res = mysqli_query($con,$qry);
$num=mysqli_num_rows($res);
if ($num == 1){
	while($row=mysqli_fetch_assoc($res)){
		if ($Pass== $row['Pass'] and $Email== $row['Email']){ 
			$login = true;
			$_SESSION['loggedin'] = true;
			$_SESSION['Email'] = $row['Email'];
			$_SESSION['login'] = "<script> alert('Login succesful');</script>";
			header('location:c_profile.php');
		} 
		else{
			//echo '<script> alert("invalid email or password");</script>';
			$_SESSION['login'] = "<script> alert('invalid email or password');</script>";
			header('location:index.php');
			//$showError = "Invalid Credentials";
		}
	}}
else{//echo '<script> alert("invalid email or password");</script>';
	$_SESSION['login'] = "<script> alert('user doesnot exist');</script>";
	header('location:index.php');
}

mysqli_close($con);
?>