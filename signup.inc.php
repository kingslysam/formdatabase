<?php
    include_once('dbh.inc.php');

    $fname =$_POST["fname"];
    $lname =$_POST["lname"];
    $age =$_POST["age"];
    $email =$_POST["email"];
    $password =$_POST["password"];
    $date = date("Y-m-d")." ".date("H:i:sa");

    $sql = "INSERT into regform (fname,lname,age,email,password,date) VALUES ('$fname','$lname',$age,'$email','$password','$date');";
    mysqli_query($conn, $sql);

    header("location: ../registrationform.php?signup=success")
    ?>
