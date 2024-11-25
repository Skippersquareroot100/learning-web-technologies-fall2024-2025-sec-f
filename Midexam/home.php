<?php
session_start();

if (!isset($_SESSION['logged_in_user'])) {
    header('location: login.html');
    exit;
}

$loggedInUserName = $_SESSION['logged_in_user'];

$user = null;
foreach ($_SESSION['users'] as $userData) {
    if ($userData['fname'] === $loggedInUserName) {
        $user = $userData;
        break;
    }
}

if ($user) {
    $name = $user['fname'];
    $lname = $user['lname'];
    $email = $user['email'];
    $dob = $user['dob'];
    $bdg = $user['bloodgroup'];
    $pswrd = $user['password'];

    echo "<h2>Welcome to the Home Page, $name!</h2>";
    echo "<p><strong>First Name:</strong> $name</p>";
    echo "<p><strong>Last Name:</strong> $lname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Date of Birth:</strong> {$dob['dd']}-{$dob['mm']}-{$dob['yyyy']}</p>";
    echo "<p><strong>Blood Group:</strong> $bdg</p>";
    echo "<p><strong>Password:</strong> $pswrd</p>";
} else {
    echo "<p>User not found!</p>";
}

echo '<a href="logout.php">Logout</a>';
?>
