
<?php
session_start();
include('dbcon.php');
header('location:profile.html'); 
$Email=$_POST['Email'];
$Pass=$_POST['Pass'];
$qry="select * from voter_reg where Email = '$Email';";
$res = mysqli_query($con,$qry);
$num=mysqli_num_rows($res);
if($num==1){
	while($row=mysqli_fetch_assoc($res)){
		if(password_verify($Pass,$row['Pass'])){
			$_SESSION['login'] = "Login successful";
		}
	}
}
else
	$_SESSION['login'] = "$row['Pass']";

	
mysqli_close($con);
?>