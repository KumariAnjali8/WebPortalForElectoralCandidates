<?php
include("dbcon.php");
$sql="SELECT Photo from student WHERE Cid='GS3';";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
//echo $row['file'];
$fil="img/" . $row['Photo'];
echo "<img src=" . $fil . ">";
?>