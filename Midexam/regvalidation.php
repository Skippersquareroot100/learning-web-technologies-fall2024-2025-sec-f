<?php
session_start();

if (isset($_POST['submit'])) {
    $pswrd = $_REQUEST['password'];
    $cnfpswrd = $_REQUEST['cpassword'];
    $email = $_REQUEST['emailname'];
    $dd = $_REQUEST['d'];
    $mm = $_REQUEST['m'];
    $yyyy = $_REQUEST['y'];
    $bdg = $_REQUEST['bloodgroup'];
    $name = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];

    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    foreach ($_SESSION['users'] as $user) {
        if ($user['fname'] === $name || $user['email'] === $email) {
            echo "User with this name or email is already registered.";
            exit;
        }
    }

    if (empty($name) || empty($lname) || empty($pswrd) || empty($cnfpswrd) || $cnfpswrd !== $pswrd || empty($bdg) || empty($email)) {
        header('location:registration.html');
        exit;
    }

    if (!((($dd >= 1 && $dd <= 31) && ($mm >= 1 && $mm <= 12) && ($yyyy >= 1953 && $yyyy <= 2000)))) {
        header('location:registration.html');
        exit;
    }

    if (!isset($_REQUEST['Gender'])) {
        header('location:registration.html');
        exit;
    }

    $userData = [
        'fname' => $name,
        'lname' => $lname,
        'password' => $pswrd,
        'email' => $email,
        'bloodgroup' => $bdg,
        'dob' => ['dd' => $dd, 'mm' => $mm, 'yyyy' => $yyyy],
    ];

    array_push($_SESSION['users'], $userData);

    header('location:login.html');
}
?>
