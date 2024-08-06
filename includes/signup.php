<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="pglife";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name );
    if(!$conn){
        echo "error occoured".mysqli_connect_error();
        exit;

    }
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $college = $_POST['college_name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $sql="INSERT INTO users (name,phone, email, password,college,gender)
    VALUES ('$name','$phone', '$email', '$password', '$college','$gender')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "query error".mysqli_error($conn);
        exit;
    }
    echo "registration sucessful";
    mysqli_close($conn);
?>