<?php 
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: c_signin.html");
    exit();
}

include('dbcon.php');

$Email = $_SESSION['Email'];
echo $Email;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // $Email = $_POST['Email'];
    //echo $Email;
    // Delete profile image from server
    $stmt = $con->prepare("SELECT Photo FROM student WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->bind_result($photo);
    $stmt->fetch();
    if ($photo) {
        unlink('img/' . $photo); // delete the photo file from the server
    }
    $stmt->close();

    // Delete candidate from database
    $stmt = $con->prepare("DELETE FROM student WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->close();

    // Destroy the session
    session_destroy();

    header("Location: index.php");
    exit();
}

$con->close();
?>
