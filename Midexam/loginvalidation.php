<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_REQUEST['fname'];
    $password = $_REQUEST['password'];

    if (isset($_SESSION['users'])) {
        $userFound = false;

        foreach ($_SESSION['users'] as $userData) {
            if ($userData['fname'] === $name && $userData['password'] === $password) {
                $_SESSION['logged_in_user'] = $name;
                $userFound = true;
                break;
            }
        }

        if ($userFound) {
            header('location:home.php');
        } else {
            echo "Invalid username or password.";
            header('location:login.html');
        }
    } else {
        echo "No users registered.";
        header('location:login.html');
    }
} else {
    header('location:login.html');
}
?>
