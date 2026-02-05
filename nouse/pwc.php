<?php
    session_start();
    //isset($_SESSION['PASS']) && ()
    //echo $_SESSION['PASS'];
    if($_SESSION['PASS']=='NO'){ // || $_SESSION['PASS']=='INCOMPLETE'){
        echo '<script>';
            //echo 'document.getElementById("msg").innerHTML="Password Does Not Match";';
            //echo 'window.alert("Password Does Not Match");';
            echo "var tf = document.getElementById('cpwd');";
            echo "tf.setSelectionRange(0,0);";
            echo '</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="pwcc.php" method="get">
            <input type="password" name="pwd" value=""><br>
            <input type="password" name="cpwd" value="" id="cpwd"><br>
            <div id="msg"></div><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<!--const textField = document.getElementById('text-field');
textField.setSelectionRange(3, 3);-->