<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>Login Page</h3>
    <hr>
    <form action="<?php $_PHP_SELF ?>" method="post">
        Enter Your Email : <input type="email" name="uemail" placeholder="abc@example.com" required>
        <br><br>
        Enter Your Password : <input type="password" name="upass" required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
        if(isset($_POST["login"])){
             // Step 1. Create A Connection String

             $dbHost = "localhost";
             $dbUser = "root";
             $dbPass = "";
             $dbName = "php";
 
             // mysqli() driver is used to connect php with mysql
 
             $conn = new mysqli($dbHost,$dbUser,$dbPass,$dbName);
            
             // Step.2 Write A Query

             $uemail = $_POST["uemail"];
             $upass = $_POST["upass"];

             $myQuery = "SELECT * FROM userdetails WHERE useremail='".$uemail."' AND userpassword='".$upass."'";

             //  Step 3. Execute a Query

             $result = $conn->query($myQuery);

             if($result->num_rows>0){
                echo "<script>alert('VALID USER');</script>";
             }else{
                echo "<script>alert('INVALID USER');</script>";
             }
        }
    ?>

</body>
</html>