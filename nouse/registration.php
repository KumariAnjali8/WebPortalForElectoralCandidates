<?php
include('dbcon.php');
//header('location:sign_in.html');
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
		$allowed_Regid=['111111','222222','333333','444444','555555','666666'];
		if(!in_array($Regid,$allowed_Regid))
			echo "invalid registration id";
		
		//$Cid='GS'.ltrim(strval($cnm));
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
					case "Treasurer":
						$Cid='TS'.ltrim(strval($cnm));
						break;
			default:
			  echo "Wrong";
			}
		$sq = "SELECT COUNT(*) AS post_count FROM student WHERE post = ?";
			$stmt = $con->prepare($sq);
			$stmt->bind_param("s", $Post);
			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();
			$post_count = $row['post_count'];

			if ($post_count >= 2) {
				//echo "<script>alert('Error: Maximum number of entries (3) already reached for the selected post.')</script>";
				//header('location:index.php');
				echo "Error: Only three entries are allowed for the position of $Post.";
			} 
					
		$qry="INSERT INTO student values('$Cname',$Regid,'$Post','$Cid','$Dept','$Year','$Mobno','$Email','$Pass','$Cpass','$AboutInfo','$Agenda');";
		if(! mysqli_query($con,$qry))
		echo "Not Inserted";
	}
		//$sql="SELECT count(*) from c_reg where post= '" . $Post . " '   " ; ";
		
	//}
mysqli_close($con);
?>