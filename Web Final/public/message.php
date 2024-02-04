<?php
    include "connect.php";

    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO Messages(f_name,l_name,email,mobile,msg) VALUES ('$f_name',$l_name','$email','$mobile','$msg')";
    if (mysqli_query($conn, $sql)) 
    {
        echo "Your message sent!";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>