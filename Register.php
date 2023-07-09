<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h2>Registration Page</h2>
    <h3>Fill Up The Form For Registration</h3>
    <hr>
    <form action="<?php $_PHP_SELF ?>" method="post">
        Enter Your Name : <input type="text" name="uname" placeholder="John Smith">
        <br><br>
        Enter Your Emai : <input type="email" name="uemail" placeholder="john@example.com">
        <br><br>
        Choose A Password : <input type="password" name="upass">
        <br><br>
        Enter Contact Number : <input type="text" name="contact" placeholder="+6098632223">
        <br><br>
        Select Your Gender : <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br><br>
        Enter Your City : <input type="text" name="city" placeholder="Selangor">
        <br><br>
        <input type="submit" name="register" value="Register">

    </form>

    <?php

        if(isset($_POST['register'])){

            $uname = $_POST["uname"];
            $uemail = $_POST["uemail"];
            $upass = $_POST["upass"];
            $contact = $_POST["contact"];
            $gender = $_POST["gender"];
            $city = $_POST["city"];

            echo $uname,$uemail,$upass,$contact,$gender,$city;

        }

    ?>
</body>
</html>