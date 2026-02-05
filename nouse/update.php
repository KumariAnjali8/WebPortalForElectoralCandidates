<?php 
include("dbcon.php");
header("location:profile.php")
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Agenda = $_GET['Agenda'];
    $AboutInfo = $_GET['AboutInfo'];
    $sql = "UPDATE student SET Agenda='$Agenda', AboutInfo='$AboutInfo' WHERE Cid='GS1'";
    if ($con->query($sql) === TRUE) {
        echo "Fields updated successfully";
    } else {
        echo "Error updating fields: " . $con->error;
    }
}
mysqli_close($con);
?>