
<?php
	include('dbcon.php');
	$cnm=0;
	$i=0;
	$Cname=$_POST['Cname'];
	$Regid=$_POST['Regid'];
	$Post=$_POST['Post'];
	//$Cid=$_POST['Cid'];/
	$Dept=$_POST['Dept'];
	$Year=$_POST['Year'];
	$Mobno=$_POST['Mobno'];
	$Email=$_POST['Email'];
	$Pass=$_POST['Pass'];
	$Cpass=$_POST['Cpass'];
	$AboutInfo=$_POST['AboutInfo'];
	$Agenda=$_POST['Agenda'];
    // Validate Post value
	if($Year <= 2)
	{
		$sql="SELECT count(*) from student where Post='";
		$sql = $sql . $Post;
		$sql = $sql . "'";
		$sql = $sql . ";";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($res);
		//echo $row;
		foreach($row as $i){
			$i++;
			$cnm = $i;
		}
			switch ($Post) {
			case "General Secretary":
				$Cid='GS'.ltrim(strval($cnm));
			break;
			case "Environmental and Sanitation Secretary":
				$Cid='ES'.ltrim(strval($cnm));
			break;
			case "Cultural Secretary":
				$Cid='CS'.ltrim(strval($cnm));
			break;
			case "Sports Secretary":
				$Cid='SS'.ltrim(strval($cnm));
			break;
			case "Common Room Secretary":
				$Cid='CRS'.ltrim(strval($cnm));
			break;
					case "Science and IT Secretary":
						$Cid='SIS'.ltrim(strval($cnm));
						break;
					case "Treasurer":
						$Cid='TS'.ltrim(strval($cnm));
						break;
			default:
			  echo "Wrong";
			}
			
			
	$sql = "SELECT COUNT(*) AS entry_count FROM student WHERE Post = '$Post'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$entry_count = $row['entry_count'];

	if ($entry_count >= 3) {
		echo "Error: You can only make three entries for $Post position.";
		exit();
	}

	$sql = "SELECT COUNT(*) AS entry_count FROM student WHERE Dept = '$Dept'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$entry_count = $row['entry_count'];

	if ($entry_count >= 3) {
		echo "Error: You can only make three entries for $Dept position.";
		exit();
	}

	$allowed_Regid=['111111','222222','333333','444444','555555','666666','777777','888888','999999','111222','111333','111444','111555','111666','111777','111888','111999','222111','222333','222444','222555'];
			if(!in_array($Regid,$allowed_Regid)){
				echo "invalid registration id";
				exit();}
			
	// Validate password 
	if ($Pass !== $Cpass) {
		echo "Error: Incorrect password.";
		exit();
	}

	// Check if the entry already exists
	$sql = "SELECT COUNT(*) AS entry_exists FROM student WHERE Email='$Email' OR Mobno='$Mobno' OR  Regid = '$Regid' OR Pass='$Pass';";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$entry_exists = $row['entry_exists'];

	if ($entry_exists > 0) {
		echo "Error: There already exists an entry for the given phoneno or email or password or registration id ";
		exit();
	}

	// Validate mobile number length
	if (strlen($Mobno)  != 10) {
		echo "Mobile number must be of only 10 digits.";
		exit();
	}
	

		// Handle photo upload
		$target_dir = "";
		$target_file = $target_dir . basename($_FILES["Photo"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["Photo"]["tmp_name"]);
		if ($check === false) {
			echo "File is not an image.";
			exit();
		}

		// Check file size (5MB max)
		if ($_FILES["Photo"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			exit();
		}

		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "jfif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			exit();
		}

		if (!move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
			echo "Sorry, there was an error uploading your file.";
			exit();
		}
	// If all validations pass
	echo "You are succesfully registered Go back to home page";

			$qry="INSERT INTO student values('$Cname',$Regid,'$Post','$Cid','$Dept','$Year','$Mobno','$Email','$Pass','$AboutInfo','$Agenda','$target_file');";
			if(! mysqli_query($con,$qry))
			echo " Not Inserted";
			
			

		
		}

//}
	mysqli_close($con);
?>
