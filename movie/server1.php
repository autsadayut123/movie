<?php
    $username = "";
    $email = "";
    $errors = array();

    //connect database
$db = mysqli_connect('localhost', 'root', '', 'register_db');

//ถ้าสมัคร
    if(iseet($_POST['register'])){
        $username = mysqli_real_escape_string($_POST['username']);
        $email = mysqli_real_escape_string($_POST['email']);
        $password_1 = mysqli_real_escape_string($_POST['password_1']);
        $password_2 = mysqli_real_escape_string($_POST['password_2']); 
//failed
        if(empty($username)) {
            array_push($errors,"Username is required");
        }
        if(empty($email)) {
            array_push($errors,"email is required");
        }
        if(empty($username)) {
            array_push($errors,"password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

// if there are no error save user to db
        if (count($errors) == 0) {
            $password = md5($password_1);
            $sql = "INSERT INTO user (username, email, password)
                        VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);


    }


?>