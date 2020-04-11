<?php

    include("connection.php");
    session_start();
    $email=$_SESSION['email'];
   
?>
<!DOCTYPE html>
<html lang="en">
<head
<body>
                   <h1> Welcome <?php echo  $_SESSION['username']?> </h1>
    
</body>
</html>
