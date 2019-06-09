<?php
    if(!isset($_SESSION)) {
        session_start();
    }

class User {
    public static function register($username, $password, $email) {
        // TODO: validate user input
        $link = mysqli_connect("localhost", "root", "", "test_db");

        $password = md5($password);

        $res= mysqli_query($link,"SELECT * FROM `users` WHERE username='$username' OR email='$email'");     
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
               
        if(empty($row)){
            $result = mysqli_query($link, "INSERT INTO `users` (username, password, email) VALUES('$username', '$password', '$email')");
            mysqli_close($link);
            header("Location: http://localhost:80/register.php?st=OK");
            die();

        }else{
            header("Location: http://localhost:80/register.php?st=UE");
            die();
        }

    }

    public static function login($email, $password) {
        
        $link = mysqli_connect("localhost", "root", "", "test_db");

        $password = md5($password);

        $result = mysqli_query($link, "SELECT * FROM `users` WHERE email='$email' AND password='$password'");
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_close($link);
        if(!empty($row)) {
            $_SESSION['user'] = $row;
            header("Location: http://localhost:80/");
            die();
        }
        else {
            header("Location: http://localhost:80/login.php");
            die();
        }

    }

    public static function logout() {
        session_destroy();
        header("Location: http://localhost:80/login.php");
        die();
    }

}