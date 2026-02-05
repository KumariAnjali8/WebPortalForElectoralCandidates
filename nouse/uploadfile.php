<?php
//error_reporting(0);
include('dbcon.php');
if(isset($_POST['submit'])){
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder='img/'.$filename;
  $query=mysqli_query($con,"INSERT into stud_img ('file') values ('$filename')");
  if(move_uploaded_file($tempname,$folder)){
    echo "<h2>File uploaded successfully</h2>";
  } else{
    echo "<h2>File not uploaded</h2>";
  }
}
?>
<!--<!<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
      <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br>
        <input type="submit" name="submit" value="Upload File">
      </form>
</body>
</html>!-->
<?php
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="img/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
?>

